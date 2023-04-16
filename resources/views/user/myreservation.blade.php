@include('user.header')

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{url('index')}}">Home</a></span> <span>About</span></p>
          <h1 class="mb-4 bread">My Booking</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
              <tr>
                  <th>Fname</th>
                  <th>Lname</th>
                  <th>Email</th>
                  <th>Phone_no</th>
                  <th>Check_in</th>
                  <th>Check_out</th>
                  <th>Room</th>
                  <th>Adult</th>
                  <th>child</th>
                  <th>No_of_room</th>
                  <th>Extra</th>
                  <th>status</th>
                  <th>Price</th>
                  <th>Payment</th>
                  <th>Cancel</th>
              </tr>

              @foreach($reser as $resers)

              <?php
                $a = (int)$resers->check_in;
                $b = (int)$resers->check_out;
                $c = (int)$resers->number_of_room;
                $d = (int)$resers->Extra;
                $f = $a-$b;
                $Total = ($d + 5000)*$f*$c;
              ?>
              <tr>
                  <td>{{$resers->fname}}</td>
                  <td>{{$resers->lname}}</td>
                  <td>{{$resers->email}}</td>
                  <td>{{$resers->phone_no}}</td>
                  <td>{{$resers->check_in}}</td>
                  <td>{{$resers->check_out}}</td>
                  <td>{{$resers->room}}</td>
                  <td>{{$resers->adult}}</td>
                  <td>{{$resers->child}}</td>
                  <td>{{$resers->number_of_room}}</td>
                  <td>{{$resers->Extra}}</td>
                  <td>{{$resers->status}}</td>
                  <td>Rs<?php echo $Total; ?> </td>
                  
                  <td>@if($resers->status=='pending')<a class="btn btn-primary mt-1 wow zoomIn"  href="{{url('payment',$resers->id)}}">pay</a>
                  @else
                  <h2><b>paid</b></h2>
                  @endif</td>
                  <td><a class="btn btn-danger mt-1 wow zoomIn" onclick="return confirm('are you sure to cancel reservation')" href="{{url('cancel_reser',$resers->id)}}">Cancel</a></td>
                  
              </tr>
              @endforeach
          </thead>
      </table>
      <div align="right">
      <a class="btn btn-primary mt-1 wow zoomIn"  href="{{url('feedback')}}">Feedback</a>
      </div>
  </div>
</div>

@include('user.footer')