<?php
include('admin_header.php');
?>


<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Bookings</h2>
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
                          <th>Person Name</th>
                          <th>Person Email</th>
                          <th>Movie Timings</th>
                          <th>Movie Cinema</th>
                          <th>Movie Name</th>
                          <th>Movie Show Date</th>
                          <th>Movie Price</th>
                          <th>No Of Seats</th>
                          <th>Person Card Info</th>
                        </tr>
                      </thead>
                      
<!-- select for showing data  -->
                        <?php 

                              $booking_detail_result=mysqli_query($con,"select * from booking_details");
                                 foreach($booking_detail_result as $booking_detail){
                         ?>
                            <tbody>
                                <tr> 
<!-- movie id -->
                                    <th scope='row'> 
                                     <?php echo $booking_detail['booking_id'];   ?>
                                 </th>

                                     <td>
                                     <?php echo $booking_detail['user_name'];   ?>
                                   
                                     </td>



                                     <td> 
                                             
                                     <?php echo $booking_detail['user_email'];   ?>


                                    </td>



                                    <td> 
                                    <?php echo $booking_detail['user_movie_dur'];   ?>
 
                                    </td>



                                         <td> 
                                         <?php echo $booking_detail['user_movie_cinema'];   ?>
     
     
                                         </td>




                                         <td> 
                                         <?php echo $booking_detail['user_movie_name'];   ?>
     
                                         </td>





                                         <td> 

                                         <?php echo $booking_detail['user_date'];   ?>
     
                                         </td>




                                    <td> 
                                    <?php echo $booking_detail['user_price'];   ?>
                                        
                                    </td>




                                    <td>
                                    <?php echo $booking_detail['user_seat'];   ?>
                                      
                                    </td>
                                    <td>
                                    <?php echo $booking_detail['user_card'];   ?>
                                      
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