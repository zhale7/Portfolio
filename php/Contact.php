  <!-- Contact Start -->

  <?php
               
            //     include './PHPMailer/src/PHPMailer.php';
            //     include './PHPMailer/src/SMTP.php';
            //     include './PHPMailer/src/Exception.php';

            //     use PHPMailer\PHPMailer\PHPMailer;
            //     use PHPMailer\PHPMailer\SMTP;
            //     use PHPMailer\PHPMailer\Exception;

            //   if(isset($_POST['btn-send'])) {
            //       $name = htmlentities($_POST['name']);
            //       $email = htmlentities($_POST['email']);
            //       $subject = htmlentities($_POST['subject']);
            //       $message = htmlentities($_POST['message']);

            //       $mail = new PHPMailer(true);

            //       $mail->isSMTP();
            //       $mail->Host ='smtp.gmail.com';
            //       $mail->SMTPAuth = true;
            //       $mail->SMTPSecure = 'tls';
            //       $mail->Port = 587;
            //       $mail->Username ='jala.f.hashimli@gmail.com';
            //       $mail->Password = 'edgixiilkclwlome';
            //       $mail->Subject = "Message Received From Contact: ".$name;
            //       $mail->isHTML(true);
            //       $mail->setFrom($email,$name);
            //       $mail->Body = "Email: ".$email."<br>Message: ".$message;
            //       $mail->addAddress('jala.f.hashimli@gmail.com');
            //       $mail->send();

            //       if($mail->send()) {
            //         echo "Email sent..!";
            //       } else {
            //         echo "Error..!";
            //       }
                  
            //       $mail->smtpClose();
            //   }
    
    
 ?>

  <div class="container-fluid py-5" id="contact">
      <div class="container">
          <div class="position-relative d-flex align-items-center justify-content-center">
              <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
              <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="contact-form text-center">
                      <div id="success"></div>

                      <form name="sentMessage" id="contactForm" method="POST" action="contact.php"
                          novalidate="novalidate">
                          <div class="form-row">
                              <div class="control-group col-sm-6">
                                  <input type="text" class="form-control p-4" name="name" id="name"
                                      placeholder="Your Name" required="required"
                                      data-validation-required-message="Please enter your name" />
                                  <p class="help-block text-danger"></p>
                              </div>

                              <div class="control-group col-sm-6">
                                  <input type="email" class="form-control p-4" name="email" id="email"
                                      placeholder="Your Email" required="required"
                                      data-validation-required-message="Please enter your email" />
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>

                          <div class="control-group">
                              <input type="text" class="form-control p-4" name="subject" id="subject"
                                  placeholder="Subject" required="required"
                                  data-validation-required-message="Please enter a subject" />
                              <p class="help-block text-danger"></p>
                          </div>

                          <div class="control-group">
                              <textarea class="form-control py-3 px-4" name="message" rows="5" id="message"
                                  placeholder="Message" required="required"
                                  data-validation-required-message="Please enter your message"></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                          <div>

                              <button class="btn btn-outline-primary" name="btn-send" type="submit"
                                  id="sendMessageButton">Send
                                  Message</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Contact End -->