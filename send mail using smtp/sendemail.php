<?php
$receiver = swddffg1234@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, this is test mail from localhost from sanu singh  ";
$sender = "From:ghddhjkfh8765@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>