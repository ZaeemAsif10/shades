
@extends('web-side.web-setup.master')
@section('content')


<section style="background-image: url(assets/web-assets/images/1.jpeg);" >
	<div class="container mt-2">
		
		<div class="row mt-5">
			<div class="col-md-12 mt-5">
				<p class="team">Our Team</p>
				<p class="team-text text-center">Offering All Kinds Of Web and Mobile Development Services<br>
					<f style="font-size: 15px">We are a software firm that is focused on software development and design</f><br>
					<f style="font-size: 15px">We provide the best quality work</f>

				</p>
			</div>
		</div>
		
		
	</div>
</section>
<!-- People -->
<div class="container">
<div class="row mt-5 mb-4">
	<div class="col-md-12">
		<p class="People mt-3 mb-4">People</p>
	</div>
</div>
</div>

<!-- end people -->
<!-- people card section -->
<div class="container mt-3">
	
	<div class="row mb-5">
		<?php
        for($i=0;$i<6;$i++){
        ?>
<div class="col-md-3">
				<div class="card shadow mb-4">
					
				<img src="{{asset('assets/web-assets/images/tes/testimonials-3.jpg')}}" class="people-img-card mt-4" alt="No visible">
				<p class="team-name mt-2">Scott McCall Mecy<br>
				<f class="desigination">CEO of Shades</f><br>
				<f class="intrest mb-5">Software Engineer</f>
			</p>
			</div>
		</div>
<?php
        }?>
		<!-- end first card row -->
	</div>
	
</div>
<!-- end people card section -->



  
  @endsection

