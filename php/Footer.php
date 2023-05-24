    <!-- Footer Start -->

    <?php

    include "db.php";
    $query = "SELECT * from `social_media`";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $twitter = $row["Twitter"];
    $facebook = $row["Facebook"];
    $linkedin = $row["Linkedin"];
    $instagram = $row["Instagram"];
    
    ?>

    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="<?=$twitter?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?=$facebook?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?=$linkedin?>"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="<?=$instagram?>"><i class="fab fa-instagram"></i></a>
            </div>

            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Copyright -
                    <?=date("Y")?></a>. All Rights Reserved.
            </p>
        </div>
    </div>

    <!-- Footer End -->