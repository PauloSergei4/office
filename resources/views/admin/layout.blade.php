<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/../assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/../assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href="/../assets/css/themify-icons.css" rel="stylesheet">
    <link href="/../assets/css/mqtt.css" rel="stylesheet">

      <script type="text/javascript" src="/../assets/js/jquery-1.10.2.js"></script>
    {{--<script src="/../js/admin.js"></script>--}}
   {{--<script type="text/javascript" src="/../assets/js/jquery.label_over.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$(function() {        --}}
           {{--$('label.messageLabel').labelOver('labelover');--}}
          {{--$('label.targetLabel').labelOver('labelover');--}}
          {{--$("#button").click(function() {          --}}
            {{--var target = $('#messageTarget').val();         		--}}
            {{--var message = $('#messageBody').val();         		--}}
           {{--$('.sent').hide();--}}
            {{--$('.loading').slideToggle('fast');--}}
            {{--$.ajax({--}}
                    {{--url: '../public/send_mqtt.php',--}}
                    {{--type: 'POST',--}}
                    {{--data: {'target': target, 'message': message},--}}
                    {{--dataType: 'text',--}}
                    {{--timeout: 20000,--}}
                    {{--error: function(){				      --}}
                {{--$('.loading').slideToggle('fast');--}}
                  {{--alert('Failed to communicate to the server. Try again!')                                     --}}
                    {{--},--}}
                    {{--success: function(text){--}}
                {{--$('.loading').slideToggle('fast');--}}
                      {{--if (text == '') {--}}
                        {{--alert('Failed to send the message. Try again!')                                     --}}
                      {{--} else {--}}
                  {{--$('.sent').slideToggle('fast');--}}
                {{--}--}}
                    {{--}--}}
            {{--});          --}}
                            {{----}}
          {{--});  --}}
        {{--})       --}}
    {{----}}
      {{--</script> --}}
</head>
<body>

<div class="wrapper">
	@include('admin._sidebar')

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Управление информационными LED панелями</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        @if(Auth::check())
                                    <li>
                                        <a href="#">
                                            <i class="ti-settings"></i>
                                            <p>Настройки</p>
                                        </a>
                                    </li>
                            <li>
                                <a href="{{ route('logout') }}">
                                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                    <i class="ti-power-off"></i>
                                    <p>Выйти</p>
                                </a>
                            </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <i class="ti-user"></i>
                                            <p>Войти</p>
                                        </a>
                                    </li>
                                @endif
                        {{--<li>--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--<i class="ti-panel"></i>--}}
								{{--<p>Stats</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown">--}}
                              {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<i class="ti-bell"></i>--}}
                                    {{--<p class="notification">5</p>--}}
									{{--<p>Notifications</p>--}}
									{{--<b class="caret"></b>--}}
                              {{--</a>--}}
                              {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Notification 1</a></li>--}}
                                {{--<li><a href="#">Notification 2</a></li>--}}
                                {{--<li><a href="#">Notification 3</a></li>--}}
                                {{--<li><a href="#">Notification 4</a></li>--}}
                                {{--<li><a href="#">Another notification</a></li>--}}
                              {{--</ul>--}}
                        {{--</li>--}}
                    </ul>

                </div>
            </div>
        </nav>


        @yield('content')


        <footer class="footer">
            <div class="container-fluid">

				<div class="copyright pull-right">
                   <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.ihome.org.ua">IT Group Shostka</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->

	<script src="/../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/../assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/../assets/js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/../assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="/../assets/js/demo.js"></script>
<script src="{{ asset('js/app.js') }}"></script>


</html>
