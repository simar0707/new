<?php
print_r($_POST['dataform']);
echo $_POST['submitting_agency'];
echo $_POST['Contact_Person'];
echo $_POST['Applicant_Name'];
echo $_POST['garaging_address'];
echo $_POST['dot'];

$submitting_agency=$_POST['submitting_agency'];
$Contact_Person=$_POST['Contact_Person'];
//applicant info
$Applicant_Name=$_POST['Applicant_Name'];
$effective_date=$_POST['effective_date'];
$garaging_address=$_POST['garaging_address'];
$dot=$_POST['dot'];
$City=$_POST['City'];
$State=$_POST['State'];
$Zip=$_POST['Zip'];
$years_in_bus=$_POST['years_in_bus'];
$mailing_address=$_POST['mailing_address'];
$City2=$_POST['City2'];
$State2=$_POST['State2'];
$Zip2=$_POST['Zip2'];
$contact_name=$_POST['contact_name'];
$e_mail=$_POST['e_mail'];
$Phone=$_POST['Phone'];
//Applicant Information for miles zoho

$miles=$_POST['miles'];
$miles_2=$_POST['miles_2'];
$miles_3=$_POST['miles_3'];
$miles_4=$_POST['miles_4'];
$major=$_POST['major'];

// Auto Liability Coverage for database table
// public.liability_damage_truck_cargo_coverage

// (Column) id, csl, um_uim, pip, deductible, comprehensive, specified_perils, "limit", truck_cargo_deductible, reefer_breakdown, contact_id	FROM public.liability_damage_truck_cargo_coverage

$csl=$_POST['csl'];
$um_uim=$_POST['um_uim'];
$pip=$_POST['pip'];
$limit=$_POST['limit'];
$deductible=$_POST['deductible'];
$motor_deductible=$_POST['motor_deductible'];

    //INSERT INTO public.additional_coverages(id, contact_id, hired_auto, non_owned_auto, truckers_gl, cost_of_hire, of_employees, non_driver_payroll, of_owners, trailer_interchange, additional_coverage_limit, of_trailers, of_days_active, interchange_agreement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
 
$cost=$_POST['cost'];
$effective_date=$_POST['effective_date'];
$employees=$_POST['employees'];
$owners=$_POST['owners'];
$limit=$_POST['limit'];
$trailers=$_POST['trailers'];
$active=$_POST['active'];

// Tractors (Year, Make) data save in database in  
// INSERT INTO public.contact_vehicles(id, contact_id, vehicle_type, vin, gross_weight, longest_trip, city_of_destination, category, year, make, model, body_style, garaging_zip_code, radius, is_business, is_comprehensive, value, loss_payee, trailer_type, non_owned_value, name, address, need_modification, vehicle_number, trailer_number, sub_category, power_unit, city_percent, physical_damage_coverage, is_owner_operator, is_team_driven, estimated_annual_miles)VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

$tractors1id=$_POST['tractors1id'];
$Tractors1=$_POST['Tractors1'];
$make1=$_POST['make1'];
$VIN1=$_POST['VIN1'];
$Stated1=$_POST['Stated1'];

$Tractors2id=$_POST['Tractors2id'];
$tractors2=$_POST['tractors2'];
$make2=$_POST['make2'];
$vin2=$_POST['vin2'];
$Stated2=$_POST['Stated2'];


$Tractors3id=$_POST['Tractors3id'];
$Tractors3=$_POST['Tractors3'];
$make3=$_POST['make3'];
$vin3=$_POST['vin3'];
$Stated3=$_POST['Stated3'];

$Tractors4id=$_POST['Tractors4id'];
$Tractors4=$_POST['Tractors4'];
$make4=$_POST['make4'];
$vin4=$_POST['vin4'];
$Stated4=$_POST['Stated4'];

$Tractors5id=$_POST['Tractors5id'];
$Tractors5=$_POST['Tractors5'];
$make5=$_POST['make5'];
$vin5=$_POST['vin5'];
$Stated5=$_POST['Stated5'];

//Trailer (Year, Make) data save in database in 
// INSERT INTO public.contact_vehicles(id, contact_id, vehicle_type, vin, gross_weight, longest_trip, city_of_destination, category, year, make, model, body_style, garaging_zip_code, radius, is_business, is_comprehensive, value, loss_payee, trailer_type, non_owned_value, name, address, need_modification, vehicle_number, trailer_number, sub_category, power_unit, city_percent, physical_damage_coverage, is_owner_operator, is_team_driven, estimated_annual_miles) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);


$trailer1id=$_POST['trailer1id'];
$trailer1=$_POST['trailer1'];
$trailermake1=$_POST['trailermake1'];
$trailer2id=$_POST['trailer2id'];
$trailermake2=$_POST['trailermake2'];
$trailer3id=$_POST['trailer3id'];
$trailer3=$_POST['trailer3'];
$trailermake3=$_POST['trailermake3'];
$trailer4id=$_POST['trailer4id'];
$trailer4=$_POST['trailer4'];
$trailermake4=$_POST['trailermake4'];
$trailer5id=$_POST['trailer5id'];
$trailer5=$_POST['trailer5'];
$trailermake5=$_POST['trailermake5'];
$VIN_new=$_POST['VIN_new'];
$VIN_new2=$_POST['VIN_new2'];
$VIN_new3=$_POST['VIN_new3'];
$VIN_new4=$_POST['VIN_new4'];
$VIN_new5=$_POST['VIN_new5'];
$Amount1=$_POST['Amount1'];
$Amount2=$_POST['Amount2'];
$Amount3=$_POST['Amount3'];
$Amount4=$_POST['Amount4'];
$Amount5=$_POST['Amount5'];

// Driver insertion in zoho driver fields

$Name1=$_POST['Name1'];
$eo1=$_POST['eo1'];
$state_license1=$_POST['state_license1'];
$Years_of_Experience1=$_POST['Years_of_Experience1'];
$birth1=$_POST['birth1'];
$date1=$_POST['date1'];
$Violations1=$_POST['Violations1'];
//second 
$name2=$_POST['name2'];
$eo2=$_POST['eo2'];
$state_license2=$_POST['state_license2'];
$experience2=$_POST['experience2'];
$birth2=$_POST['birth2'];
$date2=$_POST['date2'];
$Violations2=$_POST['Violations2'];
//third
$name3=$_POST['name3'];
$eo3=$_POST['eo3'];
$state_license3=$_POST['state_license3'];
$experience3=$_POST['experience3'];
$birth3=$_POST['birth3'];
$date3=$_POST['date3'];
$Violations3=$_POST['Violations3'];
//thrid
$name4=$_POST['name4'];
$eo4=$_POST['eo4'];
$state_license4=$_POST['state_license4'];
$experience4=$_POST['experience4'];
$birth4=$_POST['birth4'];
$date4=$_POST['date4'];
$Violations4=$_POST['Violations4'];
//fourth
$name5=$_POST['name5'];
$eo5=$_POST['eo5'];
$state_license5=$_POST['state_license5'];
$experience5=$_POST['experience5'];
$birth5=$_POST['birth5'];
$date5=$_POST['date5'];
$Violations5=$_POST['Violations5'];

//Insert data in contact_commodities
// INSERT INTO public.contact_commodities(id, contact_id, name, value, max_value, average_value, percent)VALUES (?, ?, ?, ?, ?, ?, ?);
// UPDATE public.contact_commoditiesSET id=?, contact_id=?, name=?, value=?, max_value=?, average_value=?, percent=? WHERE <condition>;

$Commodity1id=$_POST['Commodity1id'];
$Commodity1=$_POST['Commodity1'];
$Commodity2id=$_POST['Commodity2id'];
$Commodity2=$_POST['Commodity2'];
$Commodity3id=$_POST['Commodity3id'];
$Commodity3=$_POST['Commodity3'];
$Commodity4id=$_POST['Commodity4id'];
$Commodity4=$_POST['Commodity4'];
$Commodity5id=$_POST['Commodity5id'];
$Commodity5=$_POST['Commodity5'];
$hauled1=$_POST['hauled1'];
$hauled2=$_POST['hauled2'];
$hauled3=$_POST['hauled3'];
$hauled4=$_POST['hauled4'];
$hauled5=$_POST['hauled5'];
$Value1=$_POST['Value1'];
$Value2=$_POST['Value2'];
$Value3=$_POST['Value3'];
$Value4=$_POST['Value4'];
$Value5=$_POST['Value5'];
$Stated_Amount1=$_POST['Stated_Amount1'];
$Stated_Amount2=$_POST['Stated_Amount2'];
$Stated_Amount3=$_POST['Stated_Amount3'];
$Stated_Amount4=$_POST['Stated_Amount4'];
$Stated_Amount5=$_POST['Stated_Amount5'];

//

$Units_box1=$_POST['Units_box1'];
$Units_box2=$_POST['Units_box2'];
$Units_box3=$_POST['Units_box3'];
$Units_box4=$_POST['Units_box4'];
$Total_Miles1=$_POST['Total_Miles1'];
$Total_Miles2=$_POST['Total_Miles2'];
$Total_Miles3=$_POST['Total_Miles3'];
$Total_Miles4=$_POST['Total_Miles4'];
$Receipts1=$_POST['Receipts1'];
$Receipts2=$_POST['Receipts2'];
$Receipts3=$_POST['Receipts3'];
$Receipts4=$_POST['Receipts4'];
$Power_new2=$_POST['Power_new2'];
$Power_new3=$_POST['Power_new3'];
$Power_new4=$_POST['Power_new4'];
$Total_Incurred1=$_POST['Total_Incurred1'];
$Total_Incurred2=$_POST['Total_Incurred2'];
$Total_Incurred3=$_POST['Total_Incurred3'];
$Losses_Damage1=$_POST['Losses_Damage1'];
$Losses_Damage2=$_POST['Losses_Damage2'];
$Losses_Damage3=$_POST['Losses_Damage3'];
$Total_Incurred_1=$_POST['Total_Incurred_1'];
$Total_Incurred_2=$_POST['Total_Incurred_2'];
$Total_Incurred_3=$_POST['Total_Incurred_3'];
$Motor_Truck1=$_POST['Motor_Truck1'];
$Motor_Truck2=$_POST['Motor_Truck2'];
$Motor_Truck3=$_POST['Motor_Truck3'];
$Motor_Truck4=$_POST['Motor_Truck4'];
$Motor_Truck5=$_POST['Motor_Truck5'];
$Motor_Truck6=$_POST['Motor_Truck6'];





/* exit();
	if(ISSET($_POST['savedata']) && $_POST['savedata']=='success'){
		echo $data = json_encode($_POST);
	} */
	
?>