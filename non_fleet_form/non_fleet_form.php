<?php
include('functions.php');
$zoho_client_id='1000.G5ADCREZLWKQ37764DHC3ZZXAW4VEH';
$zoho_client_secret='88c42ac4b05a8e341731956a233d89cb0399e7f3cb';
$handleFunctionsObject = new handleFunctions;
$old_access_token = file_get_contents("access_token.txt");
$refresh_token = file_get_contents("refresh_token.txt");

$contact_id=$_GET['contact_id'];
$phone_number=$_GET['phone'];

echo $contact_id;
echo $phone_number;


if($contact_id!== ''){
		
		echo "Contact ID found";
		
				$url = "Contacts/search?$phone_number";
			$data = "";
			echo $check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
			if(ISSET($check_token_valid['code']) && $check_token_valid['code'] !== "INVALID_TOKEN"){
				$url = "token";
				$data = array("refresh_token"=>$refresh_token,"client_id"=>"".$zoho_client_id."","client_secret"=>"".$zoho_client_secret."","grant_type"=>"refresh_token");
				$get_new_token = $handleFunctionsObject-> zoho_auth($url,"POST",$data);
				if(isset($get_new_token['access_token'])){
					file_put_contents("access_token.txt",$get_new_token['access_token']);
				}
				if(isset($get_new_token['refresh_token'])){
					file_put_contents("refresh_token.txt",$get_new_token['refresh_token']);
				}
				$old_access_token = file_get_contents("access_token.txt");
				 $url = "Contacts/search?phone=$phone_number";
				$data = "";
				$check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
	echo "<pre>";
	print($check_token_valid);
	echo "</pre>";
}
	echo "<pre>";
	print($check_token_valid);
	echo "</pre>";
}










?>