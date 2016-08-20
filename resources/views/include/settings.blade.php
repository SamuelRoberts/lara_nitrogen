<!-- BEGIN SETTINGS PAGE -->
			<div id="page-settings" class="page-pane">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">
							<h3 class="page-title page-title-dark">
								Settings <small></small>
							</h3>
						</div>
					</div>
					<!-- BEGIN PAGE CONTENT-->

					<div class="row-fluid">
						<div class="span6">
							<div class="margin-bottom-20"><span class="chocolate-label-info">Note</span> All settings are saved automatically, no need to save.</div>

							<div id="settings-email" class="chocolate-outer">
								<div class="chocolate-header">Email Settings</div>
								<div class="chocolate-content">
									<div class="margin-bottom-10">Setting an email address allows us to contact you for support reasons:</div>

									<div id="settings-email-group" class="chocolate-input-group margin-bottom-10">
										<i class="icon-envelope"></i>
										<input id="settings-email-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Email Address">
									</div>

									<div class="toggle-group clearfix">
										<div id="settings-email-placed-switch" class="switch has-switch pull-left" data-on="info" data-off="default">
											<input type="checkbox" class="toggle">
										</div>
										<div class="toggle-label pull-left">
											Bet Placed Emails
										</div>
									</div>

									<div class="toggle-group clearfix">
										<div id="settings-email-cashier-switch" class="switch has-switch pull-left" data-on="info" data-off="default">
											<input type="checkbox" class="toggle">
										</div>
										<div class="toggle-label pull-left">
											Cashier Emails
										</div>
									</div>

									<div class="chocolate-note">
										<span class="chocolate-label-info">Note</span> Emails may be flagged as spam by your email provider, please check your spam folder to ensure messages are not being filtered.
									</div>
								</div>
							</div>

							<div id="settings-chat" class="chocolate-outer">
								<div class="chocolate-header">Chat Settings</div>
								<div class="chocolate-content">
									<div class="margin-bottom-10">You will be known in chat as:</div>

									<div id="settings-chat-group" class="chocolate-input-group margin-bottom-10">
										<i class="icon-user"></i>
										<input id="settings-chat-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Chat Handle">
									</div>

									<div class="margin-bottom-10">Ignore these users in chat:</div>

									<div id="settings-chat-group" class="chocolate-input-group margin-bottom-20">
										<i class="icon-user"></i>
										<input id="settings-chat-ignore-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Comma Separated User #s">
									</div>

									<div class="margin-bottom-20"><span class="chocolate-label-info">Note</span> Enter a list of comma separated user numbers. For example: "98,99".</div>
								</div>
							</div>

							<div id="settings-odds" class="chocolate-outer">
								<div class="chocolate-header">Odds Format</div>
								<div class="chocolate-content">
									<div class="margin-bottom-10">Choose your prefered odds format:</div>

									<div id="settings-chat-group" class="margin-bottom-10">
										<select id="settings-odds-select" class="selectboxit-apply">
											<option value="decimal_american">Both (1.5 / -150)</option>
											<option value="decimal">Decimal (1.5)</option>
											<option value="american">American (-150)</option>
										</select>
									</div>
								</div>
							</div>

							<div id="settings-promos" class="chocolate-outer">
								<div class="chocolate-header">Promotion Privacy Settings</div>
								<div class="chocolate-content">

									<div class="toggle-group clearfix">
										<div id="settings-parlay-promo-switch" class="switch has-switch pull-left" data-on-label="YES" data-off-label="NO" data-on="info" data-off="default">
											<input type="checkbox" class="toggle">
										</div>
										<div class="toggle-label pull-left">
											Hide Betslip on Parlay Promotion Page
										</div>
									</div>
								</div>
							</div>
							<div id="settings-sport-messages" class="chocolate-outer">
								<div class="chocolate-header">Rule Reminders</div>
								<div class="chocolate-content">
									<div class="margin-bottom-10">Control whether or not sport-specific rule reminders are displayed when you select a league in the sportsbook.</div>
									<div class="toggle-group clearfix">
										<div id="settings-sport-messages-switch" class="switch has-switch pull-left" data-on-label="YES" data-off-label="NO" data-on="info" data-off="default">
											<input type="checkbox" class="toggle">
										</div>
										<div class="toggle-label pull-left">
											Show rule reminders in Sportsbook
										</div>
									</div></br>
									<div class="chocolate-note">
										<span class="chocolate-label-warning">Warning</span>
										These messages are shown to remind you of unique rules for the sports you're betting on - they are not inclusive of all of the rules that apply to your bets. Please ensure that you've read and understood all sportsbook rules. Please feel free to contact us with any questions!
									</div>
								</div>
							</div>
						</div>

						<div class="span6">
							<div id="new-exclusion-widget" class="chocolate-outer">
								<div class="chocolate-header">Self Exclusion</div>
								<div class="chocolate-content">
									<div class="margin-bottom-10">Choose the game you want to exclude yourself from:</div>

									<div id="settings-exclusion-game-group" class="margin-bottom-10">
										<select id="exclusion-game" class="selectboxit-apply">
											<option value="">Select Game</option>
											<option value="sportsbook">Sportsbook</option>
											<option value="poker">Poker</option>
											<option value="blackjack">Blackjack</option>
											<option value="dice">Dice</option>
										</select>
									</div>

									<div class="margin-bottom-10">Choose the time period:</div>

									<div id="settings-exclusion-time-period-group" class="margin-bottom-10">
										<select id="exclusion-time-period" class="selectboxit-apply">
											<option value="">Select Time Period</option>
											<option value="10_minutes">10 minutes</option>
											<option value="30_minutes">30 minutes</option>
											<option value="1_hour">1 hour</option>
											<option value="4_hours">4 hours</option>
											<option value="12_hours">12 hours</option>
											<option value="24_hours">24 hours</option>
											<option value="2_days">2 days</option>
											<option value="3_days">3 days</option>
											<option value="1_week">1 week</option>
											<option value="2_weeks">2 weeks</option>
											<option value="1_month">1 month</option>
											<option value="3_months">3 months</option>
											<option value="6_months">6 months</option>
											<option value="1_year">1 year</option>
											<option value="Forever">Forever</option>
										</select>
									</div>

									<div id="cashier-transfer-userid-group" class="chocolate-input-group margin-bottom-10">
										<i class="icon-lock"></i>
										<input id="exclusion-password" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
									</div>

									<div id="cashier-transfer-userid-group" class="chocolate-input-group margin-bottom-10">
										<i class="icon-lock"></i>
										<input id="exclusion-password-otp" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password (optional)">
									</div>

									<div id="exclusion-widget-errors" class="errors-container margin-top-10 margin-bottom-10">
										<div class="chocolate-error"><strong>Oops!</strong> Error text</div>
									</div>

									<div class="chocolate-button-group">
										<div id="new-exclusion-button" class="chocolate-button margin-bottom-10">Create Exclusion</div>
										<div class="chocolate-loader"></div>
									</div>

									<div class="chocolate-note">
										<span class="chocolate-label-warning">Warning</span> Use this form to exclude yourself from any of our products. We take self-exclusion VERY seriously. This action can not be undone. The support team does NOT have access to undo this, and we will never reverse or undo a self-exclusion. Self-exclusions must be waited out to their full length and "Forever" exclusions are permanent and will never be removed.
									</div>

								</div>
							</div>

							<table id="exclusion-table" class="table table-striped table-hover margin-bottom-15">
								<thead>
									<tr>
										<th>Date</th>
										<th>Game</th>
										<th>Time Period</th>
										<th>Expires At</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>

							<div class="table-loader"></div>
							<div id="exclusion-empty-table" class="table-no-rows">No Active Exclusions</div>
						</div>

						<div class="span4"></div>
					</div>
					<!-- END PAGE CONTENT-->
				</div>
				<!-- END PAGE CONTAINER-->
			</div>
			<!-- END SETTINGS PAGE -->