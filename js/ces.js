// CES Test Application - General/Main JS
$(document).ready(function(){

    // New User Button Handler
    $('#new_user').click(function(){
		$('#new_user_form').css('visibility','visible').hide().fadeIn().removeClass('hidden');
    });
    
    // Add User Button Handler
    $('#add_user').click(function(){
		alert("New User will be created, but this will be handled with AJAX when finished.");
    });
    
    // Delete User Button Handler
    $('#delete_user').click(function(){
		alert("Delete User Button Clicked (TODO)");
    });
    
});

// Date Picker
/*
$(function() {
	$("#datepicker").datepicker({
		changeMonth: true,
		changeYear: true
	});
});
*/