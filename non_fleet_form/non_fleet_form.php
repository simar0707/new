<?php
$con = pg_connect("host=ec2-54-243-47-196.compute-1.amazonaws.com dbname=da75gbsng1e37m user=ikheqtaxeqwazi password=800c91378dbd23c1752ef5722ad7c40a4f727966939b44d58361184792659ebd");
include('functions.php');
$zoho_client_id='1000.G5ADCREZLWKQ37764DHC3ZZXAW4VEH';
$zoho_client_secret='88c42ac4b05a8e341731956a233d89cb0399e7f3cb';
$handleFunctionsObject = new handleFunctions;
$old_access_token = file_get_contents("access_token.txt");
$refresh_token = file_get_contents("refresh_token.txt");
$contact_id=$_GET['contact_id'];
echo $contact_id;
echo $phone_number;
$phone_number=$_GET['phone'];

if(!empty($phone_number)){			
				$url = "Contacts/search?phone=$phone_number";
			$data = "";
			 $check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
			if($check_token_valid['code']== "INVALID_TOKEN"){
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
				 $url = "Contacts/$contact_id";
				$data = "";
				 $check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);

$query1 = "SELECT * FROM public.violation where contact_id='".$contact_id."'";
$result1 = pg_query($query1);
$rows1 = pg_num_rows($result1);
if($rows1>=1){
	while ($row1 = pg_fetch_assoc($result1)) {
	 echo $row1['accident_violation'];
	 echo '<br>';	
	 echo $row1['date'];
	 echo '<br>';		 
	}
}

		 
echo $id=$check_token_valid['data'][0];
echo $first_name=$check_token_valid['data'][0]['First_Name'];
echo $last_name=$check_token_valid['data'][0]['Last_Name'];
echo $effective_date=$check_token_valid['data'][0]['Policy_Effective_Date'];
echo $garaging_address=$check_token_valid['data'][0]['Home_Address'];
echo $USDOT_Assigned_to=$check_token_valid['data'][0]['USDOT_Assigned_to'];
echo $garaging_City=$check_token_valid['data'][0]['City'];
echo $garaging_State=$check_token_valid['data'][0]['State'];
echo $garaging_ZIP_Code=$check_token_valid['data'][0]['ZIP_Code'];
echo $Yrs_in_business=$check_token_valid['data'][0]['Yrs_in_business'];
echo $Mailing_Address=$check_token_valid['data'][0]['Mailing_Address'];
echo $City_Two=$check_token_valid['data'][0]['City_Two'];
echo $State_Two=$check_token_valid['data'][0]['State_Two'];
echo $ZIP_Code_Two=$check_token_valid['data'][0]['ZIP_Code_Two'];
echo $E_mail_Address=$check_token_valid['data'][0]['E_mail_Address'];
echo $Radious_0_50_miles=$check_token_valid['data'][0]['Radious_0_50_miles'];
echo $Radious_50_200_miles=$check_token_valid['data'][0]['Radious_50_200_miles'];
echo $Radious_400_miles=$check_token_valid['data'][0]['Radious_200_miles'];
echo $Radious_600_miles=$check_token_valid['data'][0]['Radious_600_miles'];
echo $driver_Name1=$check_token_valid['data'][0]['Drivers1'][0]['Name1'];
echo "<br>";
echo $DOB_Age_MaritalStatus_Points_LicenceNo=$check_token_valid['data'][0]['Drivers1'][0]['DOB_Age_MaritalStatus_Points_LicenceNo'];
$str_arr = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo);  
echo $DOB=$str_arr[0]; 
echo"<br>";
echo $Age=$str_arr[1]; 
echo"<br>";
echo $MaritalStatus=$str_arr[2]; 
echo"<br>";
echo $Points=$str_arr[3]; 
echo"<br>";
echo $LicenceNo=$str_arr[4]; 

echo $Experience_Years=$check_token_valid['data'][0]['Drivers1'][0]['Experience_Years'];	
echo $Hire_Date=$check_token_valid['data'][0]['Drivers1'][0]['Hire_Date'];	
echo "<pre>";
print_r($check_token_valid['data']);
echo "</pre>";	
}
else{


$query1 = "SELECT * FROM public.violation where contact_id='".$contact_id."'";
$result1 = pg_query($query1);
$rows1 = pg_num_rows($result1);
if($rows1>=1){
	while ($row1 = pg_fetch_assoc($result1)) {
	 echo $row1['accident_violation'];
	 echo '<br>';	
	 echo $row1['date'];
	 echo '<br>';		 
	}
}
	
	

	 $url = "Contacts/$contact_id";
	 $data = "";
	 $check_token_valid =  $handleFunctionsObject->zoho_curl($url,"GET",$data,$old_access_token);
echo $contact_id=$check_token_valid['data'][0];
echo $first_name=$check_token_valid['data'][0]['First_Name'];
echo $last_name=$check_token_valid['data'][0]['Last_Name'];
echo $effective_date=$check_token_valid['data'][0]['Policy_Effective_Date'];
echo $garaging_address=$check_token_valid['data'][0]['Home_Address'];
echo $USDOT_Assigned_to=$check_token_valid['data'][0]['USDOT_Assigned_to'];
echo $garaging_City=$check_token_valid['data'][0]['City'];
echo $garaging_State=$check_token_valid['data'][0]['State'];
echo $garaging_ZIP_Code=$check_token_valid['data'][0]['ZIP_Code'];
echo $Yrs_in_business=$check_token_valid['data'][0]['Yrs_in_business'];
echo $Mailing_Address=$check_token_valid['data'][0]['Mailing_Address'];
echo $City_Two=$check_token_valid['data'][0]['City_Two'];
echo $State_Two=$check_token_valid['data'][0]['State_Two'];
echo $ZIP_Code_Two=$check_token_valid['data'][0]['ZIP_Code_Two'];
echo $E_mail_Address=$check_token_valid['data'][0]['E_mail_Address'];
echo $Radious_0_50_miles=$check_token_valid['data'][0]['Radious_0_50_miles'];
echo $Radious_50_200_miles=$check_token_valid['data'][0]['Radious_50_200_miles'];
echo $Radious_400_miles=$check_token_valid['data'][0]['Radious_200_miles'];
echo $Radious_600_miles=$check_token_valid['data'][0]['Radious_600_miles'];	
//Number [0] driver data 
// echo $driver_Name1=$check_token_valid['data'][0]['Drivers1'][0]['Name1'];
// echo $DOB_Age_MaritalStatus_Points_LicenceNo=$check_token_valid['data'][0]['Drivers1'][0]['DOB_Age_MaritalStatus_Points_LicenceNo'];

echo $count=count($check_token_valid['data'][0]['Drivers1']);
echo "exit";
for($i = 0; $i<$count; $i++){
echo $drivername=$check_token_valid['data'][0]['Drivers1'][$i]['Name1'];
$DOB_Age_MaritalStatus_Points_LicenceNo=$check_token_valid['data'][0]['Drivers1'][$i]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo); 
echo"<br>"; 
echo $DOB=$str_arr[0]; 
echo"<br>";
echo $Age=$str_arr[1]; 
echo"<br>";
echo $MaritalStatus=$str_arr[2]; 
echo"<br>";
echo $Points=$str_arr[3]; 
echo"<br>";
echo $LicenceNo=$str_arr[4];
echo"<br>";
 $Experience_Years=$check_token_valid['data'][0]['Drivers1'][$i]['Experience_Years'];	
$Hire_Date=$check_token_valid['data'][0]['Drivers1'][$i]['Hire_Date'];
echo "<pre>";
print_r($check_token_valid['data']);
echo "</pre>";
}

// $str_arr = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo);  
// echo $DOB=$str_arr[0]; 
// echo"<br>";
// echo $Age=$str_arr[1]; 
// echo"<br>";
// echo $MaritalStatus=$str_arr[2]; 
// echo"<br>";
// echo $Points=$str_arr[3]; 
// echo"<br>";
// echo $LicenceNo=$str_arr[4]; 

// echo $Experience_Years=$check_token_valid['data'][0]['Drivers1'][0]['Experience_Years'];	
// echo $Hire_Date=$check_token_valid['data'][0]['Drivers1'][0]['Hire_Date'];

}
// New [1] driver data 
echo $driver_Name11=$check_token_valid['data'][0]['Drivers1'][1]['Name1'];
echo $DOB_Age_MaritalStatus_Points_LicenceNo1=$check_token_valid['data'][0]['Drivers1'][1]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr1 = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo1);  
echo $DOB1=$str_arr1[0]; 
echo"<br>";
echo $Age1=$str_arr1[1]; 
echo"<br>";
echo $MaritalStatus1=$str_arr1[2]; 
echo"<br>";
echo $Points1=$str_arr1[3]; 
echo"<br>";
echo $LicenceNo1=$str_arr1[4]; 

echo $Experience_Years1=$check_token_valid['data'][0]['Drivers1'][1]['Experience_Years'];	
echo $Hire_Date1=$check_token_valid['data'][0]['Drivers1'][1]['Hire_Date'];
// New [2] driver data 
echo $driver_Name12=$check_token_valid['data'][0]['Drivers1'][2]['Name1'];
echo $DOB_Age_MaritalStatus_Points_LicenceNo2=$check_token_valid['data'][0]['Drivers1'][2]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr2 = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo2);  
echo $DOB2=$str_arr2[0]; 
echo"<br>";
echo $Age2=$str_arr2[1]; 
echo"<br>";
echo $MaritalStatus2=$str_arr2[2]; 
echo"<br>";
echo $Points2=$str_arr2[3]; 
echo"<br>";
echo $LicenceNo2=$str_arr2[4]; 

echo $Experience_Years2=$check_token_valid['data'][0]['Drivers1'][2]['Experience_Years'];	
echo $Hire_Date2=$check_token_valid['data'][0]['Drivers1'][2]['Hire_Date'];	

// New [3] driver data 
echo $driver_Name13=$check_token_valid['data'][0]['Drivers1'][3]['Name1'];
echo $DOB_Age_MaritalStatus_Points_LicenceNo3=$check_token_valid['data'][0]['Drivers1'][3]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr3 = preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo3);  
echo $DOB3=$str_arr3[0]; 
echo"<br>";
echo $Age3=$str_arr3[1]; 
echo"<br>";
echo $MaritalStatus3=$str_arr3[2]; 
echo"<br>";
echo $Points3=$str_arr3[3]; 
echo"<br>";
echo $LicenceNo3=$str_arr3[4]; 

echo $Experience_Years3=$check_token_valid['data'][0]['Drivers1'][3]['Experience_Years'];	
echo $Hire_Date3=$check_token_valid['data'][0]['Drivers1'][3]['Hire_Date'];	
// New [4] driver data 
echo $driver_Name14=$check_token_valid['data'][0]['Drivers1'][4]['Name1'];
echo $DOB_Age_MaritalStatus_Points_LicenceNo4=$check_token_valid['data'][0]['Drivers1'][4]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr4= preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo4);  
echo $DOB4=$str_arr4[0]; 
echo"<br>";
echo $Age4=$str_arr4[1]; 
echo"<br>";
echo $MaritalStatus4=$str_arr4[2]; 
echo"<br>";
echo $Points4=$str_arr4[3]; 
echo"<br>";
echo $LicenceNo4=$str_arr4[4]; 

echo $Experience_Years4=$check_token_valid['data'][0]['Drivers1'][4]['Experience_Years'];	
echo $Hire_Date4=$check_token_valid['data'][0]['Drivers1'][4]['Hire_Date'];	
// New [5] driver data 
echo $driver_Name15=$check_token_valid['data'][0]['Drivers1'][5]['Name1'];
echo $DOB_Age_MaritalStatus_Points_LicenceNo5=$check_token_valid['data'][0]['Drivers1'][5]['DOB_Age_MaritalStatus_Points_LicenceNo'];

$str_arr5= preg_split ("/\,/", $DOB_Age_MaritalStatus_Points_LicenceNo5);  
echo $DOB5=$str_arr5[0]; 
echo"<br>";
echo $Age5=$str_arr5[1]; 
echo"<br>";
echo $MaritalStatus5=$str_arr5[2]; 
echo"<br>";
echo $Points5=$str_arr4[3]; 
echo"<br>";
echo $LicenceNo5=$str_arr5[4]; 

echo $Experience_Years5=$check_token_valid['data'][0]['Drivers1'][5]['Experience_Years'];	
echo $Hire_Date5=$check_token_valid['data'][0]['Drivers1'][5]['Hire_Date'];	
	
	

 $query3 = "SELECT * FROM public.contact_vehicles where contact_id='".$_GET['contact_id']."' AND vehicle_type='Trailer'";
$result3 = pg_query($query3);
$row9 = pg_fetch_assoc($result3);

	while ($row3 = pg_fetch_assoc($result3)) {
 if($row3['vehicle_type'] == 'Trailer'){
	 $arrid[]=$row3['id'];
	 $arrvin[]=$row3['vin'];
	 $arryear[]=$row3['year'];
	 $arrmake[]=$row3['make'];
 }
}
echo "<br>";
echo $row9['id'];
echo $arrid[0];
echo $arrid[1];
echo $arrid[2];
echo $arrid[3];
echo "<br>";
echo $row9['vin'];
echo $arrvin[0];
echo $arrvin[1];
echo $arrvin[2];
echo $arrvin[3];
echo "<br>";
echo $row9['year'];
echo $arryear[0];
echo $arryear[1];
echo $arryear[2];
echo $arryear[3];
echo "<br>";
echo $row9['make'];
echo $arrmake[0];
echo $arrmake[1];
echo $arrmake[2];
echo $arrmake[3];
echo "===========================";
$query5 = "SELECT * FROM public.contact_vehicles where contact_id='".$_GET['contact_id']."' AND vehicle_type !='Trailer'";
$res5 = pg_query($query5);
$row6 = pg_fetch_assoc($res5);

	while ($row5 = pg_fetch_assoc($res5)) {
 if($row5['vehicle_type'] !== 'Trailer'){
	 $arrayid[]=$row5['id'];
	 $arrayvin[]=$row5['vin'];
	 $arrayyear[]=$row5['year'];
	 $arraymake[]=$row5['make'];
 }
}
echo "<br>";
echo $row6['id'];
echo $arrayid[0];
echo $arrayid[1];
echo $arrayid[2];
echo $arrayid[3];
echo "<br>";
echo $row6['vin'];
echo $arrayvin[0];
echo $arrayvin[1];
echo $arrayvin[2];
echo $arrayvin[3];
echo "<br>";
echo $row6['year'];
echo $arrayyear[0];
echo $arrayyear[1];
echo $arrayyear[2];
echo $arrayyear[3];
echo "<br>";
echo $row6['make'];
echo $arraymake[0];
echo $arraymake[1];
echo $arraymake[2];
echo $arraymake[3];
echo "=======================";
$query = "SELECT * FROM public.contact_commodities where contact_id='".$contact_id."'";
$result = pg_query($query);
$row4 = pg_fetch_assoc($result);
$rows = pg_num_rows($result);
if($rows>=1){
	while ($row = pg_fetch_assoc($result)) { 
	 $array_id[]=$row['id'];
	 $array_name[]=$row['name'];
	 $array_value[]=$row['value'];
	 

		 
	}
}
	echo $row4['id'];
	echo $array_id[0];
	echo $array_id[1];
	echo $array_id[2];
	echo $array_id[3];
	echo '<br>';
	echo $row4['name'];
	echo $array_name[0];
	echo $array_name[1];
	echo $array_name[2];
	echo $array_name[3];	
	echo '<br>';
	echo $row4['value'];
	echo $array_value[0];
	echo $array_value[1];
	echo $array_value[2];
	echo $array_value[3];		
	echo '<br>';
		
?>
<html>
<head>
	<title>
		Microsoft Word - 38118152_ATU+Non-Fleet+App+(1-5+units)
	</title>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	body{
	margin:0;
	font-family: Arial;
	}
	</style>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="http://givesurance.herokuapp.com/non_fleet_form/js/script.js"></script>
	</head>
	<body>
	<fieldset class='dataform'>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td cellspacing="0">
	<table width="800" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center" cellspacing="0">
	<table width="100%" align="center" height="60" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="50%" align="left" cellpadding="0" cellspacing="0">
	<tr>
	<td align="left">		
	<img src="http://givesurance.herokuapp.com/non_fleet_form/img/logo.png" alt="logo"/>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right" style="font-size:18px;color: #5081bd;height: 30px;">		
	<b>ATU Non-Fleet Application (1-5 Units)</b>
	</td>
	</tr>
	<tr>
	<td align="right" style="font-size: 14px;color: #5081bd;">		
	<i>Auto Liability – Cargo – Physical Damage – General Liability </i>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" height="6" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1">
	<tr>
	<td>
	<table width="100%" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Agency Information</b>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left">				
	<table align="left" width="60%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-right: 1px solid #000000;">	
	<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30"  style="font-size:12px;">
			Submitting Agency:
		</td>
	</tr>
	</table>
	<table align="left" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="Submitting Agency" class='submitting_agency' id="submitting_agency" width="100%" style="width:314px;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="right" width="40%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-left: 1px solid #000000;">		
	<table align="left" width="140" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Contact Person:
		</td>
	</tr>
	</table>
	<table align="left" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="Contact_Person" class="contact_person" id="Contact_Person" width="100%" style="width:160px;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" style="border: 2px solid #000000; border-bottom:0;">
	<tr>
	<td>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Applicant Information</b>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-bottom:2px solid #000;">
	<tr>
	<td align="left">				
	<table align="left" width="65%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-right: 1px solid #000000;">	
			<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						Applicant Name:
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Applicant_Name" class='applicant_name' id="applicant_name" value="<?php echo $first_name;?>" width="49%" style="width:180px;border: 0;font-size:14px;"/>
						<input type="text" name="applicant_lastname" class='applicant_lastname' id="applicant_lastname" value="<?php echo $last_name;?>" width="49%" style="width:180px;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<table align="right" width="35%" height="30"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" height="30"  width="140" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" style="font-size:12px;">
						Effective Date: 
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Effective Date" class='effective_date' id="effective_date" value="<?php echo $effective_date; ?>" width="100%" style="width:125px;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-bottom:2px solid #000;">
	<tr>
	<td align="left">				
	<table align="left" width="65%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-right: 1px solid #000000;">	
			<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						Garaging Address:
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Garaging_Address" class='garaging_address' id="garaging_address" value="<?php echo $garaging_address; ?>" width="100%" style="width:360px;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<table align="right" width="35%" height="30"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" height="30" cellpadding="6" cellspacing="0" width="140px" bgcolor="#eeece1">
				<tr>
					<td align="center" style="font-size:12px;">
						DOT #: 
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="DOT" class='dot' id="dot" width="100%" value="<?php echo $USDOT_Assigned_to; ?>" style="width:125px;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-bottom:2px solid #000;">
	<tr>
	<td align="left">				
	<table align="left" width="65%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-right: 1px solid #000000;">	
			<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						City, State, Zip: 
					</td>
				</tr>
			</table>
<table align="left" cellpadding="6" cellspacing="0">
			<tr>
				<td align="center">
					<input type="text" name="City" class='City' id="City" value="<?php  ?>"  style="width:110px;border: 0;font-size:14px;"/>
				</td>
				<td align="center">
					<input type="text" name="State" class='State' id="State" value="<?php  ?>" style="width:110px;border: 0;font-size:14px;"/>
				</td>
				<td align="center">
					<input type="text" name="Zip" class='Zip' id="Zip" value="<?php  ?>" style="width:110px;border: 0;font-size:14px;"/>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	</table>
	<table align="right" width="35%" height="30"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" height="30"  width="140" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" style="font-size:12px;">
						Years in Bus:
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Years in Bus:" class='years_in_bus:' id="years_in_bus" value="<?php echo $Yrs_in_business; ?>" width="100%" style="width:125px;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-bottom:2px solid #000;">
	<tr>
	<td align="left">
	<table align="left" width="50%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-right: 1px solid #000000;">	
			<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30"  style="font-size:12px;">
						Mailing Address:
					</td>
				</tr>
			</table>
			<table align="left" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Mailing_Address" class='mailing_address' id="mailing_address" value="<?php echo $Mailing_Address; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<table align="right" width="50%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" width="140" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						City, State, Zip:
					</td>
				</tr>
			</table>
<table align="left" cellpadding="6" cellspacing="0">
		<tr>
			<td align="center">
				<input type="text" name="City2" class='City2' id="City2" value="<?php  ?>"  style="width:110px;border: 0;font-size:14px;"/>
			</td>
			<td align="center">
				<input type="text" name="State2" class='State2' id="State2" value="<?php  ?>" style="width:110px;border: 0;font-size:14px;"/>
			</td>
			<td align="center">
				<input type="text" name="Zip2" class='Zip2' id="Zip2" value="<?php  ?>" style="width:110px;border: 0;font-size:14px;"/>
			</td>
		</tr>
	</table>
		


			
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-bottom:2px solid #000;">
	<tr>
	<td align="left">
	<table align="left" width="33.3%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-right: 1px solid #000000;">	
			<table align="left" width="140"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30"  style="font-size:12px;">
						Contact Name: 
					</td>
				</tr>
			</table>
			<table align="left" width="123" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Contact Name" class='contact_name' id="contact_name" value="<?php echo $first_name; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<table align="right" width="33.3%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" width="40%" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						Phone #: 
					</td>
				</tr>
			</table>
			<table align="left" width="123" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="Phone" class='phone' id="Phone" value="<?php echo $phone_number; ?>"  width="100%" style="width:100%;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	<table align="right" width="33.3%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
		<td align="left" style="border-left: 1px solid #000000;">		
			<table align="left" width="40%" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
				<tr>
					<td align="center" height="30" style="font-size:12px;">
						E-mail Address:
					</td>
				</tr>
			</table>
			<table align="left" width="123" cellpadding="6" cellspacing="0">
				<tr>
					<td align="center">
						<input type="text" name="e-mail" class='e-mail' id="e-mail" value="<?php echo $E_mail_Address; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Applicant Information</b>
	</td>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td>
	<table align="left" width="25%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-right: 1px solid #000000;">	
	<table align="left" width="100"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30"  style="font-size:12px;">
			0-100 Miles 
		</td>
	</tr>
	</table>
	<table align="left" width="86" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="miles" class='miles' id="miles" value="<?php echo $Radious_0_50_miles; ?>" width="100%" style="width:86;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="right" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-left: 1px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			100-300 Miles 
		</td>
	</tr>
	</table>
	<table align="left" width="86" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="miles_2" class='miles_2' id="miles_2" value="<?php echo $Radious_50_200_miles; ?>" width="100%" style="width:86px;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="right" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-left: 1px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			300-500 Miles
		</td>
	</tr>
	</table>
	<table align="left" width="86" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="miles_3" class='miles_3' id="miles_3" value="<?php echo $Radious_400_miles; ?>" width="100%" style="width:86;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="right" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border-left: 1px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			500 Miles + 
		</td>
	</tr>
	</table>
	<table align="left" width="86" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="miles_4" class='miles_4' id="miles_4" value="<?php echo $Radious_600_miles; ?>" width="100%" style="width:86;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td>
	<table align="left" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border-top:2px solid #000;">
	<tr>
	<td align="left">	
	<table align="left" width="295"  cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30"  style="font-size:12px;">
			Major cities travelled through:
		</td>
	</tr>
	</table>
	<table align="left" width="500" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="major" class='major' id="major" width="100%" style="width:86;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="33.3%" align="left" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="100%" align="left" height="30" cellpadding="3" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td style="font-size:12px;">
	<b>Auto Liability Coverage</b>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			CSL:
		</td>
	</tr>
	</table>
	<table align="left" width="143" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="csl" class='csl' id="csl" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			UM/UIM:
		</td>
	</tr>
	</table>
	<table align="left" width="143" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="UM_UIM:" class='um_uim' id="um_uim" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			PIP:
		</td>
	</tr>
	</table>
	<table align="left" width="143" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="pip" class='pip' id="pip" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="33.3%" align="left" cellpadding="0" cellspacing="0" style="padding: 0 10px;">
	<tr>
	<td>
	<table width="100%" align="left" height="30" cellpadding="3" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td style="font-size:12px;">
	<b>Physical Damage Coverage </b>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Deductible:
		</td>
	</tr>
	</table>
	<table align="left" width="142" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="deductible" class='deductible' id="deductible" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="comprehensive" class='comprehensive' id="comprehensive" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="200" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Comprehensive / Collision
		</td>
	</tr>
	</table>																	
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="specified" class='specified' id="specified" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>																
	<table align="left" width="200" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			 Specified Perils / Collision 
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="33.3%" align="left" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="100%" align="left" height="30" cellpadding="3" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td style="font-size:12px;">
	<b>Motor Truck Cargo Coverage</b>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Limit:
		</td>
	</tr>
	</table>
	<table align="left" width="142" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="limit" class='limit' id="limit" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Deductible:
		</td>
	</tr>
	</table>
	<table align="left" width="142" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="motor_deductible" class='motor_deductible' id="motor_deductible" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="reefer" class='reefer' id="reefer" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>																
	<table align="left" width="200" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			 Reefer Breakdown?
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Additional Coverages </b>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left">
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="hired" class='hired' id="hired" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>																
	<table align="left" width="160" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			 Hired Auto
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="owned" class='owned' id="owned" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>																
	<table align="left" width="160" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Non-Owned Auto 
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="truckers" class='truckers' id="truckers" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>																
	<table align="left" width="160" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Truckers GL (99793)
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">																
	<table align="left" width="100%" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Provide ACORD 126 to bind
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="30%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left">
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="110" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="31" style="font-size:12px;">
			Cost of Hire 
		</td>
	</tr>
	</table>
	<table align="left" width="110" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="Cost" class='cost' id="cost" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="110" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="31" style="font-size:12px;">
			# of Employees 
		</td>
	</tr>
	</table>
	<table align="left" width="110" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="employees" class='employees' id="employees" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="110" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="31" style="font-size:12px;">
			Non-Driver Payroll 
		</td>
	</tr>
	</table>
	<table align="left" width="110" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="payroll" class='payroll' id="payroll" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;">		
	<table align="left" width="110" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			# of Owners 
		</td>
	</tr>
	</table>
	<table align="left" width="110" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="owners" class='owners' id="owners" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="45.2%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;width:50%;">		
	<table align="left" width="30" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="checkbox" name="interchange" class='interchange' id="interchange" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="140" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			 Trailer Interchange 
		</td>
	</tr>
	</table>		
	</td>
	<td align="left" style="border: 2px solid #000000;width:50%;">			
	<table align="left" width="60" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			Limit:
		</td>
	</tr>
	</table>
	<table align="left" width="100" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="limit" class='limit' id="limit" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;width:50%;">			
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			# of Trailers 
		</td>
	</tr>
	</table>
	<table align="left" width="250" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="trailers" class='trailers' id="trailers" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;width:50%;">			
	<table align="left" width="100" cellpadding="6" cellspacing="0" bgcolor="#eeece1">
	<tr>
		<td align="center" height="30" style="font-size:12px;">
			# of Days Active
		</td>
	</tr>
	</table>
	<table align="left" width="250" cellpadding="6" cellspacing="0">
	<tr>
		<td align="center">
			<input type="text" name="active" class='active' id="active" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#ffffff">
	<tr>
	<td align="left" style="border: 2px solid #000000;width:50%;">			
	<table align="left" width="100%" height="32" cellpadding="6" cellspacing="0">
	<tr>
		<td align="left" height="30" style="font-size:12px;">
			Is a signed interchange agreement in place?
			<input type="checkbox" name="interchange_agreement" class='interchange_agreement' id="interchange_agreement">Yes
			<input type="checkbox" name="place" class='place' id="place">No
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Vehicle Schedule  </b>
	</td>
	</tr>
	</table>
	<table align="left" width="45%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Tractors (Year, Make) 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Tractors1id" class='tractors' id="tractors1id" value="<?php echo $row6['id']; ?>"/>
	<input type="text" name="Tractors1" class='tractors' id="tractors1" value="<?php echo $row6['year']; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="make1" class='tractors' id="make1" value="<?php echo $row6['make']; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Tractors2id" class='Tractors2id' id="Tractors2id" value="<?php echo $arrayid[0]; ?>"/>
	<input type="text" name="Tractors2" class='tractors' id="tractors2" value="<?php echo $arrayyear[0]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	<input type="text" name="make2" class='tractors' id="make2" value="<?php echo $arraymake[0]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Tractors3id" class='Tractors3id' id="Tractors3id" value="<?php echo $arrayid[1]; ?>"/>	
	<input type="text" name="Tractors3" class='tractors' id="tractors3" value="<?php echo $arrayyear[1]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	<input type="text" name="make3" class='tractors' id="make3" value="<?php echo $arraymake[1]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Tractors4id" class='Tractors4id' id="Tractors4id" value="<?php echo $arrayid[2]; ?>"/>
	<input type="text" name="Tractors4" class='tractors' id="tractors4" value="<?php echo $arrayyear[2]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	<input type="text" name="make4" class='tractors' id="make4" value="<?php echo $arraymake[2]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Tractors5id" class='Tractors5id' id="Tractors5id" value="<?php echo $arrayid[3]; ?>"/>
	<input type="text" name="Tractors5" class='tractors' id="tractors5" value="<?php echo $arrayyear[3]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	<input type="text" name="make5" class='tractors' id="make5" value="<?php echo $arraymake[3]; ?>" width="48%" style="width:48%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="30%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	VIN 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="VIN1" class='vin' id="vin1" value="<?php echo $row6['vin']; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VINid1" class='vin' id="VINid1" value="<?php echo $row6['id']; ?>"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="vin2" class='tractors' id="vin2" value="<?php echo $arrayvin[0]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	<input type="hidden" name="VINid2" class='vin' id="VINid2" value="<?php echo $arrayid[0]; ?>"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="vin3" class='tractors' id="vin3" value="<?php echo $arrayvin[1]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	<input type="hidden" name="VINid3" class='vin' id="VINid3" value="<?php echo $arrayid[1]; ?>"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="vin4" class='tractors' id="vin4" value="<?php echo $arrayvin[2]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	<input type="hidden" name="VINid4" class='vin' id="VINid4" value="<?php echo $arrayid[2]; ?>"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="vin5" class='tractors' id="vin5" value="<?php echo $arrayvin[3]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	<input type="hidden" name="VINid5" class='vin' id="VINid5" value="<?php echo $arrayid[3]; ?>"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Stated Amount 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated1" class='Stated' id="Stated1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated2" class='tractors' id="Stated2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated3" class='tractors' id="Stated3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated4" class='tractors' id="Stated4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated5" class='tractors' id="Stated5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table align="left" width="45%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Trailers (Year, Make)
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="trailer1id" class='trailer1id' id="trailer1id" value="<?php echo $row9['id']; ?>"/>
	<input type="text" name="trailer1" class='tractors' id="trailer1" value="<?php echo $row9['year']; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="trailermake1" class='tractors' id="trailermake1" value="<?php echo $row9['make']; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="trailer2id" class='trailer2id' id="trailer2id" value="<?php echo $arrid[0]; ?>"/>
	<input type="text" name="trailer2" class='tractors' id="trailer2" value="<?php echo $arryear[0]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="trailermake2" class='tractors' id="trailermake2" value="<?php echo $arrmake[0]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="trailer3id" class='trailer3id' id="trailer3id" value="<?php echo $arrid[1]; ?>"/>
	<input type="text" name="trailer3" class='tractors' id="trailer3" value="<?php echo $arryear[1]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="trailermake3" class='tractors' id="trailermake3" value="<?php echo $arrmake[1]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="trailer4id" class='trailer4id' id="trailer4id" value="<?php echo $arrid[4]; ?>"/>
	<input type="text" name="trailer4" class='tractors' id="trailer4" value="<?php echo $arryear[2]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="trailermake4" class='tractors' id="trailermake4" value="<?php echo $arrmake[2]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="trailer5id" class='trailer5id' id="trailer5id" value="<?php echo $arrid[4]; ?>"/>
	<input type="text" name="trailer5" class='tractors' id="trailer5" value="<?php echo $arryear[3]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	<input type="text" name="trailermake5" class='tractors' id="trailermake5" value="<?php echo $arrmake[3]; ?>" width="45%" style="width:45%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
<table align="left" width="30%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	VIN 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>

	<input type="text" name="VIN_new" class='vin' id="VIN_new" value="<?php echo $row9['vin']; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VIN_newid1" class='vin' id="VIN_newid1" value="<?php echo $row9['id']; ?>"/>	
	
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="VIN_new2" class='vin' id="VIN_new2" value="<?php echo $arrvin[0]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VIN_newid2" class='vin' id="VIN_newid2" value="<?php echo $arrid[0]; ?>"/>	
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="VIN_new3" class='vin' id="VIN_new3" value="<?php echo $arrvin[1]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VIN_newid3" class='vin' id="VIN_newid3" value="<?php echo $arrid[1]; ?>"/>	
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="VIN_new4" class='vin' id="VIN_new4" value="<?php echo $arrvin[2]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VIN_newid4" class='vin' id="VIN_newid4" value="<?php echo $arrid[2]; ?>"/>	
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="VIN_new5" class='vin' id="VIN_new5" value="<?php echo $arrvin[2]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
    <input type="hidden" name="VIN_newid5" class='vin' id="VIN_newid5" value="<?php echo $arrid[2]; ?>"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Stated Amount 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Amount1" class='tractors' id="Amount1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Amount2" class='tractors' id="Amount2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Amount3" class='tractors' id="Amount3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Amount4" class='tractors' id="Amount4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Amount5" class='tractors' id="Amount5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="100%" align="center" height="60" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="50%" align="left" cellpadding="0" cellspacing="0">
	<tr>
	<td align="left">		
	<img src="http://givesurance.herokuapp.com/non_fleet_form/img/logo.png" alt="logo"/>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right" style="font-size:18px;color: #5081bd;height: 30px;">		
	<b>ATU Non-Fleet Application (1-5 Units)</b>
	</td>
	</tr>
	<tr>
	<td align="right" style="font-size: 14px;color: #5081bd;">		
	<i>Auto Liability – Cargo – Physical Damage – General Liability </i>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" height="6" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" height="30" align="center" bgcolor="#c6d9f1" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;width: 30%;">				
	<b>Drivers</b>
	</td>
	<td align="left" style="font-size: 12px;width: 70%;">				
	<b>* * Employed drivers, including owner = E | Independent Contractors = O</b>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table align="left" width="25%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" height="42" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Name 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Name1" class='name' id="name1" width="100%" value="<?php echo $driver_Name1; ?>" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="name2" class='name' id="name2" width="100%" value="<?php echo $driver_Name11; ?>" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="name3" class='name' id="name3" width="100%" value="<?php echo $driver_Name12; ?>" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="name4" class='name' id="name4" value="<?php echo $driver_Name13; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="name5" class='name' id="name5" value="<?php echo $driver_Name14; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="5%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	E/O*
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="eo1" class='e/o' id="eo1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="eo2" class='eo2' id="eo2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="eo3" class='eo3' id="eo3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="eo4" class='eo4' id="eo4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="eo5" class='eo5' id="eo5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="20%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	State & License #  
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="state_license1" class='state&license' id="state_license1" value="<?php echo $LicenceNo; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="state_license2" class='state_license2' value="<?php echo $LicenceNo1; ?>" id="state_license2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="state_license3" class='state_license3' id="state_license3" value="<?php echo $LicenceNo2; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="state_license4" class='state_license4' id="state_license4" value="<?php echo $LicenceNo3; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="state_license5" class='state_license5' id="state_license5" value="<?php echo $LicenceNo4; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="12%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Years of Experience
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Years_of_Experience1" class='experience' id="experience1" value="<?php echo $Experience_Years; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="experience2" class='experience' id="experience2" value="<?php echo $Experience_Years1; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="experience3" class='experience' id="experience3" value="<?php echo $Experience_Years2; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="experience4" value="<?php echo $Experience_Years3; ?>" class='experience' id="experience4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="experience5" value="<?php echo $Experience_Years4; ?>" class='experience' id="experience5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="12%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Date of Birth
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="birth1" value="<?php echo $DOB; ?>" class='birth' id="birth" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="birth2" value="<?php echo $DOB1; ?>" class='birth' id="birth1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="birth3" class='birth' value="<?php echo $DOB2; ?>" id="birth3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="birth4" value="<?php echo $DOB3; ?>" class='birth' id="birth4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="birth5" value="<?php echo $DOB4; ?>" class='birth' id="birth5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="10.9%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Date of Hire 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="date1" value="<?php echo $Hire_Date; ?>" class='date' id="date1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="date2" value="<?php echo $Hire_Date1; ?>" class='date' id="date2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="date3" class='date' value="<?php echo $Hire_Date2; ?>" id="date3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="date4" value="<?php echo $Hire_Date3; ?>" class='date' id="date4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="date5" value="<?php echo $Hire_Date4; ?>" class='date' id="date5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="10%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="42"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	# Accidents/Violations
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Violations1" class='Violations' id="Violations1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Violations2" class='Violations' id="Violations2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Violations3" class='Violations' id="Violations3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Violations4" class='Violations' id="Violations4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Violations5" class='Violations' id="Violations5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Cargo Carried</b>
	</td>
	</tr>
	</table>
	<table align="left" width="30%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Commodity  
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Commodity1id" class='Commodity1id' value ="<?php echo $row4['id']; ?>" id="Commodity1id"/>
	<input type="text" name="Commodity1" class='Commodity1' value ="<?php echo $row4['name']; ?>" id="Commodity1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Commodity2id" class='Commodity2id' value ="<?php echo $array_id[0]; ?>" id="Commodity2id"/>
	<input type="text" name="Commodity2" class='Commodity2' id="Commodity2" value ="<?php echo $array_name[0]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Commodity3id" class='Commodity3id' value ="<?php echo $array_id[1]; ?>" id="Commodity3id"/>
	<input type="text" name="Commodity3" class='Commodity3' id="commodity3" value ="<?php echo $array_name[1]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Commodity4id" class='Commodity4id' value ="<?php echo $array_id[1]; ?>" id="Commodity4id"/>
	<input type="text" name="Commodity4" class='commodity' id="Commodity4" value ="<?php echo $array_name[2]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="hidden" name="Commodity5id" class='Commodity5id' value ="<?php  echo $array_id[1]; ?>" id="Commodity5id"/>
	<input type="text" name="Commodity5" class='commodity' id="Commodity5" value ="<?php echo $array_name[3]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="20%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	% Hauled  
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="hauled1" class='hauled' id="hauled1" value ="<?php echo $row4['value']; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="hauled2" class='hauled' id="hauled2" value ="<?php echo $array_value[0]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="hauled3" class='hauled' id="hauled3" value ="<?php echo $array_value[1]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="hauled4" class='hauled' id="hauled4" value ="<?php echo $array_value[2]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="hauled5" class='hauled' id="hauled5" value ="<?php echo $array_value[3]; ?>" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Maximum Value 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Value1" class='value' id="Value1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Value2" class='value' id="Value2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Value3" class='value' id="Value3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Value4" class='value' id="Value4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Value5" class='value' id="Value5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Average Value
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated_Amount1" class='tractors' id="Stated_Amount1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated_Amount2" class='tractors' id="Stated_Amount2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated_Amount3" class='tractors' id="Stated_Amount3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated_Amount4" class='tractors' id="Stated_Amount4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Stated_Amount5" class='tractors' id="Stated_Amount5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Operation History</b>
	</td>
	</tr>
	</table>
	<table align="left" width="30%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="60"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Projected Year  
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Current Year 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	1 Years Prior 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	2 Years Prior
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="20%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	# of Power Units
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Units_box1" class='Units' id="Units_box1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Units_box2" class='Units' id="Units_box2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Units_box3" class='Units' id="Units_box3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Units_box4" class='Units' id="Units_box4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Total Miles 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Total_Miles1" class='Total' id="Total_Miles1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Total_Miles2" class='Total' id="Total_Miles2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Total_Miles3" class='Total' id="Total_Miles3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Total_Miles4" class='Total' id="Total_Miles4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="25%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Gross Receipts
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Receipts1" class='Receipts' id="Receipts1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Receipts2" class='Receipts' id="Receipts2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Receipts3" class='Receipts' id="Receipts3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	<input type="text" name="Receipts4" class='Receipts' id="Receipts4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Loss History</b>
	</td>
	</tr>
	</table>
	<table align="left" width="15%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%" height="60"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">

	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Current Year 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	1 Years Prior 
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	2 Years Prior
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="28.3%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	# of Power Units
	</td>
	</tr>
	</table>
	<table align="left" width="50%" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%" height="32" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td align="center">
			# of Losses 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Power_new2" class='Units' id="Power_new2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Power_new3" class='Units' id="Power_new3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Power_new4" class='Units' id="Power_new4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" height="32" bgcolor="#eeeeef" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			Total Incurred 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred1 " class='Incurred' id="Total_Incurred1" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred2" class='Incurred' id="Total_Incurred2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred3" class='Incurred' id="Total_Incurred3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="28.4%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Physical Damage 
	</td>
	</tr>
	</table>
	<table align="left" width="50%" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%" height="32" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td align="center">
			# of Losses 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Losses_Damage1" class='Damage' id="Damage2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Losses_Damage2" class='Damage' id="Damage3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Losses_Damage3" class='Damage' id="Damage4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" height="32" bgcolor="#eeeeef" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			Total Incurred 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred_1" class='Damage' id="Damage5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred_2" class='Damage' id="Damage6" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Total_Incurred_3" class='Damage' id="Damage7" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table align="left" width="28.3%" cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="center">
	Motor Truck Cargo
	</td>
	</tr>
	</table>
	<table align="left" width="50%" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%" height="32" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td align="center">
			# of Losses 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck1" class='Cargo' id="Cargo2" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck2" class='Cargo' id="Cargo3" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck3" class='Cargo' id="Cargo4" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" height="32" bgcolor="#eeeeef" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			Total Incurred 
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck4" class='Cargo' id="Cargo5" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck5" class='Cargo' id="Cargo6" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#ffffff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
		<td>
			<input type="text" name="Motor_Truck6" class='Cargo' id="Cargo7" width="100%" style="width:100%;border: 0;font-size:14px;"/>
		</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" height="10">
	<tr>
	<td>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0" bgcolor="#c6d9f1" style="border: 2px solid #000000;">
	<tr>
	<td>
	<table width="100%" height="30" align="center" cellpadding="3" cellspacing="3" style="border-bottom: 1px solid #000000;">
	<tr>
	<td align="left" style="font-size: 12px;">				
	<b>Additional Questions </b>
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  cellpadding="0" cellspacing="0" bgcolor="#eeeeef">
	<tr>
	<td>
	<table align="left" width="100%"  cellpadding="6" cellspacing="0" bgcolor="#fff" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td align="left">
	Does the applicant have any owned, leased or operated equipment not listed on the vehicle schedule? <input type="checkbox" name="schedule" value="Yes" class='schedule' id="schedule"> Yes  <input type="checkbox" name="schedule" value="No" class='schedule2' id="schedule2"> No
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px"  cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Are any vehicles leased, loaned or rented to others? <input type="checkbox" name="schedule" value="Yes" class='schedule' id="schedule"> Yes  <input type="checkbox" name="schedule" class='schedule2' id="schedule2"> No
	</td>
	</tr>
	</table>
	<table align="left" width="100%"  height="32px" cellpadding="6" cellspacing="0" bgcolor="#eeeeef" style="font-size:12px;border: 1px solid #000000;">
	<tr>
	<td>
	Has the applicant’s policy canceled or non-renewed in the prior 3 years? <input type="checkbox" name="schedule" class='schedule' id="schedule"> Yes  <input type="checkbox" name="schedule" class='schedule2' id="schedule2"> No
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="100%" align="center" height="60" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="50%" align="left" cellpadding="0" cellspacing="0">
	<tr>
	<td align="left">		
	<img src="http://givesurance.herokuapp.com/non_fleet_form/img/logo.png" alt="logo"/>
	</td>
	</tr>
	</table>
	<table width="50%" align="right" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right" style="font-size:18px;color: #5081bd;height: 30px;">		
	<b>ATU Non-Fleet Application (1-5 Units)</b>
	</td>
	</tr>
	<tr>
	<td align="right" style="font-size: 14px;color: #5081bd;">		
	<i>Auto Liability – Cargo – Physical Damage – General Liability </i>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="left" style="font-size:12px;">	
	<b>Attention all applicants in the states of AL, AR, AZ, CO, DE, FL, IN, KY, MN, NH, NJ, NY, OH, OK, PA, TN, UT – For
	your protection, the preceding states’ laws require the following to appear on this form:</b> Any person who knowingly,
	and with intent to defraud any insurance company or other person, files an application for insurance or statement of claim
	containing any materially false, incomplete, or misleading information, or conceals information concerning any material fact
	thereto, commits a fraudulent insurance act, which is a crime punishable by incarceration, and shall also be subject to civil
	penalties. 
	</td>
	</tr>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<tr>
	<td align="left" style="font-size:12px;">	
	<b>For risks located in New York, Pennsylvania, and California: </b> Any person who knowingly makes
	or assists, abets, solicits	or conspires with another to make a false or misleading reports or the theft, destruction, damage
	or conversion of any motor vehicle to a law enforcement agency, a state department of motor vehicles, or an insurance company,
	commits perjury or a fraudulent insurance act, which are crimes punishable by incarceration, and shall also be subject to a
	civil penalty. 
	</td>
	</tr>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<tr>
	<td align="left" style="font-size:12px;">	
	The Applicant hereby applies to the Company for a policy of insurance as set forth in this application on the basis of
	statements contained herein. Applicant agrees that such policy shall be null and void if such information is materially false or
	misleading so that the Company would have rejected the risk, prior to inception. Applicant understands that an inquiry may
	be made which will provide applicable information concerning character, general reputation, financial stability and other
	pertinent financial data, personal characteristics, mode of living or other background information the company deems
	necessary in order to determine whether the Company will accept or reject Applicant for coverage. Upon written request,
	additional information as to the nature and scope of the inquiry, if one is made, will be provided. The Applicant understands
	this application is a request for quotation and no information provided herein shall be construed by either party as creating a
	binding contract for insurance. 
	</td>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr>
	</table>
	<table width="800" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table cellpadding="0" cellspacing="0" WIDTH="100%"; style="border:2px solid #000;">
	<tr>
	<td  width="70%">
	<input type="text" name="Cargo" class='Cargo' id="Cargo7" style="width:100%;">
	</td>
	<td  width="30%">
	<input type="text" name="Cargo" class='Cargo' id="Cargo7"  style="width:100%;">
	</td>
	</tr>														
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr></table>
	<table cellpadding="0" cellspacing="0" WIDTH="100%"; >
	<tr>
	<td  width="70%"> 
	Signature of Applicant
	</td>
	<td  width="30%">
	Date
	</td>
	</tr>														
	</table>
	<table cellpadding="0" cellspacing="0" WIDTH="100%"; style="border:2px solid #000;">
	<tr>
	<td  width="70%"> 
	<input type="text" name="Cargo" class='Cargo' id="Cargo7" style="width:100%;">
	</td>
	<td  width="30%">
	<input type="text" name="Cargo" class='Cargo' id="Cargo7"  style="width:100%;">
	</td>
	</tr>														
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr></table>
	<table cellpadding="0" cellspacing="0" WIDTH="100%"; >
	<tr>
	<td  width="70%"> 
	Signature of Applicant
	</td>
	<td  width="30%">
	Date
	</td>
	</tr>														
	</table>
	<table cellpadding="0" cellspacing="0" WIDTH="100%"; style="border:2px solid #000;">
	<tr>
	<td  width="70%">
	<input type="text" name="Cargo" class='Cargo' id="Cargo7" style="width:100%;">
	</td>
	<td  width="30%">
	<input type="text" name="Cargo" class='Cargo' id="Cargo7"  style="width:100%;">
	</td>
	</tr>														
	</table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr></table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">											
	</td>
	</tr></table>
	<table width="100%" align="center" height="10" cellpadding="0" cellspacing="0">
	<tr>
	<td>
	<table width="50%" align="left" height="10" cellpadding="0" cellspacing="0">
	<tr>
		<td align="left">
			<button style="background: #004d96;color: #fff;border: 0;padding: 10px 35px;text-transform: capitalize;">print</button>
		</td>
	</tr>
	</table>
	<table width="50%" align="right" height="10" cellpadding="0" cellspacing="0">
	<tr>
		<td align="right">
		<input type="button" name="submit" class="action-button save" value="save" style="background: #004d96;color: #fff;border: 0;padding: 10px 35px;text-transform: capitalize;"/>
	
		</td>
	</tr>
	</table>
		<span  class='save_success' style='display:none;color:green';>
		Please Fill all fields.
	</span>
	<input type="hidden" name="contactId" value="<?php echo $_GET['contact_id']; ?>" placeholder="Phone Number" required class='contactId' />
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
		</tr>
	</table>
	</fieldset>
</body>
</html>

<?php
}


else{
	echo "contact not found";
}

?>
