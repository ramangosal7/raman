$(function(){
/*
	$( "#login-btn" ).on('click',(function( event ) {
	  var formData = {
            'user'          : $('input[name=user]').val(),
            'pass'          : $('input[name=pass]').val()
        };
         // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'auth.php', // the url where we want to POST
            data        : formData, // our data object // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                // here we will handle errors and validation messages
                 if ( ! data.success && 1==2) {
                    
                    // handle errors for name ---------------
                    if (data.errors.fullname) {
                        $('#fullname-group').addClass('has-error'); // add the error class to show red input
                        $('#fullname-group').append('<div class="help-block">' + data.errors.fullname + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.nickname) {
                        $('#nickname-group').addClass('has-error'); // add the error class to show red input
                        $('#nickname-group').append('<div class="help-block">' + data.errors.nickname + '</div>'); // add the actual error message under our input
                    }

                    if (data.errors.email) {
                        $('#email-group').addClass('has-error'); // add the error class to show red input
                        $('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.password) {
                        $('#password-group').addClass('has-error'); // add the error class to show red input
                        $('#password-group').append('<div class="help-block">' + data.errors.password + '</div>'); // add the actual error message under our input
                    }

                    if (data.errors.confirmpassword) {
                        $('#confirmpassword-group').addClass('has-error'); // add the error class to show red input
                        $('#confirmpassword-group').append('<div class="help-block">' + data.errors.confirmpassword + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.terms) {
                        $('#terms-group').addClass('has-error'); // add the error class to show red input
                        $('#terms-group').append('<div class="help-block">' + data.errors.terms + '</div>'); // add the actual error message under our input
                    }

                }  else if(1==3){
                	
                    // ALL GOOD! just show the success message!
                    $('form').append('<div class="alert alert-success">' + data.message + '</div>');

                    // usually after form submission, you'll want to redirect
                    // window.location = '/thank-you'; // redirect a user to another page
                    alert('success'); // for now we'll just alert the user

                }
                $("#main-id").html("");
                $("#main-id").html(data);
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
	}));
*/
});

function loadform()
	{
		$.ajax({
			url: 'login_form.php'
		})
		.done(function(data) {
			$("#main-id").html('');
			$("#main-id").html(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}	