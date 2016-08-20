(function($){


	var appManager = {

		init : function(){

			$('.main').on('click', '#modal-welcome-new-button', this.createAnonymousAccount);

			$('.main').on('click', '#user-dropdown-logout', this.logout);

			$('.main').on('click', '#user-dropdown-changeuser', this.changeUser);

			$('.main').on('click', '#account-logout-button', this.logout);

			$('.main').on('click', '#landing-credentials-button', this.addUsername);

			$('.main').on('click', '#account-add-credentials-button', this.addCredentials);

			$('.main').on('click', '#modal-account-login-button', this.modalLogin);

			$('.main').on('click', '#modal-on-logout-button', this.modalLoginAfterLoggedOut);

			$('.main').on('click', '#account-login-button', this.AccountLogin);

			$('.main').on('click', '#modal-welcome-login-button', this.getLoginPage);

			$('.main').on('click', '#modal-account-new-button', this.showWelcomeModal);

			$('.main').on('click', '#account-change-password-button', this.changeAccountPassword);
			
			//just checking the auto deploy process

		},

		changeAccountPassword: function(){

			$('#account-change-password-button').siblings('.chocolate-loader').show();

			var id = $('#account-user-id').val();

			var oldpass = $('#account-change-password-old-textbox').val();

			var newpass1 = $('#account-change-password-new1-textbox').val();

			var newpass2 = $('#account-change-password-new2-textbox').val();

			$.ajax({

				type : "POST",

				url  : "/change-pass",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {id: id, oldpass: oldpass, newpass1: newpass1, newpass2: newpass2}
			})
			.done(function(message){

				$('#account-change-password-button').siblings('.chocolate-loader').hide();

				currentPageUrl = window.location.href;

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');

				if(message){

					errorsHtml = '<div>'+ message + '</div>'; 

					$( '#modal-error-message' ).html( errorsHtml );

					$('#modal-error-request').modal('show');

				}else{

					successHtml = 'Password changed successfully!'; 

					$( '#modal-success-message' ).html( successHtml );

					$('#modal-success-action').modal('show');

				}
			})
			.fail(function(data){

				$('#account-change-password-button').siblings('.chocolate-loader').hide();

				var errors = data.responseJSON;

				$('#modal-error-title').text('Add Credentials');

				errorsHtml = '';

				$.each( errors, function( key, value ) {

					errorsHtml += '<div>'+ value[0] + '</div>'; 

				});


				$( '#modal-error-message' ).html( errorsHtml );

				$('#modal-error-request').modal('show');
			});

		},

		showWelcomeModal: function(){

			$('#modal-welcome').modal('show');
		},

		changeUser: function(){

			$.ajax({

				type : "GET",

				url  : "/logout",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {}
			})
			.done(function(){

			})
			.fail(function(){

				alert("error");

			});
		},

		getLoginPage: function(){

			$('#modal-account-login').modal('show');
		},

		AccountLogin: function(){

			$('#account-login-button').siblings('.chocolate-loader').show();

			$.ajax({

				type : "GET",

				url  : "/logout",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {}
			})
			.done(function(){


			})
			.fail(function(){

				alert("error");

			});

			var username = $('#account-login-username-textbox').val();

			var password = $('#account-login-password-textbox').val();

			$.ajax({

				type : "POST",

				url  : "/login",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {username : username, password : password}
			})
			.done(function(){

				currentPageUrl = window.location.href;

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');

				$('#top_header').load(currentPageUrl+' #top_header');

				$('#landing-image').load(currentPageUrl+' #landing-image');

				successHtml = 'Logged In Successfully!'; 

				$( '#modal-success-message' ).html( successHtml );

				$('#modal-success-action').modal('show');


			})
			.fail(function(response){

				if(response.status == 406) {

					$('#error-account-login').show();
					$('#account-login-button').siblings('.chocolate-loader').hide();
				}

			});

		},

		modalLoginAfterLoggedOut: function(){

			var username = $('#modal-on-logout-username-textbox').val();

			var password = $('#modal-on-logout-password-textbox').val();

			$.ajax({

				type : "POST",

				url  : "/login",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {username : username, password : password}
			})
			.done(function(){

				$('#modal-on-logout').modal('hide');

				currentPageUrl = window.location.href;

				$('#top_header').load(currentPageUrl+' #top_header');
				
				$('#landing-image').load(currentPageUrl+' #landing-image');

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');

			})
			.fail(function(response){

				if(response.status == 406) {
					$('#login-error-on-logout').show();
				}

			});

		},

		modalLogin: function(){

			var username = $('#modal-account-login-username-textbox').val();

			var password = $('#modal-account-login-password-textbox').val();

			$.ajax({

				type : "POST",

				url  : "/login",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {username : username, password : password}
			})
			.done(function(){

				$('#modal-account-login').modal('hide');

				currentPageUrl = window.location.href;

				$('#top_header').load(currentPageUrl+' #top_header');
				
				$('#landing-image').load(currentPageUrl+' #landing-image');

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');

			})
			.fail(function(response){

				if(response.status == 406) {
					$('#login-error').show();
				}

			});

		},

		addUsername: function(){

			var username = $('#landing-username-textbox').val();

			var password = $('#landing-password-textbox').val();

			var password2 = $('#landing-password2-textbox').val();

			$.ajax({

				type : "POST",

				url  : "add_username",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {username : username, password : password, password2: password2}
			})
			.done(function(){

				currentPageUrl = window.location.href;

				$('#landing-image').load(currentPageUrl+' #landing-image');

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');


			})
			.fail(function(data){

				var errors = data.responseJSON;

				$('#modal-error-title').text('Add Credentials');

				errorsHtml = '';

				$.each( errors, function( key, value ) {

					errorsHtml += '<div>'+ value[0] + '</div>'; 

				});


				$( '#modal-error-message' ).html( errorsHtml );

				$('#modal-error-request').modal('show');
			});

		},

		addCredentials: function(){

			$('#account-add-credentials-button').siblings('.chocolate-loader').show();

			var username = $('#account-add-username-textbox').val();

			var password = $('#account-add-password1-textbox').val();

			var password2 = $('#account-add-password2-textbox').val();

			$.ajax({

				type : "POST",

				url  : "add_username",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {username : username, password : password, password2: password2}
			})
			.done(function(){

				$('#account-add-credentials-button').siblings('.chocolate-loader').hide();

				currentPageUrl = window.location.href;

				$('#landing-image').load(currentPageUrl+' #landing-image');

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');


			})
			.fail(function(data){

				$('#account-add-credentials-button').siblings('.chocolate-loader').hide();

				var errors = data.responseJSON;

				$('#modal-error-title').text('Add Credentials');

				errorsHtml = '';

				$.each( errors, function( key, value ) {

					errorsHtml += '<div>'+ value[0] + '</div>'; 

				});


				$( '#modal-error-message' ).html( errorsHtml );

				$('#modal-error-request').modal('show');

			});

		},


		logout: function(){

			$('#account-logout-button').siblings('.chocolate-loader').show();

			$.ajax({

				type : "GET",

				url  : "/logout",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {}
			})
			.done(function(){

				$('#modal-on-logout').modal('show');

				$('#account-logout-button').siblings('.chocolate-loader').hide();
			})
			.fail(function(){

				alert("error");
				$('#account-logout-button').siblings('.chocolate-loader').hide();

			});

		},

		createAnonymousAccount: function(){

			$.ajax({

				type : "POST",

				url  : "register",

				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},

				data : {}
			})
			.done(function(){

				currentPageUrl = window.location.href;

				$('#top_header').load(currentPageUrl+' #top_header');

				$('#landing-image').load(currentPageUrl+' #landing-image');

				$('#twofactorauth').load(currentPageUrl+' #twofactorauth');

			})
			.fail(function(){

				alert("error");

			});

		},

	};

	$(function(){

		appManager.init();

	});


})(jQuery);