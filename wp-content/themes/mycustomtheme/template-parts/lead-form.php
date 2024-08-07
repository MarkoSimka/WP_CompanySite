<main>
    <form id="leadForm">
        <div class="form-row">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="lead_source">Lead Source:</label>
                <input type="text" id="lead_source" name="lead_source">
            </div>
            <div class="form-group">
                <label for="salutation">Salutation:</label>
                <input type="text" id="salutation" name="salutation">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="county">County:</label>
                <input type="text" id="county" name="county">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="post_code">Post Code:</label>
                <input type="number" id="post_code" name="post_code">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="tel" id="telephone" name="telephone">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="mobile">
            </div>
        </div>

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

        <input type="hidden" id="redirect_link" name="redirect_link" value="http://localhost/wordpress/">
        <button type="submit">Submit</button>
    </form>

    <div id="formMessage"></div>

</main>