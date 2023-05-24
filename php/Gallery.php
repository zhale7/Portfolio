<!-- Gallery Start -->

<div class="container-fluid pt-5 pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">FROM MY CAMERA</h1>
        </div>
        <!-- <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">ME</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Shots</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">with GUYS</li>
                </ul>
            </div>
        </div> -->

        <div class="row portfolio-container">
            <?php
                
                include "db.php";
                
                $query = "SELECT * FROM `images` WHERE image_type='gallery'";
                $result = mysqli_query($conn, $query);
                
                while($images = mysqli_fetch_assoc($result)) {
                    $based64_data = base64_encode($images["image"]);
                    echo "
                <div class='col-lg-4 col-md-6 mb-4 portfolio-item'>
                
                    <div class='position-relative overflow-hidden mb-2'>
                        <img class='img-fluid rounded w-100' src='data:image/jpg;base64,$based64_data' alt=''>
                        <div class='portfolio-btn bg-primary d-flex align-items-center justify-content-center'>
                            <a href='data:image/jpg;base64,$based64_data' data-lightbox='portfolio'>
                                <i class='fa fa-plus text-white' style='font-size: 60px;'></i>
                            </a>
                        </div>
                    </div>
                    
                </div>";
                }
             ?>

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-1.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-2.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-3.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-4.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-5.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-6.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

<!-- Gallery End -->