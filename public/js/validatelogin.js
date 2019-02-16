$(document).ready(function(){
$('form').submit(function(e){
    validateForm(e);   
});
function validateForm(e){

    var email = $('#email').val();
    var password = $('#password').val();

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    

    $('.errors').remove();
    	if(email == ""){
    		e.preventDefault();
            $('#email').after('<span class="errors"> Please enter your email</span>');
    	}
        else if(!email.match(emailReg)){
        	e.preventDefault();
            $('#email').after('<span class="errors"> Please enter a valid email address</span>');
        }

        if(password == ""){
        	e.preventDefault();
            $('#password').after('<span class="errors"> Please enter your password</span>');
        } 
}      
});