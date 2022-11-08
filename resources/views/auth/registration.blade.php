@extends('auth.main')
@section('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>       

@endsection
@section('content')
<br>
<main class="signup-form">
<div class="cotainer">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
<h3 class="card-header text-center" style="background-color:DodgerBlue;"><p style=" color:white;">Register User</p></h3>
<div class="card-body">
<form action="{{ route('register.custom') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Name" id="name" class="form-control" name="name"
required autofocus>
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Username" id="uname" class="form-control" name="uname"
required autofocus>
@if ($errors->has('uname'))
<span class="text-danger">{{ $errors->first('uname') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Email" id="email_address" class="form-control"
name="email" required autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password" id="password" class="form-control"
name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>

<div class="d-grid mx-auto">
<button type="submit" class="btn btn-primary btn-block">Sign up</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection