<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customers;
use App\Model\FlightBooking;
use App\Model\Transits;
use App\Model\FlightList;
use App\Model\Passengers;
use App\Model\Users;
use App\Http\Requests\FlightBookingRequest;
use App\Http\Requests\CreaditCardRequest;
use Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Collection;
use DateTime;
class FlightBookingController extends Controller
{

    public function __construct()
    {
        
        $this->data_view = [
            'test' => 'array',
        ];
    }


    // Page Booking - đổ dữ liệu vào trang đặt vé 
    public function getBooking(Request $request, $idfly)
    {
        $obj_fl = new FlightList();
        $obj_ts = new Transits();
        $obj_us = new Users();
        $data_us = $obj_us->getdata(Session()->get('email'))->first();
        $data_flight = $obj_fl->getDataFlight($idfly);
        $name_city_airport_from = $obj_fl->getCityFrom($idfly);
        $name_city_airport_to = $obj_fl->getCityTo($idfly);
        $detail_transit = $obj_ts->getTransit($idfly);
        $duration = 0;
        for ($row = 0; $row < $detail_transit->count(); $row++) {
            $duration += $detail_transit[$row]->transit_landing_date - $detail_transit[$row]->transit_departure_date;
        }
        $price = $obj_fl->tinhtien($data_flight[0]['fl_departure_date'], $data_flight[0]['fl_distance']);
        $data_flight[0]['fl_cost'] = $price;
        $landingdate = $detail_transit[$detail_transit->count() - 1]->transit_landing_date;
        
        $request->session()->put('id_book', $data_flight[0]['fl_id']);
        $request->session()->put('data_flight', $data_flight);
        $request->session()->put('landingdate', $landingdate);


        $this->data_view = array_merge($this->data_view, [
            'data_flight' => $data_flight,
            'detail_transit' => $detail_transit,
            'duration' => $duration,
            'name_city_airport_from' => $name_city_airport_from,
            'name_city_airport_to' => $name_city_airport_to,
            'landingdate' => $landingdate,
            'data_us'=>$data_us
        ]);
        return view('flight-book', $this->data_view);
    }


    // Insert booking - Đặt vé
    public function insertBooking(Request $request)
    {
        $obj_fb = new FlightBooking();
        $obj_cts = new Customers();
        $obj_ps = new Passengers();

        if (!$request->session()->has('login') && $request->session()->get('login') == false) {
            $errors = new MessageBag(['errorlogin' => ' Vui lòng đăng nhập trước khi đặt vé !']);
            return redirect()->route('getLogin')->withInput()->withErrors($errors);
        } else {
            // Xử lý tìm số người - của chuyến bay này xem đã đủ chưa .
            $data_flight = Session()->get('data_flight');
            $data_total = $obj_fb->get_total($data_flight[0]['fl_id']);
            $number_total = Session()->get('total_people');
            if (($data_total + $number_total) >= 600) 
            {
                $number_last = 600 - $number_total;
                $errors = new MessageBag(['error_booking' => ' Số lượng người trên chuyến bay đã gần đạt giới hạn , chỉ có thể đặt vé  + $number_last +người  !']);
                return redirect()->back()->withInput()->withErrors($errors);
            } else {
                $flightbooking = new FlightBookingRequest();
                
                $validator = Validator::make($request->all(), $flightbooking->rules(), $flightbooking->messages());
                if ($validator->fails()) # if have error
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                } else {
                    // Xử lsy credit card trước
                    if ($request->method_pay == 'credit_card') {
                        $creaditcardrequest = new CreaditCardRequest();
                        $validator = Validator::make($request->all(), $creaditcardrequest->rules(), $creaditcardrequest->messages());
                        if ($validator->fails()) # if have error
                        {
                            return redirect()->back()->withErrors($validator)->withInput();
                        } else {
                            $landingdate_time = session()->get('landingdate');
                            // chèn dữ liệu cho Customer
                            $obj_cts->insertData($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, '', '', $request->number_credit_card, $request->name_credit_card, $request->ccv_code, $data_flight[0]['fl_id']);
                            // truy vấn lại id của customer
                            $cs_id = $obj_cts->get_id_customer($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, '', '', $request->number_credit_card, $request->name_credit_card, $request->ccv_code, $data_flight[0]['fl_id']);
                            // nếu đã lên dữ liệu
                            if ($cs_id->count() > 0) {
                                for ($i = 1; $i <= Session()->get('total_people'); $i++) {
                                    // chèn giá trị lên passenger trước
                                    $obj_ps->insert_passenger($request->input('firstname_' . $i), $request->input('lastname_' . $i), $request->input('title_' . $i), $cs_id[0]['customer_id']);
                                }

                                $obj_fb->insert_Flight($data_flight[0]['fl_id'], $data_flight[0]['fl_departure_date'], $landingdate_time, $cs_id[0]['customer_id'], $number_total, $data_flight[0]['fl_cost']);
                                $id_booking = $obj_fb->get_Id_Book($data_flight[0]['fl_id'], $data_flight[0]['fl_departure_date'], $landingdate_time, $cs_id[0]['customer_id'], $number_total, $data_flight[0]['fl_cost']);

                                if (Session()->get('type_flight') == 1) {
                                    $request->session()->forget('id_book');
                                    $request->session()->forget('data_flight');
                                    $request->session()->forget('landingdate');

                                    $errors = new MessageBag(['success_booking' => ' Booking in successfully !']);
                                    return redirect()->route('view_book', ['id' => $id_booking[0]['fb_id']])->withInput()->withErrors($errors);
                                } else {
                                    return redirect()->route('flight_list_id', ['id' => $data_flight[0]['fl_id']]);
                                }
                            } else {
                                $errors = new MessageBag(['error_booking' => ' Software error !!']);
                                return redirect()->back()->withInput()->withErrors($errors);
                            }
                        }
                    } else {
                        $landingdate_time = session()->get('landingdate'); // ngày dến
                        // chèn dữ liệu cho Customer

                        // truy vấn lại id của customer
                        if ($request->method_pay == 'transfer') {
                            $obj_cts->insertData($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, $request->method_pay, '', '', '', '', $data_flight[0]['fl_id']);
                            $cs_id = $obj_cts->get_id_customer($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, $request->method_pay, '', '', '', '', $data_flight[0]['fl_id']);
                        } else {
                            $obj_cts->insertData($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, $request->method_pay, '', '', '', '', $data_flight[0]['fl_id']);
                            $cs_id = $obj_cts->get_id_customer($request->session()->get('userid'), $request->firstname, $request->lastname, $request->phonename, $request->email, '', '', '', '', $data_flight[0]['fl_id']);
                        }

                        // nếu đã lên dữ liệu
                        if ($cs_id->count() > 0) {
                            for ($i = 1; $i <= Session()->get('total_people'); $i++) {
                                // chèn giá trị lên passenger trước
                                $obj_ps->insert_passenger($request->input('firstname_' . $i), $request->input('lastname_' . $i), $request->input('title_' . $i), $cs_id[0]['customer_id']);
                            }

                            $obj_fb->insert_Flight($data_flight[0]['fl_id'], $data_flight[0]['fl_departure_date'], $landingdate_time, $cs_id[0]['customer_id'], $number_total, $data_flight[0]['fl_cost']);
                            $id_booking = $obj_fb->get_Id_Book($data_flight[0]['fl_id'], $data_flight[0]['fl_departure_date'], $landingdate_time, $cs_id[0]['customer_id'], $number_total, $data_flight[0]['fl_cost']);
                            if (Session()->get('type_flight') == 1) {
                                $request->session()->forget('id_book');
                                $request->session()->forget('data_flight');
                                $request->session()->forget('landingdate');

                                $errors = new MessageBag(['success_booking' => ' Booking in successfully !']);
                                return redirect()->route('view_book', ['id' => $id_booking[0]['fb_id']])->withInput()->withErrors($errors);
                            } else {
                                return redirect()->route('flight_list_id', ['id' => $data_flight[0]['fl_id']]);
                            }
                        } else {
                            $errors = new MessageBag(['error_booking' => ' Software error !!']);
                            return redirect()->back()->withInput()->withErrors($errors);
                        }
                    }
                }
            }
        }
    }


    /// Xử lý xóa dữ liệu- clear all - reset
    public function handlingUser(Request $request, $values)
    {
        if ($values == 0) {
            $request->session()->forget('user_remember');
            $request->session()->put('user_remember', 0);
            return back();
        } else {
            $request->session()->forget('user_remember');
            $request->session()->put('user_remember', 1);
            return back();
        }

    }


}
