<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css"href="css/login_style.css">
</head>
<body>
    <form action="functions/register.php" method="post">

        <h2>Registration</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name"><br>
        <label>Email</label>
        <input type="text" name="email" placeholder="Email (domain: .uiu.ac.bd)"><br>
        <fieldset>
        <legend>Type</legend>
            <div>
            <label for="contactChoice1">Student</label>
            <input style="color: black;" type="radio" id="contactChoice1" class='contactChoice' name="type" value="1" />
            <br>
<label for="contactChoice2">Faculty</label>
            <input style="color: black;" type="radio" id="contactChoice2" class='contactChoice' name="type" value="2" />
            <br>
<label for="contactChoice3">Admin</label>
            <input style="color: black;" type="radio" id="contactChoice3" class='contactChoice' name="type" value="3" />
            <br>
<label for="contactChoice4">Salesman</label>
            <input style="color: black;" type="radio" id="contactChoice4" class='contactChoice' name="type" value="4" />
            
            </div>
        </fieldset>
        <br>
        <label >Username</label>
        <input type="text" maxlength="11" name="username" placeholder="Username"><br>
        <label >Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <label >Confirm Password</label>
        <input type="password" name="c_password" placeholder="Password"><br>
        <button type="submit">Register</button>
        <a style="float: left; margin-left: 13px;" href='index.php'>Back</a> 

        <!-- <a href='guest_home.php'>Guest</a>  -->

    </form>
</body>
</html>