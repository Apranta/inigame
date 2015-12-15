<form action="" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
    Select file to upload :
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="UploadFile" name="submit">
</form>

<?php

		if(isset($_POST['submit']))
		{
$target_dir = "Game/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo " <script> alert('Sorry, file already exists.') </script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "<script> alert('Sorry, your file is too large.') </script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "rar" && $imageFileType != "zip") {
    echo "
    <script>alert('Sorry, only rar & zip files are allowed.') </script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script> alert('Sorry, your file was not uploaded.') </script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " <script> alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.') </script>";
        $a = basename($_FILES["fileToUpload"]["name"]);
            } else {
        echo " <script> alert('Sorry, there was an error uploading your file.') </script>";
    }
}
system('unzip ' .$a. '');


}
?>
