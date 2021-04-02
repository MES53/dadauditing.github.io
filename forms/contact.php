<?php


if(isset($_POST['submit'])){
$name= $_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];


$email_from =$_POST['email'];
$email_subject=$_POST['subject'];
$email_body="User Name: $name.\n".
                "User Email:$visitor_email.\n".
                    "User Subject:$email_subject.\n".
                        "Message :$message.\n";


$to="mr.rock462@gmail.com";
$headers="From:$email_from\r\n";
$headers="Reply-to: $visitor_email\r\n"

  mail($to,$subject,$message,$headers);

    header("Location:index.html");
    
    echo "Mail Sent Thank you!!!"


}

// $receiving_email_address = 'mr.rock462@gmail.com';

 

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];
//   $contact->message = $_POST['message']
//     mail()
  
//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['subject'], 'subject', 10);
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();




  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  

?>
 