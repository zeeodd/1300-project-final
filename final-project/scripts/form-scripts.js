$(document).ready(function() {

  $('#switch-button').click(function() {

    if( $('#form-header').text() == 'Book Us!' ) {
      // Switch to Contact Us! form
      $('#form-header').text('Contact Us!')
      $('#date-label').hide()
      $('#event-date').hide()
      $('#event-date').removeAttr('required')
      $('#range-label').hide()
      $('#time-range-id').hide()
      $('#output-id').hide()
      $('#form-label-unique').text('Message:')
      $('#email-label').css('padding-bottom', '20px')
      $('#notes').attr('placeholder', 'What\'s on your mind?')
      $('#form').css('height', '295px')

    } else {
      // Switch back to Book Us! form
      $('#form-header').text('Book Us!')
      $('#date-label').show()
      $('#event-date').show()
      $('#event-date').prop('required', true)
      $('#range-label').show()
      $('#time-range-id').show()
      $('#output-id').show()
      $('#form-label-unique').text('Event Details:')
      $('#email-label').css('padding-bottom', '0px')
      $('#notes').attr('placeholder', 'Let us know more about the event!')
      $('#form').css('height', '395px')
    }
  })
})
