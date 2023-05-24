    <!-- Home Start -->

    <?php
  
    include "db.php";
    $query = "SELECT * from `about`";
    $result = mysqli_query($conn, $query);
 
    $row = mysqli_fetch_assoc($result);
    $name = $row["Name"];
    $surname = $row["Surname"];
    $image = $row["Image"];
    $occupation = $row["Occupation"];
    $occupations_arr = explode("&", $occupation);

   ?>

    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">

                <?php
            
            $query = "SELECT * FROM `images` WHERE image_type='home' LIMIT 1";
            $result = mysqli_query($conn, $query);
            $images = mysqli_fetch_assoc($result);
            $based64_data = base64_encode($images["image"]);

            echo "
            <div class='col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0'>
                <img class='img-fluid w-100 rounded-circle shadow-sm' src='data:image/jpg;base64,$based64_data' alt=''>
            </div>
            "
            ?>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">
                        <?= $name." ".$surname?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none"><?=$occupations_arr[0]?>,<?=$occupations_arr[1]?></div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href='php/downloadCV.php?path=../JHCV.pdf' class="btn btn-outline-light mr-5">Download
                            CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Home End -->