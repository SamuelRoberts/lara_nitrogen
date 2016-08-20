<!-- BEGIN ACCOUNT PAGE  -->
<div id="page-account" class="page-pane">
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title page-title-dark">
					Account <small></small>
				</h3>
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row-fluid">
			<div class="span12">
				<div class="event">
					<div class="event-header row-fluid">
						<div class="span12">
							<div class="event-participants span8">Access</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="event-content">
							<div class="row-fluid account-content">
								<div class="account-login-link-warning margin-bottom-15">When you first visited SynergySports an account was automatically created for you. Using cookies, we will keep you logged into this account when you are on this computer.</div>
								<div class="margin-bottom-10">To access this account from another computer, use the following link:</div>

								<div id="account-login-link-well">
									<a id="account-login-link" href="http://development.synergysports.eu/n/@if(Auth::user()){{ Auth::user()->session_link }} @elseif(Cookie::get('session_link')!=null  && !empty(Cookie::get('session_link'))){{{ Cookie::get('session_link') }}}@endif">
										<span><i class="icon-link"></i>http://development.synergysports.eu/n/@if(Auth::user()){{ Auth::user()->session_link }} @elseif(Cookie::get('session_link')!=null  && !empty(Cookie::get('session_link'))){{{ Cookie::get('session_link') }}}@endif</span>
										<span id="account-login-link-text"></span>
									</a>
									<a id="account-login-link-short">
										<span><i class="icon-link"></i></span>
										<span id="account-login-link-text-short"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="twofactorauth" class="row-fluid">
			<div  class="span4">
				@if (Auth::user())

				@if (!Auth::user()->password)

				<div id="account-add-credentials" class="chocolate-outer">
					<div class="chocolate-header">Add Username / Password</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">For added security, please add a username and password to your account:</div>

						<div id="account-add-username" class="chocolate-input-group margin-bottom-10">
							<i class="icon-user"></i>
							<input id="account-add-username-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Username">
						</div>

						<div id="account-add-password1" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-add-password1-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="account-add-password2" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-add-password2-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div>

						<div class="chocolate-button-group">
							<div id="account-add-credentials-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Add Credentials</div>
							<div class="chocolate-loader"></div>
						</div>

						<div class="chocolate-note"><span class="chocolate-label-info">Note</span> Choose a strong passphrase, up to 128 characters is supported.</div>
					</div>
				</div>
				@else
				<div id="" class="chocolate-outer">
					<div class="chocolate-header">Change Password</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">You can change your password using the following form:</div>

						<input type="hidden" id="account-user-id" name="id" value="{{ auth::user()->id }}">

						<div id="account-change-password-old" class="chocolate-input-group margin-bottom-10">
							<i class="icon-user"></i>
							<input id="account-change-password-old-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Old Password">
						</div>

						<div id="account-change-password-new1" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-change-password-new1-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="New Password">
						</div>

						<div id="account-change-password-new2" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-change-password-new2-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="New Password">
						</div>

						<!-- <div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div> -->

						<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">

							<div style="display: none;" id="error-change-pass" class="chocolate-error"><strong>Oops! </strong>Please enter your old password.<div class="chocolate-error-close"><i class="icon-remove"></i></div></div></div>

							<div class="chocolate-button-group">
								<div id="account-change-password-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Change Password</div>
								<div class="chocolate-loader"></div>
							</div>

							<div class="chocolate-note"><span class="chocolate-label-info">Note</span> Choose a strong passphrase, up to 128 characters is supported.</div>
						</div>
					</div>
					<div style="display: block;" id="account-add-2fa" class="chocolate-outer">
						<div class="chocolate-header">Add Two-Factor Authentication</div>
						<div class="chocolate-content">
							<div class="margin-bottom-10">For added security, you can enable two-factor authentication on your account. Using an app like Google Authenticator, you will be required to use a One Time Password (OTP) each time you log on, or perform other secure functions.</div>

							<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
								<div class="chocolate-error"><strong>Oops!</strong></div>
							</div>

							<div id="account-2fa-disabled">
								<div class="chocolate-button-group">
									<div id="account-2fa-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Add Two-Factor Authentication</div>
									<div class="chocolate-loader"></div>
								</div>
							</div>

							<div id="account-2fa-enabled">
								<div id="account-2fa-enabled-label" class="margin-bottom-10">Two-Factor Authentication Enabled</div>

								<div id="account-2fa-disable-otp" class="chocolate-input-group margin-bottom-10">
									<i class="icon-lock"></i>
									<input id="account-2fa-disable-otp-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password">
								</div>

								<div class="chocolate-button-group margin-bottom-15">
									<div id="account-2fa-disable-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Disable Two-Factor Authentication</div>
									<div class="chocolate-loader"></div>
								</div>
							</div>

							<div id="tfa-step2">
								<div id="tfa-text"></div>
								<div id="tfa-barcode" class="margin-bottom-10"></div>
								<div id="account-2fa-otp" class="chocolate-input-group margin-bottom-10">
									<i class="icon-lock"></i>
									<input id="account-2fa-otp-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password">
								</div>
								<div class="chocolate-button-group">
									<div id="account-2fa-confirm-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Confirm OTP</div>
									<div class="chocolate-loader"></div>
								</div>
							</div>

							<div class="chocolate-note"><span class="chocolate-label-info">Note</span> Google Authenticator is the most commonly used app. You can download it on most Android and iOS devices.</div>
						</div>
					</div>

					@endif

					@elseif(Cookie::get('password')==null)

					<div id="account-add-credentials" class="chocolate-outer">
					<div class="chocolate-header">Add Username / Password</div>
					<div class="chocolate-content">
						<div class="margin-bottom-10">For added security, please add a username and password to your account:</div>

						<div id="account-add-username" class="chocolate-input-group margin-bottom-10">
							<i class="icon-user"></i>
							<input id="account-add-username-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Username">
						</div>

						<div id="account-add-password1" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-add-password1-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="account-add-password2" class="chocolate-input-group margin-bottom-10">
							<i class="icon-lock"></i>
							<input id="account-add-password2-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
						</div>

						<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
							<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
						</div>

						<div class="chocolate-button-group">
							<div id="account-add-credentials-button" class="chocolate-button margin-bottom-10"><i class="icon-lock"></i> Add Credentials</div>
							<div class="chocolate-loader"></div>
						</div>

						<div class="chocolate-note"><span class="chocolate-label-info">Note</span> Choose a strong passphrase, up to 128 characters is supported.</div>
					</div>
				</div>
					@endif
				</div>
				<div class="span4">
					<div id="account-login" class="chocolate-outer">
						<div class="chocolate-header">Login</div>
						<div class="chocolate-content">
							<div class="margin-bottom-10">Login to a different account below:</div>

							<div id="cashier-transfer-amount-group" class="chocolate-input-group margin-bottom-10">
								<i class="icon-user"></i>
								<input id="account-login-username-textbox" spellcheck="false" class="chocolate-textbox" type="text" placeholder="Username">
							</div>

							<div id="cashier-transfer-userid-group" class="chocolate-input-group margin-bottom-10">
								<i class="icon-lock"></i>

								<input id="account-login-password-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="Password">
							</div>

							<div id="cashier-transfer-userid-group" class="chocolate-input-group margin-bottom-10">
								<i class="icon-lock"></i>
								<input id="account-login-otp-textbox" spellcheck="false" class="chocolate-textbox" type="password" placeholder="One Time Password (optional)">
							</div>

							<!-- <div class = "account-captcha-wrap" style = "display:none;">
								<div class="margin-bottom-10">
									<img id="account-captcha" src="#" alt="CAPTCHA Image" style = "height: 40px; width: 150px;"/>
									<a onclick="document.getElementById('account-captcha').src = '/php/login/generate_captcha.php?' + Math.random(); return false">[ Different Image ]</a>
								</div>
								<div class="chocolate-input-group-auto margin-bottom-10">
									<i class="icon-lock"></i>
									<input type="text" id="account-captcha-code" size="10" maxlength="6" class="chocolate-textbox" placeholder="Captcha"/>
								</div>
							</div> -->

							<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">
								<div class="chocolate-error"><strong>Oops!</strong> You can only generate 5 new addresses a day!</div>
							</div>

							<div id="cashier-withdraw-errors" class="errors-container margin-top-10 margin-bottom-10">

								<div style="display: none;" id="error-account-login" class="chocolate-error">
									<strong>Oops! </strong>
									Wrong username or password
									<div class="chocolate-error-close">
										<i class="icon icon-remove"></i>
									</div>
								</div>

							</div>

							<div class="chocolate-button-group">
								<div id="account-login-button" class="chocolate-button margin-bottom-10"><i class="icon-user"></i> Login</div>
								<div style="" id="loader" class="chocolate-loader"></div>
							</div>

							<div class="chocolate-note"><span class="chocolate-label-warning">Warning</span> This will delete the cookies for this account, so please ensure you have saved your login link or added a username and password.</div>
						</div>
					</div>
				</div>
				<div class="span4">
					<div id="account-logout" class="chocolate-outer">
						<div class="chocolate-header">Sign Out</div>
						<div class="chocolate-content">
							<div class="margin-bottom-10">Completely sign out of SynergySports:</div>

							<div class="chocolate-button-group">
								<div id="account-logout-button" class="chocolate-button margin-bottom-10"><i class="icon-off"></i> Sign Out</div>
								<div class="chocolate-loader"></div>
							</div>

							<div class="chocolate-note"><span class="chocolate-label-warning">Warning</span> This will delete the cookies for this account, so please ensure you have saved your login link or added a username and password.</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
		<!-- END PAGE CONTAINER-->
	</div>
						<!-- END ACCOUNT PAGE