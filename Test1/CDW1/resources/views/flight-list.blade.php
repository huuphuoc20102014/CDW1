@extends('layout.master')
@section('content')

<main>
        <div class="container">
           
        <section>
                <h2>@foreach ($citys as $city )
                    @if ($city->province_id == $_GET['from'])
                        {{$city->province_name}} - ({{$city->province_code}})
                    @endif
                @endforeach
                <i class="glyphicon glyphicon-arrow-right"></i> 
                @foreach ($citys as $city )
                @if ($city->province_id == $_GET['to'])
                    {{$city->province_name}} - ({{$city->province_code}})
                @endif
                @endforeach</h2>
                @foreach ($fli_list as $flight )
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">{{$flight->flight_carrier}}</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">{{date('h:i',strtotime( $flight->flight_departure))}}</big></div>
                                            @foreach ($citys as $city )
                                                @if ($city->province_id == $_GET['from'])
                                                <div><span class="place">{{$city->province_name}} </span></div>
                                                    
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">{{date('h:i',strtotime($flight->flight_return))}}</big></div>
                                            @foreach ($citys as $city )
                                                @if ($city->province_id == $_GET['to'])
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
                                            
                                                <form role="form" action="{{route('get-detail-flight')}}" method="get">
                                                    <input type="hidden" name="id" class="form-control" value="{{$flight->flight_id}}">
                                                    <input type="hidden" name="person" class="form-control" value="{{$person}}">
                                                    <button type="submit" class="btn btn-link">See Detail</button>    
                                                </form>
                                                
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                <!--<article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><strong><a href="flight-detail.html">Qatar Airways</a></strong></h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="control-label">From:</label>
                                            <div><big class="time">18:45</big></div>
                                            <div><span class="place">Jakarta (CGK)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">To:</label>
                                            <div><big class="time">02:55</big></div>
                                            <div><span class="place">Abu Dhabi (AUH)</span></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Duration:</label>
                                            <div><big class="time">11h 10m</big></div>
                                            <div><strong class="text-danger">1 Transit</strong></div>
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            <h3 class="price text-danger"><strong>IDR8.265.550,00</strong></h3>
                                            <div>
                                                <a href="flight-detail.html" class="btn btn-link">See Detail</a>
                                                <a href="flight-book.html" class="btn btn-primary">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>-->
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">&lsaquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&rsaquo;</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    
@endsection
   
    