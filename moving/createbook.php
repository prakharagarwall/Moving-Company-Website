

<?php   
$mysqli = new mysqli("localhost", "root", "root", "moving_company"); 
$serv=$_GET["serviceid"];
$dates=$_GET["dates"];
$type=$_GET["servicetype"];
$src=$_GET["source"];
$dest=$_GET["dest"];


        $sql = "INSERT INTO book (service_id, user_id, Dateofservice,Typeofservice,source,Destination) VALUES (".$serv.",1,'".$dates . "','". $type . "','" .$src. "','" .$dest ."')";
        echo "sql";
        if ($mysqli->query($sql) == true) 
{ 
    echo "Records inserted successfully.";
    header("location: index3.php");
     exit();

} 
else
{ 
    echo "ERROR: Could not able to execute $sql. ".$mysqli->error; 
} 











?>

   