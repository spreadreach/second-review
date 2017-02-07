<?php
	
	if(isset($_POST['$submit'])){
		$submit=$_POST['submit'];
		$accidentlocation=$_POST['accidentlocation'];
		$accidentinjured=$_POST['accidentinjured'];
		$accidenttime=$_POST['accidenttime'];
		$avehicletype=$_POST['avehicletype'];
		if($submit){
			if($accidentlocation&&$accidentinjured&&$accidenttime&&$avehicletype){
			$file="./accident.txt";
			$write="Accident\n";
			file_put_contents($file,$write);
			file_put_contents($file,$accidentlocation);
			file_put_contents($file,$accidentinjured);
			file_put_contents($file,$accidenttime);
			file_put_contents($file,$avehicletype);
			}else{
				echo "ENTER ALL THE FIELDS";
			}
		}
	}
?>
<head>
	<link rel="stylesheet" type="text/css" href="userpagecss.css">
	<script type="text/javascript" src="jav.js"></script>
	<script type="text/javascript" src="jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="file.js"></script>
</head>

<body>
	<div class="fullpage">

		<div class="titlename">
			<b>SPREAD REACH</b>
		</div>
		
		<div class="optiontab">
			<li> <a href="javascript:void(0)" class="userpagetabs" onclick="userpagetab(event,'accident')" id="defaultOpen">accident</a></li>
			<li> <a href="javascript:void(0)" class="userpagetabs" onclick="userpagetab(event,'snatch')">chain snatch</a></li>
			<li> <a href="javascript:void(0)" class="userpagetabs" onclick="userpagetab(event,'traffic')">traffic jam</a></li>
		</div>
		
		<div id="accident" class="optiondetails">
			<form class="form" method='POST' action="userpage.php">
				<br>
				Location of the accident<input type="text" name="accidentlocation"><br><br>
				Number of people injured<input type="text" name="accidentinjured"><br><br>
				Time of accident<input type="text" name="accidenttime"><br><br>
				vehicle type 
				<input class="vehicleradio" type="radio" name="avehicletype" value="bike">bike
				<input class="vehicleradio" type="radio" name="avehicletype" value="cars">car
				<input class="vehicleradio" type="radio" name="avehicletype" value="otherheavy">other heavy vehicles<br><br>
				<input type="submit" name="submit" value="SEND">
				<!--div class="sendbutton">
					<li><button onclick=register()>send</button></li>
				</div-->
			</form>
		</div>
		<div id="snatch" class="optiondetails">
			<form class="form" method='POST' action="userpage.php">
				Location of the incident<input type="text" name="snatchlocation"><br><br>
				Is the victim injured?
				<input class="snatchradio" type="radio" name="snatchinjured" value="yes">yes
				<input class="snatchradio" type="radio" name="snatchinjured" value="no">no<br><br>
				Number of snatchers
				<select name="snatcherno">
  					<option value="sno1">1</option>
 		 			<option value="sno2">2</option>
  					<option value="sno3">3</option>
  					<option value="snomore">more</option>
				</select><br><br>
				vehicle type used by snatchers if any
				<input class="snatchradio" type="radio" name="svehicletype" value="bike">bike
				<input class="snatchradio" type="radio" name="svehicletype" value="car">car
				<input class="snatchradio" type="radio" name="svehicletype" value="other">others<br><br>
				<div class="sendbutton">
					<li><button>send</button></li>
				</div>
			</form>
		</div>
		<div id="traffic" class="optiondetails">
			<form class="form" method='POST' action="userpage.php">
				Location<input type="text" name="trafficlocation"><br><br>
				Time in minutes for which the traffic is stagnant<input type="text" name="traffictime"><br><br>
				Signal malfunction?
				<input class="trafficradio" type="radio" name="signal" value="yes">yes
				<input class="trafficradio" type="radio" name="signal" value="no">no<br><br>
				<div class="sendbutton">
					<li><button>send</button></li>
				</div>
			</form>
		</div>
		
		

	</div>
	<script>document.getElementById("defaultOpen").click();</script>
</body>

