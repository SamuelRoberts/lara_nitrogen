<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		2016 &copy; SynergySports
	</div>
	<div class="footer-main">
		<span class="footer-link">Affiliates</span> |
		<span class="footer-link">Help</span> |
		<span class="footer-link">Media</span> |
		<span class="footer-link">Rules</span> |
		<span class="footer-link">Responsible Gaming</span>
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="icon-angle-up"></i>
		</span>
	</div>
</div>

<!-- MODALS -->

<div aria-hidden="false" id="modal-on-logout" data-backdrop="static" data-keyboard="false" class="modal fade chocolate-outer chocolate-outer-dark in" tabindex="-1" role="dialog" style="display: none;">
	<div class="chocolate-header">
		<span style="display: none;" id="modal-account-login-close" class="chocolate-error-close pull-right" data-dismiss="modal" aria-label="Close"><i class="icon-white icon-remove"></i></span>
		<div id="modal-account-login-title">Logout Successful</div>
	</div>
	<div class="chocolate-content">
		<div id="modal-account-login-text" class="margin-bottom-10">		You have successfully logged out!<br>		<br>		You can now either login to a different account, or create a new account.	</div>

		<div id="cashier-transfer-amount-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-user"></i>
			<input autocorrect="off" autocomplete="off" id="modal-on-logout-username-textbox" spellcheck="false" class="chocolate-textbox" placeholder="Username" type="text">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input autocorrect="off" autocomplete="off" id="modal-on-logout-password-textbox" spellcheck="false" class="chocolate-textbox" placeholder="Password" type="password">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input autocorrect="off" autocomplete="off" id="modal-on-logout-otp-textbox" spellcheck="false" class="chocolate-textbox" placeholder="One Time Password (optional)">
		</div>

		<div class="modal-captcha-wrap" style="display:none;">
			<div class="margin-bottom-10">
				<img id="modal-captcha" src="#" alt="CAPTCHA Image" style="height: 40px; width: 150px;">
				<a onclick="document.getElementById('modal-captcha').src = '/php/login/generate_captcha.php?' + Math.random(); return false">[ Different Image ]</a>
			</div>
			<div class="chocolate-input-group-auto margin-bottom-10">
				<i class="icon-lock"></i>
				<input autocorrect="off" autocomplete="off" id="modal-captcha-code" size="10" maxlength="6" class="chocolate-textbox" placeholder="Captcha" type="text">
			</div>
		</div>

		<!-- <div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
			<div class="chocolate-error"><strong>Oops!</strong> Error text</div>
		</div> -->

		<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
			
			<div style="display: none;" id="login-error-on-logout" class="chocolate-error">
				<strong>Oops! </strong>
				Wrong username or password
				<div class="chocolate-error-close">
					<i class="icon icon-remove"></i>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-on-logout-button" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Login</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>

			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-account-new-button" data-dismiss="modal" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Create New Account</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>
		</div>

		<div style="display: none;" id="modal-account-login-warning" class="chocolate-note"><span class="chocolate-label-warning">Warning</span> This will delete the cookies for this account, so please ensure you have saved your login link or added a username and password.</div>
	</div>
</div>
<div id="myModal1" data-backdrop="static" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
	<div>This is a sweet test.</div>
</div>

<div id="modal-notify-action" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-notify-action-message">Action complete!</div>
</div>

<div id="modal-account-login" class="modal fade chocolate-outer chocolate-outer-dark" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" style="display: none;">
	<div class="chocolate-header">
		<!-- <span id="modal-account-login-close" class="chocolate-error-close pull-right" data-dismiss="modal" aria-label="Close"><i class="icon-white icon-remove"></i></span> -->
		<div id="modal-account-login-title">Login</div>
	</div>
	<div class="chocolate-content">
		<div id="modal-account-login-text" class="margin-bottom-10">This account requires a Username and Password:</div>

		<div id="cashier-transfer-amount-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-user"></i>
			<input id="modal-account-login-username-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Username">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input id="modal-account-login-password-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input id="modal-account-login-otp-textbox" spellcheck="false" class="chocolate-textbox" placeholder="One Time Password (optional)">
		</div>

		<div class = "modal-captcha-wrap" style="display:none;">
			<div class="margin-bottom-10">
				<img id="modal-captcha" src="#" alt="CAPTCHA Image" style = "height: 40px; width: 150px;"/>
				<a onclick="document.getElementById('modal-captcha').src = '/php/login/generate_captcha.php?' + Math.random(); return false">[ Different Image ]</a>
			</div>
			<div class="chocolate-input-group-auto margin-bottom-10">
				<i class="icon-lock"></i>
				<input type="text" id="modal-captcha-code" size="10" maxlength="6" class="chocolate-textbox" placeholder="Captcha"/>
			</div>
		</div>

		<!-- <div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
			<div id="login-error" class="chocolate-error"><strong>Oops!</strong> Error text</div>
		</div> -->

		<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
			
			<div style="display: none;" id="login-error" class="chocolate-error">
				<strong>Oops! </strong>
				Wrong username or password
				<div class="chocolate-error-close">
					<i class="icon icon-remove"></i>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-account-login-button" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Login</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>

			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-account-new-button" data-dismiss="modal" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Create New Account</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>
		</div>

		<!-- <div id="cashier-withdraw-errors" class="rrors-container margin-top-10 margin-bottom-10" style="display: none;">
			<div id="login-error" class="choecolate-error"></div>
		</div> -->
	</div>
</div>

<div id="modal-success-action" class="modal fade grassy-outer grassy-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div class="grassy-header">Success</div>
	<div class="grassy-content">
		<div id="modal-success-message" class="margin-bottom-10">Success!</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="grassy-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK!</div>
		</div>
	</div>
</div>

<!-- <div id="modal-session" class="modal fade beach-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div class="beach-header">Session Expired</div>
	<div class="beach-content">
		<div id="modal-session-message" class="margin-bottom-10">Session Expired</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="beach-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
		</div>
	</div>
</div> -->

<div id="modal-info" class="modal fade beach-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-info-title" class="beach-header">Information</div>
	<div class="beach-content">
		<div id="modal-info-message" class="margin-bottom-10">Message</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="beach-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
		</div>
	</div>
</div>

<div id="modal-error-request" class="modal fade lava-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-error-title" class="lava-header">Information</div>
	<div class="lava-content">
		<div id="modal-error-message" class="margin-bottom-10">Message</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="lava-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
		</div>
	</div>
</div>

<div id="modal-welcome" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-welcome-logo"></div>
	<div id="modal-welcome-big">
		<div id="modal-welcome-text-top" class="margin-bottom-25">Welcome to SynergySports! We're the largest and most trusted bitcoin sportsbook and casino. Before playing, please be sure you agree to the following:
			<br><br>
			<ul>
				<li>You must be over 18 to play at SynergySports</li>
				<li>Please confirm that this type of gambling is legal in your jurisdiction</li>
				<li>By playing at SynergySports you agree to all of our Terms and Conditions</li>
			</ul>
			<br>

			<div class="row-fluid">
				<div class="span7 center-in-span">
					<div id="modal-welcome-new-button" class="party-button highlightable-button" data-dismiss="modal">I Agree, Create my anonymous account</div>
				</div>
				<div class="span5 center-in-span">
					<div id="modal-welcome-login-button" class="party-button highlightable-button default-highlighted" data-dismiss="modal">Log in to existing account</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MODALS -->
<div id="myModal1" data-backdrop="static" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
	<div>This is a sweet test.</div>
</div>

<div id="modal-notify-action" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-notify-action-message">Action complete!</div>
</div>

<div id="modal-prompt-support" tabindex="-1" role="dialog" title="Support Message" style="display: none;">
	<p>Support Message</p>
</div>

<div id="modal-account-login" class="modal fade chocolate-outer chocolate-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div  class="chocolate-header">
		<span id="modal-account-login-close" class="chocolate-error-close pull-right" data-dismiss="modal" aria-label="Close"><i class="icon-white icon-remove"></i></span>
		<div id="modal-account-login-title">Login</div>
	</div>

	<div class="chocolate-content">
		<div id="modal-account-login-text" class="margin-bottom-10">This account requires a Username and Password:</div>


		<div id="cashier-transfer-amount-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-user"></i>
			<input id="modal-account-login-username-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Username">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input id="modal-account-login-password-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
		</div>

		<div id="cashier-transfer-userid-group" class="chocolate-input-group-auto margin-bottom-10">
			<i class="icon-lock"></i>
			<input id="modal-account-login-otp-textbox" spellcheck="false" class="chocolate-textbox" placeholder="One Time Password (optional)">
		</div>

		<div class = "modal-captcha-wrap" style = "display:none;">
			<div class="margin-bottom-10">
				<img id="modal-captcha" src="#" alt="CAPTCHA Image" style = "height: 40px; width: 150px;" />
				<a onclick="document.getElementById('modal-captcha').src = '/php/login/generate_captcha.php?' + Math.random(); return false">[ Different Image ]</a>
			</div>
			<div class="chocolate-input-group-auto margin-bottom-10">
				<i class="icon-lock"></i>
				<input type="text" id="modal-captcha-code" size="10" maxlength="6" class="chocolate-textbox" placeholder="Captcha"/>
			</div>
		</div>

		<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
			<div class="chocolate-error"><strong>Oops!</strong> Error text</div>
		</div>

		<div class="row-fluid">
			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-account-login-button" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Login</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>

			<div class="span6 center-in-span">
				<div class="chocolate-button-group">
					<div id="modal-account-new-button" data-dismiss="modal" class="chocolate-button-auto margin-bottom-10"><i class="icon-user"></i> Create New Account</div>
					<div class="chocolate-loader"></div>
				</div>
			</div>
		</div>


		<div id="modal-account-login-warning" class="chocolate-note"><span class="chocolate-label-warning">Warning</span> This will delete the cookies for this account, so please ensure you have saved your login link or added a username and password.
		</div> 
	</div>
</div>

<div id="modal-success-action" class="modal fade grassy-outer grassy-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div class="grassy-header">Success</div>
	<div class="grassy-content">
		<div id="modal-success-message" class="margin-bottom-10">Success!</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="grassy-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK!</div>
		</div>
	</div>
</div>

<div id="modal-session" class="modal fade beach-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div class="beach-header">Session Expired</div>
	<div class="beach-content">
		<div id="modal-session-message" class="margin-bottom-10">Session Expired</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="beach-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
		</div>
	</div>
</div>

<div id="modal-info" class="modal fade beach-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
	<div id="modal-info-title" class="beach-header">Information</div>
	<div class="beach-content">
		<div id="modal-info-message" class="margin-bottom-10">Message</div>

		<div class="chocolate-button-group">
			<div id="modal-success-button" class="beach-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
		</div>
	</div>
</div>
</div>
</div>

<!-- JavaScripts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

	<!-- <div id="modal-error" class="modal fade lava-outer beach-outer-dark" tabindex="-1" role="dialog" style="display: none;">
		<div id="modal-error-title" class="lava-header">Information</div>
		<div class="lava-content">
			<div id="modal-error-message" class="margin-bottom-10">Message</div>
	
			<div class="chocolate-button-group">
				<div id="modal-success-button" class="lava-button margin-bottom-10" data-dismiss="modal"><i class="icon-check-sign"></i> OK</div>
			</div>
		</div>
	</div> -->

	<!-- <div id="modal-welcome" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
		<div id="modal-welcome-logo"></div>
		<div id="modal-welcome-big">
			<div id="modal-welcome-text-top" class="margin-bottom-25">SynergySports is the #1 Bitcoin Sportsbook. Before playing, please be sure you agree to the following:
				<br><br>
				<ul>
					<li>You must be over 18 to play at SynergySports</li>
					<li>Please confirm that this type of gambling is legal in your jurisdiction</li>
					<li>By playing at SynergySports you agree to all of our Terms and Conditions</li>
				</ul>
				<br>

				<div id="modal-welcome-agree-button" class="party-button" data-dismiss="modal">I Agree</div>
			</div>
        <div id="modal-welcome-small">
        	<div id="modal-welcome-text-top" class="margin-bottom-25">A SynergySports account was just created for you! SynergySports allows you to fund your account via a private bitcoin address, place wagers, and cash yourself out at any time. We offer dozens of sports and leagues, parlays, teasers, a live chat room, a competative affiliate program - and more!</div>
            <div class="row-fluid">
                <div class="span12"><div id="welcome-close-button" class="party-button" data-dismiss="modal">Got It!</div></div>
            </div>
        </div>
        
    </div> -->

    <!--<ol id="joyRideTipContent">
        <li class="joytest" data-id="user-dropdown" data-options="tipLocation:left;">Chat Nickname and User ID</li>
        <li data-id="betslip-outer" data-options="tipLocation:left;">This is your betslip, add games by doing this.</li>
    </ol>-->

    <!-- END FOOTER