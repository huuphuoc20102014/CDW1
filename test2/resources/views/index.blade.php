 @include('layouts/header')
<main>
        <div class="container">
            <section>
                <h3>Flight Booking</h3>
                @if($errors->has('successlogin'))
                <div class="alert alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{$errors->first('successlogin')}}
                </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" action="{{route('flight-list')}}" >
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="form-heading">1. Flight Route</h4>
                                    <div class="form-group">
                                        <label class="control-label">Route : </label>
                                        <select onchange="Select_Route(this)" class="form-control " name="flight_route" >
                                            <option > - -  Selected Route - -  </option>
                                            @foreach($flight_route as $item)
                                                <option class="text-center" value="{{$item['fr_id']}}">{{$item['fr_name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <h4 class="form-heading">2. Flight Destination</h4>
                                    <div class="form-group">
                                        <label class="control-label">From: </label>
                                        <select class="form-control" name="city_from" disabled id="place_from" >
                                            <option id="place_from_op" value=""> -   - Select Place From -   -</option>
                                            <optgroup id="opt_domestic" label="Domestic Route"  >
                                                @foreach($city1 as $item)
                                                <option value="{{$item['city_id']}}">{{$item['city_name']}}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup id="opt_international" label="International Route"  >
                                                @foreach($nation1 as $item)
                                                <option value="{{$item['city_id']}}">{{$item['nation_name']}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To: </label>
                                        <select class="form-control" name="city_to" id="place_to" disabled>
                                            <option id="place_to_op" value="" > -   - Select Place To -    - </option>
                                            <optgroup label="Domestic Route" id="opt_domestic1">
                                                @foreach($city2 as $item)
                                                <option value="{{$item['city_id']}}">{{$item['city_name']}}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="International Route"  id="opt_international1">
                                                @foreach($nation2 as $item)
                                                <option value="{{$item['city_id']}}">{{$item['nation_name']}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="form-heading">3. Date of Flight</h4>
                                    <div class="form-group">
                                        <label class="control-label">Departure: </label>
                                        <input type="date" class="form-control" placeholder="Choose Departure Date" name="departure_date">
                                          @if($errors->has('departure_date'))
                                            <p style="color:red">{{$errors->first('departure_date')}}</p>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input onclick="select_type_oneway()"type="radio" name="flight_type" checked value="1">One Way</label>
                                            <label><input onclick="select_type_return()" type="radio" name="flight_type" value="0">Return</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Return: </label>
                                        <input disabled="true" id="type_return_date" name = "return_date" type="date" class="form-control" placeholder="Choose Return Date">
                                        @if($errors->has('return_date'))
                                        <p style="color:red">{{$errors->first('return_date')}}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="form-heading">4. Search Flights</h4>
                                    <div class="form-group">
                                        <label class="control-label">Total Person: </label>
                                        <select class="form-control" name = "total">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Flight Class: </label>
                                        <select class="form-control" name="flight_class">
                                            @foreach($flightclass as $item)
                                            <option value="{{$item['fc_id']}}">{{$item['fc_name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Search Flights</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Check error of search  -->
                            @if($errors->has('error'))
                                    <div class="alert alert-danger text-center">
                                        <button  type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{$errors->first('error')}}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@include('layouts/footer')