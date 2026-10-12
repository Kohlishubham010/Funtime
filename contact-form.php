<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Get form data safely

    $name = htmlspecialchars(trim($_POST['name']));

    $email = htmlspecialchars(trim($_POST['email']));

    $phone = htmlspecialchars(trim($_POST['phone']));

    $ride = htmlspecialchars(trim($_POST['ride']));

    $message = htmlspecialchars(trim($_POST['message']));



    // Your receiving email

    $to = "funtime@gmail.com";   // Change your email here



    // Email Subject

    $subject = "New Ride Inquiry From Website";



    // Email Body

    $body  = "You have received a new enquiry from your website.\n\n";

    $body .= "Name: " . $name . "\n";

    $body .= "Email: " . $email . "\n";

    $body .= "Phone Number: " . $phone . "\n";

    $body .= "Selected Ride: " . $ride . "\n";

    $body .= "Message:\n" . $message . "\n";



    // Email Headers

    $headers  = "From: Website Contact <no-reply@yourdomain.com>\r\n";

    $headers .= "Reply-To: " . $email . "\r\n";

    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";



    // Send Email

    if(mail($to, $subject, $body, $headers)){


        echo "
        <script>
            alert('Thank you! Your enquiry has been submitted successfully.');
            window.location.href='index.php';
        </script>
        ";


    } else {


        echo "
        <script>
            alert('Sorry! Unable to send your enquiry. Please try again.');
            window.history.back();
        </script>
        ";


    }


}

?>