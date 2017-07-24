<?php


include("./dbConnect.php");
$conn = connect();

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


if(isset($name) && isset($email) && isset($password)){
	if(!empty($name && $password && $email)){
		$sql= "INSERT INTO tbl_details (name,email,password) VALUES (?,?,?) ";

		if($stmt = $conn->prepare($sql)){
			$stmt->bind_param('sss',$name,$email,$password);
			if($stmt->execute()){
				echo "Successful";
			}else{
				echo"Query Execution failed";
			}
		}else{
			echo "There was something wrong with the query.";
		}
	}
}

?>






