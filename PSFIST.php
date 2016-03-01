<?php

/*TO DETER SPAMBOTS*/
$honey = $_POST['honey'];
$honey = (string)$honey;
$honeyLength = strlen($honey);
    	
 if($honeyLength > 0){
     header("Location:http://d-bird.org/PSF/PSFIST_Confirmation.html");
}

else{
  

$servername = "localhost";
$username = "dklein";
$password = "******";
$dbname = "Project_Safe_Flight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$date = $_POST['date'];
$volunteer = $_POST['volunteer'];
$route = $_POST['route'];
$hour = $_POST['hour'];
$minute = $_POST['minute'];
$ampm = $_POST['ampm'];
$duration = $_POST['duration'];
$weather = $_POST['weather'];

$time = $hour.":".$minute.$ampm;



$compileField0 = $_POST['compileField0'];
$compileField0 = str_replace("'", "", $compileField0);
$compileField1 = $_POST['compileField1'];
$compileField1 = str_replace("'", "", $compileField1);
$compileField2 = $_POST['compileField2'];
$compileField2 = str_replace("'", "", $compileField2);
$compileField3 = $_POST['compileField3'];
$compileField3 = str_replace("'", "", $compileField3);
$compileField4 = $_POST['compileField4'];
$compileField4 = str_replace("'", "", $compileField4);
$compileField5 = $_POST['compileField5'];
$compileField5 = str_replace("'", "", $compileField5);
$compileField6 = $_POST['compileField6'];
$compileField6 = str_replace("'", "", $compileField6);
$compileField7 = $_POST['compileField7'];
$compileField7 = str_replace("'", "", $compileField7);
$compileField8 = $_POST['compileField8'];
$compileField8 = str_replace("'", "", $compileField8);
$compileField9 = $_POST['compileField9'];
$compileField9 = str_replace("'", "", $compileField9);
$compileField10 = $_POST['compileField10'];
$compileField10 = str_replace("'", "", $compileField10);
$compileField11 = $_POST['compileField11'];
$compileField11 = str_replace("'", "", $compileField11);
$compileField12 = $_POST['compileField12'];
$compileField12 = str_replace("'", "", $compileField12);
$compileField13 = $_POST['compileField13'];
$compileField13 = str_replace("'", "", $compileField13);
$compileField14 = $_POST['compileField14'];
$compileField14 = str_replace("'", "", $compileField14);
$compileField15 = $_POST['compileField15'];
$compileField15 = str_replace("'", "", $compileField15);
$compileField16 = $_POST['compileField16'];
$compileField16 = str_replace("'", "", $compileField16);
$compileField17 = $_POST['compileField17'];
$compileField17 = str_replace("'", "", $compileField17);

$numberFound0 = $_POST['site0NumberFound'];
$numberFound1 = $_POST['site1NumberFound'];
$numberFound2 = $_POST['site2NumberFound'];
$numberFound3 = $_POST['site3NumberFound'];
$numberFound4 = $_POST['site4NumberFound'];
$numberFound5 = $_POST['site5NumberFound'];
$numberFound6 = $_POST['site6NumberFound'];
$numberFound7 = $_POST['site7NumberFound'];
$numberFound8 = $_POST['site8NumberFound'];
$numberFound9 = $_POST['site9NumberFound'];
$numberFound10 = $_POST['site10NumberFound'];
$numberFound11 = $_POST['site11NumberFound'];
$numberFound12 = $_POST['site12NumberFound'];
$numberFound13 = $_POST['site13NumberFound'];
$numberFound14 = $_POST['site14NumberFound'];
$numberFound15 = $_POST['site15NumberFound'];
$numberFound16 = $_POST['site16NumberFound'];
$numberFound17 = $_POST['site17NumberFound'];

$deadInjured0 = $_POST['deadInjuredRadio0'];
$deadInjured1 = $_POST['deadInjuredRadio1'];
$deadInjured2 = $_POST['deadInjuredRadio2'];
$deadInjured3 = $_POST['deadInjuredRadio3'];
$deadInjured4 = $_POST['deadInjuredRadio4'];
$deadInjured5 = $_POST['deadInjuredRadio5'];
$deadInjured6 = $_POST['deadInjuredRadio6'];
$deadInjured7 = $_POST['deadInjuredRadio7'];
$deadInjured8 = $_POST['deadInjuredRadio8'];
$deadInjured9 = $_POST['deadInjuredRadio9'];
$deadInjured10 = $_POST['deadInjuredRadio10'];
$deadInjured11 = $_POST['deadInjuredRadio11'];
$deadInjured12 = $_POST['deadInjuredRadio12'];
$deadInjured13 = $_POST['deadInjuredRadio13'];
$deadInjured14 = $_POST['deadInjuredRadio14'];
$deadInjured15 = $_POST['deadInjuredRadio15'];
$deadInjured16 = $_POST['deadInjuredRadio16'];
$deadInjured17 = $_POST['deadInjuredRadio17'];

$birdSex0 = $_POST['sexRadio0'];
$birdSex1 = $_POST['sexRadio1'];
$birdSex2 = $_POST['sexRadio2'];
$birdSex3 = $_POST['sexRadio3'];
$birdSex4 = $_POST['sexRadio4'];
$birdSex5 = $_POST['sexRadio5'];
$birdSex6 = $_POST['sexRadio6'];
$birdSex7 = $_POST['sexRadio7'];
$birdSex8 = $_POST['sexRadio8'];
$birdSex9 = $_POST['sexRadio9'];
$birdSex10 = $_POST['sexRadio10'];
$birdSex11 = $_POST['sexRadio11'];
$birdSex12 = $_POST['sexRadio12'];
$birdSex13 = $_POST['sexRadio13'];
$birdSex14 = $_POST['sexRadio14'];
$birdSex15 = $_POST['sexRadio15'];
$birdSex16 = $_POST['sexRadio16'];
$birdSex17 = $_POST['sexRadio17'];

$birdAge0 = $_POST['ageRadio0'];
$birdAge1 = $_POST['ageRadio1'];
$birdAge2 = $_POST['ageRadio2'];
$birdAge3 = $_POST['ageRadio3'];
$birdAge4 = $_POST['ageRadio4'];
$birdAge5 = $_POST['ageRadio5'];
$birdAge6 = $_POST['ageRadio6'];
$birdAge7 = $_POST['ageRadio7'];
$birdAge8 = $_POST['ageRadio8'];
$birdAge9 = $_POST['ageRadio9'];
$birdAge10 = $_POST['ageRadio10'];
$birdAge11 = $_POST['ageRadio11'];
$birdAge12 = $_POST['ageRadio12'];
$birdAge13 = $_POST['ageRadio13'];
$birdAge14 = $_POST['ageRadio14'];
$birdAge15 = $_POST['ageRadio15'];
$birdAge16 = $_POST['ageRadio16'];
$birdAge17 = $_POST['ageRadio17'];

$birdAction0 = $_POST['action0'];
$birdAction1 = $_POST['action1'];
$birdAction2 = $_POST['action2'];
$birdAction3 = $_POST['action3'];
$birdAction4 = $_POST['action4'];
$birdAction5 = $_POST['action5'];
$birdAction6 = $_POST['action6'];
$birdAction7 = $_POST['action7'];
$birdAction8 = $_POST['action8'];
$birdAction9 = $_POST['action9'];
$birdAction10 = $_POST['action10'];
$birdAction11 = $_POST['action11'];
$birdAction12 = $_POST['action12'];
$birdAction13 = $_POST['action13'];
$birdAction14 = $_POST['action14'];
$birdAction15 = $_POST['action15'];
$birdAction16 = $_POST['action16'];
$birdAction17 = $_POST['action17'];

$birdNotes0 = $_POST['notes0'];
$birdNotes0 = str_replace("'", "", $birdNotes0);
$birdNotes1 = $_POST['notes1'];
$birdNotes1 = str_replace("'", "", $birdNotes1);
$birdNotes2 = $_POST['notes2'];
$birdNotes2 = str_replace("'", "", $birdNotes2);
$birdNotes3 = $_POST['notes3'];
$birdNotes3 = str_replace("'", "", $birdNotes3);
$birdNotes4 = $_POST['notes4'];
$birdNotes4 = str_replace("'", "", $birdNotes4);
$birdNotes5 = $_POST['notes5'];
$birdNotes5 = str_replace("'", "", $birdNotes5);
$birdNotes6 = $_POST['notes6'];
$birdNotes6 = str_replace("'", "", $birdNotes6);
$birdNotes7 = $_POST['notes7'];
$birdNotes7 = str_replace("'", "", $birdNotes7);
$birdNotes8 = $_POST['notes8'];
$birdNotes8 = str_replace("'", "", $birdNotes8);
$birdNotes9 = $_POST['notes9'];
$birdNotes9 = str_replace("'", "", $birdNotes9);
$birdNotes10 = $_POST['notes10'];
$birdNotes10 = str_replace("'", "", $birdNotes10);
$birdNotes11 = $_POST['notes11'];
$birdNotes11 = str_replace("'", "", $birdNotes11);
$birdNotes12 = $_POST['notes12'];
$birdNotes12 = str_replace("'", "", $birdNotes12);
$birdNotes13 = $_POST['notes13'];
$birdNotes13 = str_replace("'", "", $birdNotes13);
$birdNotes14 = $_POST['notes14'];
$birdNotes14 = str_replace("'", "", $birdNotes14);
$birdNotes15 = $_POST['notes15'];
$birdNotes15 = str_replace("'", "", $birdNotes15);
$birdNotes16 = $_POST['notes16'];
$birdNotes16 = str_replace("'", "", $birdNotes16);
$birdNotes17 = $_POST['notes17'];
$birdNotes17 = str_replace("'", "", $birdNotes17);


$noneNotes0 = $_POST['noneNotes0'];
$noneNotes0 = str_replace("'", "", $noneNotes0);
$noneNotes1 = $_POST['noneNotes1'];
$noneNotes1 = str_replace("'", "", $noneNotes1);
$noneNotes2 = $_POST['noneNotes2'];
$noneNotes2 = str_replace("'", "", $noneNotes2);
$noneNotes3 = $_POST['noneNotes3'];
$noneNotes3 = str_replace("'", "", $noneNotes3);
$noneNotes4 = $_POST['noneNotes4'];
$noneNotes4 = str_replace("'", "", $noneNotes4);
$noneNotes5 = $_POST['noneNotes5'];
$noneNotes5 = str_replace("'", "", $noneNotes5);
$noneNotes6 = $_POST['noneNotes6'];
$noneNotes6 = str_replace("'", "", $noneNotes6);
$noneNotes7 = $_POST['noneNotes7'];
$noneNotes7 = str_replace("'", "", $noneNotes7);
$noneNotes8 = $_POST['noneNotes8'];
$noneNotes8 = str_replace("'", "", $noneNotes8);
$noneNotes9 = $_POST['noneNotes9'];
$noneNotes9 = str_replace("'", "", $noneNotes9);
$noneNotes10 = $_POST['noneNotes10'];
$noneNotes10 = str_replace("'", "", $noneNotes10);
$noneNotes11 = $_POST['noneNotes11'];
$noneNotes11 = str_replace("'", "", $noneNotes11);
$noneNotes12 = $_POST['noneNotes12'];
$noneNotes12 = str_replace("'", "", $noneNotes12);
$noneNotes13 = $_POST['noneNotes13'];
$noneNotes13 = str_replace("'", "", $noneNotes13);
$noneNotes14 = $_POST['noneNotes14'];
$noneNotes14 = str_replace("'", "", $noneNotes14);
$noneNotes15 = $_POST['noneNotes15'];
$noneNotes15 = str_replace("'", "", $noneNotes15);
$noneNotes16 = $_POST['noneNotes16'];
$noneNotes16 = str_replace("'", "", $noneNotes16);
$noneNotes17 = $_POST['noneNotes17'];
$noneNotes17 = str_replace("'", "", $noneNotes17);




//site1

for ($i = 0; $i < $numberFound0; $i++){
	$siteNumber0[$i] = substr($compileField0[$i], 0, 2);
	$species0[$i] = substr($compileField0[$i], 2, -1);
	$status0[$i] = $deadInjured0[$i];
	$sex0[$i] = $birdSex0[$i];
	$age0[$i] = $birdAge0[$i];
	$notes0[$i] = $birdNotes0[$i];
    $action0[$i] = $birdAction0[$i];
	};
	

    if ($numberFound0 == "none"){

       		if($numberFound1 == false){
		  $sql = "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '01' , 'none', '$time', '$duration', '$weather', '$noneNotes0')";
		}
		
		if($numberFound1 == true){
		  $sql = "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '01' , 'none', '$time', '$duration', '$weather', '$noneNotes0');";
		};
    }


	if ($numberFound0 == 1){
	
		if($numberFound1 == false){
		  $sql = "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]')";
		}
		
		if($numberFound1 == true){
		  $sql = "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]');";
		};
		
	}



	elseif ($numberFound0 == 2){
	
		if($numberFound1 == false){	
		  $sql = "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[1]' , '$species0[1]', '$status0[1]', '$sex0[1]', '$age0[1]', '$notes0[1]', '$time', '$duration', '$weather', '$action0[1]')";
		}
        
		
		if($numberFound1 == true){	
		  $sql = "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[1]' , '$species0[1]', '$status0[1]', '$sex0[1]', '$age0[1]', '$notes0[1]', '$time', '$duration', '$weather', '$action0[1]');";
		}	
	}
	

 
 
	elseif ($numberFound0 > 2){
        
        if($numberFound1 == false){	
            $sql = "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]');";
		
		      for ($i = 1; $i <= ($numberFound0 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[$i]' , '$species0[$i]', '$status0[$i]', '$sex0[$i]', '$age0[$i]', '$notes0[$i]', '$time', '$duration', '$weather', '$action0[$i]');";
	           };
	       		
            $lastRecord = $numberFound0 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[$lastRecord]' , '$species0[$lastRecord]', '$status0[$lastRecord]', '$sex0[$lastRecord]', '$age0[$lastRecord]', '$notes0[$lastRecord]', '$time', '$duration', '$weather', '$action0[$lastRecord]')";
            }
        
        
        if($numberFound1 == true){	
            $sql = "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[0]' , '$species0[0]', '$status0[0]', '$sex0[0]', '$age0[0]', '$notes0[0]', '$time', '$duration', '$weather', '$action0[0]');";
		
		      for ($i = 1; $i <= ($numberFound0 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[$i]' , '$species0[$i]', '$status0[$i]', '$sex0[$i]', '$age0[$i]', '$notes0[$i]', '$time', '$duration', '$weather', '$action0[$i]');";
	           };
	       		
            $lastRecord = $numberFound0 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber0[$lastRecord]' , '$species0[$lastRecord]', '$status0[$lastRecord]', '$sex0[$lastRecord]', '$age0[$lastRecord]', '$notes0[$lastRecord]', '$time', '$duration', '$weather', '$action0[$lastRecord]');";
             
            }
	   };
	
 
 
 
 
 
 
 
 




 
 
 
 
 
  //site2

for ($i = 0; $i < $numberFound1; $i++){
	$siteNumber1[$i] = substr($compileField1[$i], 0, 2);
	$species1[$i] = substr($compileField1[$i], 2, -1);
    	$status1[$i] = $deadInjured1[$i];
    	$sex1[$i] = $birdSex1[$i];
    	$age1[$i] = $birdAge1[$i];
    	$notes1[$i] = $birdNotes1[$i];
        $action1[$i] = $birdAction1[$i];
	};

    if ($numberFound1 == "none"){

       	if($numberFound2 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '02' , 'none', '$time', '$duration', '$weather', '$noneNotes1')";
		}
		
		if($numberFound2 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '02' , 'none', '$time', '$duration', '$weather', '$noneNotes1');";
		};
    }


	if ($numberFound1 == 1){
	
		if($numberFound2 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]')";
		}
		
		if($numberFound2 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]');";
		};
		
	}



	elseif ($numberFound1 == 2){
	
		if($numberFound2 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[1]' , '$species1[1]', '$status1[1]', '$sex1[1]', '$age1[1]', '$notes1[1]', '$time', '$duration', '$weather', '$action1[1]')";
		}
        
		
		if($numberFound2 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[1]' , '$species1[1]', '$status1[1]', '$sex1[1]', '$age1[1]', '$notes1[1]', '$time', '$duration', '$weather', '$action1[1]');";
		}	
	}
	

 
 
	elseif ($numberFound1 > 2){
        
        if($numberFound2 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]');";
		
		      for ($i = 1; $i <= ($numberFound1 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[$i]' , '$species1[$i]', '$status1[$i]', '$sex1[$i]', '$age1[$i]', '$notes1[$i]', '$time', '$duration', '$weather', '$action1[$i]');";
	           };
	       		
            $lastRecord = $numberFound1 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[$lastRecord]' , '$species1[$lastRecord]', '$status1[$lastRecord]', '$sex1[$lastRecord]', '$age1[$lastRecord]', '$notes1[$lastRecord]', '$time', '$duration', '$weather', '$action1[$lastRecord]')";
            }
        
        
        if($numberFound2 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[0]' , '$species1[0]', '$status1[0]', '$sex1[0]', '$age1[0]', '$notes1[0]', '$time', '$duration', '$weather', '$action1[0]');";
		
		      for ($i = 1; $i <= ($numberFound1 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[$i]' , '$species1[$i]', '$status1[$i]', '$sex1[$i]', '$age1[$i]', '$notes1[$i]', '$time', '$duration', '$weather', '$action1[$i]');";
	           };
	       		
            $lastRecord = $numberFound1 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber1[$lastRecord]' , '$species1[$lastRecord]', '$status1[$lastRecord]', '$sex1[$lastRecord]', '$age1[$lastRecord]', '$notes1[$lastRecord]', '$time', '$duration', '$weather', '$action1[$lastRecord]');";
             
            }
	   };
 



 
 
 
 
 
 








//site3

for ($i = 0; $i < $numberFound2; $i++){
	$siteNumber2[$i] = substr($compileField2[$i], 0, 2);
	$species2[$i] = substr($compileField2[$i], 2, -1);
	$status2[$i] = $deadInjured2[$i];
	$sex2[$i] = $birdSex2[$i];
	$age2[$i] = $birdAge2[$i];
	$notes2[$i] = $birdNotes2[$i];
    $action2[$i] = $birdAction2[$i];
	};

    if ($numberFound2 == "none"){

       	if($numberFound3 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '03' , 'none', '$time', '$duration', '$weather', '$noneNotes2')";
		}
		
		if($numberFound3 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '03' , 'none', '$time', '$duration', '$weather', '$noneNotes2');";
		};
    }


	if ($numberFound2 == 1){
	
		if($numberFound3 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]')";
		}
		
		if($numberFound3 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]');";
		};
		
	}



	elseif ($numberFound2 == 2){
	
		if($numberFound3 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[1]' , '$species2[1]', '$status2[1]', '$sex2[1]', '$age2[1]', '$notes2[1]', '$time', '$duration', '$weather', '$action2[1]')";
		}
        
		
		if($numberFound3 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[1]' , '$species2[1]', '$status2[1]', '$sex2[1]', '$age2[1]', '$notes2[1]', '$time', '$duration', '$weather', '$action2[1]');";
		}	
	}
	

 
 
	elseif ($numberFound2 > 2){
        
        if($numberFound3 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]');";
		
		      for ($i = 1; $i <= ($numberFound2 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[$i]' , '$species2[$i]', '$status2[$i]', '$sex2[$i]', '$age2[$i]', '$notes2[$i]', '$time', '$duration', '$weather', '$action2[$i]');";
	           };
	       		
            $lastRecord = $numberFound2 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[$lastRecord]' , '$species2[$lastRecord]', '$status2[$lastRecord]', '$sex2[$lastRecord]', '$age2[$lastRecord]', '$notes2[$lastRecord]', '$time', '$duration', '$weather', '$action2[$lastRecord]')";
            }
        
        
        if($numberFound3 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[0]' , '$species2[0]', '$status2[0]', '$sex2[0]', '$age2[0]', '$notes2[0]', '$time', '$duration', '$weather', '$action2[0]');";
		
		      for ($i = 1; $i <= ($numberFound2 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[$i]' , '$species2[$i]', '$status2[$i]', '$sex2[$i]', '$age2[$i]', '$notes2[$i]', '$time', '$duration', '$weather', '$action2[$i]');";
	           };
	       		
            $lastRecord = $numberFound2 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber2[$lastRecord]' , '$species2[$lastRecord]', '$status2[$lastRecord]', '$sex2[$lastRecord]', '$age2[$lastRecord]', '$notes2[$lastRecord]', '$time', '$duration', '$weather', '$action2[$lastRecord]');";
             
            }
	   };





















//site4
for ($i = 0; $i < $numberFound3; $i++){
	$siteNumber3[$i] = substr($compileField3[$i], 0, 2);
	$species3[$i] = substr($compileField3[$i], 2, -1);
	$status3[$i] = $deadInjured3[$i];
	$sex3[$i] = $birdSex3[$i];
	$age3[$i] = $birdAge3[$i];
	$notes3[$i] = $birdNotes3[$i];
    $action3[$i] = $birdAction3[$i];
	};

  if ($numberFound3 == "none"){

       	if($numberFound4 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '04' , 'none', '$time', '$duration', '$weather', '$noneNotes3')";
		}
		
		if($numberFound4 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '04' , 'none', '$time', '$duration', '$weather', '$noneNotes3');";
		};
    }


	if ($numberFound3 == 1){
	
		if($numberFound4 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]')";
		}
		
		if($numberFound4 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]');";
		};
		
	}



	elseif ($numberFound3 == 2){
	
		if($numberFound4 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[1]' , '$species3[1]', '$status3[1]', '$sex3[1]', '$age3[1]', '$notes3[1]', '$time', '$duration', '$weather', '$action3[1]')";
		}
        
		
		if($numberFound4 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[1]' , '$species3[1]', '$status3[1]', '$sex3[1]', '$age3[1]', '$notes3[1]', '$time', '$duration', '$weather', '$action3[1]');";
		}	
	}
	

 
 
	elseif ($numberFound3 > 2){
        
        if($numberFound4 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]');";
		
		      for ($i = 1; $i <= ($numberFound3 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[$i]' , '$species3[$i]', '$status3[$i]', '$sex3[$i]', '$age3[$i]', '$notes3[$i]', '$time', '$duration', '$weather', '$action3[$i]');";
	           };
	       		
            $lastRecord = $numberFound3 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[$lastRecord]' , '$species3[$lastRecord]', '$status3[$lastRecord]', '$sex3[$lastRecord]', '$age3[$lastRecord]', '$notes3[$lastRecord]', '$time', '$duration', '$weather', '$action3[$lastRecord]')";
            }
        
        
        if($numberFound4 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[0]' , '$species3[0]', '$status3[0]', '$sex3[0]', '$age3[0]', '$notes3[0]', '$time', '$duration', '$weather', '$action3[0]');";
		
		      for ($i = 1; $i <= ($numberFound3 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[$i]' , '$species3[$i]', '$status3[$i]', '$sex3[$i]', '$age3[$i]', '$notes3[$i]', '$time', '$duration', '$weather', '$action3[$i]');";
	           };
	       		
            $lastRecord = $numberFound3 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber3[$lastRecord]' , '$species3[$lastRecord]', '$status3[$lastRecord]', '$sex3[$lastRecord]', '$age3[$lastRecord]', '$notes3[$lastRecord]', '$time', '$duration', '$weather', '$action3[$lastRecord]');";
             
            }
	   };
    

















//site5
for ($i = 0; $i < $numberFound4; $i++){
	$siteNumber4[$i] = substr($compileField4[$i], 0, 2);
	$species4[$i] = substr($compileField4[$i], 2, -1);
	$status4[$i] = $deadInjured4[$i];
	$sex4[$i] = $birdSex4[$i];
	$age4[$i] = $birdAge4[$i];
	$notes4[$i] = $birdNotes4[$i];
    $action4[$i] = $birdAction4[$i];
	};

  if ($numberFound4 == "none"){

       	if($numberFound5 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '05' , 'none', '$time', '$duration', '$weather', '$noneNotes4')";
		}
		
		if($numberFound5 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '05' , 'none', '$time', '$duration', '$weather', '$noneNotes4');";
		};
    }


	if ($numberFound4 == 1){
	
		if($numberFound5 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]')";
		}
		
		if($numberFound5 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]');";
		};
		
	}



	elseif ($numberFound4 == 2){
	
		if($numberFound5 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[1]' , '$species4[1]', '$status4[1]', '$sex4[1]', '$age4[1]', '$notes4[1]', '$time', '$duration', '$weather', '$action4[1]')";
		}
        
		
		if($numberFound5 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[1]' , '$species4[1]', '$status4[1]', '$sex4[1]', '$age4[1]', '$notes4[1]', '$time', '$duration', '$weather', '$action4[1]');";
		}	
	}
	

 
 
	elseif ($numberFound4 > 2){
        
        if($numberFound5 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]');";
		
		      for ($i = 1; $i <= ($numberFound4 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[$i]' , '$species4[$i]', '$status4[$i]', '$sex4[$i]', '$age4[$i]', '$notes4[$i]', '$time', '$duration', '$weather', '$action4[$i]');";
	           };
	       		
            $lastRecord = $numberFound4 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[$lastRecord]' , '$species4[$lastRecord]', '$status4[$lastRecord]', '$sex4[$lastRecord]', '$age4[$lastRecord]', '$notes4[$lastRecord]', '$time', '$duration', '$weather', '$action4[$lastRecord]')";
            }
        
        
        if($numberFound5 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[0]' , '$species4[0]', '$status4[0]', '$sex4[0]', '$age4[0]', '$notes4[0]', '$time', '$duration', '$weather', '$action4[0]');";
		
		      for ($i = 1; $i <= ($numberFound4 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[$i]' , '$species4[$i]', '$status4[$i]', '$sex4[$i]', '$age4[$i]', '$notes4[$i]', '$time', '$duration', '$weather', '$action4[$i]');";
	           };
	       		
            $lastRecord = $numberFound4 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber4[$lastRecord]' , '$species4[$lastRecord]', '$status4[$lastRecord]', '$sex4[$lastRecord]', '$age4[$lastRecord]', '$notes4[$lastRecord]', '$time', '$duration', '$weather', '$action4[$lastRecord]');";
             
            }
	   };

    














//site 6
for ($i = 0; $i < $numberFound5; $i++){
	$siteNumber5[$i] = substr($compileField5[$i], 0, 2);
	$species5[$i] = substr($compileField5[$i], 2, -1);
	$status5[$i] = $deadInjured5[$i];
	$sex5[$i] = $birdSex5[$i];
	$age5[$i] = $birdAge5[$i];
	$notes5[$i] = $birdNotes5[$i];
    $action5[$i] = $birdAction5[$i];
	};

  if ($numberFound5 == "none"){

       	if($numberFound6 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '06' , 'none', '$time', '$duration', '$weather', '$noneNotes5')";
		}
		
		if($numberFound6 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '06' , 'none', '$time', '$duration', '$weather', '$noneNotes5');";
		};
    }


	if ($numberFound5 == 1){
	
		if($numberFound6 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]')";
		}
		
		if($numberFound6 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]');";
		};
		
	}



	elseif ($numberFound5 == 2){
	
		if($numberFound6 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[1]' , '$species5[1]', '$status5[1]', '$sex5[1]', '$age5[1]', '$notes5[1]', '$time', '$duration', '$weather', '$action5[1]')";
		}
        
		
		if($numberFound6 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[1]' , '$species5[1]', '$status5[1]', '$sex5[1]', '$age5[1]', '$notes5[1]', '$time', '$duration', '$weather', '$action5[1]');";
		}	
	}
	

 
 
	elseif ($numberFound5 > 2){
        
        if($numberFound6 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]');";
		
		      for ($i = 1; $i <= ($numberFound5 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[$i]' , '$species5[$i]', '$status5[$i]', '$sex5[$i]', '$age5[$i]', '$notes5[$i]', '$time', '$duration', '$weather', '$action5[$i]');";
	           };
	       		
            $lastRecord = $numberFound5 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[$lastRecord]' , '$species5[$lastRecord]', '$status5[$lastRecord]', '$sex5[$lastRecord]', '$age5[$lastRecord]', '$notes5[$lastRecord]', '$time', '$duration', '$weather', '$action5[$lastRecord]')";
            }
        
        
        if($numberFound6 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[0]' , '$species5[0]', '$status5[0]', '$sex5[0]', '$age5[0]', '$notes5[0]', '$time', '$duration', '$weather', '$action5[0]');";
		
		      for ($i = 1; $i <= ($numberFound5 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[$i]' , '$species5[$i]', '$status5[$i]', '$sex5[$i]', '$age5[$i]', '$notes5[$i]', '$time', '$duration', '$weather', '$action5[$i]');";
	           };
	       		
            $lastRecord = $numberFound5 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber5[$lastRecord]' , '$species5[$lastRecord]', '$status5[$lastRecord]', '$sex5[$lastRecord]', '$age5[$lastRecord]', '$notes5[$lastRecord]', '$time', '$duration', '$weather', '$action5[$lastRecord]');";
             
            }
	   };
























//site 7
for ($i = 0; $i < $numberFound6; $i++){
	$siteNumber6[$i] = substr($compileField6[$i], 0, 2);
	$species6[$i] = substr($compileField6[$i], 2, -1);
	$status6[$i] = $deadInjured6[$i];
	$sex6[$i] = $birdSex6[$i];
	$age6[$i] = $birdAge6[$i];
	$notes6[$i] = $birdNotes6[$i];
    $action6[$i] = $birdAction6[$i];
	};

  if ($numberFound6 == "none"){

       	if($numberFound7 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '07' , 'none', '$time', '$duration', '$weather', '$noneNotes6')";
		}
		
		if($numberFound7 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '07' , 'none', '$time', '$duration', '$weather', '$noneNotes6');";
		};
    }


	if ($numberFound6 == 1){
	
		if($numberFound7 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]')";
		}
		
		if($numberFound7 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]');";
		};
		
	}



	elseif ($numberFound6 == 2){
	
		if($numberFound7 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[1]' , '$species6[1]', '$status6[1]', '$sex6[1]', '$age6[1]', '$notes6[1]', '$time', '$duration', '$weather', '$action6[1]')";
		}
        
		
		if($numberFound7 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[1]' , '$species6[1]', '$status6[1]', '$sex6[1]', '$age6[1]', '$notes6[1]', '$time', '$duration', '$weather', '$action6[1]');";
		}	
	}
	

 
 
	elseif ($numberFound6 > 2){
        
        if($numberFound7 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]');";
		
		      for ($i = 1; $i <= ($numberFound6 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[$i]' , '$species6[$i]', '$status6[$i]', '$sex6[$i]', '$age6[$i]', '$notes6[$i]', '$time', '$duration', '$weather', '$action6[$i]');";
	           };
	       		
            $lastRecord = $numberFound6 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[$lastRecord]' , '$species6[$lastRecord]', '$status6[$lastRecord]', '$sex6[$lastRecord]', '$age6[$lastRecord]', '$notes6[$lastRecord]', '$time', '$duration', '$weather', '$action6[$lastRecord]')";
            }
        
        
        if($numberFound7 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[0]' , '$species6[0]', '$status6[0]', '$sex6[0]', '$age6[0]', '$notes6[0]', '$time', '$duration', '$weather', '$action6[0]');";
		
		      for ($i = 1; $i <= ($numberFound6 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[$i]' , '$species6[$i]', '$status6[$i]', '$sex6[$i]', '$age6[$i]', '$notes6[$i]', '$time', '$duration', '$weather', '$action6[$i]');";
	           };
	       		
            $lastRecord = $numberFound6 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber6[$lastRecord]' , '$species6[$lastRecord]', '$status6[$lastRecord]', '$sex6[$lastRecord]', '$age6[$lastRecord]', '$notes6[$lastRecord]', '$time', '$duration', '$weather', '$action6[$lastRecord]');";
             
            }
	   };

























//site8
for ($i = 0; $i < $numberFound7; $i++){
	$siteNumber7[$i] = substr($compileField7[$i], 0, 2);
	$species7[$i] = substr($compileField7[$i], 2, -1);
	$status7[$i] = $deadInjured7[$i];
	$sex7[$i] = $birdSex7[$i];
	$age7[$i] = $birdAge7[$i];
	$notes7[$i] = $birdNotes7[$i];
    $action7[$i] = $birdAction7[$i];
	};

  if ($numberFound7 == "none"){

       	if($numberFound8 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '08' , 'none', '$time', '$duration', '$weather', '$noneNotes7')";
		}
		
		if($numberFound8 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '08' , 'none', '$time', '$duration', '$weather', '$noneNotes7');";
		};
    }


	if ($numberFound7 == 1){
	
		if($numberFound8 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]')";
		}
		
		if($numberFound8 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]');";
		};
		
	}



	elseif ($numberFound7 == 2){
	
		if($numberFound8 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[1]' , '$species7[1]', '$status7[1]', '$sex7[1]', '$age7[1]', '$notes7[1]', '$time', '$duration', '$weather', '$action7[1]')";
		}
        
		
		if($numberFound8 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[1]' , '$species7[1]', '$status7[1]', '$sex7[1]', '$age7[1]', '$notes7[1]', '$time', '$duration', '$weather', '$action7[1]');";
		}	
	}
	

 
 
	elseif ($numberFound7 > 2){
        
        if($numberFound8 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]');";
		
		      for ($i = 1; $i <= ($numberFound7 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[$i]' , '$species7[$i]', '$status7[$i]', '$sex7[$i]', '$age7[$i]', '$notes7[$i]', '$time', '$duration', '$weather', '$action7[$i]');";
	           };
	       		
            $lastRecord = $numberFound7 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[$lastRecord]' , '$species7[$lastRecord]', '$status7[$lastRecord]', '$sex7[$lastRecord]', '$age7[$lastRecord]', '$notes7[$lastRecord]', '$time', '$duration', '$weather', '$action7[$lastRecord]')";
            }
        
        
        if($numberFound8 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[0]' , '$species7[0]', '$status7[0]', '$sex7[0]', '$age7[0]', '$notes7[0]', '$time', '$duration', '$weather', '$action7[0]');";
		
		      for ($i = 1; $i <= ($numberFound7 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[$i]' , '$species7[$i]', '$status7[$i]', '$sex7[$i]', '$age7[$i]', '$notes7[$i]', '$time', '$duration', '$weather', '$action7[$i]');";
	           };
	       		
            $lastRecord = $numberFound7 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber7[$lastRecord]' , '$species7[$lastRecord]', '$status7[$lastRecord]', '$sex7[$lastRecord]', '$age7[$lastRecord]', '$notes7[$lastRecord]', '$time', '$duration', '$weather', '$action7[$lastRecord]');";
             
            }
	   };



























//site9
for ($i = 0; $i < $numberFound8; $i++){
	$siteNumber8[$i] = substr($compileField8[$i], 0, 2);
	$species8[$i] = substr($compileField8[$i], 2, -1);
	$status8[$i] = $deadInjured8[$i];
	$sex8[$i] = $birdSex8[$i];
	$age8[$i] = $birdAge8[$i];
	$notes8[$i] = $birdNotes8[$i];
    $action8[$i] = $birdAction8[$i];
	};

  if ($numberFound8 == "none"){

       	if($numberFound9 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '09' , 'none', '$time', '$duration', '$weather', '$noneNotes8')";
		}
		
		if($numberFound9 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '09' , 'none', '$time', '$duration', '$weather', '$noneNotes8');";
		};
    }


	if ($numberFound8 == 1){
	
		if($numberFound9 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]')";
		}
		
		if($numberFound9 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]');";
		};
		
	}



	elseif ($numberFound8 == 2){
	
		if($numberFound9 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[1]' , '$species8[1]', '$status8[1]', '$sex8[1]', '$age8[1]', '$notes8[1]', '$time', '$duration', '$weather', '$action8[1]')";
		}
        
		
		if($numberFound9 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[1]' , '$species8[1]', '$status8[1]', '$sex8[1]', '$age8[1]', '$notes8[1]', '$time', '$duration', '$weather', '$action8[1]');";
		}	
	}
	

 
 
	elseif ($numberFound8 > 2){
        
        if($numberFound9 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]');";
		
		      for ($i = 1; $i <= ($numberFound8 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[$i]' , '$species8[$i]', '$status8[$i]', '$sex8[$i]', '$age8[$i]', '$notes8[$i]', '$time', '$duration', '$weather', '$action8[$i]');";
	           };
	       		
            $lastRecord = $numberFound8 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[$lastRecord]' , '$species8[$lastRecord]', '$status8[$lastRecord]', '$sex8[$lastRecord]', '$age8[$lastRecord]', '$notes8[$lastRecord]', '$time', '$duration', '$weather', '$action8[$lastRecord]')";
            }
        
        
        if($numberFound9 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[0]' , '$species8[0]', '$status8[0]', '$sex8[0]', '$age8[0]', '$notes8[0]', '$time', '$duration', '$weather', '$action8[0]');";
		
		      for ($i = 1; $i <= ($numberFound8 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[$i]' , '$species8[$i]', '$status8[$i]', '$sex8[$i]', '$age8[$i]', '$notes8[$i]', '$time', '$duration', '$weather', '$action8[$i]');";
	           };
	       		
            $lastRecord = $numberFound8 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber8[$lastRecord]' , '$species8[$lastRecord]', '$status8[$lastRecord]', '$sex8[$lastRecord]', '$age8[$lastRecord]', '$notes8[$lastRecord]', '$time', '$duration', '$weather', '$action8[$lastRecord]');";
             
            }
	   };




















//site 10
for ($i = 0; $i < $numberFound9; $i++){
	$siteNumber9[$i] = substr($compileField9[$i], 0, 2);
	$species9[$i] = substr($compileField9[$i], 2, -1);
	$status9[$i] = $deadInjured9[$i];
	$sex9[$i] = $birdSex9[$i];
	$age9[$i] = $birdAge9[$i];
	$notes9[$i] = $birdNotes9[$i];
    $action9[$i] = $birdAction9[$i];
	};

  if ($numberFound9 == "none"){

       	if($numberFound10 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '10' , 'none', '$time', '$duration', '$weather', '$noneNotes9')";
		}
		
		if($numberFound10 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '10' , 'none', '$time', '$duration', '$weather', '$noneNotes9');";
		};
    }


	if ($numberFound9 == 1){
	
		if($numberFound10 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]')";
		}
		
		if($numberFound10 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]');";
		};
		
	}



	elseif ($numberFound9 == 2){
	
		if($numberFound10 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[1]' , '$species9[1]', '$status9[1]', '$sex9[1]', '$age9[1]', '$notes9[1]', '$time', '$duration', '$weather', '$action9[1]')";
		}
        
		
		if($numberFound10 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[1]' , '$species9[1]', '$status9[1]', '$sex9[1]', '$age9[1]', '$notes9[1]', '$time', '$duration', '$weather', '$action9[1]');";
		}	
	}
	

 
 
	elseif ($numberFound9 > 2){
        
        if($numberFound10 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]');";
		
		      for ($i = 1; $i <= ($numberFound9 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[$i]' , '$species9[$i]', '$status9[$i]', '$sex9[$i]', '$age9[$i]', '$notes9[$i]', '$time', '$duration', '$weather', '$action9[$i]');";
	           };
	       		
            $lastRecord = $numberFound9 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[$lastRecord]' , '$species9[$lastRecord]', '$status9[$lastRecord]', '$sex9[$lastRecord]', '$age9[$lastRecord]', '$notes9[$lastRecord]', '$time', '$duration', '$weather', '$action9[$lastRecord]')";
            }
        
        
        if($numberFound10 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[0]' , '$species9[0]', '$status9[0]', '$sex9[0]', '$age9[0]', '$notes9[0]', '$time', '$duration', '$weather', '$action9[0]');";
		
		      for ($i = 1; $i <= ($numberFound9 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[$i]' , '$species9[$i]', '$status9[$i]', '$sex9[$i]', '$age9[$i]', '$notes9[$i]', '$time', '$duration', '$weather', '$action9[$i]');";
	           };
	       		
            $lastRecord = $numberFound9 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber9[$lastRecord]' , '$species9[$lastRecord]', '$status9[$lastRecord]', '$sex9[$lastRecord]', '$age9[$lastRecord]', '$notes9[$lastRecord]', '$time', '$duration', '$weather', '$action9[$lastRecord]');";
             
            }
	   };



































//site 11
for ($i = 0; $i < $numberFound10; $i++){
	$siteNumber10[$i] = substr($compileField10[$i], 0, 2);
	$species10[$i] = substr($compileField10[$i], 2, -1);
	$status10[$i] = $deadInjured10[$i];
	$sex10[$i] = $birdSex10[$i];
	$age10[$i] = $birdAge10[$i];
	$notes10[$i] = $birdNotes10[$i];
    $action10[$i] = $birdAction10[$i];
	};

  if ($numberFound10 == "none"){

       	if($numberFound11 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '11' , 'none', '$time', '$duration', '$weather', '$noneNotes10')";
		}
		
		if($numberFound11 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '11' , 'none', '$time', '$duration', '$weather', '$noneNotes10');";
		};
    }


	if ($numberFound10 == 1){
	
		if($numberFound11 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]')";
		}
		
		if($numberFound11 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]');";
		};
		
	}



	elseif ($numberFound10 == 2){
	
		if($numberFound11 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[1]' , '$species10[1]', '$status10[1]', '$sex10[1]', '$age10[1]', '$notes10[1]', '$time', '$duration', '$weather', '$action10[1]')";
		}
        
		
		if($numberFound11 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[1]' , '$species10[1]', '$status10[1]', '$sex10[1]', '$age10[1]', '$notes10[1]', '$time', '$duration', '$weather', '$action10[1]');";
		}	
	}
	

 
 
	elseif ($numberFound10 > 2){
        
        if($numberFound11 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]');";
		
		      for ($i = 1; $i <= ($numberFound10 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[$i]' , '$species10[$i]', '$status10[$i]', '$sex10[$i]', '$age10[$i]', '$notes10[$i]', '$time', '$duration', '$weather', '$action10[$i]');";
	           };
	       		
            $lastRecord = $numberFound10 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[$lastRecord]' , '$species10[$lastRecord]', '$status10[$lastRecord]', '$sex10[$lastRecord]', '$age10[$lastRecord]', '$notes10[$lastRecord]', '$time', '$duration', '$weather', '$action10[$lastRecord]')";
            }
        
        
        if($numberFound11 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[0]' , '$species10[0]', '$status10[0]', '$sex10[0]', '$age10[0]', '$notes10[0]', '$time', '$duration', '$weather', '$action10[0]');";
		
		      for ($i = 1; $i <= ($numberFound10 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[$i]' , '$species10[$i]', '$status10[$i]', '$sex10[$i]', '$age10[$i]', '$notes10[$i]', '$time', '$duration', '$weather', '$action10[$i]');";
	           };
	       		
            $lastRecord = $numberFound10 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber10[$lastRecord]' , '$species10[$lastRecord]', '$status10[$lastRecord]', '$sex10[$lastRecord]', '$age10[$lastRecord]', '$notes10[$lastRecord]', '$time', '$duration', '$weather', '$action10[$lastRecord]');";
             
            }
	   };


















//site 12
for ($i = 0; $i < $numberFound11; $i++){
	$siteNumber11[$i] = substr($compileField11[$i], 0, 2);
	$species11[$i] = substr($compileField11[$i], 2, -1);
	$status11[$i] = $deadInjured11[$i];
	$sex11[$i] = $birdSex11[$i];
	$age11[$i] = $birdAge11[$i];
	$notes11[$i] = $birdNotes11[$i];
    $action11[$i] = $birdAction11[$i];
	};

  if ($numberFound11 == "none"){

       	if($numberFound12 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '12' , 'none', '$time', '$duration', '$weather', '$noneNotes11')";
		}
		
		if($numberFound12 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '12' , 'none', '$time', '$duration', '$weather', '$noneNotes11');";
		};
    }


	if ($numberFound11 == 1){
	
		if($numberFound12 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]')";
		}
		
		if($numberFound12 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]');";
		};
		
	}



	elseif ($numberFound11 == 2){
	
		if($numberFound12 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[1]' , '$species11[1]', '$status11[1]', '$sex11[1]', '$age11[1]', '$notes11[1]', '$time', '$duration', '$weather', '$action11[1]')";
		}
        
		
		if($numberFound12 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[1]' , '$species11[1]', '$status11[1]', '$sex11[1]', '$age11[1]', '$notes11[1]', '$time', '$duration', '$weather', '$action11[1]');";
		}	
	}
	

 
 
	elseif ($numberFound11 > 2){
        
        if($numberFound12 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]');";
		
		      for ($i = 1; $i <= ($numberFound11 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[$i]' , '$species11[$i]', '$status11[$i]', '$sex11[$i]', '$age11[$i]', '$notes11[$i]', '$time', '$duration', '$weather', '$action11[$i]');";
	           };
	       		
            $lastRecord = $numberFound11 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[$lastRecord]' , '$species11[$lastRecord]', '$status11[$lastRecord]', '$sex11[$lastRecord]', '$age11[$lastRecord]', '$notes11[$lastRecord]', '$time', '$duration', '$weather', '$action11[$lastRecord]')";
            }
        
        
        if($numberFound12 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[0]' , '$species11[0]', '$status11[0]', '$sex11[0]', '$age11[0]', '$notes11[0]', '$time', '$duration', '$weather', '$action11[0]');";
		
		      for ($i = 1; $i <= ($numberFound11 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[$i]' , '$species11[$i]', '$status11[$i]', '$sex11[$i]', '$age11[$i]', '$notes11[$i]', '$time', '$duration', '$weather', '$action11[$i]');";
	           };
	       		
            $lastRecord = $numberFound11 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber11[$lastRecord]' , '$species11[$lastRecord]', '$status11[$lastRecord]', '$sex11[$lastRecord]', '$age11[$lastRecord]', '$notes11[$lastRecord]', '$time', '$duration', '$weather', '$action11[$lastRecord]');";
             
            }
	   };













//site 13
for ($i = 0; $i < $numberFound12; $i++){
	$siteNumber12[$i] = substr($compileField12[$i], 0, 2);
	$species12[$i] = substr($compileField12[$i], 2, -1);
	$status12[$i] = $deadInjured12[$i];
	$sex12[$i] = $birdSex12[$i];
	$age12[$i] = $birdAge12[$i];
	$notes12[$i] = $birdNotes12[$i];
    $action12[$i] = $birdAction12[$i];
	};

  if ($numberFound12 == "none"){

       	if($numberFound13 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '13' , 'none', '$time', '$duration', '$weather', '$noneNotes12')";
		}
		
		if($numberFound13 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '13' , 'none', '$time', '$duration', '$weather', '$noneNotes12');";
		};
    }


	if ($numberFound12 == 1){
	
		if($numberFound13 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]')";
		}
		
		if($numberFound13 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]');";
		};
		
	}



	elseif ($numberFound12 == 2){
	
		if($numberFound13 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[1]' , '$species12[1]', '$status12[1]', '$sex12[1]', '$age12[1]', '$notes12[1]', '$time', '$duration', '$weather', '$action12[1]')";
		}
        
		
		if($numberFound13 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[1]' , '$species12[1]', '$status12[1]', '$sex12[1]', '$age12[1]', '$notes12[1]', '$time', '$duration', '$weather', '$action12[1]');";
		}	
	}
	

 
 
	elseif ($numberFound12 > 2){
        
        if($numberFound13 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]');";
		
		      for ($i = 1; $i <= ($numberFound12 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[$i]' , '$species12[$i]', '$status12[$i]', '$sex12[$i]', '$age12[$i]', '$notes12[$i]', '$time', '$duration', '$weather', '$action12[$i]');";
	           };
	       		
            $lastRecord = $numberFound12 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[$lastRecord]' , '$species12[$lastRecord]', '$status12[$lastRecord]', '$sex12[$lastRecord]', '$age12[$lastRecord]', '$notes12[$lastRecord]', '$time', '$duration', '$weather', '$action12[$lastRecord]')";
            }
        
        
        if($numberFound13 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[0]' , '$species12[0]', '$status12[0]', '$sex12[0]', '$age12[0]', '$notes12[0]', '$time', '$duration', '$weather', '$action12[0]');";
		
		      for ($i = 1; $i <= ($numberFound12 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[$i]' , '$species12[$i]', '$status12[$i]', '$sex12[$i]', '$age12[$i]', '$notes12[$i]', '$time', '$duration', '$weather', '$action12[$i]');";
	           };
	       		
            $lastRecord = $numberFound12 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber12[$lastRecord]' , '$species12[$lastRecord]', '$status12[$lastRecord]', '$sex12[$lastRecord]', '$age12[$lastRecord]', '$notes12[$lastRecord]', '$time', '$duration', '$weather', '$action12[$lastRecord]');";
             
            }
	   };























//site 14
for ($i = 0; $i < $numberFound13; $i++){
	$siteNumber13[$i] = substr($compileField13[$i], 0, 2);
	$species13[$i] = substr($compileField13[$i], 2, -1);
	$status13[$i] = $deadInjured13[$i];
	$sex13[$i] = $birdSex13[$i];
	$age13[$i] = $birdAge13[$i];
	$notes13[$i] = $birdNotes13[$i];
    $action13[$i] = $birdAction13[$i];
	};

  if ($numberFound13 == "none"){

       	if($numberFound14 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '14' , 'none', '$time', '$duration', '$weather', '$noneNotes13')";
		}
		
		if($numberFound14 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '14' , 'none', '$time', '$duration', '$weather', '$noneNotes13');";
		};
    }


	if ($numberFound13 == 1){
	
		if($numberFound14 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]')";
		}
		
		if($numberFound14 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]');";
		};
		
	}



	elseif ($numberFound13 == 2){
	
		if($numberFound14 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[1]' , '$species13[1]', '$status13[1]', '$sex13[1]', '$age13[1]', '$notes13[1]', '$time', '$duration', '$weather', '$action13[1]')";
		}
        
		
		if($numberFound14 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[1]' , '$species13[1]', '$status13[1]', '$sex13[1]', '$age13[1]', '$notes13[1]', '$time', '$duration', '$weather', '$action13[1]');";
		}	
	}
	

 
 
	elseif ($numberFound13 > 2){
        
        if($numberFound14 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]');";
		
		      for ($i = 1; $i <= ($numberFound13 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[$i]' , '$species13[$i]', '$status13[$i]', '$sex13[$i]', '$age13[$i]', '$notes13[$i]', '$time', '$duration', '$weather', '$action13[$i]');";
	           };
	       		
            $lastRecord = $numberFound13 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[$lastRecord]' , '$species13[$lastRecord]', '$status13[$lastRecord]', '$sex13[$lastRecord]', '$age13[$lastRecord]', '$notes13[$lastRecord]', '$time', '$duration', '$weather', '$action13[$lastRecord]')";
            }
        
        
        if($numberFound14 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[0]' , '$species13[0]', '$status13[0]', '$sex13[0]', '$age13[0]', '$notes13[0]', '$time', '$duration', '$weather', '$action13[0]');";
		
		      for ($i = 1; $i <= ($numberFound13 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[$i]' , '$species13[$i]', '$status13[$i]', '$sex13[$i]', '$age13[$i]', '$notes13[$i]', '$time', '$duration', '$weather', '$action13[$i]');";
	           };
	       		
            $lastRecord = $numberFound13 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber13[$lastRecord]' , '$species13[$lastRecord]', '$status13[$lastRecord]', '$sex13[$lastRecord]', '$age13[$lastRecord]', '$notes13[$lastRecord]', '$time', '$duration', '$weather', '$action13[$lastRecord]');";
             
            }
	   };




















//site 15
for ($i = 0; $i < $numberFound14; $i++){
	$siteNumber14[$i] = substr($compileField14[$i], 0, 2);
	$species14[$i] = substr($compileField14[$i], 2, -1);
	$status14[$i] = $deadInjured14[$i];
	$sex14[$i] = $birdSex14[$i];
	$age14[$i] = $birdAge14[$i];
	$notes14[$i] = $birdNotes14[$i];
    $action14[$i] = $birdAction14[$i];
	};

  if ($numberFound14 == "none"){

       	if($numberFound15 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '15' , 'none', '$time', '$duration', '$weather', '$noneNotes14')";
		}
		
		if($numberFound15 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '15' , 'none', '$time', '$duration', '$weather', '$noneNotes14');";
		};
    }


	if ($numberFound14 == 1){
	
		if($numberFound15 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]')";
		}
		
		if($numberFound15 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]');";
		};
		
	}



	elseif ($numberFound14 == 2){
	
		if($numberFound15 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[1]' , '$species14[1]', '$status14[1]', '$sex14[1]', '$age14[1]', '$notes14[1]', '$time', '$duration', '$weather', '$action14[1]')";
		}
        
		
		if($numberFound15 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[1]' , '$species14[1]', '$status14[1]', '$sex14[1]', '$age14[1]', '$notes14[1]', '$time', '$duration', '$weather', '$action14[1]');";
		}	
	}
	

 
 
	elseif ($numberFound14 > 2){
        
        if($numberFound15 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]');";
		
		      for ($i = 1; $i <= ($numberFound14 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[$i]' , '$species14[$i]', '$status14[$i]', '$sex14[$i]', '$age14[$i]', '$notes14[$i]', '$time', '$duration', '$weather', '$action14[$i]');";
	           };
	       		
            $lastRecord = $numberFound14 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[$lastRecord]' , '$species14[$lastRecord]', '$status14[$lastRecord]', '$sex14[$lastRecord]', '$age14[$lastRecord]', '$notes14[$lastRecord]', '$time', '$duration', '$weather', '$action14[$lastRecord]')";
            }
        
        
        if($numberFound15 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[0]' , '$species14[0]', '$status14[0]', '$sex14[0]', '$age14[0]', '$notes14[0]', '$time', '$duration', '$weather', '$action14[0]');";
		
		      for ($i = 1; $i <= ($numberFound14 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[$i]' , '$species14[$i]', '$status14[$i]', '$sex14[$i]', '$age14[$i]', '$notes14[$i]', '$time', '$duration', '$weather', '$action14[$i]');";
	           };
	       		
            $lastRecord = $numberFound14 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber14[$lastRecord]' , '$species14[$lastRecord]', '$status14[$lastRecord]', '$sex14[$lastRecord]', '$age14[$lastRecord]', '$notes14[$lastRecord]', '$time', '$duration', '$weather', '$action14[$lastRecord]');";
             
            }
	   };













//site 16
for ($i = 0; $i < $numberFound15; $i++){
	$siteNumber15[$i] = substr($compileField15[$i], 0, 2);
	$species15[$i] = substr($compileField15[$i], 2, -1);
	$status15[$i] = $deadInjured15[$i];
	$sex15[$i] = $birdSex15[$i];
	$age15[$i] = $birdAge15[$i];
	$notes15[$i] = $birdNotes15[$i];
    $action15[$i] = $birdAction15[$i];
	};

  if ($numberFound15 == "none"){

       	if($numberFound16 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '16' , 'none', '$time', '$duration', '$weather', '$noneNotes15')";
		}
		
		if($numberFound16 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '16' , 'none', '$time', '$duration', '$weather', '$noneNotes15');";
		};
    }


	if ($numberFound15 == 1){
	
		if($numberFound16 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]')";
		}
		
		if($numberFound16 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]');";
		};
		
	}



	elseif ($numberFound15 == 2){
	
		if($numberFound16 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[1]' , '$species15[1]', '$status15[1]', '$sex15[1]', '$age15[1]', '$notes15[1]', '$time', '$duration', '$weather', '$action15[1]')";
		}
        
		
		if($numberFound16 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[1]' , '$species15[1]', '$status15[1]', '$sex15[1]', '$age15[1]', '$notes15[1]', '$time', '$duration', '$weather', '$action15[1]');";
		}	
	}
	

 
 
	elseif ($numberFound15 > 2){
        
        if($numberFound16 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]');";
		
		      for ($i = 1; $i <= ($numberFound15 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[$i]' , '$species15[$i]', '$status15[$i]', '$sex15[$i]', '$age15[$i]', '$notes15[$i]', '$time', '$duration', '$weather', '$action15[$i]');";
	           };
	       		
            $lastRecord = $numberFound15 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[$lastRecord]' , '$species15[$lastRecord]', '$status15[$lastRecord]', '$sex15[$lastRecord]', '$age15[$lastRecord]', '$notes15[$lastRecord]', '$time', '$duration', '$weather', '$action15[$lastRecord]')";
            }
        
        
        if($numberFound16 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[0]' , '$species15[0]', '$status15[0]', '$sex15[0]', '$age15[0]', '$notes15[0]', '$time', '$duration', '$weather', '$action15[0]');";
		
		      for ($i = 1; $i <= ($numberFound15 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[$i]' , '$species15[$i]', '$status15[$i]', '$sex15[$i]', '$age15[$i]', '$notes15[$i]', '$time', '$duration', '$weather', '$action15[$i]');";
	           };
	       		
            $lastRecord = $numberFound15 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber15[$lastRecord]' , '$species15[$lastRecord]', '$status15[$lastRecord]', '$sex15[$lastRecord]', '$age15[$lastRecord]', '$notes15[$lastRecord]', '$time', '$duration', '$weather', '$action15[$lastRecord]');";
             
            }
	   };




















//site 17
for ($i = 0; $i < $numberFound16; $i++){
	$siteNumber16[$i] = substr($compileField16[$i], 0, 2);
	$species16[$i] = substr($compileField16[$i], 2, -1);
	$status16[$i] = $deadInjured16[$i];
	$sex16[$i] = $birdSex16[$i];
	$age16[$i] = $birdAge16[$i];
	$notes16[$i] = $birdNotes16[$i];
    $action16[$i] = $birdAction16[$i];
	};

  if ($numberFound16 == "none"){

       	if($numberFound17 == false){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '17' , 'none', '$time', '$duration', '$weather', '$noneNotes16')";
		}
		
		if($numberFound17 == true){
		  $sql .= "INSERT INTO PSFIST (date, volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer',  '$route' , '17' , 'none', '$time', '$duration', '$weather', '$noneNotes16');";
		};
    }


	if ($numberFound16 == 1){
	
		if($numberFound17 == false){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]')";
		}
		
		if($numberFound17 == true){
		  $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]');";
		};
		
	}



	elseif ($numberFound16 == 2){
	
		if($numberFound17 == false){	
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer',  '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[1]' , '$species16[1]', '$status16[1]', '$sex16[1]', '$age16[1]', '$notes16[1]', '$time', '$duration', '$weather', '$action16[1]')";
		}
        
		
		if($numberFound17 == true){	
		  $sql .= "INSERT INTO PSFIST (date ,  volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]');";
		
		  $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		  VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[1]' , '$species16[1]', '$status16[1]', '$sex16[1]', '$age16[1]', '$notes16[1]', '$time', '$duration', '$weather', '$action16[1]');";
		}	
	}
	

 
 
	elseif ($numberFound16 > 2){
        
        if($numberFound17 == false){	
            $sql .= "INSERT INTO PSFIST (date , volunteer,  route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]');";
		
		      for ($i = 1; $i <= ($numberFound16 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[$i]' , '$species16[$i]', '$status16[$i]', '$sex16[$i]', '$age16[$i]', '$notes16[$i]', '$time', '$duration', '$weather', '$action16[$i]');";
	           };
	       		
            $lastRecord = $numberFound16 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[$lastRecord]' , '$species16[$lastRecord]', '$status16[$lastRecord]', '$sex16[$lastRecord]', '$age16[$lastRecord]', '$notes16[$lastRecord]', '$time', '$duration', '$weather', '$action16[$lastRecord]')";
            }
        
        
        if($numberFound17 == true){	
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[0]' , '$species16[0]', '$status16[0]', '$sex16[0]', '$age16[0]', '$notes16[0]', '$time', '$duration', '$weather', '$action16[0]');";
		
		      for ($i = 1; $i <= ($numberFound16 - 2); $i++){
                $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
                VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[$i]' , '$species16[$i]', '$status16[$i]', '$sex16[$i]', '$age16[$i]', '$notes16[$i]', '$time', '$duration', '$weather', '$action16[$i]');";
	           };
	       		
            $lastRecord = $numberFound16 - 1;
		
            $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species,  deadinjured, sex, age, notes, start_time, duration, weather, action)
            VALUES ('$date' , '$volunteer', '$route' , '$siteNumber16[$lastRecord]' , '$species16[$lastRecord]', '$status16[$lastRecord]', '$sex16[$lastRecord]', '$age16[$lastRecord]', '$notes16[$lastRecord]', '$time', '$duration', '$weather', '$action16[$lastRecord]');";
             
            }
	   };


















//site 18
for ($i = 0; $i < $numberFound17; $i++){
	$siteNumber17[$i] = substr($compileField17[$i], 0, 2);
	$species17[$i] = substr($compileField17[$i], 2, -1);
	$status17[$i] = $deadInjured17[$i];
	$sex17[$i] = $birdSex17[$i];
	$age17[$i] = $birdAge17[$i];
	$notes17[$i] = $birdNotes17[$i];
    $action17[$i] = $birdAction17[$i];
	};

    if ($numberFound17 == "none"){
        $sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, start_time, duration, weather, notes)
		  VALUES ('$date' , '$volunteer', '$route' , '18' , 'none', '$time', '$duration', '$weather', '$noneNotes17')";
    }



	if ($numberFound17 == 1){
		
		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[0]' , '$species17[0]', '$status17[0]', '$sex17[0]', '$age17[0]', '$notes17[0]', '$time', '$duration', '$weather', '$action17[0]')";	
	}



	elseif ($numberFound17 == 2){
		
		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[0]' , '$species17[0]', '$status17[0]', '$sex17[0]', '$age17[0]', '$notes17[0]', '$time', '$duration', '$weather', '$action17[0]');";
		
		
		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[1]' , '$species17[1]', '$status17[1]', '$sex17[1]', '$age17[1]', '$notes17[1]', '$time', '$duration', '$weather', '$action17[1]')";	
	}
	
 

 
	elseif ($numberFound17 > 2){
		
		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[0]' , '$species17[0]', '$status17[0]', '$sex17[0]', '$age17[0]', '$notes17[0]', '$time', '$duration', '$weather', '$action17[0]');";
		
		for ($i = 1; $i <= ($numberFound17 - 2); $i++){

            		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
            		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[$i]' , '$species17[$i]', '$status17[$i]', '$sex17[$i]', '$age17[$i]', '$notes17[$i]', '$time', '$duration', '$weather', '$action17[$i]');";

	       		};
	       		
		$lastRecord = $numberFound17 - 1;
		
		$sql .= "INSERT INTO PSFIST (date , volunteer, route, site, species, deadinjured, sex, age, notes, start_time, duration, weather, action)
		VALUES ('$date' , '$volunteer', '$route' , '$siteNumber17[$lastRecord]' , '$species17[$lastRecord]', '$status17[$lastRecord]', '$sex17[$lastRecord]', '$age17[$lastRecord]', '$notes17[$lastRecord]', '$time', '$duration', '$weather', '$action17[$lastRecord]')";	
	};




 
  
if ($conn->multi_query($sql) === TRUE) {
     $conn->close();
     header("Location:http://d-bird.org/psf/confirmation.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};


};

?>
