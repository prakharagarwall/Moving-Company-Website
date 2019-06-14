<?php

ob_start();
    session_start();


?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index3.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="services.php">Services</a>
      <a class="nav-item nav-link" href="#">Book a Service</a>
      <a class="nav-item nav-link " href="contact.php">Contact us</a>
    </div>
  </div>



  <form method="POST" action=# class="form-inline">                          
<label>Filter By</label>
    <select name="filter">
            <option value="residential" selected>Residential</option>
            <option value="commercial">Commercial</option>
            <option value="storage">Storage</option>
    </select>

            <input class="form-control mr-sm-2" placeholder="Search" type="text" name="keyword" >
            <input type="submit" name="filterSearch" value="Submit" class="btn btn-outline-success my-2 my-sm-0">
    </form>
</nav>
<a href="create.php" class="btn btn-success pull-right">Add New Service</a>
  
<div class="row">
<div class="col-lg-2" ></div>
<div class="col-lg-9" >
<?php   
$con=mysqli_connect("localhost","root","root","moving_company"); 

$total_records_per_page = 3;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";


if(isset($_POST["filterSearch"]))
{
    if(isset($_POST["keyword"]))
    {

        $filter=strval($_POST["filter"]);
        $keyword=strval($_POST["keyword"]);
        if(isset($_POST["filter"]))
        {


                if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 2;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 

    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM service where service_type='{$filter}' AND status=\"active\" AND service_id in (select service_id from service where service_name LIKE '%{$keyword}%' OR description LIKE '%{$keyword}%' OR service_type LIKE '%{$keyword}%')");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1


            $query = "SELECT * FROM service where service_type='{$filter}' AND status=\"active\" AND service_id in (select service_id from service where service_name LIKE '%{$keyword}%' OR description LIKE '%{$keyword}%' OR service_type LIKE '%{$keyword}%') LIMIT $offset, $total_records_per_page";
        }
        else
        {

            if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 3;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 

    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM service where service_name LIKE '%{$keyword}%' OR description LIKE '%{$keyword}%' OR service_type LIKE '%{$keyword}%'");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1

            $query="SELECT * from service where service_name LIKE '%{$keyword}%' OR description LIKE '%{$keyword}%' OR service_type LIKE '%{$keyword}%' LIMIT $offset, $total_records_per_page";
        }
        



        $result = mysqli_query ($con,$query);
        

    if ($result->num_rows > 0) 
    {
        echo "<h2> Services Available </h2>";
        echo "<table class=\"table\">";
        
        echo "<tr><th> Name </th> <th>Description </th> <th>Service Type </th> <th>Image </th>  </tr>";
            
        while($row = $result->fetch_assoc()) 
        {       
            echo "<tr><td>" . $row["service_name"] .  "</td><td>  ". $row["description"] ."</td><td>".$row["service_type"]."</td><td> <img src= ". $row["image"] ." height=\"200\" width=\"300\"></td> ";


            if(isset($_SESSION["user"])){
                                $user = $_SESSION["user"];
                                if($user=="admin"){
                                    echo "<td>";
                    echo "<a href='update.php?id=". $row['service_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                    echo "<a href='delete.php?id=". $row['service_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                                }
                            }
                                
            
            echo "<tr>";
        }
        echo "</table>";
    
    }

    }
}

else
{
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 2;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 

    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM service where status=\"active\"");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1


$query = "SELECT * FROM service where status=\"active\" LIMIT $offset, $total_records_per_page;";
$result = mysqli_query ($con,$query);
       
    if ($result->num_rows > 0) 
    {
        echo "<h2> Services Available </h2>";
        echo "<table class=\"table\">";
        //echo "<tr><td><h2> Services Available </h2></td></tr>";
        echo "<tr><th> Name </th> <th>Description </th> <th>Service Type </th> <th>Image </th>  </tr>";
            
        while($row = $result->fetch_assoc()) 
        {       
            echo "<tr><td>" . $row["service_name"] .  "</td><td>  ". $row["description"] ."</td><td>".$row["service_type"]."</td><td> <img src= ". $row["image"] ." height=\"200\" width=\"300\"></td> ";

            if(isset($_SESSION["user"])){
                                $user = $_SESSION["user"];
                                if($user=="admin"){
                                    echo "<td>";
                    echo "<a href='update.php?id=". $row['service_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                    echo "<a href='delete.php?id=". $row['service_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                echo "</td>";
                                }
                            }
            echo "<tr>";
        }
        echo "</table>";
    
    }


}
        mysqli_close($con);
    
?>
  
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
    <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
    <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
    </li>
       
    <?php 
    if ($total_no_of_pages <= 10){       
        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
            if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
        }
    }
    elseif($total_no_of_pages > 10){
        
    if($page_no <= 4) {         
     for ($counter = 1; $counter < 8; $counter++){       
            if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
        }

     elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {         
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {         
           if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }                  
       }
       echo "<li><a>...</a></li>";
       echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
       echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
        
        else {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }                   
                }
            }
    }
?>
    
    <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
    </li>
    <?php if($page_no < $total_no_of_pages){
        echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
        } ?>
</ul>

    <!--== Preloader Area Start ==-->
  </div>
  <div class="col-lg-1" ></div>
  </div>  
</body>

</html>
