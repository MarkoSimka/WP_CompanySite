<main>
    <form id="leadForm">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="lead_source">Lead Source:</label>
        <input type="text" id="lead_source" name="lead_source">

        <label for="salutation">Salutation:</label>
        <input type="text" id="salutation" name="salutation">

        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob">

        <label for="county">County:</label>
        <input type="text" id="county" name="county">

        <label for="country">Country:</label>
        <input type="text" id="country" name="country">

        <label for="city">City:</label>
        <input type="text" id="city" name="city">

        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <label for="post_code">Postal Code:</label>
        <input type="text" id="post_code" name="post_code">

        <label for="treatment_interest">Treatment Interest:</label>
        <input type="text" id="treatment_interest" name="treatment_interest">

        <label for="opt_email">Subscribe to Email Reminders & Notifications:</label>
        <input type="checkbox" id="opt_email" name="opt_email" value="1">

        <label for="opt_letter">Subscribe to Letters:</label>
        <input type="checkbox" id="opt_letter" name="opt_letter" value="1">

        <label for="opt_sms">Subscribe to SMS:</label>
        <input type="checkbox" id="opt_sms" name="opt_sms" value="1">

        <label for="opt_newsletter">Subscribe to Newsletter:</label>
        <input type="checkbox" id="opt_newsletter" name="opt_newsletter" value="1">

        <label for="opt_phone">Subscribe to Phone Calls:</label>
        <input type="checkbox" id="opt_phone" name="opt_phone" value="1">

        <input type="hidden" id="redirect_link" name="redirect_link" value="http://localhost/wordpress">

        <button type="submit">Submit</button>
    </form>

    <div id="formMessage"></div>

</main>