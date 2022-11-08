@extends('layouts.main')
@section('header')

@endsection
@section('content')
      <!-- Amazing -->
      <section id="cta1" class="cta1">
      <div class="container">
      </div>
    </section><!-- End Cta Section -->
   <br>
   <!-- traveling -->
   <div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                  <h1 style="color:#006994;" align="center"><b>ABOUT-US</b></h1>
                     <span>The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. This project is funded by DOST-PCIEERD.</span> 
                    </div>
               </div>
            </div>
            <br>
            <hr size="6" width="100%" align="left" color="Light blue ">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <h1 style="color:#006994;"><b>WHO WE ARE</b></h1>                     
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="traveling-box">
                    
                     <p align="justify"> The Coastal Engineering and Management Research and Development Center (Coaster), the latest facility established under the DoST's niche centers in the regions (Nicers) initiative, geared towards developing science-based technologies and innovations toward building resilient coastal municipalities.
<br><br>
The overall goal of the center is to take the lead in coastal science and engineering studies to better understand the properties and behavior of particular coastal waters of interest and to predict the occurrence and magnitude of certain coastal processes and hazards and their impacts on the maritime environment.
 </p>
                    
                  </div>
               </div>
               
            </div>
            <hr size="6" width="100%" align="left" color="Light blue ">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" >
                  <div class="traveling-box">
                     <h1 style="color:#006994;"><b>WHAT WE DO</b></h1>
                    
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="traveling-box">
                  <p align="justify">COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. Moreso, it aims to capacitate the human resource capital of higher education institutions in Ilocos region toward coastal engineering research and management; and, formulate policies that will enhance the resiliency of coastal communities. </p>
                    
                  </div>
               </div>
               
            </div>
            <section id="testimonials" class="testimonials">
      <div class="container">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
               <div class="swiper-wrapper">
               @for($i=1;$i<=8;$i++)      
                  <div class="swiper-slide">
                  <div class="testimonial-item">                    
                     <img src="img/res/{{$i}}.jpg" class="testimonial-img" alt="" style="max-width:100%;max-height:550px" >
                  </div>
                  </div><!-- End testimonial item -->
                  @endfor
                  </div>
               <div class="swiper-pagination"></div>
            </div>

            </div>
         </section>
           
            <br>    <hr size="6" width="100%" align="left" color="Light blue ">
            <br>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" >
                  <div class="traveling-box">
                     <h1 style="color:#006994;"><b>WHERE WE ARE</b></h1>
                    
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="traveling-box">
                  <p align="justify">COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. Moreso, it aims to capacitate the human resource capital of higher education institutions in Ilocos region toward coastal engineering research and management; and, formulate policies that will enhance the resiliency of coastal communities. </p>
                    
                  </div>
               </div>
         </div>
      </div>
      <!-- end traveling -->
      <!-- our blog -->
      
      <div id="blog" class="blog">
         
         <div class="container">
         <hr size="6" width="100%" align="left" color="Light blue ">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                  <h1 style="color:#006994;"><b>ABOUT-US</b></h1>
                     <span>The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. This project is funded by DOST-PCIEERD.</span> 
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-xl-12 col-lg-6col-md-6 col-sm-12">
                  <div class="blog-box">
                  <video class="video-fluid z-depth-1 embed-responsive-4by3" autoplay loop controls muted>
                  <source src="img/res/1.mp4" type="video/mp4" height="50%"/>
                  </video>
                        <span></span>
                     </figure>
                     <div class="travel">
                   
                     </div>
                     <h6 align="center">Coastal Inspection</h6>
                     <p></p>
                  </div>
               </div>
              
            </div>
         </div>
         
      </div>

       <!--Tours -->
       
       <div class="Tours">
         <div class="container">
         
         <hr size="6" width="100%" align="left" color="Light blue ">
      
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h4 style="color:#006994;" align="center"><b>PROJECT COMPONENTS</b></h4>
                     <br>
                     <hr size="6" width="100%" align="left" color="Light blue ">
                     <h6 style="color:#006994;" align="left"><b>PROGRAM LEADER : </b>NATHANIEL R. ALIBUYOG</h6> 
                     <h6 style="color:#006994;" align="left"><b>SUB-PROGRAM 1:  </b>COASTAL EROSION TRENDS AND MANAGEMENT STRATEGIES IN REGION 1</h6> 
                     <h6 style="color:#006994;" align="left"><b>SUB-PROGRAM 2:  </b>ASSESSMENT, MONITORING, AND PREDICTION OF COASTAL FLOODING OF SELECTED MUNICIPALITIES IN REGION 1</h6> 
                     <h6 style="color:#006994;" align="left"><b>SUB-PROGRAM 3:  </b>DEVELOPMENT OF SCIENCE-BASED ENGINEERING APPROACH TO COASTAL PROTECTION IN REGION 1</h6> 
                     <h6 style="color:#006994;" align="left"><b>SUB-PROGRAM 4:  </b>ENHANCING COASTAL DESIGN AND INFRASTRUCTURE INTERVENTION THROUGH THE ESTABLISHMENT OF WAVE TESTING LABORATORY</h6> 
                     <hr size="6" width="100%" align="left" color="Light blue ">
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end Tours -->
      @endsection