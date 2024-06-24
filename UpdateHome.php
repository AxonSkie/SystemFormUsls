<?php 

session_start();

if(isset($_SESSION['ID']) && isset($_SESSION['UserName']) ){ //if the value of a global variable $_SESSIOn is equal to the value of ID and Username, the html structure will execute.

   

    



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Updatehome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Container1">
    <h1>Manage</h1>
    <a href="Login.php">Logout</a>
    
    
    </div>
    
</body>
</html>



<?php }else{
      header("Location: LoginPage.php");
    exit();
    
}

?>

<?php 

$conn= mysqli_connect("localhost", "root","","systemm") or die (mysqli_error($conn));



if (isset($_POST['val'])){

  $field=$_POST['field'];
  $val= $_POST['val'];
  $sql="SELECT * FROM users WHERE $field LIKE '%$val%'";

}

else{

$sql= "SELECT * FROM users";



}


$q= mysqli_query($conn,$sql) or die (mysqli_error($conn));





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">

<style>



</style>

</head>
<body>


<table border=1>
   <h1> Users Info</h1>
     <tr >


       <td>First Name</td>
       <td>Last Name</td>

       <td>UserName</td>
       

       

       
       
       







     </tr>

   
       <?php
       while($r=mysqli_fetch_assoc($q)){

?>
<tr>

 

       <td><?php echo $r['FirstName']; ?></td> 
       <td><?php echo $r['LastName']; ?></td>
       <td><?php echo $r['UserName']; ?></td>
       


       

       

        <td><a href="Remove.php?id=<?php echo $r['ID']; ?>" type="submit">Delete</a></td>
        <td><a href="UpdateContact.php?id=<?php echo $r['ID']; ?>" type="submit" class="update" >Verify</a></td>

       






</tr>





  <?php     }

  ?>







</table>
    
</body>
</html>


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



if(isset($_SESSION['ID']) && isset($_SESSION['UserName']) ){ //if the value of a global variable $_SESSIOn is equal to the value of ID and Username, the html structure will execute.

   

    



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>

<h1>Form Submitted</h1>

    <!-- search bar -->

    <div class="container3">

    
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