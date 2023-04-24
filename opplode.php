<form method="post" enctype="multipart/form-data">
    <h3>Select Image File to Upload:</h3><br>
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload"><br><br>
</form>
 
<?php
// koble til database
include 'azure.php';
$statusMsg = '';
 
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // File upload path
    $targetDir = "img/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 
    // id til bruker, som skal tilhøre bildet
    //$id = $_POST['id'];
 
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT into media (media_navn, idbruker, date) VALUES ('$fileName', '$id', NOW())";
            echo $sql;
            $insert = $conn->query($sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again. <br>($conn->error)";
                
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
 
// Display status message
echo $statusMsg;
?>