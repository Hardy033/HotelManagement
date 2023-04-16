@include('user.header')

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('index')}}">Home</a></span> <span>Contact</span></p>
	            <h1 class="mb-4 bread">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> HR Hotel Goa, a Luxury Collection Resort & Spa, Goa</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="#">+91-8007479666</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="#">reservation@hrhotel.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="{{url('index')}}">hrhotel.com</a></p>
	          </div>
          </div>
        </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{url('email')}}"  method="POST"class="bg-white p-5 contact-form">
            @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="yname" placeholder="Your Name" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="yemail" placeholder="Your Email" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Message" required=""></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

        </div>
      </div>
    </section>

@include('user.footer')

   