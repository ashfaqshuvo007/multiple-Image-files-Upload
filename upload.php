<?php 
include "config.php";
 
if(isset($_POST['submit'])){

    // Count total files
    $countfiles = count($_FILES['files']['name']);
   
    // Prepared statement
    $query = "INSERT INTO images (name,image) VALUES(?,?)";

    $statement = $connection->prepare($query);

    // Loop all files
    for($i=0;$i<$countfiles;$i++){

        // File name
        $filename = $_FILES['files']['name'][$i];

       
// Get extension
        $tmp = explode(".", $filename);
        $ext = end($tmp);

        // Valid image extension
        $valid_ext = array("png","jpeg","jpg");

        if(in_array($ext, $valid_ext)){

            // Upload file
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],'uploads/'.$filename)){

              // Execute query
              $statement->execute(array($filename,'uploads/'.$filename));

            }

        }   
    }
    echo "File upload successfully";
}
?>