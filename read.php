<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="style.css"> -->

     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<div class="container my-5">
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
            User Claim
        </nav>
        
        <a class="primary" href="index.php" role="button">New User Cliam</a>
        <br>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Claim Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>UserId</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Types of claims</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<?php
    require'config.php';

    $sql="SELECT `Id`, `first_name`, `last_name`, `userId`, `gender`, `address`, `phone_number`, `email`, `amount`, `typesClaims` FROM `claim`";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "
            <tr>
                <td>{$row['Id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['userId']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['address']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['email']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['typesClaims']}</td>
                <td>
                <a class='edit' href='/userclaim/update1.php?id={$row['Id']}'>Edit</a>
                <a class='edit' href='/userclaim/delete1.php?id={$row['Id']}'>Delete</a>
            </td>
            </tr>";
        }
    }
    else{
        echo "No Results";
    }

    $con->close();
?>

</tbody>
</table>
</div>
</body>
</html>


