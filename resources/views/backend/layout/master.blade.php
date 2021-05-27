<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
        @include('backend.layout.head')
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    </head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('backend.layout.main-sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('backend.layout.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('backend.layout.models')
            	@include('backend.layout.footer')
				@include('backend.layout.footer-scripts')

                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
                <script>

                    // Enable pusher logging - don't include this in production
                    Pusher.logToConsole = true;
                
                    var pusher = new Pusher('b1c779cc24c485b64079', {
                      cluster: 'eu'
                    });
                
                    var channel = pusher.subscribe('notifications-channel');
                    channel.bind('message-recieved', function(data) {
                        toastr.success('New Message Reived form User');
                    });
                  </script>




				  
<script>
    setInterval(function() {
        $("#notifications_count").load(window.location.href + " #notifications_count");
        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
    }, 5000);
</script>
	</body>
</html>
