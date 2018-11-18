<?php 
$title = 'Contact | Waqar Mohammad';
$page = 'contact';
include('inc/header.php');
 ?>
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>

    <main id="contact">
        <h1 class="lg-heading">
            Contact
            <span class="text-secondary">Me</span>
        </h1>
        <h2 class="sm-heading">
            This is how you can reach me
        </h2>
        <div class="">
            <div class="contact-text">
                <p>Feel free to reach out to me to discuss projects or collaboration.</p>
            </div>
            <div id="success-message" style="display: none;">
                <h3>Your message has been sent your message successfully 😃</h3>
            </div>
            <div id="error-message" style="display: none;">
                <h3>Error</h3>
                Sorry there was an error sending your form.
            </div>
            <form method="post" id="form" role="form">
                <ul class="form-style-1">
                <li><label for="name">Full Name<span class="required">*</span></label><input type="text" name="name" id="name" class="field-long" placeholder="Full Name" required maxlength="30" /></li>
                <li>
                <label for="email">E-mail <span class="required">*</span></label>
                <input type="email" name="email" id="email" class="field-long" placeholder="Email" required/>
                </li>
                <li>
                <label for="message">Your Message <span class="required">*</span></label>
                <textarea name="message" id="message" class="field-long field-textarea" placeholder="Please leave a short message..." required></textarea>
                </li> 
                <li>
                <input class="btnContactUs" type="submit" value="Submit" id="btnContactUs">
                </li>
                </ul>
            </form>
        </div>
    </main>
<?php include('inc/footer.php'); ?>