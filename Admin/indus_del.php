<?php
include 'config.php';

$indus_delete_id=$_GET['ind'];
$delete_indus=mysqli_query($con,"delete from industry where indus_id='$indus_delete_id'");

if($delete_indus>0)
{
    echo 
    "
    <script>
    window.location.assign('industry.php');
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