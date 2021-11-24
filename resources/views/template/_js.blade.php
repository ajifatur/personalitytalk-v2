<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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