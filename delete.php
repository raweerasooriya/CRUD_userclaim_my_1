<?php  

require'config.php';

$Id=$_POST["Id"];

$sql="DELETE FROM `claim`WHERE Id='$Id'";

if($con->query($sql)){
    header("Location: read.php");
}
else{
    echo "Not Success";

}

?>