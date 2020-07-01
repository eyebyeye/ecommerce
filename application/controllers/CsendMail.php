<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

	require 'C:\xampp\htdocs\Store\email\mail/Exception.php';
	require 'C:\xampp\htdocs\Store\email\mail/PHPMailer.php';
	require 'C:\xampp\htdocs\Store\email\mail/SMTP.php';
/**
 * 
 */

/**
 * 
 */
class CsendMail extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function sendMail(){
	

 $mail = new PHPMailer(true);
 $email = $this->input->post('email');
// $nombre       = $this->input->post('nombre');

$email = "pendejo0725@gmail.com";
try {

	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
		    )
		);
		    //Server settings
   
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pendejo0725@gmail.com';                     // SMTP username
    $mail->Password   = '2384258171gg';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;  
    //Recipients
    $mail->setFrom('pendejo0725@gmail.com', 'My tenda');
    $mail->addAddress($email, "gabrielitooooo");     // Add a recipient
 

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('assets/imagenes/hombre1.jpg', 'new.jpg');    // Optional name

    // Content
    $rand = rand(10000,99999);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '<h1>My tenda</h1>';
    $mail->Body    = '<p style="color:red">Para activar la tu cuenta sigue el enlace </p><br>
                     <a id="m" href="http://localhost/Store/Cproduct/VverificarEmail?confirmado='.$rand.'">Click<h3>AQUI</h3></a>';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      $sql = "UPDATE articulos set codigoemail='$rand' where email='$email'";
      $this->db->query($sql);
    $mail->send();
   

		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		   }


 }

 public function correta(){

 	$vemail = $this->input->post('vemail');
 	$Vcorreo = $this->input->post('Vcorreo');
 	$sql = "UPDATE articulos set stadoEmail='1' where email='$Vcorreo' and stadoEmail='0' and codigoemail='$vemail'";
 	$this->db->query($sql);
 	echo 1;

 }
}
	






 ?>