<?php 
if(isset($_POST['submit'])){
    $to = "tistyle@gmail.com"; // this is your Email address
    $from = $_POST['mailtje']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $subject = "Framework PT bericht:";
    $subject2 = "Een kopie van uw bericht op Framework PT";
    $message = $name . " schreef het volgende:" . "\n\n" . $_POST['message'];
    $message2 = "Hier is uw kopie " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    header( 'Location: ../../Contact' ) ;
    }
?>