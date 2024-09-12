<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if a file was uploaded without any errors
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $tmpFilePath = $_FILES['photo']['tmp_name'];
    $newFilePath = './users-design/' . $_FILES['photo']['name'];

    // Move the temporary file to the desired location
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
      echo 'File uploaded successfully.';
    } else {
      echo 'Failed to move the uploaded file.';
    }
  } else {
    echo 'Error uploading the file.';
  }
}
?>