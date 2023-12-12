<?php
include 'config.php';

$genre_delete_id=$_GET['gen'];
$delete_genre=mysqli_query($con,"delete from genre where gen_id='$genre_delete_id'");

if($delete_genre>0)
{
    echo 
    "
    <script>
    window.location.assign('genre.php');
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