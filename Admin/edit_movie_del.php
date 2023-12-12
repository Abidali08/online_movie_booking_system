<?php
include('admin_header.php');
?>
<?php 


$movie_edit_id=$_GET['editmov'];
$edit_movie_select=mysqli_query($con,"select * from addmovie where movie_id='$movie_edit_id'");
foreach($edit_movie_select as $edit_movie)
{
//     echo $edit_movie['PId'];
   
//     echo $edit_movie['PPrice'];
//     echo $edit_movie['PDescription'];
//     echo $edit_moive['Image'];
}

?>




<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit Movie Information</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->

<div class="col-lg-12">                           
                <div class="block">
                  <div class="title"><strong>Update Movies</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movies Name</label>
                        <div class="col-sm-9">
                            <!-- hidden input here -->
                        <input type="hidden" name="movie_edit_id" value="<?php echo $movie_edit_id; ?>">
                        <!-- edit movie name -->
                          <input type="text" class="form-control" name="edit_movie_name" value="<?php echo $edit_movie['movie_name']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- edit movie date -->
                        <label class="col-sm-3 form-control-label">Movie Image Poster</label>
                        <div class="col-sm-9">
                          <input type="file" required class="form-control" name="edit_movie_img" value="<?php echo $edit_movie['movie_img']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Trailer</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="edit_movie_trl_url" value="<?php echo $edit_movie['movie_trl_url']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Duration</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="edit_movie_duration" value="<?php echo $edit_movie['movie_duration']; ?>">
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #ff55a5 0%, #ff5860 100%);" name="edit_add_movie_btn">Update Movie Info</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

<!-- update add movie to data base -->
              <?php 
              
              
              if(isset($_POST['edit_add_movie_btn']))
              {
                  $addmovie_edit_id=$_POST['movie_edit_id'];
                  $edit_mov_name=$_POST['edit_movie_name'];
                  $edit_mov_trl_url=$_POST['edit_movie_trl_url'];
                  $edit_mov_dur=$_POST['edit_movie_duration'];
                  // for img upload and save
                  $edit_mov_image=$_FILES['edit_movie_img']['name'];
                  $edit_mov_image_tmp=$_FILES['edit_movie_img']['tmp_name'];
                  move_uploaded_file($edit_mov_image_tmp,"upload-images/".$edit_mov_image);
            

                  // update query not worked

                  $movie_edited=mysqli_query($con,"update  addmovie set movie_name='$edit_mov_name', movie_img='$edit_mov_image', movie_trl_url='$edit_mov_trl_url', movie_duration='$edit_mov_dur' where  movie_id='$addmovie_edit_id'");
                 
                  if($movie_edited>0){

                    echo "
                     <script>
                     window.location.assign('viewmovie.php');
                     </script>
                     ";
                  }


              }


              
              
              ?>

<?php

include('admin_footer.php');

?>