<?php

class Calculator {
    public static function calculate($num1, $num2, $operation) {
        if ($operation === 'add') {
            return $num1 + $num2;
        } elseif ($operation === 'subtract') {
            return $num1 - $num2;
        } else {
            return null;
        }
    }
}

// FILEPATH: /C:/xampp/htdocs/cursophp/talleres/02/src/PDFGenerator.php

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PDFGenerator {
    public static function generate($result) {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('<h1>Result: ' . $result . '</h1>');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@example.com';
            $mail->Password = 'your-password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('your-email@example.com', 'Your Name');
            $mail->addAddress('recipient@example.com', 'Recipient Name');

            $mail->isHTML(true);
            $mail->Subject = 'PDF Result';
            $mail->Body = '<h1>Result: ' . $result . '</h1>';
            $mail->addStringAttachment($output, 'result.pdf');

            $mail->send();
            echo 'Email sent successfully';
        } catch (Exception $e) {
            echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        }
    }
}