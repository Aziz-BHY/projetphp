<?php
function data(){
$conn = connect();
$req= "select * from projetphp.admin";
$result = $conn->query($req);
return $result;
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "username" . $row["username"]."<br>";
    }
} else {
    echo "0 results";
}*/
$conn->close();
}


function connect(){
    $servername = "localhost";
$username = "root";
$password = "MyNewPass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    return $conn;
}


function search($serching_for){
    $conn = connect();
    $req= "select * from projetphp.admin where pass = '".$serching_for."'";
    $result = $conn->query($req);
    if ($result->num_rows == 1){
        return $result;
    }
}
function existDB($checking,$database,$col){
    $conn = connect();
    $req= "select * from projetphp.".$database." where ".$col." = '".$checking."'";
    $result = $conn->query($req);
    if ($result->num_rows == 1){
        return true;
    }
    return false;
}
function insert($data, $database){
     $conn = connect();
     $req= "insert into projetphp.".$database." values (".$data.");";
    if($conn->query($req) === true){
        echo "ok";
    }else echo $req;
        
}









?>