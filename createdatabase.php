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
  $table="insert into tbl_jpt (id,name) values(1,'umesh')";
    if(mysqli_query($conn,$table)){

      echo "table created sucessfully";
      }
    else{
      echo "Error creating table:".mysqli_error($conn);
    }


    mysqli_close($conn);

?>
