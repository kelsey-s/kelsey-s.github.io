<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['message']; // Get Message Value
         
        $to = "admin@kelseysyshi.com"; // You can change here your Email
        $subject = "Website Message from '$name' "; // This is your subject
          
        // Always set content-type when sending HTML email
        $header = "From: '$email_id'";
 
        // More headers
        mail($to, $subject, $msg, $header);
    
        header('Location: http://www.kelseysyshi.com/success.html');
    }
?>