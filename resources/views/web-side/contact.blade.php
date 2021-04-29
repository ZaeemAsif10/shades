
@extends('web-side.web-setup.master')
@section('content')

<section style="background-image: url(assets/web-assets/images/contact-us.jpeg);" >
	<div class="container mt-2 mb-3">
		
		<div class="row mt-5">
			<div class="col-md-12 mt-5">
				<p class="Contact-Us">Contact Us</p>
				<p class="Contact-Us-text text-center">Offering All Kinds Of Web and Mobile Development Services<br>
					<f style="font-size: 15px">We are a software firm that is focused on software development and design</f><br>
          <f style="font-size: 15px">We provide the best quality work</f></p>

				</p>
			</div>
		</div>
		
		
	</div>
</section>
 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
     
      

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Flat#02 second floor , plaza#15A midway commercial behind prism arcade 2 bahria town phase 7 Rawalpindi</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>hr@shadestechs.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+923435279998</p>
                </div>
              </div>
            </div>

          </div>
  
          <div class="col-lg-6">
                @if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong> {{ $message}}</strong>
            </div>
            @endif
            
            @if($message=Session::get('error'))
            <div class="alert alert-danger alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <strong> {{ $message}}</strong>
            </div>
            @endif
            <form action="{{url('contact')}}" method="post" role="form" class="">
             @csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control"  placeholder="Your Name" required/>
                  <div class="validate"></div>
                </div>
                <div class="col form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  required/>
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5"  placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
           
              <div class="text-center">
              <button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <section>
      <div class="container">
        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=islamabad+(Shades)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
      </div>
    </section>

  @endsection

