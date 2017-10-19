<?php

?>
<html>

<head>
    <title> CAMAGRU </title>

<style>
    .error {color: #FF0000;}
</style>
</head>

<body>

<?php

$name = $email = $username = $password = "";
$nameErr = $emailErr = $usernameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "is required";
    }
    else
    {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr = "Only letters and white space allowed"; 
        }
    }
    if (empty($_POST["email"]))
    {
        $emailErr = "is required";
    }
    else
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format"; 
        }
    }
    if (empty($_POST["username"]))
    {
        $usernameErr = "is required";
    }
    else
    {
        $username = test_input($_POST["username"]);
    }
    if (empty($_POST["password"]))
    {
        $passwordErr = "is required";
    }
    else
    {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field.</span></p>

<form id='register' action= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method='post' accept-charset='UTF-8'> 
<fieldset>
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/><!--whats this line for-->

<label for='name' >Your Full Name :</label>
<input type='text' name='name' id='name' maxlength="50" />
<label class = "error" for='name' > * <?php echo $nameErr;?></label></br>

<label for='email' >Email Address :</label>
<input type='text' name='email' id='email' maxlength="50" />
<label class = "error" for='email' > * <?php echo $emailErr;?></label></br>

<label for='username' >UserName :</label>
<input type='text' name='username' id='username' maxlength="50" />
<label class = "error" for='username' > * <?php echo $usernameErr;?></label></br>

<label for='password' >Password :</label>
<input type='password' name='password' id='password' maxlength="50" />
<label class = "error" for='password' > * <?php echo $nameErr;?></label></br>

<input type='submit' name='Submit' value='Submit' />
</fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
?>

</body>
</html>