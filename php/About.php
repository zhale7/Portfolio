<!-- About Start -->

<?php

  $description = $row["Description"];
  $occupation = $row["Occupation"];
  $name = $row["Name"];
  $degree = $row["Degree"];
  $birthday = $row["Birthday"];
  $phone = $row["Phone"];
  $email = $row["Email"];
  $address = $row["Address"];
  
  
?>


<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
        </div>
        <div class="row align-items-center">
            <?php
            
            $query = "SELECT * FROM `images` WHERE image_type='about' LIMIT 1";
            $result = mysqli_query($conn, $query);
            $images = mysqli_fetch_assoc($result);
            $based64_data = base64_encode($images["image"]);
            
            echo "
             <div class='col-lg-5 pb-4 pb-lg-0'>
                <img class='img-fluid rounded w-100' src='data:image/jpg;base64,$based64_data' alt=''>
            </div> 
            "
          ?>
            <div class="col-lg-7">
                <h3 class="mb-4"><?=$occupation?></h3>
                <p><?=$description?></p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2">
                        <h6>Name: <span class="text-secondary"><?=$name?></span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Birthday: <span class="text-secondary"><?=$birthday?></span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Degree: <span class="text-secondary"><?=$degree?></span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Phone: <span class="text-secondary"><?=$phone?></span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Email: <span class="text-secondary"><?=$email?></span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Address: <span class="text-secondary"><?=$address?></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Skill Start -->
<div class="container-fluid py-5" id="skill">

    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills
            </h1>
            <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
        </div>

        <div class="row align-items-center justify-content-center">

            <div class="col-md-8">

                <div class="skill mb-4">

                    <?php
                      $query2 = 'SELECT * FROM `skills`';
                      $run = mysqli_query($conn, $query2);

                      while ($result = $run->fetch_assoc()) {
                        $skillName = $result['skill'];
                        $skillPct = $result['percentage'];

                        echo '<div class="d-flex justify-content-between">
                              <h6 class="font-weight-bold">'.$skillName.'</h6>
                              <h6 class="font-weight-bold">'.$skillPct.'%</h6>
                            </div>
                            <div class="progress">
                           <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="'.$skillPct.'" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>';

                    }
      ?>

                </div>
            </div>


            <!-- <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">HTML</h6>
                        <h6 class="font-weight-bold">95%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div> -->


            <!-- <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">CSS</h6>
                        <h6 class="font-weight-bold">85%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div> -->

            <!-- <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">PHP</h6>
                        <h6 class="font-weight-bold">90%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div> -->



            <!-- <div class="col-md-6"> -->

            <!-- <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Javascript</h6>
                        <h6 class="font-weight-bold">90%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div> -->

            <!-- <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Angular JS</h6>
                        <h6 class="font-weight-bold">95%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div> -->

            <!-- <div class="skill mb-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-bold">Wordpress</h6>
                        <h6 class="font-weight-bold">85%</h6>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div> -->


            <!-- </div> -->


        </div>

    </div>
</div>
<!-- Skill End -->

<!-- About End -->