
@extends('web-side.web-setup.master')
@section('content')
<section style="background-image: url(assets/web-assets/images/1.jpeg);" >
	<div class="container mt-2">
		
		<div class="row mt-5">
			<div class="col-md-12 mt-5">
				
				<p class="service-text text-center">As technology partners we help you
					advance to the next level<br>
					<p class="service-text-details">In close partnership with our clients, we design, develop and deploy intuitive, re
					and sustainable solutions for both business and social purposes.</p>

				</p>
			</div>
		</div>
		
		
	</div>
</section>

<section id="services" class="services mt-3">
      <div class="container">
         <div class="icon"> <img src="{{asset('assets/web-assets/images/slide.png')}}" class="services-images1" alt="No visible"></div><br><br>
        <div class="section-title">
          <h2>Our Services</h2>
          <p style="text-align: center;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
        </div>

        

      </div>
    </section><!-- End Services Section -->
   <!--  <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="card shadow">
    					<img src="">
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->


<!-- people card section -->
<div class="container mt-5">
	
	<div class="shadow-text-card">
		
	
	<div class="row mb-5">
		
			<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/web.jpeg')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">Web Development<br>
					<a href="web-development.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/brand.jpeg')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">Branding<br>
					<a href="branding.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/seo.png')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">SEO<br>
					<a href="seo.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		

		<!-- end first card row -->
	</div>
</div>
	<!-- end row -->
	<div class="shadow-text-card">
		
	
	<div class="row mb-5">
		
			<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/social-media-marketing.png')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">Social Media Marketing<br>
					<a href="social-media-marketing.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/custom_solution.jpeg')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">Custom Solutions<br>
					<a href="custom-solution.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		<div class="col-md-4">
				<div class="card card-services shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/mobile.jpeg')}}" class="services-img-card mt-4" alt="No visible">
				<p class="service-name mt-2">Mobile Development<br>
					<a href="mobile-development.php" class=" mt-3 mb-5">
				<i class="fas fa-arrow-right fa-1x"></i></a>
			</p>
			</div>
		</div>
		

		<!-- end first card row -->
	</div>
</div>
	
</div>
<!-- end people card section -->
<!-- simple text -->
<section>
  	<div class="container" style="background:#3399ff">
  		<div class="row">
  			<div class="col-md-12">
  				<p class="simple-text2 mt-5 mb-5">In close partnership with our clients, we design, develop and deploy intuitive, reliable
				and sustainable solutions for both business and social purposes.</p>
								
  			</div>
  		</div>
  	</div>
  </section>
  <!-- end simple text -->
  <div class="container">
  	<div class="row">
  		<div class="col-md-4"></div>
  		<div class="col-md-4"><p class="Stockpile">Our Favorite Stockpile</p></div>
  		<div class="col-md-4"></div>
  	</div>
  </div>
  <!-- slider -->
  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials mb-5" >
      <div class="container" >

        

        <div class="owl-carousel testimonials-carousel"  >


          <div class="testimonial-item">
          <div class=" card shadow Stockpile-card mt-5 mb-5">
          	<img src="{{asset('assets/web-assets/images/java.png')}}" class="Stockpile-img mb-5">
          </div>
          </div>

           <div class="testimonial-item">
          <div class=" card shadow Stockpile-card mt-5 mb-5">
          	<img src="{{asset('assets/web-assets/images/python.png')}}" class="Stockpile-img mb-5">
          </div>
          </div>

          <div class="testimonial-item">
          <div class=" card shadow Stockpile-card mt-5 mb-5">
          	<img src="{{asset('assets/web-assets/images/php.png')}}" class="Stockpile-img mb-5">
          </div>
          </div>

          <div class="testimonial-item">
          <div class=" card shadow Stockpile-card mt-5 mb-5">
          	<img src="{{asset('assets/web-assets/images/word.png')}}" class="Stockpile-img mb-5">
          </div>
          </div>

          <div class="testimonial-item">
          <div class=" card shadow Stockpile-card mt-5 mb-5">
          	<img src="{{asset('assets/web-assets/images/ruby.png')}}" class="Stockpile-img mb-5">
          </div>
          </div>
            
          </div>
         

</div>
    </section><!-- End Testimonials Section -->

  <!-- end slider -->
  <!-- see our project -->
  <section style="background: #cecece">
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<p class="our-project">See Our Projects</p>
  		</div>
  	</div>
  	<div class="row mt-3">
  		<div class="col-md-4">
  			<div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          
          <div class="text123"><p class="Project1">Project 1</p>
         </div>
        </div>
        </div>
  		</div>

  		<div class="col-md-4">
  			<div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          
          <div class="text123"><p class="Project1">Project 2</p>
         </div>
        </div>
        </div>
  		</div>
  		<div class="col-md-4">
  			<div class="container123">
        <img src="{{asset('assets/web-assets/images/tes/features.jpg')}}" alt="Avatar" class="image">
        <div class="overlay123">
          
          <div class="text123"><p class="Project1">Project 3</p>
         </div>
        </div>
        </div>
  		</div>
  	</div>
  </div>
</section>
<div class="container mb-5">
      <div class="row mt-5">
        <div class="col-md-5"></div>
        <div class="col-md-2">
           <a href="#" class="btn btn btn-See-Our-Work">See Our Work</a>
        </div>
      <div class="col-md-5"></div>
    </div>
    </div>
<!-- end our project -->
  
  @endsection

