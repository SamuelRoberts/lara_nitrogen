<!-- BEGIN CASHIER PAGE -->
<div id="page-cashier" class="page-pane">
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<h3 class="page-title page-title-dark">
					Cashier <small></small>
				</h3>
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span6">
				<div class="event">
					<div class="event-header row-fluid">
						<div class="span12">
							<div class="event-participants span8">Balance</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="event-content">
							<div class="row-fluid event-row">
								<div id="cashier-balance-label">Current balance:</div>
								<div>
									<div id="arrow-loader"></div>
									<div id="cashier-balance-value"><!--21.03110--></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="cashier-deposit" class="chocolate-outer">
					<div class="chocolate-header">Deposit Bitcoins</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">Fund your SynergySports account using the following bitcoin address:</div>
						<div id="cashier-deposit-address" class="margin-bottom-10">Click below to create a Bitcoin address</div>
						<div id="cashier-new-address-errors" class="errors-container margin-bottom-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div>
						<div class="chocolate-button-group">
							<div id="cashier-new-address-button" class="chocolate-button margin-bottom-10"><i class="icon-bolt"></i> New Address</div>
							<div class="chocolate-loader"></div>
						</div>
						<div class="chocolate-note"><span class="chocolate-label-info">Note</span> Deposits are <strong>instant</strong>, and should appear in a few moments! No need to refresh the page!</div>
					</div>
				</div>

				<div id="cashier-withdraw" class="chocolate-outer">
					<div class="chocolate-header">Withdraw Bitcoins</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">Withdraw your bitcoins at any time:</div>

						<div id="cashier-withdraw-amount-group" class="chocolate-input-group margin-bottom-10">
							<i class="icon-btc"></i>
							<input id="cashier-withdraw-amount-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="0.00000">
						</div>

						<div id="cashier-withdraw-address-group" class="chocolate-input-group margin-bottom-10">
							<i class="icon-envelope"></i>
							<input id="cashier-withdraw-address-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Bitcoin Address">
						</div>

						<div id="cashier-withdraw-password-group" class="chocolate-input-group margin-bottom-10  cashier-auth-fields">
							<i class="icon-lock"></i>
							<input id="cashier-withdraw-password-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="cashier-withdraw-otp-group" class="chocolate-input-group  cashier-auth-fields">
							<i class="icon-lock"></i>
							<input id="cashier-withdraw-otp-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password">
						</div>

						<div id="cashier-withdraw-errors" class="errors-container margin-bottom-10 margin-top-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div>
						<div class="chocolate-button-group">
							<div id="cashier-withdraw-button" class="chocolate-button margin-bottom-10"><i class="icon-signout"></i> Withdraw</div>
							<div class="chocolate-loader"></div>
						</div>
						<div class="chocolate-note margin-bottom-10"><span class="chocolate-label-info">Note</span> In order to withdraw, all deposits less than 1.0 BTC must have at least 1 confirmation, between 1.0 and 10.0 BTC will require 2 confirmations, between 10.0 and 50.0 BTC will require 4 confirmations and any deposits over 50.0 BTC will require 6 confirmations.</div>
						<div class="chocolate-note"><span class="chocolate-label-warning">Warning</span> Ensure that your bitcoin address is correct, as this cannot be undone!</div>
						<div class="chocolate-note">
							<span class="chocolate-label-warning">Warning</span> Coins are sent from an address that you do not have control over and that is DIFFERENT than your deposit address. Do not withdraw from SynergySports to services that expect coins to be sent back to the same address (for example: do NOT withdraw to satoshi dice)
						</div>
					</div>
				</div>

				<div id="cashier-transfer" class="chocolate-outer">
					<div class="chocolate-header">Transfer Bitcoins</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">Have a friend who needs bitcoins? Send funds immediately:</div>

						<div id="cashier-transfer-amount-group" class="chocolate-input-group margin-bottom-10">
							<i class="icon-btc"></i>
							<input id="cashier-transfer-amount-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="0.00000">
						</div>

						<div id="cashier-transfer-userid-group" class="chocolate-input-group margin-bottom-10">
							<i class="icon-user"></i>
							<input id="cashier-transfer-userid-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="User # (ie. 99)">
						</div>

						<div id="cashier-transfer-password-group" class="chocolate-input-group margin-bottom-10  cashier-auth-fields">
							<i class="icon-lock"></i>
							<input id="cashier-transfer-password-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="cashier-transfer-otp-group" class="chocolate-input-group margin-bottom-10  cashier-auth-fields">
							<i class="icon-lock"></i>
							<input id="cashier-transfer-otp-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password">
						</div>

						<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div>

						<div class="chocolate-button-group">
							<div id="cashier-transfer-button" class="chocolate-button margin-bottom-10"><i class="icon-random"></i> Transfer</div>
							<div class="chocolate-loader"></div>
						</div>

						<div class="chocolate-note margin-bottom-10"><span class="chocolate-label-info">Note</span> In order to transfer, all deposits less than 1.0 BTC must have at least 1 confirmation, between 1.0 and 10.0 BTC will require 2 confirmations, between 10.0 and 50.0 BTC will require 4 confirmations and any deposits over 50.0 BTC will require 6 confirmations.</div>

						<div class="chocolate-note"><span class="chocolate-label-warning">Warning</span> Please look over all fields before transferring, as transfers cannot be undone!</div>
					</div>
				</div>
			</div>
			<div class="span6">
				<h4>Recent Cashier Transactions</h4>

				<div class="row-fluid">
					<div class="span12">
						<table id="cashier-transactions-table" class="table table-striped table-hover margin-bottom-15">
							<thead>
								<tr>
									<th>Date</th>
									<th>Type</th>
									<th>Amount</th>
									<th class="hidden-480">Reference</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>

						<div class="table-loader"></div>
						<div class="table-no-rows">No Recent Transactions</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
	<!-- END PAGE CONTAINER-->
</div>
			<!-- END CASHIER PAGE -->