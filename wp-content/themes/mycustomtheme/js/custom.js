jQuery(document).ready(function ($) {
  $("#leadForm").on("submit", function (e) {
    e.preventDefault();

    // Gather form data
    var fd = new FormData();
    fd.append("firstName", $("#firstName").val());
    fd.append("lastName", $("#lastName").val());
    fd.append("email", $("#email").val());
    fd.append("lead_source", $("#lead_source").val());
    fd.append("salutation", $("#salutation").val());
    fd.append("dob", $("#dob").val());
    fd.append("county", $("#county").val());
    fd.append("country", $("#country").val());
    fd.append("city", $("#city").val());
    fd.append("telephone", $("#telephone").val());
    fd.append("mobile", $("#mobile").val());
    fd.append("address", $("#address").val());
    fd.append("post_code", $("#post_code").val());
    fd.append("treatment_interest", $("#treatment_interest").val());
    fd.append("opt_email", $("#opt_email").is(":checked") ? 1 : 0);
    fd.append("opt_letter", $("#opt_letter").is(":checked") ? 1 : 0);
    fd.append("opt_sms", $("#opt_sms").is(":checked") ? 1 : 0);
    fd.append("opt_newsletter", $("#opt_newsletter").is(":checked") ? 1 : 0);
    fd.append("opt_phone", $("#opt_phone").is(":checked") ? 1 : 0);
    fd.append("redirect_link", $("#redirect_link").val());

    $.ajax({
      url: "/wordpress/wp-content/themes/mycustomtheme/proxy.php",
      method: "POST",
      data: fd,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);
        $("#formMessage").html("<p>Lead created successfully!</p>");
        window.location.href = $("#redirect_link").val();
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, status, error);
        $("#formMessage").html("<p>Error: " + xhr.responseText + "</p>");
      },
    });
  });
});
