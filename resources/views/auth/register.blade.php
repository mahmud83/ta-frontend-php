@extends('layouts.app', ['bodyclass' => 'bg-dark', 'hidenav' => true])

@section('content')

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="{{ route('proses-register') }}" aria-label="{{ __('Register') }}">
        @csrf
                
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input name="firstName" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="lastName" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
            @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>            
            @endif
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">              
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div class="col-md-6">
                <label for="password_confirmation">Confirm password</label>
                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">
            Register
          </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ url('/login') }}">Login Page</a>
          <a class="d-block small" href="{{ url('/forgot-password') }}">Forgot Password?</a>
        </div>
        <span id='message'></span>
      </div>
    </div>
  </div>

   <script>
    $('#password, #password_confirmation').on('keyup', function () {
    if ($('#password').val() == $('#password_confirmation').val()) {
      $('#message').html('Password Sama').css('color', 'green');
    } else 
      $('#message').html('Pasworrd Tidak Sama').css('color', 'red');
    });
    </script>
@endsection





