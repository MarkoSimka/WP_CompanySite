jQuery(document).ready(function ($) {
  $("#leadForm").on("submit", function (e) {
    e.preventDefault();

    var formData = {
      firstName: $("#firstName").val(),
      lastName: $("#lastName").val(),
      email: $("#email").val(),
      lead_source: $("#lead_source").val(),
      salutation: $("#salutation").val(),
      dob: $("#dob").val(),
      county: $("#county").val(),
      country: $("#country").val(),
      city: $("#city").val(),
      telephone: $("#telephone").val(),
      mobile: $("#mobile").val(),
      address: $("#address").val(),
      post_code: $("#post_code").val(),
      treatment_interest: $("#treatment_interest").val(),
      opt_email: $("#opt_email").is(":checked") ? 1 : 0,
      apiKey: "REDACTED_API_KEY",
    };

    $.ajax({
      url: "https://regression.pabau.me/api/leads",
      method: "POST",
      contentType: "application/json",
      data: JSON.stringify(formData),
      success: function (response) {
        $("#formMessage").html("<p>Lead created successfully!</p>");
      },
      error: function (xhr, status, error) {
        $("#formMessage").html("<p>Error: " + xhr.responseText + "</p>");
      },
    });
  });
});
