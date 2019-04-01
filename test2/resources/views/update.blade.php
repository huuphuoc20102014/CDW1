@include('layouts/header')
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-push-3">
        <h2> Information of User - You can update all </h2>
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="form" action="{{route('post_up')}}" method="post">
              {!! csrf_field() !!}

              @if($errors->has('success_update'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{$errors->first('success_update')}}
              </div>
             
              @endif

              @if(Session::has('login') && Session::get('login') == true)   
              
              <div class="form-group">
                <label class="control-label">First Name:</label>
                <input  value="{{$data['user_first_name']}}" name="first_name" type="text" class="form-control" placeholder="Enter your first name">
                @if($errors->has('first_name'))
                <p style="color:red">{{$errors->first('first_name')}}</p>
                @endif
              </div>
              <div class="form-group">
                <label class="control-label">Last Name:</label>

                <input  value="{{$data['user_last_name']}}"name="last_name" type="text" class="form-control" placeholder="Enter your last name"> 
                @if($errors->has('last_name'))
                <p style="color:red">{{$errors->first('last_name')}}</p>
                @endif
              </div>
              <div class="form-group">
                <label class="control-label">Phone Number:</label>

                <input value="{{$data['user_phone']}}" name="phone_number" type="text" class="form-control" placeholder="Enter your phone number">
                 @if($errors->has('phone_number'))
                <p style="color:red">{{$errors->first('phone_number')}}</p>
                @endif
              </div>
              <div class="radio">
                @if ($data['user_gender'] == 0)
                <label><input type="radio" name="gender"  value="1">Female</label>
                <label><input  type="radio" name="gender" checked value="0">Male</label>
                @elseif($data['user_gender'] == 1)
                <label><input type="radio" name="gender"  checked value="1">Female</label>
                <label><input  type="radio" name="gender"  value="0">Male</label>
                @endif
              </div>
              <div class="form-group"> 
                <label class="control-label">Address:</label>
                <input value="{{$data['user_address']}}" name="address" type="address" class="form-control" placeholder="Enter your email address">
                @if($errors->has('address'))
                <p style="color:red">{{$errors->first('address')}}</p>
                @endif
              </div>
              <div class="form-group">
                <label class="control-label">Password:</label>
                <input name="password" type="password" class="form-control" placeholder="Enter your password">

              </div>
              
              @else

              <div class="form-group">
                <label class="control-label">First Name:</label>

                <input  name="first_name" type="text" class="form-control" placeholder="Enter your first name">

              </div>
              <div class="form-group">
                <label class="control-label">Last Name:</label>

                <input  name="last_name" type="text" class="form-control" placeholder="Enter your last name"> 

              </div>
              <div class="form-group">
                <label class="control-label">Phone Number:</label>

                <input  name="phone_number" type="text" class="form-control" placeholder="Enter your phone number">

              </div>
              <div class="form-group"> 
                <label class="control-label">Gender:</label>

                <input  name="phone_number" type="text" class="form-control" placeholder="Enter your phone number">

                <select name="gender" multiple>
                  <option value="0"> Female </option>
                  <option value="1"> Male </option>

                </select>
              </div>
              <div class="form-group"> 
                <label class="control-label">Address:</label>
                <input name="email" type="address" class="form-control" placeholder="Enter your email address">
              </div>
              <div class="form-group">
                <label class="control-label">Password:</label>
                <input name="password" type="password" class="form-control" placeholder="Enter your password">

              </div>
              @endif
              <div class="text-center">
                <button  type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@include('layouts/footer')
