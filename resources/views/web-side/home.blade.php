
@extends('web-side.web-setup.master')
@section('content')

 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/web-assets/images/slide1.jpeg);">
          <div class="container">
            <h2 class="building">Building Your Brand </h2>
            <p class="development-service mt-2">Offering All Kinds Of Web and Mobile Development Services<br><f>
                We are a software firm that is focused on software development and design</f>
              <br>We provide the best quality work<br>
             
            </p>
           
            <p class="Know-More">Know More!</p>
            <a href="#" class="btn-get-started scrollto">About Us</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/web-assets/images/web-word.jpeg)">
          <div class="container">
            <h2 class="building">Building Your Brand </h2>
            <p class="development-service mt-2">Offering All Kinds Of Web and Mobile Development Services<br><f>
                We are a software firm that is focused on software development and design</f>
              <br>We provide the best quality work<br>
             
            </p>
           
            <p class="Know-More">Know More!</p>
            <a href="#" class="btn-get-started scrollto">About Us</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/web-assets/images/web-development.jpeg)">
          <div class="container">
            <h2 class="building">Building Your Brand </h2>
            <p class="development-service mt-2">Offering All Kinds Of Web and Mobile Development Services<br><f>
                We are a software firm that is focused on software development and design</f>
              <br>We provide the best quality work<br>
             
            </p>
           
            <p class="Know-More">Know More!</p>
            <a href="#" class="btn-get-started scrollto">About Us</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section>

 <main id="main">
 
    <!-- ======= Featured Services Section ======= -->
   <!-- End Featured Services Section -->
<!-- What Makes Us -->
  <div class="container">
    <div class="row mt-2">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p class="What-Makes-Us">What Makes Us</p>
        <p class="what-make-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <!-- end What Makes Us -->
  <!-- ..................Work Process .......................................-->
  <div class="container-flude imge-work" style="background-image: url(assets/web-assets/images/1.jpeg);">

    <p class="Work-Process mt-5"> Work Process<br>
      ___________ &nbsp &nbsp   ___________
      <br>
      <f class="mb-5" style="margin-bottom: 5rem;">From planning to delivery</f>
    </p>
    <p class="Work-Process1"></p>
    
  </div>
  <!-- end Work Process -->
  <!-- card section -->

  <!-- cards -->
 <section>
   <div class="container mt-3">
     <div class="row">
       <div class="col-md-3">
        <div class="example">
      <img src="{{asset('assets/web-assets/images/2.jpeg')}}"   alt="No visible" class="img-size" />
      <div class="fadedbox">
        <div class="title text" style="font-size: 20px;">Defining a Goal</div>
      </div>
    </div>
       </div>

       <div class="col-md-3">
        <div class="example">
      <img src="{{asset('assets/web-assets/images/2.jpeg')}}"   alt="No visible"  class="img-size" />
      <div class="fadedbox">
        <div class="title text" style="font-size: 20px;">Planning</div>
      </div>
    </div>
       </div>
       <div class="col-md-3">
        <div class="example">
      <img src="{{asset('assets/web-assets/images/2.jpeg')}}"   alt="No visible" class="img-size" />
      <div class="fadedbox">
        <div class="title text" style="font-size: 20px;">Research</div>
      </div>
    </div>
       </div>
       <div class="col-md-3">
        <div class="example">
      <img src="{{asset('assets/web-assets/images/2.jpeg')}}"   alt="No visible" class="img-size" />
      <div class="fadedbox">
        <div class="title text" style="font-size: 20px;">Develop</div>
      </div>
    </div>
       </div>

     </div>
   </div>
 </section>
 

  
<!-- end card section -->
<!-- ............ Our Services   ............ -->

<section id="services" class="services services">
      <div class="container">
         <div class="icon"> <img src="{{asset('assets/web-assets/images/slide.png')}}" class="services-images1" alt="No visible"></div><br><br>
        <div class="section-title">
          <h2>Our Services</h2>
          <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
        has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
        </div>

        

      </div>
    </section><!-- End Services Section -->

    
  

<!-- .............. end Our Services.......................... -->

 <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        

        <div class="owl-carousel testimonials-carousel" >

          <div class="testimonial-item">
          <div class="container">
        <img src="{{asset('assets/web-assets/images/2.jpeg')}}" alt="Avatar" class="imagecard">
        <div class="overlays">
          <div class="texts">Develop</div>
        </div>
        </div>

          </div>

          <div class="testimonial-item">
          <div class="container">
        <img src="{{asset('assets/web-assets/images/2.jpeg')}}" alt="Avatar" class="imagecard">
        <div class="overlays">
          <div class="texts">SEO</div>
        </div>
        </div>
            
          </div>
          <div class="testimonial-item">
          <div class="container">
        <img src="{{asset('assets/web-assets/images/2.jpeg')}}" alt="Avatar" class="imagecard">
        <div class="overlays">
          <div class="texts">Branding</div>
        </div>
        </div>
          </div>

           <div class="testimonial-item">
          <div class="container">
        <img src="{{asset('assets/web-assets/images/2.jpeg')}}" alt="Avatar" class="imagecard">
        <div class="overlays">
          <div class="texts">Mobile App</div>
        </div>
        </div>
            
          </div>
          

          

          

          

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" >

        <div class="text-center">
          <h3></h3>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
          
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" >

       

        <div class="row">
          <div class="col-lg-6" >

        <div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          <div class="text123"><p class="Project1">Project 1</p>Lorem Ipsum is simply dummy text of the printin
          and type setting ever since the 1500s, when</div>
        </div>
        </div>
            <!-- <img src="images/tes/features.jpg" class="img-fluid image" alt="">
             <div class="overlay-img">
          <div class="text-img">Mobile App</div>
        </div> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" >
          <div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          
          <div class="text123"><p class="Project1">Project 2</p>
         </div>
        </div>
        </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6" >
          <div class="container123">
       <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          <div class="text123"><p class="Project1">Project 3</p></div>
        </div>
        </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" >
          <div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          <div class="text123"><p class="Project1">Project 4</p></div>
        </div>
        </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <div class="container mb-5">
      <div class="row mt-5">
        <div class="col-md-5"></div>
        <div class="col-md-2">
           <a href="#" class="btn btn btn-See-Our-Work">See Our Work</a>
        </div>
      <div class="col-md-5"></div>
    </div>
    </div>
    

  

   
   
  </main>
  
  @endsection

