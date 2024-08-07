<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <main>
        <form id="leadForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <label for="lastName">Last Name:</label>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="lead_source">Lead Source:</label>
            <input type="text" id="lead_source" name="lead_source">

            <label for="salutation">Salutation:</label>
            <input type="text" id="salutation" name="salutation">

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label for="county">County:</label>
            <input type="text" id="county" name="county">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country">

            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <label for="telephone">Telephone:</label>
            <input type="tel" id="telephone" name="telephone">

            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <label for="post_code">Post Code:</label>
            <input type="text" id="post_code" name="post_code">

            <label for="treatment_interest">Treatment Interest:</label>
            <input type="text" id="treatment_interest" name="treatment_interest">

            <label for="opt_email">Opt-in Email:</label>
            <input type="checkbox" id="opt_email" name="opt_email">
            <button type="submit">Submit</button>
        </form>
        <div id="formMessage"></div>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>