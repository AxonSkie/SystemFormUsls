<?php 

// Database connection
$conn = mysqli_connect("localhost", "root", "", "systemm");

// Initialize $result to null
$result = null;

// Check if 'id' is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch user data based on the provided ID
    $sql = "SELECT * FROM users WHERE ID = $id";

    $result = mysqli_query($conn, $sql);
}

// Check if a user was found
if ($result && mysqli_num_rows($result) > 0) {
    $r = mysqli_fetch_assoc($result);
} else {
    echo "User not found or no user ID provided"; // You can handle this case accordingly
}

// Close the database connection
mysqli_close($conn);




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <div class="box1">



    </div>
    <div class="box2">
        <div class="nahidapic">
    <img src="logo-genshin-impact-42372.png" alt="">
    </div>
    <div class="navbar">

    <ul>
        <li><a href="adminHome.php" class="first">Home</a></li>
        

    </ul>


    </div>

    </div>

<form action="update_backend.php?id=<?php echo $r['ID'];?>" method="post">


            <h1>Verify?</h1>
            <input type="text" name="Verify" value="<?php echo $r['Status']?>">

         
            

          

                


            <button type="submit" value="Update">update</button>
            

</form>

<div class="container">
    <img src="images.png" alt="">
</div>
</body>
</html>