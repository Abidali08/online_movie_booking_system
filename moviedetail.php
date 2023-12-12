<?php
include('header.php');
?>

<?php

// getting specific movie id 
$mov_det_id=$_GET['movdet'];


$fetch_mov_det=mysqli_query($con,"select * from addmovie where movie_id='$mov_det_id'");
$movie_details=mysqli_fetch_assoc($fetch_mov_det);

?>

<!-- movie details -->
<section>



<!-- movie title name -->
    <section>
              <div class="container" style="margin-top:120px;">
                         <h2 class="mb-4 display-3" style="color:white;text-transform:uppercase;text-align:center;">

                               <?php echo "📽 &nbsp;".$movie_details['movie_name']; ?>
                         </h2>
             </div>
    </section>
<!-- movie title name -->




<!-- movie trailer -->

    <section>

          <div class="container">

                <iframe width="1140" height="641" src="<?php echo  $movie_details['movie_trl_url']; ?>?autoplay=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);"></iframe>   

          </div>

    </section>
<!-- movie trailer -->



<!-- movie accordion -->

<div class="container">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      SYNOPSIS:
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Actors in <?php echo "<b>".$movie_details['movie_name']."</b>"; ?> Scott Lang and Hope Van Dyne, along with Hank Pym and Janet Van Dyne, explore the Quantum Realm, where they interact with strange creatures and embark on an adventure that goes beyond the limits of what they thought was possible.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        SHOWS:
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <span>Cinema :
            <?php 
                                         	
            $cin_res=mysqli_query($con,"select cinema_name from cinema where cin_id='$movie_details[movie_cin_id]'");
            $cin_data=mysqli_fetch_assoc($cin_res);
            echo $cin_data['cinema_name'];
                                         	
                                         	
            ?>
            </span><hr>
            <span>Show-Times :
            <?php 
                                         	
      	echo $movie_details['movie_duration'];
                                         	
                                         	
            ?>
            </span><hr>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        OTHER DETAILS:
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
            <span>Ratings :
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            </span><br><hr>
            <span>Genre : 
            <?php 

            $genre_res=mysqli_query($con,"select genre_name from genre where gen_id='$movie_details[movie_genre_id]'");
            $genre_data=mysqli_fetch_assoc($genre_res);
            echo $genre_data['genre_name'];

            ?>
            </span><br><hr>
            <span>Industry :
            <?php
                   $indus_res=mysqli_query($con,"select industry_name from industry where indus_id='$movie_details[movie_indus_id]'");
                   $indus_data=mysqli_fetch_assoc($indus_res);
                   echo $indus_data['industry_name'];
            ?>
            </span><br><hr>
            <span>Language :
                  <?php 
                  $lang_res=mysqli_query($con,"select language_name from language where lang_id='$movie_details[movie_lang_id]'");
                  $lang_data=mysqli_fetch_assoc($lang_res);
                  echo $lang_data['language_name'];
                  ?>
            </span><br><hr>
      </div>
    </div>
  </div>
</div>

</div>

<!-- movie accordion -->





<!-- book movie btn -->
<hr style="color:white;">
<center>
<a href="book_ticket.php?movbook=<?php echo $movie_details['movie_id'];?>" class="header__sign-in">
      <i class="icon ion-ios-log-in"></i>
      <span>Book Tickets</span>
</a>
</center>
<hr style="color:white;">
<!-- book movie btn -->





<!-- movie details -->
</section>


<?php
include('footer.php');
?>