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
            <input type="text" id="lastName" name="lastName" required>
            <label for="mobile">Email:</label>
            <input type="text" id="mobile" name="mobile">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="lead_source">First Name:</label>
            <input type="text" id="lead_source" name="lead_source">
            <label for="salutation">Last Name:</label>
            <input type="text" id="salutation" name="salutation">
            <label for="dob">dob:</label>
            <input type="text" id="dob" name="dob">
            <label for="county">First Name:</label>
            <input type="text" id="county" name="county">
            <label for="country">Last Name:</label>
            <input type="text" id="country" name="country">
            <label for="city">city:</label>
            <input type="text" id="city" name="city">
            <label for="telephone">telephone:</label>
            <input type="tel" id="telephone" name="telephone">
            <label for="mobile">mobile:</label>
            <input type="text" id="mobile" name="mobile">
            <label for="address">address:</label>
            <input type="text" id="address" name="address">
            <label for="post_code">post_code:</label>
            <input type="text" id="post_code" name="post_code">
            <label for="treatment_interest">treatment_interest:</label>
            <input type="text" id="treatment_interest" name="treatment_interest">
            <label for="opt_email">opt_email:</label>
            <input type="text" id="opt_email" name="opt_email">
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