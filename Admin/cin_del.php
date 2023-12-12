<?php
include 'config.php';

$cin_delete_id=$_GET['Cin'];
$delete_cin=mysqli_query($con,"delete from cinema where cin_id='$cin_delete_id'");

if($delete_cin>0)
{
    echo 
    "
    <script>
    window.location.assign('cinema.php');
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Something Went Wrong Try Another Time!');
    </script>
    ";
}
?>