<?php require 'nav.php'; ?>
  <!-------------------------------------------------CAROUSEL------------------------------------------------->
  <!-- Base page(Index)-->
    <div class="slider">
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/carousel-2.png" class="" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/carousel-3.png" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/carousel-1.png" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.5s">
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.8s">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-arrow-left text-black"></i>
				</a>
                <a class="right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-arrow-right text-black"></i>
				</a>
            </div>
        </div>
    </div>
    
    <div class="whitespace">
        <img src="img/background.png" alt="">
    </div>
    <!-------------------------------------------------OUR-TEAM------------------------------------------------->
    
    <div id="our-team">
        <div class="container">
        <div class="text-center">
            <h1>Our Team</h1>
        </div>
        </div>
        <div class="team">
        <div class="container">
            <div class="row">
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                <img src="img/team/team 1.jpg" class="img-responsive" alt="">
                <h2>Jillmarie Inocencio</h2>
                <h4>Developer</h4>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                <img src="img/team/team 1.jpg" class="img-responsive" alt="">
                <h2>Joyce Ann Tobias</h2>
                <h4>Web Manager</h4>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                <img src="img/team/team 1.jpg" class="img-responsive" alt="">
                <h2>Elena Andres</h2>
                <h4>Content Producer</h4>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                <img src="img/team/team 1.jpg" class="img-responsive" alt="">
                <h2>Ed Vellalyn Benedicto</h2>
                <h4>UX Designer</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!--/#our-team-->



<?php require 'footer.php'; ?>