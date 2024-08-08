# Dr. Pabau Dental Center Lead Generation Form

For healthier teeth, a beautiful smile, and communication that will give you confidence and help you feel more confident in your everyday life, come to Dr. Pabau Dental Center. Healthy teeth and gums improve your health and appearance.

This README file provides an overview of the project and instructions for setting it up using XAMPP and WordPress.

##  Project Description

This project is a WordPress-based lead generation form for Dr. Pabau Dental Center. The form is built with HTML and CSS, and it connects to an API via a self-made proxy and AJAX call to generate leads for the dentist consultant.

## Screenshots

Here are some screenshots of the form:
<div style="display: flex; justify-content: flex-start; gap: 10px;">
    <img src="https://github.com/user-attachments/assets/95c7ceb9-9b2a-41e9-81ac-37f1eb8cace5" alt="Form Screenshot 1" style="width: 30%;">
    <img src="https://github.com/user-attachments/assets/bb35f31f-dd04-4bd0-80c8-e99d7ab72d18" alt="Form Screenshot 2" style="width: 30%;">
    <img src="https://github.com/user-attachments/assets/0e718ebf-00a2-4de3-bd59-e02bbe150bc8" alt="Form Screenshot 3" style="width: 30%;">  
</div>

##  Features
  *  Responsive design for desktop, tablet, and mobile.
  *  Real-time lead generation using AJAX.
  *  Custom proxy to securely handle API requests.
  *  User-friendly form with various input fields to capture lead information.

##  Getting Started

To get started with this project, follow these steps:

1.Clone the repository:

    https://github.com/MarkoSimka/WP_CompanySite.git //https

    git@github.com:MarkoSimka/WP_CompanySite.git //ssh

2.Set Up XAMPP and WordPress:
  * nstall XAMPP from the [XAMPP Official Website](https://www.apachefriends.org/).
  * Start Apache and MySQL in the XAMPP control panel or via terminal ( sudo /opt/lampp/lampp start).
  * Download and install WordPress in the htdocs folder of your XAMPP installation.
  * Create a database for WordPress in phpMyAdmin.
  * Complete the WordPress installation by navigating to http://localhost/wordpress and follow the setup instructions.

3.Add the Custom Theme:
  *  Create a custom theme folder to /wp-content/themes/.
  *  Add the necessery files.
  *  Activate the theme via the WordPress admin dashboard (Appearance > Themes).

5.Configure the Proxy:
  *  Ensure the proxy.php file is correctly set up in the theme directory.  

6.Start the Development Server:
  *  Access your WordPress site at http://localhost/wordpress.


##  Form Functionality

###  Lead Generation Form
The form captures the following information:
  *  First Name
  *  Last Name
  *  Date of Birth
  *  Email
  *  Lead source
  *  Salutation
  *  County
  *  Country
  *  City
  *  Address
  *  Post Code
  *  Telephone
  *  Mobile
  *  Treatment Interest
  *  Opt-in Preferences (Email, Letter, SMS, Newsletter, Phone)

###  AJAX and Proxy Integration
  *  The form uses jQuery to send an AJAX request to the proxy.php file, which then forwards the data to the API endpoint.

###  Proxy
  *  The proxy.php file handles the API requests securely and ensures that the API key is not exposed in the frontend code.

##  Contributing
Contributions are welcome! If you have any ideas, enhancements, or bug fixes, feel free to open an issue or submit a pull request.

##  License
This project is licensed under the [MIT License](https://opensource.org/license/mit).

Thank you for choosing "Dr. Pabau Dental Center Lead Generation Form". We hope this application serves as a valuable resource for your development needs. If you have any questions or need further assistance, please don't hesitate to reach out.

Happy coding!
