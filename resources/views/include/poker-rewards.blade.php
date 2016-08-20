<!-- BEGIN POKER REWARDS PAGE -->
<div id="page-poker-rake" class="page-pane">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="page-title page-title-dark">
					Poker Rewards<small> </small>
				</h3>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span6">
				<div id="poker-current-reward-level" class="chocolate-outer">
					<div class="chocolate-header">Current Reward Level</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">This is your current reward level:</div>
						<div id="poker-current-status">
							<div id="poker-current-status-icon"></div>
							<div id="poker-current-status-info">
								<div id="poker-status-status"></div>
								<div id="poker-status-mult"></div>
								<div id="poker-status-line">There are five levels of Synergy Rewards. The more you play, the higher you’ll climb! You’ll earn Nitro at a different multiplier depending on which level you’ve reached. Exchange your Nitro at the Rewards Store for bitcoin or free bets!</div>
							</div>
						</div>
					</div>
				</div>

				<div id="poker-current-reward-level" class="chocolate-outer">
					<div class="chocolate-header">This Month's Loyalty Progress</div>
					<div class="chocolate-content">
						<div class="margin-bottom-20">Loyalty Points determine your Synergy Rewards level for the following month. The more Loyalty Points you accumulate, the higher level you’ll have! You can earn points by playing poker for bitcoin. Loyalty Points reset on the first day of each calendar month.</div>

						<div>
							<div id="poker-goal-bronze" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Bronze</span>
									<span class="poker-goal-mult">1.0x Nitro</span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-bronze"></div>
							</div>
							<div id="poker-goal-silver" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Silver</span>
									<span class="poker-goal-mult">1.0x Nitro</span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-silver"></div>
							</div>
							<div id="poker-goal-gold" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Gold</span>
									<span class="poker-goal-mult">1.5x Nitro</span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-gold"></div>
							</div>
							<div id="poker-goal-platinum" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Platinum</span>
									<span class="poker-goal-mult">2.0x Nitro</span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-platinum"></div>
							</div>
							<div id="poker-goal-diamond" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Diamond</span>
									<span class="poker-goal-mult">2.5x Nitro</span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-diamond"></div>
							</div>
							<div id="poker-goal-blank" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Coming Soon!</span>
									<span class="poker-goal-mult"></span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-blank"></div>
							</div>
							<div id="poker-goal-blank" class="poker-goal-new">
								<div class="poker-goal-desc">
									<span class="poker-goal-level">Coming Soon!</span>
									<span class="poker-goal-mult"></span>
									<span class="poker-goal-prog"></span>
								</div>
								<div class="poker-rewards-meter">
									<div class="poker-rewards-meter-inner"></div>
								</div>
								<div class="poker-goal-icon-new poker-goal-icon-blank"></div>
							</div>
						</div>
					</div>
				</div>

				<div id="poker-store" class="chocolate-outer">
					<div class="chocolate-header">Nitro Store</div>
					<div class="chocolate-content">
						<div class="margin-bottom-20">Spend your Nitro to buy cool stuff, like bitcoin, or free bets!</div>
						<div id="poker-store-items"></div>
						<div class="chocolate-note poker-rewards-note margin-bottom-20 margin-top-20"><span class="chocolate-label-info">Note</span>
							A "free bet" grants the user ONE (1) free bet up to the risk amount listed (including parlays). Your balance will not be affected by placing a free bet. If this bet wins, the "to win" amount will be credited to your account. If the bet loses your account balance will not change. This free bet will show up as 0.00 BTC stake on your My Wagers page. <strong>You do not receive back the "risk" amount if the bet wins, as the risk amount for any free bet is 0.00.</strong>								</div>
						</div>
					</div>

				</div>
				<div class="span6">
					<div class="event">
						<div class="event-header row-fluid">
							<div class="span12">
								<div class="event-participants span8">Synergy Balance</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="event-content">
								<div class="row-fluid event-row">
									<div id="poker-nitro-balance-label">Current Synergy balance:</div>
									<div>
										<div id="poker-status-point"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>Recent Poker Rewards</h4>
					<table id="poker-recent-rewards-table" class="table table-striped table-hover margin-bottom-15">
						<thead>
							<tr>
								<th>Time</th>
								<th>Level</th>
								<th>Loyalty Points</th>
								<th>Synergy Multiplier</th>
								<th>Synergy Earned</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class="table-loader"></div>
					<div class="table-no-rows">No Recent Rewards</div>

					<h4>Synergy History</h4>
					<table id="poker-nitro-history-table" class="table table-striped table-hover margin-bottom-15">
						<thead>
							<tr>
								<th>Time</th>
								<th>Type</th>
								<th>Description</th>
								<th>Amount</th>
								<th>Balance</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class="table-loader"></div>
					<div class="table-no-rows">No Recent History</div>
				</div>
			</div>

			<!-- VR: not sure if this could be removed. Pls, remove or leave a comment why it should be kept. -->
			<!-- BEGIN PAGE CONTENT-->
				<!--<h4 class="">Poker Rewards Status</h4>
                    <div class="row-fluid">
                        <div class="span4 poker-status-box">
                      		Current Rewards Status
                            <div id="poker-status-status" class="poker-status-value"></div>
                        </div>
                        <div class="span4 poker-status-box">
                       		Current Nitro Multiplier
                            <div id="poker-status-mult" class="poker-status-value"></div> 	  
                        </div>
                        <div class="span4 poker-status-box">
                        	Current Nitro Points
                            <div id="poker-status-point" class="poker-status-value"></div>	  
                        </div>
                    </div>
                    
                    <div class="row-fluid">
                        <div class="span12">
                            <div id="poker-progress-bars" class="row-fluid">
                            	<div id="poker-goal-bronze" class="poker-goal">
                                	<div class="poker-goal-title">Bronze</div>
                                    <div class="poker-goal-circle">
                                    	<div class="poker-goal-trophy"></div>
                                        <div class="poker-goal-numbers">33/100</div>
									</div>
                                    <div class="poker-rewards-meter"><div class="poker-rewards-meter-inner"></div></div>
                                    <div class="poker-rewards-mult-text">1.0x Nitro</div>
                                </div>
                                <div class="poker-goal-spacer"></div>
                                <div id="poker-goal-chrome" class="poker-goal">
                                	<div class="poker-goal-title">Chrome</div>
                                    <div class="poker-goal-circle">
                                    	<div class="poker-goal-trophy"></div>
                                        <div class="poker-goal-numbers">33/100</div>	
                                   	</div>
                                    <div class="poker-rewards-meter"><div class="poker-rewards-meter-inner"></div></div>
                                    <div class="poker-rewards-mult-text">1.0x Nitro</div>
                                </div>
                                <div class="poker-goal-spacer"></div>
                                <div id="poker-goal-silver" class="poker-goal">
                                	<div class="poker-goal-title">Silver</div>
                                    <div class="poker-goal-circle">
                                    	<div class="poker-goal-trophy"></div>
                                        <div class="poker-goal-numbers">33/100</div>
									</div>
                                    <div class="poker-rewards-meter"><div class="poker-rewards-meter-inner"></div></div>
                                    <div class="poker-rewards-mult-text">1.5x Nitro</div>
                                </div>
                                <div class="poker-goal-spacer"></div>
                                <div id="poker-goal-gold" class="poker-goal">
                                	<div class="poker-goal-title">Gold</div>
                                    <div class="poker-goal-circle">
                                    	<div class="poker-goal-trophy"></div>
                                        <div class="poker-goal-numbers">33/100</div>
									</div>
                                    <div class="poker-rewards-meter"><div class="poker-rewards-meter-inner"></div></div>
                                    <div class="poker-rewards-mult-text">2.0x Nitro</div>
                                </div>
                                <div class="poker-goal-spacer"></div>
                                <div id="poker-goal-platinum" class="poker-goal">
                                	<div class="poker-goal-title">Platinum</div>
                                    <div class="poker-goal-circle">
                                    	<div class="poker-goal-trophy"></div>
                                        <div class="poker-goal-numbers">1599/1640</div>
									</div>
                                    <div class="poker-rewards-meter"><div class="poker-rewards-meter-inner"></div></div>
                                    <div class="poker-rewards-mult-text">2.5x Nitro</div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <div class="row-fluid margin-top40">
                    	<div class="span6">

                    	</div>
                    	<div class="span6">
                    		<!-- VR: not sure if this could be removed. Pls, remove or leave a comment why it should be kept. -->
						<!--<h4>Poker Rewards Store</h4>
									<div id="poker-store-items">
										<div class="poker-store-item">
											<div class="poker-store-item-desc">Some item!</div>
											<div class="poker-store-item-buy-button">BUY</div>
										</div>
									</div>-->
								</div>
							</div>
							<!-- END PAGE CONTENT-->
						</div>
						<!-- END PAGE CONTAINER-->
					</div>
					<!-- END POKER REWARDS PAGE -->