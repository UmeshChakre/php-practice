<?php
  if(isset($_POST['uploadbtn']))
  {
    $oldname=$_FILES['photo']['name'];
    $temp=explode('.',$oldname);
    $newname=$temp[0].time().rand(0,9999999999)."_".rand(0,9999999999).".".$temp[1];
    $folder='uploads/';
  if(!is_dir($folder))
    mkdir($folder,777);
   $size=$_FILES['photo']['size'];

  if( $size<1024*1024)
  {
    if(move_uploaded_file($_FILES['photo']['tmp_name'],$folder.$newname))
    {
      echo "file uploaded sucessfully";
    }
  }
  else {

      echo "invalid image or file must me less tha 2MB";

  }
}
  ?>
  <fieldset>
      <legend>
          FILE uploads
      </legend>

      <form method="POST" enctype="multipart/form-data">
        <input type="file" name="photo" required>
        <button type="submit" name="uploadbtn" >
          UPLOLAD</button>
      </form>

  </fieldset>
