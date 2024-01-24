add_action( 'phpmailer_init', 'my_phpmailer' );
function my_phpmailer( $phpmailer ) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.gmail.com'; // Change depending on provider
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 587;
  $phpmailer->Username = 'user@domain.com';
  $phpmailer->Password = ''; // If 2FA is activated, create Gmail App Password instead of normal password
  $phpmailer->SMTPSecure = 'tls';
  $phpmailer->From = 'user@domain.com';
  $phpmailer->FromName = 'user@domain.com';
}
