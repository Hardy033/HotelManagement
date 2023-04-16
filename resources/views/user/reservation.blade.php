@include('user.header')

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('index')}}">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">Room Booking</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<div class="page-section">
  <div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif
    <form class="main-form" action="{{url('reservation')}}" method="POST">

      @csrf
      <div class="row mt-5">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="fname" class="form-control" placeholder="First name" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="lname" class="form-control" placeholder="Last name" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="email" class="form-control" placeholder="Email address.." required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="number" class="form-control" placeholder="phone number" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="check_in" id="picker1" class="form-control " placeholder="Check-in date" required="">
        </div>

        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="check_out" id="picker2" class="form-control " placeholder="Check-out date" required="">
        </div>
          
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <select name="room" id="" class="form-control" placeholder="Select Room" required="">
          <option >---Select Room---</option>
          @foreach($room as $rooms)
            <option value="{{$rooms->room_name}}">{{$rooms->room_name}}</option>
            @endforeach
          </select>
        </div>
    
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft " >
          <div class="wrap">
            <div class="col-md d-flex">
              <label style="display: inline-blocks; width: 200px;" for="adult">Adult</label>
              <input type="number" name="adult" class="form-control" required="">           
              <label style="display: inline-blocks; width: 200px;" for="child" >Child</label>
              <input type="number" name="child" class="form-control"  required="">              
              <label style="display: inline-blocks; width: 200px;" for="rooms" >Rooms</label>
              <input type="number" name="numroom" class="form-control" required="" >    
            </div>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 py-5 fadeInLeft">
          <div class="wrap">
              <h4 class="uitk-heading-7 uitk-layout-flex-item">Extras:</h4>
            <diV>
              <table class="table" fa-border="2px solid black">
                
                  <tr>
                    <td> <input type="radio"  name="extra" value="0" id="0">
                        <label for="0">Valet parking    </th>
                    <td align="right"><b>+Rs0</b></label><br></th> 
                  </tr>

                  <tr>
                    <td scope="row"><input type="radio"  name="extra" value="600" id="600">
                    <label for="600">WiFi + Breakfast for 2 + Valet parking</td>
                    <td align="right"><b> +Rs600</b></label><br></td>
                  </tr>

                  <tr>
                    <td scope="row"> <input type="radio"  name="extra" value="1000" id="1000">
                    <label for="1000">Breakfast buffet + Free self parking + Dinner</td>
                    <td align="right"><b>+Rs1000</b></label></td> 
                  </tr>

              </table>
              <h3 class="uitk-heading-7 uitk-layout-flex-item">Room Price : Rs {{$rooms->price}}</h3>
            </div>
          </div>
        </div>

      </div>
      <div class="wrap" align="center" >
            <button type="submit" class="btn btn-primary">Book</button>
      </div>
      <br>
    </form>
    
  </div> <!-- .page-section -->

</div>
@include('user.footer')