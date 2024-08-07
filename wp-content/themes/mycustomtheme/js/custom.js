jQuery(document).ready(function ($) {
  $("#leadForm").on("submit", function (e) {
    e.preventDefault();

    var fd = new FormData();
    fd.append("api_key", "REDACTED_API_KEY");
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
    fd.append("redirect_link", $("#redirect_link"));

    $.ajax({
      url: "/wordpress/wp-content/themes/mycustomtheme/proxy.php",
      method: "POST",
      data: fd,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);
        $("#formMessage").html("<p>Lead created successfully!</p>");
        // window.location.href = $("#redirect_link").val();
      },
      error: function (xhr, status, error) {
        console.log(xhr.responseText, status, error);
        $("#formMessage").html("<p>Error: " + xhr.responseText + "</p>");
      },
    });
  });
});
