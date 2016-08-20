<!-- BEGIN HEADER -->
		
			<div class="header navbar navbar-inverse navbar-fixed-top navbar-custom">
				<!-- BEGIN TOP NAVIGATION BAR -->
				<div class="navbar-inner navbar-custom">
					<div class="container-fluid navbar-custom">
						<!-- BEGIN LOGO -->
						<a href="/" class="brand">
							<img src="images/landing-logo-small.png" alt="SynergySports logo"/>
						</a>
						<!-- END LOGO -->
						<!-- BEGIN RESPONSIVE MENU TOGGLER -->
						<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
							<img src="/assets/img/menu-toggler.png" alt="menu toggle"/>
						</a>
						<!-- END RESPONSIVE MENU TOGGLER -->
						<!-- BEGIN TOP NAVIGATION MENU -->
						<ul class="nav pull-right">
							<li id="nav-item-gold-football" data-placement="bottom" title="Survivor Pool"></li>
							<li id="nav-item-soccer-promo" data-placement="bottom" title="10x Challenge"></li>
							<li id="nav-item-ticker">
								<div id="nav-item-ticker-btc"><i class="icon-btc"></i></div>
								<div>
									<div class="counter-wrapper">
										<ul class="flip-counter small" id="myCounter">
											<li class="digit" id="myCounter-digit-a0">
												<div class="line"></div><span class="front">0</span>
												<span class="back">0</span>
												<div class="hinge-wrap">
													<div class="hinge">
														<span class="front">0</span>
														<span class="back">0</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</li>
						<!-- <li id="nav-address-and-loader">
							<li id="nav-address"></li>
							<div class="dark-loader"></div>
						</li> -->
						<li style="cursor: pointer;" title="" data-original-title="" id="nav-address">Click here to create a Bitcoin address</li>
						<li id="nav-balance" class="nav-item-custom-text"><i class="icon-btc"></i><span id="nav-balance-value">0.00000000</span></li>
						<li id="nav-inplay" class="nav-item-custom-text"><span>(</span><i class="icon-btc"></i><span id="nav-inplay-value">0.00000</span><span> In Play)</span></li>
						<li id="nav-transaction-refresh" data-placement="bottom" title="Refresh Balance & Transactions" class="nav-item-custom-text"><i class="icon-refresh"></i></li>
						<li id="user-dropdown" class="dropdown user">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="bitcoin avatar" src="images/bitcoin_avatar_small.png"/>
								<span id="top_header" class="username">@if(Auth::user())satoshi[{{ Auth::user()->user_id }}] @elseif(Cookie::get('user_id')!=null  && !empty(Cookie::get('user_id')))satoshi[{{ Cookie::get('user_id') }}]@endif</span>
								<i class="icon-angle-down"></i> </a>
								<ul class="dropdown-menu">
									<li id="user-dropdown-account"><a href="#"><i class="icon-user"></i> My Account</a></li>
									<li id="user-dropdown-settings"><a href="#"><i class="icon-cogs"></i> Settings</a></li>
									<li id="user-dropdown-cashier"><a href="#"><i class="icon-btc"></i> Cashier</a></li>
									<li class="divider"></li>
									<li id="user-dropdown-changeuser"><a href="#"><i class="icon-user"></i> Change User</a></li>
									<li><a href="#" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
									<li id="user-dropdown-logout"><a href="#"><i class="icon-key"></i> Log Out</a></li>
								</ul>
							</li>
							<!-- END USER LOGIN DROPDOWN -->
						</ul>
						<!-- END TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- END TOP NAVIGATION BAR -->
			</div>
			<!-- END HEADER -->