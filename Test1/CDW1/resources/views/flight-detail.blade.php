@extends('layout.master')
@section('content')
    <main>
        <div class="container">
            <section>
              
                
                    <h2>
                        @foreach ($citys as $city )
                        @if ($city->province_id == $flight->flight_from_id)
                            {{$city->province_name}} - ({{$city->province_code}})
                        @endif
                        @endforeach
                        <i class="glyphicon glyphicon-arrow-right"></i> 
                        @foreach ($citys as $city )
                        @if ($city->province_id == $flight->flight_to_id)
                            {{$city->province_name}} - ({{$city->province_code}})
                        @endif
                        @endforeach
                    </h2>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong>{{$flight->flight_carrier}}</strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">{{date('h:i',strtotime( $flight->flight_departure))}}</big></div>
                                            @foreach ($citys as $city )
                                                @if ($city->province_id == $flight->flight_from_id)
                                                <div><span class="place">{{$city->province_name}} </span></div>
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">{{date('h:i',strtotime($flight->flight_return))}}</big></div>
                                            @foreach ($citys as $city )
                                                @if ($city->province_id == $flight->flight_to_id)
                                                <div><span class="place">{{$city->province_name}} </span></div>
                                                    
                                                @endif
                                            @endforeach
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">{{$flight->flight_duration}}</big></div>
                                            <div><strong class="text-danger">{{$flight->flight_transit}}</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>{{$flight->flight_price}}</strong></h3>
                                            <div>
                                               
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#flight-detail-tab">Flight Details</a></li>
                                        <li><a data-toggle="tab" href="#flight-price-tab">Price Details</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="flight-detail-tab" class="tab-pane fade in active">
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <h5>
                                                        <strong class="airline">Qatar Airways QR-957</strong>
                                                        <p><span class="flight-class">Economy</span></p>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">18:45</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Jakarta (CGK)</span></div>
                                                                    <div><small class="airport">Soekarno Hatta Intl Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <i class="glyphicon glyphicon-arrow-right"></i>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">23:20</big></div>
                                                                    <div><small class="date">29 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Doha (DOH)</span></div>
                                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <label class="control-label">Duration:</label>
                                                            <div><strong class="time">7h 35m</strong></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item list-group-item-warning">
                                                    <ul>
                                                        <li>Transit for 1h 30m in Doha (DOH)</li>
                                                    </ul>
                                                </li>
                                                <li class="list-group-item">
                                                    <h5>
                                                        <strong class="airline">Qatar Airways QR-1052</strong>
                                                        <p><span class="flight-class">Economy</span></p>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">00:50</big></div>
                                                                    <div><small class="date">30 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Doha (DOH)</span></div>
                                                                    <div><small class="airport">Doha Hamad International Airport</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <i class="glyphicon glyphicon-arrow-right"></i>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div><big class="time">02:55</big></div>
                                                                    <div><small class="date">30 Apr 2017</small></div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div><span class="place">Abu Dhabi (AUH)</span></div>
                                                                    <div><small class="airport">Abu Dhabi Intl</small></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 text-right">
                                                            <label class="control-label">Duration:</label>
                                                            <div><strong class="time">2h 5m</strong></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="flight-price-tab" class="tab-pane fade">
                                            <h5>
                                                <strong class="airline">Qatar Airways</strong>
                                                <p><span class="flight-class">Economy</span></p>
                                            </h5>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="pull-left">
                                                        <strong>Passengers Fare (x{{$person}})</strong>
                                                    </div>
                                                    <div class="pull-right">
                                                        <strong>{{$sum_price}}</strong>
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
                                                        <strong>{{$sum_price}}</strong>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </div>
    </main>
@endsection