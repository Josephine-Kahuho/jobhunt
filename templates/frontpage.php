<?php include 'inc/header.php'?>
<section class="mb-5">
    <div id="carousel-1" class="carousel slide" data-ride="carousel">        
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>        
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://picsum.photos/1600/400/?image=666" alt="slide">
                <div class="carousel-caption d-none d-md-block">
                <h3>1 Lorem ipsum dolor</h3>
                <p>two and more carousel in one page example...</p>
                </div>
            </div>            
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://picsum.photos/1600/400/?image=676" alt="Slide">
                <div class="carousel-caption d-none d-md-block">
                <h3>2 Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
                </div>
            </div>            
        </div><!-- e carousel-inner -->            
        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">prev</span>
        </a>
        
        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">next</span>
        </a>            
    </div><!-- e carousel -->
</section><!-- e section --> 
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Pupular categories-->
        <div class="text-center">
            <h2 class=" mb-0 d-inline-block">Popular Job categories</h2>
        </div>
        <br>
        <div class="row justify-content-center">
            <!--Category  Items-->
            <?php foreach($jobs as $job): ?>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="wrimagecard wrimagecard-topimage">
                    <a href="#">
                    <div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
                        <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
                    </div>
                    <div class="wrimagecard-topimage_title">
                        <h4><?php echo $job->job_title ?>
                        <div class="pull-right badge">18</div></h4>
                    </div>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'?>