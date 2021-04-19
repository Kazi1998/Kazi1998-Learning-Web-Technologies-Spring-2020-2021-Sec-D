  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$area = $_POST['area'];
		$vehicle = $_POST['vehicle'];
		$price = $_POST['price'];
		
		

		if($area == "" || $vehicle == "" || $price == ""){
			echo "null value found...";
		}else{
			if(!$area == "" || $vehicle == "" || !$price == ""){

				$user = ['area'=> $area, 'vehicle'=> $vehicle, 'price'=>$price];
				$formdata = array(
					'area'=> $_POST["area"],
					'vehicle'=> $_POST["vehicle"],
					'price'=> $_POST["price"]
				 );
				
				$existingdata = file_get_contents('../model/sdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/sdata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/sdata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						//$_SESSION['username'] = '';
				
						//echo "User Id is: " . $_SESSION['username'];
						
			
				//$_SESSION['current_user'] = $user;

				header('location: ../admin/ManageService.php');
			}else{
				echo "Information Missing...";
			}
		}
	}


?>