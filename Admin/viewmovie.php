<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">View Movies</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->

<div class="col-lg-12 ">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Movie Poster</th>
                          <th>Movie Name</th>
                          <th>Movie Cinema</th>
                          <th>Movie Genre</th>
                          <th>Movie Industry</th>
                          <th>Movie Language</th>
                          <th>Movie Date</th>
                          <th>Movie Trailer</th>
                          <th>Movie Duration</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data  -->
                        <?php 

                              $addmovie_result=mysqli_query($con,"select * from addmovie");
                                 foreach($addmovie_result as $addmovie_data){
                         ?>
                            <tbody>
                                <tr> 
<!-- movie id -->
                                    <th scope='row'> 
                                       <?php echo $addmovie_data['movie_id']; ?>
                                    </th>
<!-- movie poster -->


                                    <td> 
                                        <?php 
                                           echo "<img src='./upload-images/$addmovie_data[movie_img]' width='70' height='70'>"; 
                                        ?> 
                                    </td>

<!-- movie name -->

                                     <td>
                                       <?php 
                                          echo $addmovie_data['movie_name']; 
                                       ?>
                                     </td>
<!-- movie cinema -->


                                     <td> 
                                             
                                        <?php 
                                         
                                                 $cinema_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$addmovie_data[movie_cin_id]'");    
                                         
                                                foreach($cinema_res as $data){}
                                                echo $data['cinema_name'];
                                         
                                         
                                        ?> 

                                    </td>


<!-- movie genre -->
                                    <td> 
                                             
                                             <?php 
                                              
                                                      $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$addmovie_data[movie_genre_id]'");    
                                              
                                                     foreach($genre_res as $data){}
                                                     echo $data['genre_name'];
                                              
                                              
                                             ?> 
                                    </td>


<!-- movie genre -->

                                         <td> 
                                             
                                             <?php 
                                              
                                                      $indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$addmovie_data[movie_indus_id]'");    
                                              
                                                     foreach($indus_res as $data){}
                                                     echo $data['industry_name'];
                                              
                                              
                                             ?> 
     
                                         </td>


<!-- movie language -->


                                         <td> 
                                             
                                             <?php 
                                              
                                                      $language_res=mysqli_query($con,"select language_name from language where lang_id='$addmovie_data[movie_lang_id]'");    
                                              
                                                     foreach($language_res as $data){}
                                                     echo $data['language_name'];
                                              
                                              
                                             ?> 
     
                                         </td>


<!-- movie date -->



                                         <td> 
                                             
                                             <?php 
                                              
                                                      $date_res=mysqli_query($con,"select date_name from date where date_id='$addmovie_data[movie_date_id]'");    
                                              
                                                     foreach($date_res as $data){}
                                                     echo $data['date_name'];
                                              
                                              
                                             ?> 
     
                                         </td>

<!-- movie trailer -->


                                    <td> 
                                         <?php 
                                                echo $addmovie_data['movie_trl_url']; 
                                         ?>
                                    </td>

<!-- movie duration -->


                                    <td>
                                      <?php 
                                           echo $addmovie_data['movie_duration'];
                                       ?>
                                    </td>



                                     <td>
                                        <a href="delmovie_del.php?delmov=<?php echo $addmovie_data['movie_id']; ?>"><i class='fa fa-trash btn'></i></a>
                                        <a href="edit_movie_del.php?editmov=<?php echo $addmovie_data['movie_id']; ?>"><i class='fa fa-pencil btn'></i></a>
                                     </td>
                                </tr>
                            </tbody>
                          
                        
                         <?php
                            }

                      ?>
    











                        
                      
                    </table>
                  </div>
                </div>
              </div>


<?php

include('admin_footer.php');

?>