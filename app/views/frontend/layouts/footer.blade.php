<!-- SCRIPTS -->
	<script src="{{ URL::asset('assets/js/html5shiv.js') }}"></script>
	<script src="{{URL::asset('assets/js/jquery-1.10.2.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/fancybox/jquery.fancybox.pack-v=2.1.5.js')}}"></script>
	<script src="{{URL::asset('assets/js/script.js')}}"></script>

	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>

</html>