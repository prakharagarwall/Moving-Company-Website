<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

<?php   
$con=mysqli_connect("localhost","root","root","moving_company"); 
$target_dir = "assets/img/services/";



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    $target_file = $target_dir.basename($_FILES["fileToUpload"]['name']);
    //echo $target_file;
   // echo $_FILES;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



    $name = $description = "";
    $name_err = $desc_err = "";
 
// Processing form data when form is submitted

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    echo $name;
    // Validate description
    $input_desc = trim($_POST["description"]);
    if(empty($input_desc)){
        $desc_err = "Please enter a description.";     
    } else{
        $description = $input_desc;
    }
    echo $description;
    echo $target_file;
    if(empty($name_err) && empty($desc_err)){
        // Prepare an update statement
        $sql = "INSERT INTO service (service_name, description, image,service_type) VALUES (?, ?, ?,?)";
        echo "sql";

        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            echo $name;
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_description,$param_image,$param_type);
            //echo "id is :".$id;
            // Set parameters
            $param_name = strval($name);
            $param_description = strval($description);
            $param_image=strval($target_file);
            $param_type=strval($_POST["type"]);
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: services.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

    }
}










?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Service</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="create.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" value="<?php ?>"class="form-control"><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $desc_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Service Type</label>
                            <select name="type">
                                <option value="residential" selected>Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="storage">Storage</option>

                            </select>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="fileToUpload" id = "fileToUpload" class="form-control">
                        </div>
                
                        <input type="submit" class="btn btn-primary" name = "submit" value="submit">
                        <a href="services.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>