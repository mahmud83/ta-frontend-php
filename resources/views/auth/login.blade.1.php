<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laporan Anggaran Dinas Pendidikan Provinsi Jawa Timur</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ URL::to('/') }}/images/jatim_icon.png">
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <!-- latest 5.0.13 june 2018, needs update -->
    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/') }}/sb-admin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
    <!-- <body class="fixed-nav sticky-footer bg-dark" id="page-top"> -->
<body class="fixed-nav bg-dark" id="page-top">
    <div class="row container-fluid h-100">
   
      <div class="container-fluid h-100">
        <div class="card justify-content-center h-100" style="width: 27em; margin: 0 auto; float: none; padding:20px;">
          <div class="col-12">
                <center><img src="{{ URL::to('/') }}/images/heading.png" class=" mt-5" style="width: 300px; margin-bottom : 20px;"></center>
                    <div class="card card-login mx-auto">
                    <!-- <div class="card-header">Login</div> -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <!-- <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Password </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" style="background:#17a589 !important">Login</button>
                        </form>
                        <div class="text-center">
                        <a class="d-block small mt-3" href="{{ url('/register') }}" style="color:#117864 !important">Register an Account</a>
                        <a class="d-block small" href="{{ url('/forgot-password') }}"  style="color:#117864 !important">Forgot Password?</a>
                        </div>
                    </div>
                    </div>
        </div>
        </div>
      </div>
    <!-- /.content-wrapper-->
  </div>

<!-- Bootstrap core JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js" integrity="sha256-MWsk0Zyox/iszpRSQk5a2iPLeWw0McNkGUAsHOyc/gE=" crossorigin="anonymous"></script>

<!-- Page level plugin JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>

<script src="{{ asset('/vendor/') }}/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/vendor/') }}/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/js/') }}/sb-admin.js"></script>

<!-- Custom scripts for this page-->
<script src="{{ asset('/js/') }}/sb-admin-datatables.js"></script>
<script src="{{ asset('/js/') }}/sb-admin-charts.js"></script>

</body>
</html>



