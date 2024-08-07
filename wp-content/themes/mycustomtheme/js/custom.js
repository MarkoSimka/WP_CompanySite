jQuery(document).ready(function ($) {
  $("#leadForm").on("submit", function (e) {
    e.preventDefault();

    var formData = {
      firstName: $("#firstName").val(),
      lastName: $("#lastName").val(),
      mobile: $("#mobile").val(),
      email: $("#email").val(),
      lead_source: $("#lead_source").val(),
      salutation: $("#salutation").val(),
      dob: $("#dob").val(),
      county: $("#county").val(),
      country: $("#country").val(),
      city: $("#city").val(),
      telephone: $("#telephone").val(),
      address: $("#address").val(),
      post_code: $("#post_code").val(),
      treatment_interest: $("#treatment_interest").val(),
      opt_email: $("#opt_email").is(":checked") ? 1 : 0,
      opt_letter: $("#opt_letter").is(":checked") ? 1 : 0,
      opt_sms: $("#opt_sms").is(":checked") ? 1 : 0,
      opt_newsletter: $("#opt_newsletter").is(":checked") ? 1 : 0,
      opt_phone: $("#opt_phone").is(":checked") ? 1 : 0,
      redirect_link: $("#redirect_link").val(),
    };

    $.ajax({
      url: "https://regression.pabau.me/OAuth2/leads/lead-curl.php",
      method: "POST",
      crossDomain: true,
      contentType: "application/json",
      data: JSON.stringify(formData),
      success: function (response) {
        $("#formMessage").html("<p>Lead created successfully!</p>");  
        window.location.href = $("#redirect_link").val();
      },
      error: function (xhr, status, error) {
        $("#formMessage").html("<p>Error: " + xhr.responseText + "</p>");
      },
    });
  });
});
