<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class SumController extends Controller
{
    public function fetchSum(Request $request)
    {
        $mail = new PHPMailer(true);
        try {
            // Configure the PHPMailer instance
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ssmt03586@gmail.com';
            $mail->Password = '454455076';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set the sender, recipient, subject, and body of the message
            $mail->setFrom('ssmt03586@gmail.com');
            $mail->addAddress('ssmt03586@gmail.com');
            $mail->Subject = "hi praveen";
            $mail->isHTML(true);
            $mail->Body = "<p>Name: </p><p>Email:</p><p>Message: </p>";

            // Send the message
            $mail->send();

            $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
        } catch (Exception $e) {
      $errorMessage = "<p style='color:red;'>{$e}Oops, something went wrong. Please try again later</p>";
    }
        // $data = ['name'=>'ghgghghghghg','data'=>"helllo"]
        // Mail::send('mail',$data,function($messages){
        //     $messages->to("a.praveenjangir@gmail.com");
        //     $messages->subject('"hi praveen');
        // });
        return $errorMessage;
    }
}
