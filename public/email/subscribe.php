<?php

	include("inc/MailChimp.php");
	use \DrewM\MailChimp\MailChimp;

if($_POST)
{
    ##################################################################################################################

    //MailChimp Settings
	$api_key = "eafb469aed7b462c16e0e9ca3e6739ab-us20"; //MailChimp API Key
	$list_id = "dbba789608"; //List ID

    // Output Messages
    $success_mssg   = "Thank you, you have been added to our mailing list."; 

    ##################################################################################################################
    
	$MailChimp = new MailChimp($api_key);

	$result = $MailChimp->post("lists/$list_id/members", [
							'email_address' => $_POST["subscribe_email"],
							'status'        => 'subscribed',
						]);

	if ($MailChimp->success()) {
         $output = json_encode(array('type'=>'message', 'text' => $success_mssg));
        die($output);
        
	} else {
		$error_mssg = $MailChimp->getLastError();  
        $output = json_encode(array('type'=>'error', 'text' => $error_mssg));
        die($output);
	}
}else{
    
    header('Location: ../404.html');
    
}
?>