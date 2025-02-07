<?php 
session_start();

if(isset($_SESSION['ID']) && isset($_SESSION['UserName'])) { // Check if user is logged in

    // Assuming the URL ID is passed as a query parameter like ?id=123
    $url_id = isset($_GET['id']) ? $_GET['id'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container2">
    <div class="popup">
        <div class="child">
            <div class="design" id="popupid">
                <ul>
                    
                    
                    <li><a href="SendForm.php?id=<?php echo urlencode($url_id); ?>">Certificate of Good Moral</a></li>
                    <li><a href="SendForm.php?id=<?php echo urlencode($url_id); ?>">Candidate of Graduation</a></li>
                    <li><a href="SendForm.php?id=<?php echo urlencode($url_id); ?>">Certificate for Top Ranking Scholarship </a></li>
                    <li><a href="SendForm.php?id=<?php echo urlencode($url_id); ?>">Certificate for Medium of Instruction </a></li>

                    

                    


                </ul>
            </div>

        </div>
    </div>
    
</div>


<div class="container3">
    <div class="box1">
        <div>
            <img src="profile-user.png" alt="" class="img-1">
        </div>
        <h2><span><?php echo $_SESSION['FirstName']?>'s info</span></h2>
    </div>
    <div class="box2">
        <div class="navbar">
            <ul>
               
               
                <li><a href="Login.php" class="a-1">Log Out</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="container1">
    <img src="images1.png" alt="" class="lasalle">
</div>

<div class="container">
    <div>
        <table border=1>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>UserName</td>
                <td>Request Status</td>

            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "systemm") or die(mysqli_error($conn));

            if (isset($_POST['val'])) {
                $field = mysqli_real_escape_string($conn, $_POST['field']);
                $val = mysqli_real_escape_string($conn, $_POST['val']);
                $sql = "SELECT * FROM users WHERE $field LIKE '%$val%' AND ID = {$_SESSION['ID']}";
            } else {    
                $sql = "SELECT * FROM users WHERE ID = {$_SESSION['ID']}";
            }

            $q = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            while($r = mysqli_fetch_assoc($q)) {
            ?>  
            <tr>
                <td><?php echo htmlspecialchars($r['FirstName']); ?></td> 
                <td><?php echo htmlspecialchars($r['LastName']); ?></td>
                <td><?php echo htmlspecialchars($r['UserName']); ?></td>
                <td><?php echo htmlspecialchars($r['Status']); ?></td>

            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

<script>
function toggleaction(){
    var popupid = document.getElementById('popupid');
    popupid.classList.toggle('view');
}


function toggleaction1(){
    var popupid = document.getElementById('popupid1');
    popupid.classList.toggle('view');
}
</script>


</body>
</html>

<?php 
} else {
    header("Location: Login.php");
    exit();
}
?>
