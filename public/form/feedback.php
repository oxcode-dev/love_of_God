<?php

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])){

     $name = $form->name(test_input($_POST['name']));
     $email = $form->email(test_input($_POST["email"]));
     $phone = $form->phoneNumber(test_input($_POST["phone"]));
     $message = $form->messageDetails(test_input($_POST["message"]), 5000, 5);

      if(!empty($form->error)){
           foreach ($form->error as $error) {
             echo '<li>' . $error . '</li>';
           }
      }
     else{
         $msg->name = $name;
         $msg->phone = $phone;
         $msg->subject = 'Mail From Contact Form';
         $msg->message = $message;
         $subject ='Mail From Contact Form';
         echo $msg->send_mail($name, $email,$subject);
     }
}