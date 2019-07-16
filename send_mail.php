<?php


if (isset($_POST['submit'])) {
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];

   require 'email/PHPMailer-master/PHPMailerAutoload.php';

       $mail = new PHPMailer();
       $mail ->IsSmtp();
       $mail ->SMTPDebug = 0;
       $mail ->SMTPAuth = true;
       $mail ->SMTPSecure = 'ssl';
       $mail ->Host = "smtp.gmail.com";
       $mail ->Port = 465; // or 587
       $mail ->IsHTML(true);
       $mail ->Username = "adninamj@gmail.com";
       $mail ->Password = "Password#$%&";
       $mail ->SetFrom("adninamj@gmail.com");
       $mail ->Subject = $mailSub;
       $mail ->Body = $mailMsg;

       $filename = $_FILES['file'] ['name'];
       move_uploaded_file($_FILES['file'] ['tmp_name'], $filename);

       $mail ->addAttachment($filename);
       $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "<script>alert('Mail Not Sent');</script>";
       echo "<a href='emailpage.php'>Return</a>";
   }
   else
   {
       echo "<script>alert('Mail Sent');</script>";
       header('location:emailpage.php');
   }
  
}
else
{
   echo "<script>alert('Button is not clicked');</script>";

}
    
?>




   




   

