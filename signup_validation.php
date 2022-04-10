<?php 
$conn=mysqli_connect("localhost","root","","18co42");

if($conn)
{
  echo "<br>Connected";
}
else
{
  echo "<br>Connection Failed";
}

/*
$q="CREATE TABLE becomp(name varchar(25) not null,rollno varchar(25) not null,age int(2) not null,branch varchar(25) not null)";

$x=mysqli_query($conn,$q);

if($x)
{
  echo "<br>Table created  successfully";
} 
else
{
  echo "<br>Failed to create Table";
  exit();
}
  
*/
mysqli_close($conn);
?> 




<html>
<head>
<title>Sign Up</title>

<link rel="stylesheet" href="css/styles.css">

<script src="validate.js"></script>

</head>

<body class="page main">
    <div>            
        <header>
            <div style=" display: flex;justify-content:space-between;margin:auto;">
                <div>
                        <a href="index.html">Graphics<span style="color:red;margin:0;">House</span></a>
                </div>
                <div id="menu">
                <a href="signup.html">SignUp</a>
        		<a href="login.html">LogIn</a>
        		<a href="delete.html">DeleteProduct</a>
        		<a href="add.html">AddProduct</a>
        		<a href="update.html">UpdateProduct</a>
        		<a href="product.html">Products</a>
                </div>      
            </div>
                     
        </header>
     </div>
<div class="banner" style="display: flex;justify-content: center;flex-direction:column;padding: 5px;width: 70%;margin-top:5%;">
	
<!-- Sign Up Form -->
<h1>Sign Up</h1><br>
<form action="login.html">
     <table>
                <tr>
                  <td><label>Name: </label></td>
                  <td><input type="text" placeholder=" First Name" id="fn" name="firstname"></td>
                  <td><label>Surname: </label><br></td>
                  <td><input type="text" placeholder=" Surname" id="sn" name="lastname"></td>
                <tr>
                  <td><label>Email: </label></td>
                  <td><input type="text" placeholder=" Email address" id="em" name="email"></td>
                  <td><label>Mobile: </label></td>
                  <td><input type="text" placeholder=" Mobile Number" id="pn" name="mobile"></td>
                </tr>
        </table>
    <br><label>Gender: <input type="radio" name="Gender" value="male" > Male <input type="radio" name="Gender" value="female"> Female <input type="radio" name="Gender" value="other"> Other</label>
	<br><label>Country:</label>
	<select id="dropDown">
        <option name="Country">Select Country</option>
	   <option name="Country" value="India">India</option>
	   <option name="Country" value="Iran">Iran</option>
	   <option name="Country" value="Iraq">Iraq</option>
	   <option name="Country" value="Ireland">Ireland</option>
	   <option name="Country" value="Isle of Man">Isle of Man</option>
	   <option name="Country" value="Israel">Israel</option>
   </select>
	<br><br><label for="birthday">Birthday:</label>
	<input type="date" id="birthday" name="birthday">
    <br><label>Password: <input type="password" id="pw"></label>
    <br><input type="checkbox" id="cbox"><label for="cbox" style="font-size: 20px;">I agree to the terms and Conditions</label>
    <br><button style="width:50%;" class="btn" onclick="return validate()">Sign Up</button><input type="reset"  style="width:20%;margin-left:20px"><br>
</form>
<br><hr>
<div style="display:flex;justify-content: center;margin:10px" >
    <a href="login.html"><button class="btn" >Already have an account ?  Log in</button></a><br>
</div>

<!-- End Sign Up Form -->

</div>

<div class="footer">

    <footer >
        <p>
                Designed by 18co42
                <br>
                Copyright © 2021

        </p>

    </footer>

</div>
</body>
</html>
