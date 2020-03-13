<?php

header("Content-Type:application/json");
//Define your Server host name here.
 $HostName = "localhost";
 
 //Define your MySQL Database Name here.
 $DatabaseName = "spa_latest";
 
 //Define your Database User Name here.
 $HostUser = "root";
 
 //Define your Database Password here.
 $HostPass = ""; 
 
 // Creating MySQL Connection.
 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

//Applying User Login query with email and password.
 //$loginQuery = "select * from spa_users_tracking_histroy where user_id = '4' and entry_date = '".$_POST['date']."'  ORDER BY id DESC LIMIT 1 ";
 $loginQuery = "select * from spa_users_tracking_histroy where user_id = '4' and entry_date = '2020-03-04'  ORDER BY id DESC LIMIT 1 ";
 
 // Executing SQL Query.
 $check_data = mysqli_query($con,$loginQuery); 
  $check = mysqli_fetch_array($check_data,MYSQLI_ASSOC);
	if(isset($check)){
		 $data['result']['lat'] = (float)$check['latitude'];
		 $data['result']['lng'] = (float)$check['longitude'];
		$data['status'] = true;
	} else {
        $data['status'] = false;
	}

echo json_encode($data);