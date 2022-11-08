@extends('auth.main')

@section('header')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>       
<style>
body{background-color: #eee}
.nav-link{border-radius:0px !important;transition:all 0.5s;width:100px;display:flex;flex-direction:column}
.nav-link small{font-size:12px}.nav-link:hover{background-color: #52525240 !important}
.nav-link .fa{transition: all 1s;font-size:20px}
.nav-link:hover .fa{transform: rotate(360deg)}
</style>
@endsection

@section('content')
<div class="row">
<div class="col-md-2">
    <div class="d-flex flex-column flex-shrink-0 bg-light vh-150" style="width: 100px;">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item"> <a href="#" class="nav-link py-4 border-bottom"> <i class="fa fa-home"></i> <small>Home</small> </a> </li>
            <li> <a href="#" class="nav-link py-4 border-bottom"> <i class="fa fa-dashboard"></i> <small>News</small> </a> </li>
            <li> <a href="#" class="nav-link py-4 border-bottom"> <i class="fa fa-first-order"></i> <small>My Data</small> </a> </li>
            <li> <a href="#" class="nav-link py-4 border-bottom"> <i class="fa fa-cog"></i> <small>Settings</small> </a> </li>
            <li> <a href="#" class="nav-link py-4 border-bottom"> <i class="fa fa-bookmark"></i> <small>Bookmark</small> </a> </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
<div class="container-fluid">
    @yield('content2')    
</div>
</div>
</div>
@endsection

@section('scriptz')
@endsection