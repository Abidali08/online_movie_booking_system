<?php
include 'config.php';

$lang_delete_id=$_GET['lang'];
$delete_lang=mysqli_query($con,"delete from language where lang_id='$lang_delete_id'");

if($delete_lang>0)
{
    echo 
    "
    <script>
    window.location.assign('language.php');
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