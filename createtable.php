<?php
  $servername="localhost";
  $username="root";
  $password="";
  $database="bit2018";
  //create connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
  $table="alter table tbl_jpt1 modify gender varchar(7)";
    if(mysqli_query($conn,$table)){

      echo "Table sucessfully created";
      }
    else{
      echo "Error creating table:".mysqli_error($conn);
    }


    mysqli_close($conn);

?>
