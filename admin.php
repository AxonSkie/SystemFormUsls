<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    
<div class="container">

<div class="space">

<form action="adminbackend.php" method="post">

               <h1><img src="images.png" alt="" width="300"></h1>
               <?php if(isset($_GET['error'])){ ?>
                   <p class="error"> <?php echo $_GET['error'];?></p>
                
               <?php }?>
               
               <label>UserName</label>
               <input class="input1" type="text" placeholder="Username" name="uname"><br>

               <label>Password</label>
               <input class="input2" type="password" placeholder="Password" name="password" ><br>

               

               <button type="submit" class="btn-1">Login</button>



               




</form>
</div>
</div>


</body>
</html>