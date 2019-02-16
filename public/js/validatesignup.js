$(function(){
	/*
	$('button').click(function(e){
		validateForm(e);   
	});
	*/
	$('form').on('submit',function(e){
		validateForm(e);   
	});


	function validateForm(e){


		var nameReg = /^[A-Za-z]+$/;
	    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	    var name = $('#name').val();
	    var email = $('#email').val();
	    var password = $('#password').val();
	    var cpassword = $('#cpassword').val();

	    var inputVal = new Array(name, email, password, cpassword);
	    var message = new Array("name", "email address", "password");

	    $('.errors').remove();
	        if(inputVal[0] == ""){
	        	e.preventDefault();
	            $('#name').after('<span class="errors"> Please enter your ' + message[0] + '</span>');
	        } 
	        else if(!name.match(nameReg)){
	        	e.preventDefault();
	            $('#name').after('<span class="errors"> Name should be letters only </span>');
	        }

	        if(inputVal[1] == ""){
	        	e.preventDefault();
	            $('#email').after('<span class="errors"> Please enter your ' + message[1] + '</span>');
	        } 
	        else if(!email.match(emailReg)){
	        	e.preventDefault();
	            $('#email').after('<span class="errors"> Please enter a valid email address</span>');
	        }

	        if(inputVal[2] == ""){
	        	e.preventDefault();
	            $('#password').after('<span class="errors"> Please enter your ' + message[2] + '</span>');
	        }

	        if(inputVal[3] != inputVal[2]){
	        	e.preventDefault();
	            $('#cpassword').after('<span class="errors"> Please enter the same password </span>');
	        }       
		}   
	});