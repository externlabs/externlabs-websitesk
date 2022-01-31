<?php
 session_start();
    // header("Content-Type: text/plain");
    // header("X-Node: $hostname");
    // $from ="developer@externlabs.com"; //developer@externlabs.com";                         
    // $fromName="Extern Labs Pvt. Ltd.";
    // $toemail = "developerextern@gmail.com";    //aniruddh@externlabs.com
    // $subject = 'Download our brochure from here';            
    // $message ="Email >>>".$_POST['email'];

    // $result = mail($toemail, $subject, $message, "From: $from");
    // $result = mail(trim($_POST['email']), $subject, $message, "From: $from");

    // // Attachment file 
    // $file = "files/codexworld.pdf"; 


    // if ( $result ) {
    //     echo 'Message has been sent';
    //     // session_start();
    //     // header("location: ./index.php");
    //     // die();
    //     // exit;
    // }
    // else{
    //     echo 'Message has been sent';
    //     // header("location: ./index.php");
    //     // die();
    //     // exit;
    // }


    // Recipient 
$to = $_POST['email']; 
 
// Sender 
$from = 'developer@externlabs.com'; 
$fromName = 'Extern Labs Pvt. Ltd.'; 
 
// Email subject 
$subject = 'Extern Labs portfolio';  
 
// Attachment file 
$file = "./portfolio.pdf"; 


// Email body content 
$htmlContent = ' 
    <pre>
    Thanks for Downloading Extern Labs portfolio,
    Find attachments

    Thank you
    Extern Labs Inc.

    Our Website : https://externlabs.com
    </pre>
'; 
 
// Header for sender info 
$headers = "From: $fromName"." <".$from.">"; 
 
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($file) > 0){ 
    if(is_file($file)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    fopen($file,"rb"); 
        $data =  fread($fp,filesize($file)); 
        // echo $data;
 
        fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
        "Content-Description: ".basename($file)."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
$returnpath = "-f" . $from; 
 
// Send email  
$message1=$_POST['email']." Download Our portfolio :";
$toemail="externlabsmarketing@gmail.com";
$from1="developer@externlabs.com";
mail($toemail, $subject, $message1, "From: $from1");
$result = mail($to, $subject, $message, $headers, $returnpath);  
 
// Email sending status 
// echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>"; 

if ( $result ) {
    echo 'Message has been sent';
    // session_start();
    if($_POST['second']=="second"){
         $_SESSION["send1"] = "done";
     }else{
         $_SESSION["send"] = "done";
     }   
    header("location: ./portfolio.php?send=1");
    die();
    exit;
} else {
   
    //  session_start();
    //  session_destroy();
     if($_POST['second']=="second"){
         $_SESSION["send1"] = "error";
     }else{
         $_SESSION["send"] = "error";
     }       
    //  print_r($_SESSION['send']);
    $_COOKIE['varname'] = "Hello ";
    header("location: ./portfolio.php?send=0");
    die();
    echo "Message could not be sent. XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx";
}
