<?php
include('header.php');
?>




<!-- page title -->
<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Ticket Pricing</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Ticket Prices</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- pricing -->
	<div class="section">
		<div class="container">
			<div class="row">
				<!-- plan features -->
				<div class="col-12">
					<ul class="row plan-features">
						<li class="col-12 col-md-6 col-lg-4">Stream on your phone, laptop, tablet or TV.</li>
						<li class="col-12 col-md-6 col-lg-4">Thousands of TV shows, movies & more.</li>
						<li class="col-12 col-md-6 col-lg-4">You can even Download & watch offline.</li>
					</ul>
				</div>
				<!-- end plan features -->

				<!-- price -->
				<div class="col-12 col-md-12 col-lg-12">
					<div class="price">
                    <div class="col-lg-12">
                <div class="block">
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover text-white">
                      <thead>
                        <tr>
                          <th>Movie Name</th>
                          <th>Economy Class</th>
                          <th>Business Class</th>
                          <th>First Class</th>
                        </tr>
                      </thead>
                      
                        <!-- select for showing data in same page -->
                        <?php 

                              $movie_prc_result=mysqli_query($con,"select * from movie_price");
                                 foreach($movie_prc_result as $movie_price_data){
                         
                            echo "
                            <tbody>
                                <tr>
                                    <td style='color:white;background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #36a8c1100%);'> $movie_price_data[movie_name_price] </td>
                                    <td style='color:white;'> $movie_price_data[economy] </td>
                                    <td style='color:white;'> $movie_price_data[business] </td>
                                    <td style='color:white;'> $movie_price_data[first_class] </td>
                                </tr>
                            </tbody>
                                 ";
                        

                            }

                      ?>
    











                        
                      
                      </table>
                    </div>
                  </div>
                </div>
					</div>
				</div>
				<!-- end price -->
			</div>
		</div>
	</div>
	<!-- end pricing -->











<?php
include('footer.php');
?>