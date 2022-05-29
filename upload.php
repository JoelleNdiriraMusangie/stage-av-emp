
    <?php
//session_start();
 
$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Envoyer votre fichier')
{
  if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['fichier']['tmp_name'];
    $fileName = $_FILES['fichier']['name'];
    $fileSize = $_FILES['fichier']['size'];
    $fileType = $_FILES['fichier']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('.Pdf', '.PDF', '.DOC', '.doc', '.JPG', '.jpg', '.PNG', '.png', '.txt', '.TXT', 'jpeg', 'JPEG');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './upload/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
      }
      else
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['fichier']['error'];
  }
}
$_SESSION['message'] = $message;
//header("Location: landing.php");