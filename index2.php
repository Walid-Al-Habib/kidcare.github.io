<?php session_start(); ?>
<?php include "header.php"; ?>
    <!---------slider-------->
    <div id="slider">
        <div id="HeaderSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#HeaderSlider" data-slide-to="0" class="active"></li>
                <li data-target="#HeaderSlider" data-slide-to="1"></li>
            </ol>
        <div class="carousel-inner">
                <div class="carousel-item active">
                    <img  class="d-block img-fluid" src="slide1.jpg" >
                </div>
                
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="slide2.jpg" >
                </div>
        </div>
            <a class="carousel-control-prev" href="#HeaderSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#HeaderSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!---------------About-------------->
    <section id="about">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <h2>About us</h2>
                <div class="about-content">
                    <center>Kid Care is a platform for the parents and Day Care Centers in the Dhaka city where the day cares supervise and monitor the safety of children in their care, prepare meals and organize mealtimes and snacks for children. and develop schedules and routines to ensure that children have enough physical activity, rest, and playtime. We provide the information about different day cares, location and payment information are also provided. This platform is for all the parents having children from 6 months to 8 years.
</center>
                </div>
            </div>
            
            </div>
        </div>
        </section>
        <!-----------team member------ ----->
    <section id="team">
        <div class="container">
            <h2>Our Team</h2>
            <div class="row">
            <div class="col-md-3 profile-pic text-center"> 
                <div class="img-box">
                <img src="Meem.jpg" width="200" height="200" class="img-responsive">
                    <ul>
                        <a href="https://www.facebook.com/nusratpathan.meem"><li><i class="fa fa-facebook"></i> </li></a>
                        <a href="#"><li><i class="fa fa-instagram"></i></li></a>
                    </ul>    
                           
                    
                </div>
                <h2>Nusrat Pathan Meem</h2>
                <h3>North South University</h3>
            </div>
                <div class="col-md-3 profile-pic text-center"> 
                <div class="img-box">
                <img src="waliddp.jpg" width="200" height="200" class="img-responsive">
                    <ul>
                        <a href="https://www.facebook.com/walid.al.habib.744"><li><i class="fa fa-facebook"></i> </li></a>
                        <a href="https://www.instagram.com/walid_al_habib/"><li><i class="fa fa-instagram"></i></li></a>
                    </ul>    
                           
                    
                </div>
                <h2>Walid Al Habib</h2>
                <h3>North South University</h3>
            </div>
                <div class="col-md-3 profile-pic text-center"> 
                <div class="img-box">
                <img src="20211203_215547.jpg" width="200" height="200" class="img-responsive">
                    <ul>
                        <a href="https://www.facebook.com/atiya.kifa"><li><i class="fa fa-facebook"></i> </li></a>
                        
                        <a href="#"><li><i class="fa fa-instagram"></i> </li></a>
                           
                    </ul>
                </div>
                <h2>Atiya Sharmin</h2>
                <h3>North South University</h3>
            </div>
           
        </section>

    
    <?php include "footer.php"; ?>
    </body>
    
</html>