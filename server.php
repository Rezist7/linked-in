<?php
    session_start();
    $errors = array();
 include('Dbcon.php'); 
    
    // if the register button is clicked
    

     if (isset($_POST['client'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $reffcode = mysqli_real_escape_string($db, $_POST['reffcode']);
        $image = $_FILES['image']['name'];
        //ensure that form fields are filled in properly

        if (empty($username)){
            array_push($errors, "* Username is required *");
        }
        if (empty($phone)){
            array_push($errors, "* Phone Number is required *");
        }
        if (empty($password_1)){
            array_push($errors, "* Password is required *");
        }
        if ($password_1 != $password_2){
            array_push($errors, "* The two passwords do not match *");
        }
    $target = "images/".basename($image);
        //if there are no errors, save user to datbase
$query = "SELECT * FROM users WHERE phone='$phone'";
 $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) >0){ array_push($errors, "* phone number is in registered. use another number *");} 
else{
        if (count($errors) == 0) {
           /*
            if (!empty($reffcode)){
            $query = "SELECT points,user_id FROM users WHERE reffcode='$reffcode' ";
            $result = mysqli_query($db, $query);
            $row = $result->fetch_assoc();
            $new=$row['points']+25;
            $query = "UPDATE `users` SET `points` = '$new' WHERE `users`.`user_id` = $row[user_id];";
           mysqli_query($db, $query);
        }*/



            $n=5; 
function getName($n) { 
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
  
$reff=getName($n); 
            $password = md5($password_1);//encrypt before storing to database
            $sql = "INSERT INTO `users` (`user_id`, `username`, `phone`, `email`, `password`, `points`, `redeemed`, `image`, `time`,`reffcode`)VALUES('$phone','$username','$phone', '$phone', '$password', 25,'', '$image', NOW(),'$reff')";
            mysqli_query($db, $sql);
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
            $_SESSION['username'] = $username;
            $query = "SELECT user_id FROM users WHERE phone= $phone ";
            $result = mysqli_query($db, $query);
            $row = $result->fetch_assoc();
            $_SESSION['link_id'] = $row['user_id'];
            header('location: 3/index.php'); //redirect to home page
        }
    } }





    //log in user from login page
    if (isset($_POST['login'])){

        $phone= mysqli_real_escape_string($db, $_POST['phone']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        //ensure that form fields are filled in properly
        if (empty($phone)){
            array_push($errors, "* Phone Number is required *");
        }
        if (empty($password)){
            array_push($errors, "* Password is required *");
        }

        if(count($errors) == 0){
            $password = md5($password); //encrypt password before comparing them with that from the database
            $query = "SELECT username,user_id FROM users WHERE phone='$phone' AND password='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1){

                $row = $result->fetch_assoc();
                
                //log in user

                $_SESSION['username'] = $row['username'];
                $_SESSION['link_id'] = $row['user_id'] ;
                header('location: 3/index.php');}
                 else{
                array_push($errors, "* wrong username $ password combination *");
            } //redirect to home page
                //redirect to home page
                }
           
        } 
     
   //logout
     if (isset($_GET['logout'])){
         session_destroy();
         unset($_SESSION['username']);
         header('location:login.php');
        }
?>