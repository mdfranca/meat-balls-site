<?php
/**
* @package   gaucho
* @author    arrowthemes https://arrowthemes.com
* @copyright Copyright (C) arrowthemes
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

/**
 * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
 * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
 */
/**
 * Specify the email address to which all mail messages are sent.
 * The script will try to use PHP's mail() function,
 * so if it is not properly configured it will fail silently (no error).
 */
$mailTo     = 'mdfranca@meatballsworld.com';

/**
 * Set the subject
 */
$subjectMsg = 'RE: [MB Delivery] Detalhes da incrição para';

/**
 * Set the message that will be shown on success
 */
$successMsg = 'Obrigado, inscrição realizada com sucesso!';

/**
 * Set the message that will be shown if not all fields are filled
 */
$fillMsg    = 'Por favor preencha todos os campos!';

/**
 * Set the message that will be shown on error
 */
$errorMsg   = 'Hmmm... Houve algum erro, por favor tente novamente!';

/**
 * Set the message on email body
 */
$std_msg	= 'Obrigado pela incrição. A partir de agora você receberá todas as nossas promoções!';
$std_msg1	= 'Equipe MB Delivery'

/**
 * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
 */

?>
<?php
if(
    !isset($_POST['subscribe-name']) ||
	!isset($_POST['subscribe-email']) ||	
    empty($_POST['subscribe-name']) ||
	empty($_POST['subscribe-email'])	
) {
	$json_arr = array( "type" => "error", "msg" => "$fillMsg" );
	echo json_encode( $json_arr );
} else {

    ?>
    <?php
	$msg = "Name: ".$_POST['subscribe-name']."\r\n";
	$msg .= "Email address: ".$_POST['subscribe-email']."\r\n";
	$msg .= $std_msg1."\r\n";
	$msg .= $std_message."\r\n";
	
    $success = @mail($mailTo, $subjectMsg . ' ' . $_POST['subscribe-name'], $msg, 'From: ' . $_POST['subscribe-name'] . '<' . $_POST['subscribe-email'] . '>');
	
    if ($success) {
		$json_arr = array( "type" => "success", "msg" => $successMsg );
		echo json_encode( $json_arr );
    } else {
		$json_arr = array( "type" => "error", "msg" => $errorMsg );
		echo json_encode( $json_arr );
    }
}