<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_POST ) && $_POST[ 'name' ] != NULL ) {
	// Feedback for end user
	$html .= '<pre>Hello ' . htmlspecialchars($_POST[ 'name' ]) . '</pre>';
}

?>
