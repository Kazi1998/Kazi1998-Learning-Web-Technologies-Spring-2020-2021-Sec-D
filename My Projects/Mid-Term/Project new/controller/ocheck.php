  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$veg = $_POST['veg'];
		$q1 = $_POST['q1'];
		$pro = $_POST['pro'];
		$q2 = $_POST['q2'];
		$spi = $_POST['spi'];
		$q3 = $_POST['q3'];

		if($veg == "" || $q1 == "" || $pro == "" || $q2 == "" || $spi == "" || $q3 = ""){
			echo "null value found...";
		}
		

		else{
			if(!$veg == "" || !$q1 == "" || !$pro == "" || !$q2 == "" || !$spi == "" || !$q3 = ""){

				$user = ['veg'=> $veg, 'q1'=> $q1, 'pro'=>$pro, 'q2'=>$q2, 'spi'=>$spi, 'q3'=>$q3];
				$formdata = array(
					'veg'=> $_POST["veg"],
					'q1'=> $_POST["q1"],
					'pro'=> $_POST["pro"],
                    'q2'=> $_POST["q2"],
                    'spi'=> $_POST["spi"],
                    'q3'=> $_POST["q3"],
				 );
				
				$existingdata = file_get_contents('../model/odata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/odata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/odata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						//$_SESSION['username'] = '';
				
						//echo "User Id is: " . $_SESSION['username'];
						
			
				//$_SESSION['current_user'] = $user;

				header('location: ../admin/OrderList.php');
			}else{
				echo "Information Missing...";
			}
		}
	}


?>