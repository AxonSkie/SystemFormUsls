<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SendForm.css">


</head>
<body>

<div class="container">

<form action="SendFormBackend.php" method="POST">

            
<h1>Enter your First Name</h1>
<input type="text" placeholder="Name" name="Fname">  

<h1>Enter your Last Name</h1>
<input type="text" placeholder="Last Name" name="Lname">  

<h1>Enter your Citizenship</h1>
<input type="text" placeholder="Citizenship" name="Cname">

<h1>Enter your Address</h1>
<input type="text" placeholder="Address" name="Aname">



<h1>Enter your Email Address</h1>
<input type="text" placeholder="Email Address" name="Ename">


<h1>Type of Document</h1>


<textarea  name="Dname" rows="4" cols="50"></textarea>


<h1>Enter your Birthday</h1>
<input type="date" placeholder="Username" name="bday">









<button type="submit" class="button" style="vertical-align:middle"><span>Send Form </span></button>

</form>

</div>
    
<div class="container1">

<div>

<img src="images.png" alt="">

</div>

</div>


</body>
</html>