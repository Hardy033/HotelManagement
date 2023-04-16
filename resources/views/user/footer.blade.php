<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">HR Hotel</h2>
              <p>A great hotel needs a great location, great staff, and a memorable experience. We have those all</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('restaurant')}}" class="py-2 d-block"Restaurant></a></li>
                <li><a href="{{url('room')}}" class="py-2 d-block">Rooms</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('about')}}" class="py-2 d-block">About Us</a></li>
                <li><a href="{{url('contact')}}" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">HR Hotel Goa, a Luxury Collection Resort & Spa, Goa</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91-8007479666</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">reservation@hrhotel.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/jquery.datetimepicker.full.min.js"></script>
  <script>
    $('#picker1').datetimepicker({
          timepicker:false,
          datepicker:true,
          format:'d-m-Y',
          onShow:function(ct){
              this.setOptions({
                maxDate: $('#picker2').val() ? $('#picker2').val():false
              })
          }
    })          
    $('#picker2').datetimepicker({
          timepicker:false,
          datepicker:true,
          format:'d-m-Y ',
          onShow:function(ct){
              this.setOptions({
                minDate: $('#picker1').val() ? $('#picker1').val():false
            })
          }
    })    
</script>

  </body>
</html>