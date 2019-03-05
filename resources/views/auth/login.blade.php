@extends('layouts.app', ['bodyclass' => 'bg-login', 'hidenav' => true])

@section('content')

  <div class="container">
    <center><img src="{{ URL::to('/') }}/images/heading.png" class=" mt-5" style="width: 300px; margin-bottom : 20px;"></center>
    <div class="card card-login mx-auto">
      <!-- <div class="card-header">Login</div> -->
      <div class="card-body">
        <form action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
            @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
            @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
          </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register') }}" style="color:#117864 !important">Register an Account</a>
          <a class="d-block small" href="{{ url('/forgot-password') }}"  style="color:#117864 !important">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

@endsection
