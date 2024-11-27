<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'echolss.alex@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

  // <!-- 
  //   <!-- Contact Section -->
  //   <section id="contact" class="contact section">

  //     <!-- Section Title -->
  //     <div class="container section-title" data-aos="fade-up">
  //       <h2>Contact</h2>
  //       <p>Please reach out if you have any questions, or would like to talk!</p>
  //     </div><!-- End Section Title -->

  //     <div class="container" data-aos="fade-up" data-aos-delay="100">

  //       <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
  //         <div class="row gy-5">


  //           <div class="col-lg-4">
  //             <div class="info-item d-flex align-items-center">
  //               <i class="bi bi-envelope flex-shrink-0"></i>
  //               <div>
  //                 <h3>Email</h3>
  //                 <p>echolss.alex@gmail.com</p>
  //               </div>
  //             </div>
  //           </div><!-- End Info Item -->

  //         </div>
  //       </div>

  //       <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
  //         <div class="row gy-4">

  //           <div class="col-md-6">
  //             <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
  //           </div>

  //           <div class="col-md-6 ">
  //             <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
  //           </div>

  //           <div class="col-md-12">
  //             <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
  //           </div>

  //           <div class="col-md-12">
  //             <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
  //           </div>

  //           <div class="col-md-12 text-center">
  //             <div class="loading">Loading</div>
  //             <div class="error-message"></div>
  //             <div class="sent-message">Your message has been sent. Thank you!</div>

  //             <button type="submit">Send Message</button>
  //           </div>

  //         </div>
  //       </form><!-- End Contact Form -->

  //     </div>

  //   </section>/Contact Section -->

  // </main>
?>
