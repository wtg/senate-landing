<?php
// Returns information about client IP in JSON format.
function ip_check()
{
	return false;
}
$information = array(
	"ip" => $_SERVER['REMOTE_ADDR'],
	"hostname" => gethostbyaddr($_SERVER['REMOTE_ADDR']),
	//"on_campus" => ip_check(),
);
json_encode($information)
?>