@include('layouts/header')    <main>
        <div class="container">
            <h2> View Flight Booking</h2>
            <div class="row">
                <div class="col-md-8">
                    <form role="form" method="post" action="{{route('insert_booking')}}" >
                        <section>     
                            <h3>Contact Information</h3>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    @foreach($data_customer as $item_customer)
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="control-label">First Name :</label>  {{$item_customer['customer_first_name']}}
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Last Name :</label> {{$item_customer['customer_last_name']}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="control-label">Contact Email :</label> {{$item_customer['customer_email']}}
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Phone Number : </label> {{$item_customer['customer_phone_number']}}
                                        </div>
                                    </div>
                                    @endforeach 
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <h4>Passenger(s) Details</h4>
                                             @for($i = 0 ; $i < $data_passenger->count() ; $i ++)
                                                <div class=" form-group row "> 
                                                    <div class="col-sm-5 ">
                                                         <p> Passenger : {{$i+1}} </p> 
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p> {{ $data_passenger[$i]['passenger_title']}} {{ $data_passenger[$i]['passenger_firstname']}}  {{ $data_passenger[$i]['passenger_lastname']}}</p>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="col-sm-6">
                                            <h4>Price Details - Payment </h4>
                                            <br>
                                            <br>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="pull-left">
                                                        <strong>Passengers Fare (x{{$data_booking[0]['fb_total']}})</strong>
                                                    </div>
                                                    <div class="pull-right">
                                                        <strong>{{number_format($data_booking[0]['fb_price'], 0, ',', '.').' VNĐ'}}</strong>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="pull-left">
                                                        <span>Tax</span>
                                                    </div>
                                                    <div class="pull-right">
                                                        <span>Included</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li class="list-group-item list-group-item-info">
                                                    <div class="pull-left">
                                                        <strong>You Pay</strong>
                                                    </div>
                                                    <div class="pull-right">
                                                        <strong>{{number_format($data_booking[0]['fb_price'], 0, ',', '.').' VNĐ'}}</strong>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </section>
                        <section>
                        <h3>Payment</h3>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">
                                        Payment Method:
                                    </label>
                                    <select class="form-control" name="method_pay" onchange="Select_Methodpay(this)">
                                        <option value="transfer">Transfer</option>
                                        <option value="credit_card">Credit Card</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                </div>
                                <h4>Credit Card</h4>
                                <div class="form-group">
                                    <label class="control-label">Card Number</label>
                                    <input id="number_credit_card" name="number_credit_card" type="number" class="form-control" disabled="true" placeholder="Digit card number">
                                    @if($errors->has('number_credit_card'))
                                    <p style="color:red">{{$errors->first('number_credit_card')}}</p>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <label class="control-label">Name on card:</label>
                                        <input  id="name_credit_card" name="name_credit_card" disabled="true" type="text" class="form-control">
                                        @if($errors->has('name_credit_card'))
                                        <p style="color:red">{{$errors->first('name_credit_card')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="control-label">CCV Code:</label>
                                        <input id="ccv_code" name="ccv_code" disabled="true" type="number" maxlength="4" minlength="3" class="form-control" placeholder="Digit CCV">
                                        @if($errors->has('ccv_code'))
                                        <p style="color:red">{{$errors->first('ccv_code')}}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                                Continue to Booking
                            </button>
                        </div>
                    </section>
                </form>
            </div>
            <div class="col-md-4">
                <h3>Flights</h3>
                 @foreach($data_flight as $post)
                <aside>
                    <article>
                        <div>
                            <ul class="list-group">
                                @for($i = 0 ; $i < $detail_transit->count(); $i++)
                                <li class="list-group-item">
                                    <h5>
                                        <strong class="airline">{{$post['airline_name']}}</strong>
                                        <p><span class="flight-class">{{$post['fc_name']}}</span></p>
                                    </h5>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <div><big class="time"> {{date("H:i",$detail_transit[$i]['transit_departure_date'])}} </big></div>
                                                    <div><small class="date">{{date("d M Y",$detail_transit[$i]['transit_departure_date'])}}</small>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place">
                                                        @if($i == 0)
                                                        {{$name_city_airport_from[0]['city_name']}} ({{$name_city_airport_from[0]['city_code']}})
                                                        @else
                                                        {{$detail_transit[$i-1]['city_name']}} ({{$detail_transit[$i-1]['city_code']}})
                                                        @endif
                                                    </span></div>
                                                    <div><small class="airport">@if($i == 0)
                                                        {{$name_city_airport_from[0]['airport_name']}}
                                                        @else
                                                        {{$detail_transit[$i-1]['airport_name']}}
                                                    @endif</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <i class="glyphicon glyphicon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div><big class="time">{{date("H:i",$detail_transit[$i]['transit_landing_date'])}}</big></div>
                                                    <div><small class="date">{{date("d M Y",$detail_transit[$i]['transit_landing_date'])}}</small>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div><span class="place">
                                                      {{$detail_transit[$i]['city_name']}} ({{$detail_transit[$i]['city_code']}})
                                                  </span></div>
                                                  <div><small class="airport">@if($i+1 == $detail_transit->count())
                                                     {{$name_city_airport_to[0]['airport_name']}}
                                                     @else
                                                     {{$detail_transit[$i]['airport_name']}}
                                                 @endif</small></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             @if(($i + 1) < $detail_transit->count())
                             <li class="list-group-item list-group-item-warning">
                                <ul>
                                    <li>Transit for {{date("H:i",$detail_transit[$i+1]['transit_departure_date'] - $detail_transit[$i]['transit_landing_date'])}} in {{$detail_transit[$i]['city_name']}} ({{$detail_transit[$i]['city_code']}})</li>
                                </ul>
                            </li>
                            @else
                            @endif
                            @endfor
                        </ul>
                    </div>
                </article>
            </aside>
            @endforeach
        </div>
        
        </div>
        </div>
        <br>
    </main>
@include('layouts/footer')