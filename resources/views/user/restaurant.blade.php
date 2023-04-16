@include('user.header')

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('index')}}">Home</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-4 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading">Our Restaurant</span>
		            <h2 class="mb-4">We Are Food Lover</h2>
	            </div>
	          </div>
	          <div class="pb-md-4">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times.</p>
							<p class="pl-md-5">When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Menu</h2>
          </div>
        </div>
		<div class="row">
        	
				@foreach($data as $food)
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(roomimage/{{$food->fimage}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>{{$food->food_name}}</span></h3>
	        				<span class="price">₹{{$food->fprice}}</span>
	        			</div>
	        			
	        		</div>
        		</div>
				@endforeach
        	
        </div>
			</div>
		</section>

    

    @include('user.footer')