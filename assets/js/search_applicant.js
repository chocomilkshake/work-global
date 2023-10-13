$(document).ready(function () {
    // Attach an event listener to the input field
    $('#search-applicant').on('input', function () {
      // Get the input value
      const inputValue = $(this).val();
  
      // Send an AJAX request to the PHP script
      $.ajax({
        url: 'assets/process/search_applicant.php',
        type: 'POST',
        data: { query: inputValue },
        dataType: 'json', // Specify that you expect a JSON response
        success: function (response) {
          // Check if there are matching applicants
          if (response.length > 0) {
            const applicant = response[0]; // Take the first matching applicant
  
            // Populate input fields with applicant data, handling null values
            $('#applicantId').val(applicant.id || '');
            $('#firstName').val(applicant.first_name || '');
            $('#middleName').val(applicant.middle_name || '');
            $('#lastName').val(applicant.last_name || '');
            $('#birthdayDate').val(applicant.birthday || '');
            $('#phoneNumber').val(applicant.contact_number || '');
            $('#custom-input').val(applicant.position || '');
            $('#employer-input').val(applicant.employer || '');
  
            if (applicant.gender == "Male") {
              $('#maleGender').prop('checked', true);
            } else if (applicant.gender == "Female") {
              $('#femaleGender').prop('checked', true);
            } else {
              $('#otherGender').prop('checked', true);
            }
  
            $('#emailAddress').val(applicant.email_address || '');
          } else {
            // Clear input fields if no matching applicants found
            $('#firstName, #middleName, #lastName, #birthdayDate, #phoneNumber, #custom-input, #employer-input, #emailAddress').val('');
            $('#maleGender, #femaleGender, #otherGender').prop('checked', false);
          }
        },
        error: function () {
          console.error('AJAX request failed');
        },
      });
    });
  });
  