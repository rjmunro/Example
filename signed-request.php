<?php
require "credentials.php";

function signedRequest($params) {
	$params["timestamp"] = time();
	$params["appId"] = APP_ID;
	$payload = base64UrlEncode(json_encode($params));
	$rawSignature = hash_hmac("sha256", $payload, APP_SECRET, $raw = true);
	return base64UrlEncode($rawSignature) . "." . $payload;
}

function base64UrlEncode($data) {
	return strtr(base64_encode($data), "+/", "-_");
}

function signContentIds($contentIds) {
	return signedRequest(array("contentIds" => $contentIds));
}
