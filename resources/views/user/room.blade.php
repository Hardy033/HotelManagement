<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Rooms</h2>
          </div>
        </div>    		
    		<div class="row">
    			

				@foreach($room as $rooms)
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
    					<a href="{{url('room')}}" class="img d-flex justify-content-center align-items-center" style="background-image: url(roomimage/{{$rooms->image}});"></a>
    					<div class="text p-3 text-center">
    						<h3 class="mb-3"><a href="{{url('room')}}">{{$rooms->room_name}}</a></h3>
    						<p><span class="price mr-2">₹{{$rooms->price}}</span> <span class="per">per night</span></p>
    						<hr>
                                        <div>
											<p>{{$rooms->detail}}</p>
										</div>
										
									<p class="pt-1"><a href="{{url('reserve')}}" class="btn btn-primary">Book</a></p>
							</div>
    				</div>
    			</div>
				@endforeach($room as rooms)
    		</div>
    	</div>
    </section>