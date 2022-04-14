<?php
  //Variables
  $fullName = $_POST['full-name'];
  $bi = $_POST['bi'];
  $phone = $POST_['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sendDate = date('d/m/Y');
  $sendTime = date('H:i:s');

  //email imput
  $file = "
    <html>
      <p><b>Nome: </b>$fullname</p>
      <p><b>BI: </b>$bi</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$message</p>
      <p>Este e-mail foi enviado em <b>$sendDate</b> às <b>$sendTime</b></p>
    </html>
  ";
  
  //To
  $address = "info@vendas24.com";
  $subject = "Contactado pelo Site";

  //This input must exists to be sucessful
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $fullName <$email>";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  //send
  mail($address, $subject, $file, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=index.html'>";
?>