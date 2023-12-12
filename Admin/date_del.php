<?php
include 'config.php';

$date_delete_id=$_GET['dat'];
$delete_date=mysqli_query($con,"delete from date where date_id='$date_delete_id'");

if($delete_date>0)
{
    echo 
    "
    <script>
    window.location.assign('date.php');
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