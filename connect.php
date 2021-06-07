<?php

$netctl = mysqli_connect("sql201.epizy.com","epiz_28791483","twpqVqCysQvS","epiz_28791483_booktwo");

if (isset($_POST['submit'])) {

    $name = $_POST['lname'];
    $phone = $_POST['lphone'];
    $email = $_POST['lemail'];
    $date = date('Y-m-d', strtotime($_POST['ldate'])); 
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO bookingtwo VALUE ('','$name','$phone','$email','$date','$quantity')";
    mysqli_query($netctl,$query);

    header('location:book_ticket2.php');
    exit();
}


//TWO