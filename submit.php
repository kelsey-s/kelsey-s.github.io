<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $msg = $_POST['message']; // Get Message Value 
        $to = "admin@kelseysyshi.com"; // You can change here your Email
        $subject = "Website Message from '$name' "; // This is your subject

        // More headers
        mail($to, $subject, $msg, "From:" . $email_id);
        
        header('Location: https://kelsey-s.github.io/portfolio/success.html');
    }
