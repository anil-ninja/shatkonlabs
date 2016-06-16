<?php
	
function saveFile($filePath){ 
    move_uploaded_file($_FILES["file"]["tmp_name"], "/var/www/html/collap_files".$filePath);
}
	
if(isset($_GET['name'])){
  $name = $_GET['name'];
  $email = $_GET['email'];
  $mobile = $_GET['mobile'];
  $filePath = "/uploads/resume/".date("Y-m-d_h:i:s")."_".$_FILES["file"]["name"];
  saveFile($filePath);
  echo $filePath ;
  $headers = "MIME-Version: 1.0" . "\r\n";

// More headers
  $headers .= 'From: <no-reply@collap.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
  $file = "/var/www/html/collap_files".$filePath;
  $file_size = filesize($file);
  $handle = fopen($file, "r");
  $content = fread($handle, $file_size);
  fclose($handle);
  $content = chunk_split(base64_encode($content));
  $uid = md5(uniqid(time()));
  $filename = basename($file);
  // header
  $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
  $message = "My name is ".$name." mobile no. ".$mobile." and email-id ".$email."
  				\n \n This email is sent by shatkonlabs \r\n";
// message & attachment
  $message .= "--".$uid."\r\n";
  $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
  $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
  $message .= $message."\r\n\r\n";
  $message .= "--".$uid."\r\n";
  $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
  $message .= "Content-Transfer-Encoding: base64\r\n";
  $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
  $message .= $content."\r\n\r\n";
  $message .= "--".$uid."--";
  $to = "hr@blueteam.in";
  $subject = "Resume";
  
  mail($to,$subject,$message,$headers);				
}
?> 
