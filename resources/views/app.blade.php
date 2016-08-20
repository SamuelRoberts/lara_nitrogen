<style>
.chat-bundle {
    overflow: hidden
}
.chat-user {
    clear: both;
    font-size: 13px;
    color: #000;
    background: #e6e6e6;
    background: #f4f1ec;
    background: #fff;
    background: #eae4dc;
    border-radius: 3px!important
}
.chat-line,
.chat-user {
    padding: 5px;
    margin-top: 2px;
    margin-bottom: 2px;
    margin-left: 5px;
    float: left
}
.chat-line {
    background: #e6e6e6;
    background: #f4f1ec;
    background: #fff;
    border-radius: 3px!important
}


</style>
<!DOCTYPE html>
<!--[if IE 8]>
	<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
	<html lang="en" class="ie9"> <![endif]-->
	<!--[if !IE]><!-->
	<html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>SynergySports | Best Bitcoin Sportsbook, Blackjack, Dice, and Poker</title>
		<meta name="description" content="Place your bets at the world's best bitcoin gambling site! Play on the Synergysports Casino, Sportsbook, Blackjack, Dice, and Poker. Bet now on football, eSports, hockey, and more!">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

		<meta name="csrf-token" content="{!! csrf_token() !!}">
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,800,600,700' rel='stylesheet' type='text/css'>

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<!-- manual entry -->
		<link href="css/core_styles.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="css/minor_styles.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL STYLES -->
		<link rel="icon" type="image/png" href="assets/new-img/favicon.png">
		<!-- Open Graph Data -->
		<meta property="og:title" content="SynergySports - The Future of Betting"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="https://www.synergysports.eu/"/>

		<meta property="og:description" content="SynergySports is the largest and most trusted bitcoin sportsbook. Play poker and bet while trying your luck at the best bitcoin casino."/>
		<meta property="og:site_name" content="SynergySports"/>  
		<link href="css/app.css" rel="stylesheet" type="text/css"/>  
	</head>
	<body class="page-header-fixed">

		<div class="main">

			@include('include.header')

			<!-- BEGIN CONTAINER -->
			<div class="page-container row-fluid sidebar-custom">

				@include('include.sidebar')

				<!-- BEGIN PAGE -->
				<div class="page-content">

					@include('include.message-bar')

					<!-- BEGIN PAGE CONTAINER-->
					<div id="chat-minimized">
						<div id="chat-minimized-line"><span class="chat-bar-name"></span> <span class="chat-bar-message"></span></div>
						<div id="chat-maximize-button"><i class="icon-chevron-down"></i></div>
						<div id="chat-close-button"><b>&times;</b></div>
					</div>
					<div id="chat-container" class="no-margin">

						<div id="chat-message-container">
							<div id="chat-lines"></div>
						</div>
<form id="send-message">
						<div class="row-fluid">
							<div>
								<input name="" type="text" id="message-input"/>
							</div>
						</div>
						<div id="chat-minimize-button"><i class="icon-chevron-up"></i></div>
						<div id="chat-expand-button"><i class="icon-resize-full"></i></div>
						<div id="chat-contract-button"><i class="icon-resize-small"></i></div>
					</form></div>

					<!-- Hold Poker iFrame -->
					<div id="poker-container" class="no-margin"></div>

					@include('include.account')
					@include('include.find-games')
					@include('include.cashier')
					@include('include.transactions')
					@include('include.settings')
					@include('include.parley-jackpot')
					@include('include.10x-challenge')
					@include('include.survivor-pool')
					@include('include.faq')
					@include('include.landing')
					@include('include.poker-landing')
					@include('include.poker-schedule')
					@include('include.poker-rewards')
					@include('include.casino-landing')
					@include('include.blackjack-landing')
					@include('include.blackjack-rules-landing')
					@include('include.dice-landing')
					@include('include.news')
					@include('include.support')
					@include('include.affiliate')
					@include('include.affiliate-statistic')
					@include('include.affiliate-banner')
					@include('include.affiliate-tips')
					@include('include.rules')
					@include('include.poker-rules')
					@include('include.terms')
					@include('include.contact')
					@include('include.legal')
					@include('include.about')
					@include('include.wagers')
					@include('include.casino-wagers')
					@include('include.exchanged-wagers')
					@include('include.exchanged-info')
					@include('include.poker-faq')
					@include('include.open-account')


					
					<!-- END PAGE -->
				</div>
			</div>
			<!-- END CONTAINER -->
			@include('include.footer')

			<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
			<!-- <script src="js/socket.io.js"></script> -->
			<script src="js/app.js"></script>
			<script>
				jQuery(document).ready(function ()
				{
					App.init();
				});
				
			</script>
			@if(Cookie::get('user_id')==null && Auth::guest())
			<script>
				$('#modal-welcome').modal('show');
			</script>
			@endif
			@if(Auth::user())

			 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>

    <script>
        jQuery(function($) {
            var d = new Date();
             var minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes();
             var  hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours();
              var ampm = d.getHours() >= 12 ? 'pm' : 'am';
            var current_time = hours +':'+minutes+ampm;

            var $messageForm = $('#send-message');
            var $messageBox = $('#message-input');
            var $chat = $('#chat-message-container');
            var $chatUsers = $('ul.chatUsers');
            // open a socket connection
            var socket = new io.connect('http://development.synergysports.eu:3000', {
                'reconnection': true,
                'reconnectionDelay': 1000,
                'reconnectionDelayMax' : 5000,
                'reconnectionAttempts': 5
            });

            // when user connect, store the user id and name
            socket.on('connect', function (user) {
               // alert('here');
                socket.emit('join', {id: "<?= Auth::user()->id ?>", name: "<?= Auth::user()->name ?>"});
            });


            $messageForm.on('submit', function (e) {
                e.preventDefault();

                socket.emit('chat.send.message', {msg: $messageBox.val(), nickname: '<?= Auth::user()->name ?>', userid: '<?= Auth::user()->id ?>',current_time:current_time});
                $messageBox.val('');
            });


            // get connected users and display to all conected
            socket.on('chat.users', function (nicknames) {
                var html = '';

                $.each(nicknames, function (index, value) {
                    html += '<li><a href="' + value.socketId + '">' + value.nickname + '</a></li>';
                });

                $chatUsers.html(html);
            });


            // wait for a new message and append into each connection chat window
            socket.on('chat.message', function (data) {

                data = JSON.parse(data);
console.log(data);
                if(data.hasOwnProperty('system')) {
                    toastr["success"](data.msg);
                } else {
                	alert('here');
                    $chat.append(
                   '<div class="chat-bundle">' + '<div class="chat-user">' + current_time + '&nbsp;' + data.nickname + '&nbsp;' + '['+ data.userid +']' + '</div>' + '<div class="chat-line">' + data.msg  + '</div>');
                }
            });
        });
    </script>
			@endif
			<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
		</body>
		</html>
