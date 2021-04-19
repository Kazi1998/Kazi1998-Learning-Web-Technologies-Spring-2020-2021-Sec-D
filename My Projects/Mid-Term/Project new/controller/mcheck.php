  
<?php
	session_start();

	if(isset($_POST['submit'])){

		$code = $_POST['code'];
		$item = $_POST['item'];
		$p1 = $_POST['p1'];
		$drink = $_POST['drink'];
		$p2 = $_POST['p2'];
		

		if($code == "" || $item == "" || $p1 == "" || $drink == "" || $p2 == ""){
			echo "null value found...";
		}else{
			if(!$code == "" || $item == "" || !$p1 == "" || !$drink == "" || !$p2 == ""){

				$user = ['code'=> $code, 'item'=> $item, 'p1'=>$p1, 'drink'=> $drink, 'p2'=>$p2,];
				$formdata = array(
					'code'=> $_POST["code"],
					'item'=> $_POST["item"],
					'p1'=> $_POST["p1"],
                    'drink'=> $_POST["drink"],
					'p2'=> $_POST["p2"],
				 );
				
				$existingdata = file_get_contents('../model/mdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/mdata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/mdata.json");
				$mydata = json_decode($data);
				
				
				
				
				
						//$_SESSION['username'] = '';
				
						//echo "User Id is: " . $_SESSION['username'];
						
			
				//$_SESSION['current_user'] = $user;

				header('location: ../admin/ManageMenu.php');
			}else{
				echo "Information Missing...";
			}
		}
	}


?>