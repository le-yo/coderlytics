		<!-- Compiled and minified JavaScript -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    			<div class = 'AjaxisModal'>
    			</div>
    		</div>
    		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/app.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.5/js/demo.js"></script>
		<script> var baseURL = "{{ URL::to('/') }}"</script>
		<script src = "{{URL::asset('js/AjaxisBootstrap.js') }}"></script>
		<script src = "{{URL::asset('js/scaffold-interface-js/customA.js') }}"></script>
		<script src = "{{URL::asset('plugins/chartjs/Chart.min.js') }}"></script>
		<script src = "{{URL::asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
		{{--<script src="../../plugins/chartjs/Chart.min.js">--}}
		<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
		<script>
		// pusher log to console.
		Pusher.logToConsole = true;
		// here is pusher client side code.
		var pusher = new Pusher("{{env("PUSHER_KEY")}}", {
		encrypted: true
		});
		var channel = pusher.subscribe('test-channel');
		channel.bind('test-event', function(data) {
		// display message coming from server on dashboard Notification Navbar List.
		$('.notification-label').addClass('label-warning');
		$('.notification-menu').append(
			'<li>\
						<a href="#">\
									<i class="fa fa-users text-aqua"></i> '+data.message+'\
						</a>\
			</li>'
			);
		});
		</script>

		@yield('scripts')