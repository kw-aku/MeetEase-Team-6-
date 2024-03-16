<?php
require 'PHPMailer/PHPMailerAutoload.php';

// Function to send meeting invitation emails using PHPMailer
function sendMeetingInvitationEmail($meetingDetails, $participant) {
    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'faithmwin@gmail.com';              // SMTP username
    $mail->Password = 'bntvosgcgdrobhth';                 // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('faithmwin@gmail.com', 'MeetEase');
    $mail->addAddress($participant['email'], $participant['name']);  // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Meeting Invitation';
    $mail->Body = '<html><body>';
    $mail->Body .= '<p>Hi ' . $participant['name'] . ',</p>';
    $mail->Body .= '<p>You are invited to a meeting:</p>';
    $mail->Body .= '<p><strong>Title:</strong> ' . $meetingDetails['title'] . '</p>';
    $mail->Body .= '<p><strong>Date:</strong> ' . $meetingDetails['date'] . '</p>';
    $mail->Body .= '<p><strong>Time:</strong> ' . $meetingDetails['time'] . '</p>';
    $mail->Body .= '<p><strong>Description:</strong> ' . $meetingDetails['description'] . '</p>';
    $mail->Body .= '</body></html>';

    if(!$mail->send()) {
        return false;
    } else {
        return true;
    }
}


?>
