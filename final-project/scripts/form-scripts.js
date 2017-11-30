var TEST_PHP_FORM = true;

$(document).ready(function() {

  // 0 = no error
  // 1 = error on Book Us
  // 2 = error on Contact Us
  // 3 = error on both
  var namermr = 0;

  $('#switch-button').click(function() {
    var f = $("#state").val()
    console.log(f)

    if( $('#form-header').text() == 'Book Us!' ) {
      // Switch to Contact Us! form
      $('#form-header').text('Contact Us!')
      $('#date-label').hide()
      $('#event-date').hide()
      $('#event-date').removeAttr('required')
      $('#date-div').hide()
      $('#time-div').hide()
      $('#form-label-unique').text('Message:')
      $('#notes').css('margin-top', '20px')
      $('#notes').attr('placeholder', 'What\'s on your mind?')
      $('#switch-button').text('Switch to "Book Us" form')
      $("#state").val("1");

      // ERRORS
      // if (namermr == 2 | namermr == 3) {
      //   $('#name-error').show()
      // } else {
      //   $('#name-error').hide()
      // }

      name_error = $('#name-error').show()
      if (name_error) {
        $('#name-error').hide()
      }

      email_error = $('#email-error').show()
      if (email_error) {
        $('#email-error').hide()
      }

      date_error = $('#date-error').show()
      if (date_error) {
        $('#date-error').hide()
      }

      time_error = $('#time-error').show()
      if (time_error) {
        $('#time-error').hide()
      }

    } else {
      // Switch back to Book Us! form
      $('#form-header').text('Book Us!')
      $('#date-label').show()
      $('#event-date').show()
      $('#event-date').prop('required', true)
      $('#date-div').show()
      $('#time-div').show()
      $('#form-label-unique').text('Event Details:')
      $('#email-label').css('padding-bottom', '0px')
      $('#notes').attr('placeholder', 'Let us know more about the event!')
      $('#switch-button').text('Switch to "Contact Us" form')
      $("#state").val("0");

      // ERRORS
      // if (namermr == 1 | namermr == 3) {
      //   $('#name-error').show()
      // } else {
      //   $('#name-error').hide()
      // }

      name_error = $('#name-error').show()
      if (name_error) {
        $('#name-error').hide()
      }

      email_error = $('#email-error').show()
      if (email_error) {
        $('#email-error').hide()
      }

      date_error = $('#date-error').show()
      if (date_error) {
        $('#date-error').hide()
      }

      time_error = $('#time-error').show()
      if (time_error) {
        $('#time-error').hide()
      }
    }
  });

  if (!TEST_PHP_FORM) {
    $("#form").on("submit", function() {

      if( $('#form-header').text() == 'Book Us!' ) {
        form_valid = true;

        var name_is_valid = $("#name").prop("validity").valid;

        var email_is_valid = $("#email").prop("validity").valid;

        var date_is_valid = $("#event-date").prop("validity").valid;

        var time_before_valid = $("#time-range-before").prop("validity").valid;
        var time_after_valid = $("#time-range-after").prop("validity").valid;

        var before_hour = $("#time-range-before").val().split(':')[0];
        var before_min = $("#time-range-before").val().split(':')[1];
        var after_hour = $("#time-range-after").val().split(':')[0];
        var after_min = $("#time-range-after").val().split(':')[1];

        var time_range_valid = true;
        var time_not_empty = true;

        // NAME VALIDATION
        if (name_is_valid) {
          $("#name-error").hide();
         } else {
          $("#name-error").show();
          form_valid = false;
          // if (namermr == 2) {
          //   namermr = 3;
          // } else {
          //   namermr = 1;
          // }
        }

        // EMAIL VALIDATION
        if (email_is_valid) {
          $("#email-error").hide();
         } else {
          $("#email-error").show();
          form_valid = false;
        }

        // DATE VALIDATION
        if (date_is_valid) {
          $("#date-error").hide();
         } else {
          $("#date-error").show();
          form_valid = false;
        }

        // TIME VALIDATION
        if (before_hour > after_hour) {
          time_range_valid = false;
        }

        if(before_hour == after_hour) {
          if (before_min >= after_min) {
            time_range_valid = false;
          }
        }

        if (time_before_valid) {
          time_not_empty = true;
        } else {
          time_not_empty = false;
        }

        if (time_after_valid) {
          time_not_empty = true;
        } else {
          time_not_empty = false;
        }

        var time_is_valid = time_not_empty && time_range_valid;

        if (time_is_valid) {
          $("#time-error").hide();
         } else {
          $("#time-error").show();
          form_valid = false;
        }

        return form_valid;
      }

      if( $('#form-header').text() == 'Contact Us!' ) {
        form_valid = true;

        var name_is_valid = $("#name").prop("validity").valid;

        var email_is_valid = $("#email").prop("validity").valid;

        // NAME VALIDATION
        if (name_is_valid) {
          $("#name-error").hide();
         } else {
          $("#name-error").show();
          form_valid = false;
          // if (namermr == 1) {
          //   namermr = 3;
          // } else {
          //   namermr = 2;
          // };
        };
      };

        // EMAIL VALIDATION
        if (email_is_valid) {
          $("#email-error").hide();
         } else {
          $("#email-error").show();
          form_valid = false;
        }

        return form_valid;
      });
    };
  });
