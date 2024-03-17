<?php
session_start();

include("../php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Profile</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pages.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>
    <!--NavBar Start-->
    <header class="header">
            <div class="logo">
                <p style="float:left; margin:35px; "><a href="../pages/home.php" style="color:white; font-weight: 100; "> Home </a></p>
                 <a href="../php/logout.php"> <button type="button" id="button-logout-edit"class="btn btn-danger" style="float:right; margin: 35px; font: size 10px;font-size: 15px; height:35px; width: 100px; border-radius:5px;">Log Out</button> </a>
            </div>
    </header>
        <!--NavBar End-->

        <!--Profile Changing Content-->
        <div class="container">
            <div class="box form-box">
                <?php
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];

                    $id = $_SESSION['id'];

                    $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred");

                    if($edit_query){
                        echo "<div class='message'>
                        <p>Profile Updated!</p>
                    </div> <br>";
                echo "<a href='../pages/home.php'><button class='btn'>Go Home</button>";
                    }
                }else{

                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_Age = $result['Age'];
                    }
                ?>
                <header>Change Profile</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Update" required>
                    </div>

                </form>
            </div>
            <?php } ?>
        </div>
        <!--Profile Changing Content End-->

</body>
</html>