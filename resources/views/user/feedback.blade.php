@include('user.header')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('index')}}">Home</a></span>
          <h1 class="mb-4 bread">Feedback</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif
    <div class="row block-9">
        <div class="container">
            <form action="{{url('feed')}}"  method="POST"class="bg-white p-5 " align="center">
            @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="First Name">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email Id">
              </div>

              

              <div class="form-group">
                <textarea name="message"  cols="30" rows="7" class="form-control" placeholder="Feedback"></textarea>
              </div>

              <div class="form-group" align="left">
	      			<h3 class="heading mb-4">Star Rating</h3>

                    <div class="form-check">
                        <input type="radio" name="star" value="5" id="5">
                        <label for="5">
                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="star" value="4" id="4">
                        <label for="4">
                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="star" value="3" id="3">
                        <label for="3">
                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                        </label>
                    </div>

                    <div class="form-check">
                        <input type="radio" name="star" value="2" id="2">
                        <label for="2">
                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                        </label>
                    </div>

                    <div class="form-check">
                    <input type="radio" name="star" value="1" id="1">
                    <label for="1">
                        <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                    </label>
                    </div>
	      		
              </div>
              <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
              </div>
            
            </form>
        </div>
    </div>
</div>

@include('user.footer')