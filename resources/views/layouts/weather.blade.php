@extends('layouts.main')
@section('header')
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')

      <!-- Amazing -->
      <section id="cta1" class="cta1">
      <div class="container">
      </div>
    </section><!-- End Cta Section -->
   <br>
   <!-- traveling -->
   <div class="container-fluid">
   <div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                  <h1 style="color:#006994;" align="center"><b>Weather</b></h1>
                     <span>The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. This project is funded by DOST-PCIEERD.</span> 
                    </div>
               </div>
            </div>
            <br>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                  <h5 style="color:#000000;" align="center"><b>Municipality</b></h5>
                  </div>
                  <div class="col-lg-12">
                     <select class="form-select  form-select-lg" id="muns" name="muns">
                        <option value="1694008">Select Municipality</option>
                        @foreach($mun as $mun)
                        <option value="{{$mun->refference}}">{{muns($mun->id)}}</option>
                        @endforeach
                     </select>
              </div>
            </div>
            </div>
<br><br>
<div class="container-fluid">
   <div class="row">
         <div class="col-lg-12" align="center">
         <div id="openweathermap-widget-11"></div>
         <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
         <script>      
         var l=1; 
         document.getElementById("muns").onchange = function(){
            l=l+1;
            console.log(l);
            var x = document.getElementById("muns").value;
            console.log(x);
            if(l>2){
               location.reload();
            }
    
            window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
            window.myWidgetParam.push({id: 11,cityid: x,appid: '27fd144bc85cd75b641297d16cf1e4f6',units: 'metric',containerid: 'openweathermap-widget-11',  });
            (function() {var script = document.createElement('script');
            script.async = true;script.charset = "utf-8";
            script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
            var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s); })();
            };
        </script>
      </div>
   </div>
</div>
</div><br><br>
      <!-- end Tours -->
      @endsection