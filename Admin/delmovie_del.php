<?php
include 'config.php';

$movie_delete_id=$_GET['delmov'];
$delete_movie=mysqli_query($con,"delete from addmovie where movie_id='$movie_delete_id'");

if($delete_movie>0)
{
    echo 
    "
    <script>
    window.location.assign('viewmovie.php');
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