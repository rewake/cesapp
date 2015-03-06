// CES Test Application - General/Main JS

// New User Button Handler
$('#new_user').click(function(){
    $('#new_user_form_container').css('visibility','visible').hide().fadeIn().removeClass('hidden');
    $('#name_full').focus();
});

// Validate form
$('#new_user_form').validate({
    rules: {
        dob: {required: true},
        email: {
            required: true,
            email: true
        }
    },

    messages: {
        dob: "Birthday is required",
        email: "Valid email address is required"
    },

    submitHandler: function(form){

        var postData = $(form).serializeArray();
        var formURL = $(form).attr("action");

        $.ajax({
            url : formURL,
            type: "POST",
            data : postData,
            success : function(data, textStatus, jqXHR)
            {
                if (!data.match(/^\d+$/))
                {
                    alert(data);
                    $('#name_full').focus();
                    return;
                }

                // hide form
                $('#new_user_form_container').css('visibility','visible').hide().fadeIn().addClass('hidden');

                // show success message
                $('#success').css('visibility','visible').hide().fadeIn().removeClass('hidden').delay(2000).fadeOut();

                // Format date
                var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                d = new Date($('#dob').val());
                ubDate = days[d.getDay()] + ", " + months[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();

                // Add row to table
                $('#user_list').find('tbody').append(
                    '<tr id="user_' + data + '" class="hidden">' +
                        '<td>' + $('#name_full').val() + '</td>' +
                        '<td>' + ubDate + '</td>' +
                        '<td>' + $('#email').val() + '</td>' +
                        '<td>' + $('#fav_color').val() + '</td>' +
                        '<td><button type="submit" class="btn btn-sm btn-danger pull-right delete_user" id="' + data + '">Delete</button></td>' +
                    '</tr>'
                );

                $('#user_'+data).css('background', '#bceeca').css('visibility','visible').hide().delay(300).fadeIn().removeClass('hidden').fadeIn().delay(2500).animate({backgroundColor: 'none'}, 500);

                resetForm();
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                // hide form
                $('#new_user_form_container').css('visibility','visible').hide().fadeIn().addClass('hidden');
                resetForm();

                // show error message
                $('#error').css('visibility','visible').hide().fadeIn().removeClass('hidden').delay(2000).fadeOut();
            }
        });
        return false;
    }
});

// Delete User Button Handler
$(document).on('click', '.delete_user', function(e){
    $.ajax("/ajax/users/delete/"+e.target.id)
        .done(function(){
            $('#user_' + e.target.id).css('background', '#efc6c6').fadeIn().delay(300).fadeOut();
        })
        .fail(function(){
            alert( "Could not remove user. Please contact an Administrator." );
        });
});

// Date Picker
$(function() {
	$(".datepicker").datepicker({
		changeMonth: true,
		changeYear: true,
        yearRange: '1910:2015',
        defaultDate: 0,
        dateFormat: 'yy-mm-dd'
	});
});

function resetForm(){
    $('#name_full').val('');
    $('#dob').val('');
    $('#email').val('');
    $('#fav_color').val('');
}