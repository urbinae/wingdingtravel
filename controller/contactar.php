<?php

  $nameC = $_POST['nameC'];
  $lastnameC = $_POST['lastnameC'];
  $emailC = $_POST['emailC'];
  $subjectC = $_POST['subjectC'];
  $messageC = $_POST['messageC'];

  $recaptcha = $_POST["g-recaptcha-response"];
 
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => '6LeLYVoUAAAAALhLiC2_Jc7RdHvE5ObWcMl8wQpf',
    'response' => $recaptcha
  );
  $options = array(
    'http' => array (
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success = json_decode($verify);
  if ($captcha_success->success) {
    $correo = '<div style="background: #f0f0f0; width: 100%; padding-top: 12px; padding-bottom: 12px;">';
  
  $correo .= '<table style="width: 86%; margin: 0 auto; background: url(https://www.wingdingtravel.com/images/email/1.jpg); border: 1px solid #d0d0d0;">';
  $correo .= '<tr><td colspan="2"><br /></td></tr>';
  $correo .= '<tr style="text-align:center;"><td colspan="2" style="padding-left: 24px; text-align: center; style="padding-bottom: 14px; padding-top: 16px;"><img src="https://www.wingdingtravel.com/images/logo/logo_wing.png" style="width: 210px;" /></td></tr>';

  $correo .= '<tr><td colspan="2" style="background: #cb0828;color:#fff;text-align: center;color: #fff;text-transform: uppercase;font-size: 22px;"><h3> Contact Us</h3></td></tr>';

  $correo .= '<tr><td style="padding-left: 24px;padding-top: 3em;"> Name:</td><td style="padding-top: 3em;">'.$nameC.'</td></tr>';
  $correo .= '<tr><td style="padding-left: 24px;"> Lastname:</td><td>'.$lastnameC.'</td></tr>';
  $correo .= '<tr><td style="padding-left: 24px;"> Email:</td><td>'.$emailC.'</td></tr>';
  $correo .= '<tr><td style="padding-left: 24px;"> Subject:</td><td>'.$subjectC.'</td></tr>';
  $correo .= '<tr><td style="padding-left: 24px;"> Message:</td><td>'.$messageC.'</td></tr>';
 
  $correo .= '<tr><td colspan="2"><br /></td></tr>';
  $correo .= '</table>';
  
  $correo .= '<hr />';
  
  $correo .= '</div>';
  
  $para = 'bmonegro@wingdingtravel.com';
        
  $titulo    = 'WingDing Travel - Contact';
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $cabeceras .= 'From: WingDing Travel <bmonegro@wingdingtravel.com>' . "\r\n";
  $cabeceras .= 'Bcc: aldo@domtecno.com,miguelaml299@gmail.com' . "\r\n";
    
  // Confirmacion Punta Cana Tours & Transfers
  
  mail($para, $titulo, $correo, $cabeceras); // correo cliente

  echo "<script> alert('We will contact you shortly, thank you for choosing us...!'); </script>";
  echo "<script languaje='javascript' type='text/javascript'>location.href = 'https://www.wingdingtravel.com/';</script>";
  } else {
    echo "<script languaje='javascript' type='text/javascript'>location.href = 'https://www.wingdingtravel.com/';</script>";
  }

?>