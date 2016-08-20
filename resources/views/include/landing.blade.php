<!-- BEGIN LANDING PAGE --> 
		<div id="page-landing" class="page-pane">
			<div id="landing-content">
				<div id="landing-stripe1">
					<div id="landing-image">
						<div id="landing-image-header" class="row-fluid center-in-span">
							<div class="span12">
								<div id="landing-logo-new"></div>
								<div id="landing-logo-new-small"></div>
								<div id="landing-tagline-new">changing the way the world bets on sports</div>
								<!-- <img src="images/hexiShape.png" alt=""> -->
							</div>
						</div>

						
						@if (Auth::user())
						
						<!-- After setting username and password -->

						@if (Auth::user()->password)

						<div style="display: block;" id="landing-welcome-box">
							<div id="landing-greeting">Welcome <span id="landing-welcome-chat-name">{{ Auth::user()->username }}</span>!</div>
							<div id="landing-sub-greeting1">Your user number is: <span id="landing-welcome-id">{{ Auth::user()->user_id }}</span></div>
							<div id="landing-sub-greeting1">If you want to learn more about Synergy sports, the tour below will show you a few helpful hints! If you still have questions, feel free to create a support ticket or email support@synergysports.eu.</div>
							<div id="start-tour-button" class="party-button margin-top20 start-tour-button">Start the Tour!</div>
							<p>New to bitcoin? Learn more on the <a href="#" target="_blank">Synergy Blog</a></p>
						</div>

						

						@else

	
						<div id="landing-new-user" class="row-fluid center-in-span">
							<div style="display: block;" id="landing-credentials-box" class="span6">
								<p id="landing-info">When you arrived, we automatically created an account for you! We suggest you add a username and password to keep it secure:</p><br>
								<div id="landing-credentials-form">
									<input autocorrect="off" autocomplete="off" id="landing-username-textbox" spellcheck="false" class="" placeholder="Username" type="text"><br>
									<input autocorrect="off" autocomplete="off" id="landing-password-textbox" spellcheck="false" class="" placeholder="Password" type="password"><br>
									<input autocorrect="off" autocomplete="off" id="landing-password2-textbox" spellcheck="false" class="" placeholder="Password Again" type="password"><br>
									<div id="landing-button-group">
										<div id="landing-credentials-button">Add Username / Password</div>
										<div id="landing-login-link">or Sign In</div>
									</div>
									<div id="form-errors"></div>
								</div>
							</div>
							<div style="display: block;" id="landing-tour-new-user" class="span6 center-in-span">
								<div id="start-tour-button" class="party-button margin-top20 start-tour-button">Start the Tour!</div>
								<p style="text-align: center;">New to bitcoin? Learn more on the <a href="#" target="_blank">Synergy sports Blog</a></p>
							</div>
						</div>

						@endif

						@elseif(Cookie::get('user_id')!=null  && !empty(Cookie::get('user_id')))

						<div style="display: block;" id="landing-welcome-box">
							<div id="landing-greeting">Welcome <span id="landing-welcome-chat-name">{{ Cookie::get('user_name') }}</span>!</div>
							<div id="landing-sub-greeting1">Your user number is: <span id="landing-welcome-id">{{ Cookie::get('user_id') }}</span></div>
							<div id="landing-sub-greeting1">If you want to learn more about Synergy sports, the tour below will show you a few helpful hints! If you still have questions, feel free to create a support ticket or email support@synergysports.eu.</div>
							<div id="start-tour-button" class="party-button margin-top20 start-tour-button">Start the Tour!</div>
							<p>New to bitcoin? Learn more on the <a href="#" target="_blank">Synergy Blog</a></p>
						</div>

						@else

	
						<div id="landing-new-user" class="row-fluid center-in-span">
							<div style="display: block;" id="landing-credentials-box" class="span6">
								<p id="landing-info">When you arrived, we automatically created an account for you! We suggest you add a username and password to keep it secure:</p><br>
								<div id="landing-credentials-form">
									<input autocorrect="off" autocomplete="off" id="landing-username-textbox" spellcheck="false" class="" placeholder="Username" type="text"><br>
									<input autocorrect="off" autocomplete="off" id="landing-password-textbox" spellcheck="false" class="" placeholder="Password" type="password"><br>
									<input autocorrect="off" autocomplete="off" id="landing-password2-textbox" spellcheck="false" class="" placeholder="Password Again" type="password"><br>
									<div id="landing-button-group">
										<div id="landing-credentials-button">Add Username / Password</div>
										<div id="landing-login-link">or Sign In</div>
									</div>
									<div id="form-errors"></div>
								</div>
							</div>
							<div style="display: block;" id="landing-tour-new-user" class="span6 center-in-span">
								<div id="start-tour-button" class="party-button margin-top20 start-tour-button">Start the Tour!</div>
								<p style="text-align: center;">New to bitcoin? Learn more on the <a href="#" target="_blank">Synergy sports Blog</a></p>
							</div>
						</div>

						@endif
						

					</div>
				</div>

				<div id="landing-stripe-poker-announcement">
					<div id="landing-stripe-poker-shadow"></div>                    
					<div id="landing-half-table-poker-promo">
						<div class="banner-content">                        	
							<div id="banner-text-wrapper">
								<div id="banner-header1">
									<p class="banner-header">SPORTSBOOK</p>
									<p class="banner-p">Tennis • Football • and Much More</p>
								</div> 
								<div id="banner-header2"> 
									<div id="sub-head-banner1">
										<p class="banner-header">CASINO</p>
										<p class="banner-p">Dice • Blackjack</p>
									</div> 
									<div id="sub-head-banner2">
										<p class="banner-header">POKER</p>
										<p class="banner-p">Daily Tournaments</p>
									</div>                                    
								</div>     
							</div>                           

							<!--<img class="" src="../assets/new-img/main-madness-banner/marchMadness/button-click.png"> -->                           
						</div>

						<!--<div id="landing-poker-promo-button">Play Poker Now!</div>-->
						<!--<div id="landing-poker-promo-header-text">Poker Coming Thursday!</div>-->
						<!--<div id="landing-poker-promo-text-large">The Boys of Summer are back!</div>-->
						<!--<div id="landing-poker-promo-text-small"><a id="landing-promo-link"style="font-size: 18px; color: #fff; text-decoration: underline;" href="#">Check out the best odds on MLB</a></div>-->

						<!--<div id="landing-poker-promo-text-large" style="font-size: 32px; margin-top: 30px;">Be a part of the action in August!</div>
						<div id="landing-poker-promo-text-small" style="font-size: 24px; margin-top: 30px;">Wager on <a class="landing-page-sport-link" href="#" style="color: #FFB129;">Premier League Soccer</a>, <a class="landing-page-sport-link" href="#" style="color: #FFB129;">NFL Football</a>, <a class="landing-page-sport-link" href="#" style="color: #FFB129;">MLB Baseball</a> and much more!
						</div>
						<div id="landing-poker-promo-text-small" style="font-size: 24px; margin-top: 30px;">Also, don't forget to sign up for the <a class="landing-page-SynergySports-link" href="#" style="color: #FFB129;">NFL Survivor Pool</a>!</div>-->
					</div>
				</div>

				<div id="landing-stripe2">
					<div>
						<div id="landing-bitcoin-icon"></div>
						<div id="landing-bitcoin-text">SynergySports is powered by Bitcoin: the future of currency.</div>
						<div id="landing-bitcoin-text-small">Keep reading to learn more about its advantages.</div>
					</div>
				</div>
				<div id="landing-stripe3">
					<div class="row-fluid">
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-lock"></i></div>
							<div class="landing-span-header-new">Ultra Secure</div>
							We offer anonymous accounts; you don't need to give us any personal information. We also offer 2-factor authentication to provide maximum security for your account.
						</div>
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-bolt"></i></div>
							<div class="landing-span-header-new">Lightning Fast Transactions</div>
							Lightning fast deposits and withdrawals are our standard, and most games are graded minutes after they end.
						</div>
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-trophy"></i></div>
							<div class="landing-span-header-new">More Choices</div>
							From major sports and leagues down to cricket and eSports, we have you covered.
						</div>
					</div>
					<div class="row-fluid lss">
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-bar-chart"></i></div>
							<div class="landing-span-header-new">Competitive Odds</div>
							Made by gamblers for gamblers, we realize that competitive odds are king!
						</div>
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-heart"></i></div>
							<div class="landing-span-header-new">Fun Promos</div>
							Check out our monthly Parlay Promotion and NFL Survivor Pools. Grab a piece of the Jackpots for yourself!
						</div>
						<div class="landing-span-new span4">
							<div class="landing-span-icon-new"><i class="icon-smile"></i></div>
							<div class="landing-span-header-new">Superior Support</div>
							With our built-in chat and support ticket system, you can get immediate help with any issues.
						</div>
					</div>
				</div>
				<div id="landing-stripe4">
					<div id="landing-what-bitcoin-text">What is bitcoin?</div>
					<div id="landing-what-bitcoin-text-small">Bitcoin is a digital currency that allows you to send money over the internet. So, why should you bet with bitcoin?</div>
					<div id="landing-what-bitcoin-box">
						<div class="landing-what-bitcoin-point-row">
							<div class="landing-what-bitcoin-point-icon"></div>
							<div class="landing-what-bitcoin-point-text">It’s a decentralized currency. This means the bitcoin network isn’t controlled by, or responsible to a government or bank.</div>
						</div>
						<div class="landing-what-bitcoin-point-row">
							<div class="landing-what-bitcoin-point-icon"></div>
							<div class="landing-what-bitcoin-point-text">You can set up a bitcoin address in seconds with no fees.</div>
						</div>
						<div class="landing-what-bitcoin-point-row">
							<div class="landing-what-bitcoin-point-icon"></div>
							<div class="landing-what-bitcoin-point-text">Transaction fees are miniscule; at SynergySports, we never charge for withdrawals.</div>
						</div>
						<div class="landing-what-bitcoin-point-row">
							<div class="landing-what-bitcoin-point-icon"></div>
							<div class="landing-what-bitcoin-point-text">It’s fast! You can deposit funds with us with 0 confirmations, and have your bet placed in seconds.</div>
						</div>
						<div class="landing-what-bitcoin-point-row">
							<div class="landing-what-bitcoin-point-icon"></div>
							<div class="landing-what-bitcoin-point-text">It’s anonymous! No personal information will be attached to your bitcoin address, and you can hold an anonymous account at SynergySports.</div>
						</div>
					</div>

					<div id="landing-buy-bitcoin-text-small">Are you ready to buy bitcoins? Check out <a href="http://howtobuybitcoins.info/" target="_blank" class="landing-buy-bitcoins-link">how to buy bitcoins in your country</a>, and place your bets today at SynergySports.</div>
				</div>
				<!--<div id="landing-stripe5SynergySports			</div>-->
				<div id="landing-stripe6">
					<div>
						<div class="landing-white-heading">New to sports betting?</div>
						<div class="landing-white-text">Check out our introduction to understanding spreads, money lines, and totals. Learn how to read American and decimal odds! If you have any questions, please submit a support ticket, or catch one of our awesome support staff in the chat.</div>
						<a href="#" target="_blank" id="new-betting-button">Learn to bet now!</a>

					</div>
				</div>
			</div>
		</div>
		<!-- END LANDING PAGE