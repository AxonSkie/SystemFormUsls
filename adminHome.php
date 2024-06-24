<?php
$conn=mysqli_connect("localhost","root","","systemm")or die (mysqli_error($conn));

 if(isset($_POST['val'])&&isset($_POST['val'])){
    $field = $_POST['field'];
    $val = $_POST['val'];
    $sql="select * from receive1 where $field like '%$val%'";

    }
    else{
        $sql="select * from receive1";
    }

$q=mysqli_query($conn,$sql)or die(mysqli_error($conn));
?>

<?php 

session_start();

if(isset($_SESSION['ID']) && isset($_SESSION['UserName']) ){ //if the value of a global variable $_SESSIOn is equal to the value of ID and Username, the html structure will execute.

   

    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminHome.css">

</head>
<body>



    <!-- search bar -->

    <div class="container3">

    <div class="container1">
    <form method="post" action="check_labs.php">
        <h4>Search:</h4>
        <select name="field">
                <option value="Name">First Name</option>
                <option value="Capacity">LastName</option>
               
                
            <input type="text" name="val">
            <input type="submit" name="search" value="Search">
    </form>
    </div>
<!-- tables -->

<div class="table">
    <table border=1>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Citizenship</td>
            <td>Address</td>
            <td>Email Address</td>
            <td>Birthday</td>
            <td>Description</td>




       
        </tr>

    
        <?php
        //use the names in the database
            while($r=mysqli_fetch_assoc($q)){
               ?>
                <tr>
                    <td><?php echo $r['FirstN'];?></td>
                    <td><?php echo $r['LastN'];?></td>
                    <td><?php echo $r['Citizenship'];?></td>
                    <td><?php echo $r['Address'];?></td>
                    <td><?php echo $r['EmailAddress'];?></td>
                    <td><?php echo $r['Birthday'];?></td>
                    <td><?php echo $r['Description'];?></td>
                    



                    
                    
                 

                </tr>


              <?php  
            }
            

        ?>

    </table>
    </div>


<?php
?>
<div class="contact_div_2">   
<div>
<button type="button" id="homebutton" onclick="window.location.href = 'Login.php';">HOME</button> 
</div> 

<a href="UpdateHome.php">Verify</a>




<?php
?>

<?php }else{
      header("Location: LoginPage.php");
    exit();
    
}

?>

</div>



</body>
</html>