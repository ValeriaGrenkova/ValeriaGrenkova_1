<?php
if (!session_start()) 
{
	http_response_code(500);
	echo "Ошибка сервера";
	return;
}
echo buildResponse();

function buildResponse(): string 
{
	$response .= "<ul>";
	foreach ($_SESSION as $k => $v)
		$response .= "<li>" . $k . "=" . $v;
	$response .= "</ul>";
	return $response;
}