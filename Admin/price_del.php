<?php
include 'config.php';

$price_delete_id=$_GET['pr'];
$delete_movie_price=mysqli_query($con,"delete from movie_price where price_id='$price_delete_id'");

if($delete_movie_price>0)
{
    echo 
    "
    <script>
    window.location.assign('price.php');
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