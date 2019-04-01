@include('layouts/header')
<main>

    <div class="container">
        <h2>Booking</h2>
        <div class="row">
            @foreach($data_flight as $post)
            <div class="col-md-8">
                <form role="form" method="post" action="{{route('insert_booking')}}" >
                    {{ csrf_field() }}
                    <section>     
                        <h3>Contact Information</h3>
                        @if($errors->has('error_booking'))
                        <div class="alert alert-danger text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('error_booking')}}
                        </div>
                        @elseif($errors->has('successlogin'))
                        <div class="alert alert-success text-center">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{$errors->first('successlogin')}}
                        </div>
                        @endif


                        @if(Session::has('login') && Session::get('login') == true && Session::get('user_remember') == 1)   
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            First Name:
                                        </label>
                                        <input type="text" name="firstname" class="form-control" value="{{$data_us['user_first_name']}}">
                                        @if($errors->has('firstname'))
                                        <p style="color:red">{{$errors->first('firstname')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            Last Name:
                                        </label>
                                        <input name="lastname" type="text" class="form-control" value="{{$data_us['user_last_name']}}">
                                        @if($errors->has('lastname'))
                                        <p style="color:red">{{$errors->first('lastname')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="control-label">
                                            Contact's Mobile phone number
                                        </label>

                                        <input name="phonename" type="text" class="form-control" value="{{$data_us['user_phone']}}">

                                        @if($errors->has('phonename'))
                                        <p style="color:red">{{$errors->first('phonename')}}</p>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" value="">
                                            Contact's email address
                                        </label>
                                       
                                        <input name="email" type="text" class="form-control" value="{{$data_us['user_email']}}">

                                        @if($errors->has('email'))
                                        <p style="color:red">{{$errors->first('email')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-right">
                                  <button type="button" class="btn btn-default" > <a href="{{route('handlinguser', ['values' => 0])}}">Clear all</a></button>
                                  <button type="button" class="btn btn-default"> <a href="{{route('handlinguser', ['values' => 1])}}">Reset </a></button>
                              </div>
                          </div>
                        </div>

                        @else 
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="control-label">
                                        First Name:
                                    </label>

                                    <input type="text" name="firstname" class="form-control" disabled>

                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">
                                        Last Name:
                                    </label>

                                    <input name="lastname" type="text" class="form-control" disabled>

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="control-label">
                                        Contact's Mobile phone number
                                    </label>

                                    <input name="phonename" type="text" class="form-control" disabled>

                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label" value="">
                                        Contact's email address
                                    </label>

                                    <input name="email" type="text" class="form-control" disabled>

                                </div>

                            </div>
                            <div class="text-right">
                                  <button type="button" class="btn btn-default" > <a href="{{route('handlinguser', ['values' => 0])}}">Clear all</a></button>
                                  <button type="button" class="btn btn-default"> <a href="{{route('handlinguser', ['values' => 1])}}">Reset </a></button>
                              </div>
                            </div>

                        </div>

                        @endif
                    </section>
                    
                <section>
                    <h3>Passenger(s) Details</h3>
                    <div class="panel panel-default">
                        <div class="slideshow-container">
                            <div class="panel-body">
                                <div class="panel_myslide">
                                    @for($i = 1 ; $i <= Session::get('total_people') ; $i ++)
                                    <div class="mySlides1"> 
                                        <h4> Passenger {{$i}}</h4>
                                        <div class=" row ">
                                            <div class="col-sm-3">
                                                <label class="control-label">Title :</label>
                                                <select class="form-control" name="title_{{$i}}">
                                                    <option  value="Mr.">Mr.</option>
                                                    <option  value="Mrs.">Mrs.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=" row">
                                            <div class="col-sm-6">
                                                <label class="control-label">First Name:</label>
                                                <input name="firstname_{{$i}}" type="text" class="form-control" >

                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label">Last Name:</label>
                                                <input name="lastname_{{$i}}" type="text" class="form-control" >

                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                            <a class="prev_btn" onclick="plusSlides(-1, 0)">&#10094;</a>
                            <a class="next_btn" onclick="plusSlides(1, 0)">&#10095;</a>
                        </div>
                    </div>
                </section>
                <section>
                    <h3>Price Details</h3>
                    <div>
                        <h4>
                            <strong class="airline">{{$post['airline_name']}}</strong>
                            <p><span class="flight-class">{{$post['fc_name']}}</span></p>
                        </h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="pull-left">
                                    <strong>Passengers Fare (x3)</strong>
                                </div>
                                <div class="pull-right">
                                    <strong>{{number_format($post['fl_cost'], 0, ',', '.').' VNĐ'}}</strong>
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
                                    <strong>{{number_format($post['fl_cost'], 0, ',', '.').' VNĐ'}}</strong>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
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
</div>
@endforeach
</div>
</div>
<br>
</main>
@include('layouts/footer')