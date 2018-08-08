<?php
if ($_POST['sendTo'] && $_POST['subjectEmail'] && $_POST['contentEmail']) {
	$sendTo = $_POST['sendTo'];
	$subjectEmail = $_POST['subjectEmail'];
	$contentEmail = $_POST['contentEmail'];
	$headerEmail = "MIME-Version: 1.0\r\n";
	$headerEmail .= "Content-type: text/html\r\n";
	$resultSendEmail = mb_send_mail($sendTo, $subjectEmail, $contentEmail, $headerEmail);
	if( $resultSendEmail == true ) {
		echo "Send email success !";
	}else {
		echo "Send email fail !";
	}
} else {
	echo "Input value !";
}
