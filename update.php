<?php 
    require'config.php';


    $Id = "";
    $first_name ="";
    $last_name = "";
    $userId = "";
    $gender = "";
    $address =
    $phone_number = "";
    $email = "";
    $amount = "";
    $typesClaims ="";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the client

    if (isset($_GET["Id"])) {
        header("location: /userclaim/read.php");
        exit;
    }

    $Id = $_GET["Id"];

    // Read the row of the selected client from database table
    $sql = "SELECT * FROM Claim WHERE Id=$Id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location: /userclaim/read.php");
        exit;
    }

    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $userId = $row['userId'];
    $gender = $row['gender'];
    $address = $row['address'];
    $phone_number =$row['phone_number'];
    $email = $row['email'];
    $amount = $row['amount'];
    $typesClaims = $row['typesClaims'];

} else {
    // POST method: Update the data of the user
    $Id = $_POST["Id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $userId = $_POST["userId"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $typesClaims = $_POST["typesClaims"];

    do {
        if (empty($first_name) || empty($last_name) || empty($userId)|| empty($gender)|| empty($address)|| empty($phone_number)|| empty($email)|| empty($amount)|| empty($typesClaims)) {
            echo 'Please fill out all fields.';
            break;
        }

        $sql = "UPDATE claim " .
            "SET `first_name`='$first_name',`last_name`='$last_name',`userId`='$userId',`gender`='$gender',`address`='$address',`phone_number`='$phone_number',`email`='$email',`amount`='$amount',`typesClaims`='$typesClaims' 
            WHERE Id";

        $result = $con->query($sql);

        if (!$result) {
            echo "Invalid query: " . $con->error;
            break;
        }

        header("location: /userclaim/read.php");
        exit;
    } while (false);
}
?>

