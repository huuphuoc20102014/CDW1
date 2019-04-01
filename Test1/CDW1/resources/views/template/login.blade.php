@extends('template.layout.master')
@section('content')
<main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-3">
                    <h2>Log in to your account</h2>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form role="form" action="{{url('login')}}" method="post">
                                {{ csrf_field() }}
                                @if($errors->has('errorlogin'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('errorlogin')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label">Email Address:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password:</label>
                                    <input type="password" name ="password"class="form-control" placeholder="Enter your password">
                                    @if($errors->has('password'))
                                        <p style="color:red">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
