
<!--<script type="text/javascript" src="https://www.qubisa.com/assets/libs/jquery-ui/js/jquery-ui.min.js"></script>-->
<!-- <script type="text/javascript" src="{{ asset('templates/qbs/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/bootstrap/bootstrap.min.js') }}"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- <script type="text/javascript" src="{{ asset('templates/qbs/bootstrap-select/bootstrap-select.min.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('templates/qbs/modernizr/modernizr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/modernizr/css-scrollbars.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/jquery/jquery-custom-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/aos/aos.min.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('templates/qbs/iconify/iconify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/feather/feather.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('templates/qbs/underscore/underscore.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/qbs/moment-js/moment-js.min.js') }}"></script> -->

<!--<script type="text/javascript" src="https://www.qubisa.com/assets/js/cons.js?v=YXNzZXRzIHZlcnNpb24gbm93IGlzIDAuNTU="></script>-->
<!-- <script type="text/javascript" src="{{ asset('templates/qbs/assets/js/main.min.js') }}"></script> -->
<!--
<script type="text/javascript" src="https://www.qubisa.com/assets/libs/video-js/js/video.min.js"></script>
<script type="text/javascript" src="https://www.qubisa.com/assets/libs/video-js/js/videojs-flash.min.js"></script>
<script>
    videojs.options.flash.swf = "https://www.qubisa.com/assets/libs/video-js/video-js.swf";
</script>
<script type="text/javascript" src="https://www.qubisa.com/assets/libs/star-rating/js/jquery.star-rating-svg.js"></script>
-->
<!-- <script type="text/javascript" src="{{ asset('templates/qbs/slick/slick.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).on('click','#sidebarCollapse',function(e){
		e.preventDefault();
		$('#sidebar').hasClass('active') 
			? $('#sidebar').removeClass('active') 
			: $('#sidebar').addClass('active');
		$(this).find('i').hasClass('ti-menu') 
			? $(this).find('i').removeClass('ti-menu').addClass('ti-close') 
			: $(this).find('i').addClass('ti-menu').removeClass('ti-close');
	})

	$(document).on("click", "#sidebar > .sidebar-menu > .menu-label.sidebar-dropdown > a", function(e){
		e.preventDefault();
		$(this).parent(".menu-label").hasClass("active") 
			? $(this).parent(".menu-label").removeClass("active") 
			: $(this).parent(".menu-label").addClass("active");
	})
</script>
<!-- feather icon -->
<script>
  feather.replace()
</script>