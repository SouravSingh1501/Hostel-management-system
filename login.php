<?php
// set conection variable
 $_SERVER ="localhost";
 $username ="root";
 $password ="";
//  create a database connection
 $con = mysqli_connect($_SERVER,$username,$password);   //connectionvariable
//   check for connection success
 if(!$con){
     die("connection to this database failed due to".
     mysqli_connect_error());
 }
echo"success connecting to the db";
//   collect post variables
$name=$_POST['name']
$univrollno= $_POST['univrollno'];
//ankit sahoo
$sql ="INSERT INTO `student name`.`student name` (`name`, `univ.roll no`) VALUES ('$name', '$univrollno')";
echo $sql;
//    execute the query
if($con->query($sql) ==true){
    echo"successfully inserted";
}
else{
    echo"error: $sql <br> $con->error";
}
// close the database connection
$con->close();
?>