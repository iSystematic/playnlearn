<?php
$user_name = 'Yusra @ PlaynLearn'
$to = 'playnlearn.winnipeg@Gmail.com';
$subject = 'Marriage Proposal';
$message = 'msg'; 
$from = 'hello@playnlearn.ca';
 
// Sending email
if(mail($user_name, $to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>