<body>
    <?php
    $banner_array = array();
    array_push($banner_array, ["img" => "./res/banner1.jpg", "title" => "Donate with us", "btnTitle" => "Donate", "btnRef" => "","btnClr"=>"primary"]);
    array_push($banner_array, ["img" => "./res/banner2.jpg", "title" => "Donate with us", "btnTitle" => "Donate", "btnRef" => "","btnClr"=>"Success"]);
    array_push($banner_array, ["img" => "./res/banner3.jpg", "title" => "Donate with us", "btnTitle" => "Donate", "btnRef" => "","btnClr"=>"Danger"]);
    ?>
    <!-- CAROUSEL -->
    <div class="v-100 d-flex justify-content-center" style="background-color: #eeeff3">
        <div id="banner1" class="carousel slide" data-bs-ride="carousel" style="max-width: 1200px">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#banner1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#banner1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#banner1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                foreach ($banner_array as $banner) {
                ?>
                    <div class="carousel-item active">
                        <img src="<?php echo ($banner["img"]) ?>" class="d-block w-100" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-danger"><?php echo ($banner["title"]) ?></h5>
                            <button class="btn btn-<?php echo(($banner["btnClr"])) ?>"><?php echo ($banner["btnTitle"]) ?></button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>