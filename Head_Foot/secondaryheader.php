<nav class="navbar navbar-expand-lg lg1 primary--header sticky-top p-lg-0 p-md-0 p-sm-1">
    <div class="container-fluid">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                <li class="nav-item  mt-lg-0 mt-md-0 mt-2">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "index.php") {
                                    echo "active";
                                } ?> nav-link  red robotomedium f14 px-4 py-3"  aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "about.php") {
                                    echo "active";
                                } ?> nav-link red robotomedium f14 p-3"  href="about.php">About NIMS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "nimsaviation.php") {
                                    echo "active";
                                } else if (basename($_SERVER['PHP_SELF']) == "nimsbanking.php") {
                                    echo "active";
                                } else if (basename($_SERVER['PHP_SELF']) == "nimslogistics.php") {
                                    echo "active";
                                } else if (basename($_SERVER['PHP_SELF']) == "nimsfashion.php") {
                                    echo "active";
                                } else if (basename($_SERVER['PHP_SELF']) == "nimsnutrition.php") {
                                    echo "active";
                                }

                                ?>  
                    nav-link dropdown-toggle red robotomedium f14 p-3"  href="nimsaviation.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NIMS Courses
                    </a>

                    <ul class="dropdown-menu p-3 lg1 border-0">
                        <li><a class="dropdown-item red robotomedium f16" href="nimsaviation.php">Aviation</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsbanking.php">Banking</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimslogistics.php">B.Sc It & Logistics</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsfashion.php">Fashion Designing</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsnutrition.php">Nutrition</a></li>

                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == "niplcourses.php") {
                        echo "active";
                    } else if (basename($_SERVER['PHP_SELF']) == "niplaviation.php") {
                        echo "active";
                    } else if (basename($_SERVER['PHP_SELF']) == "niplfashion.php") {
                        echo "active";
                    } else if (basename($_SERVER['PHP_SELF']) == "niplbanking.php") {
                        echo "active";
                    } else if (basename($_SERVER['PHP_SELF']) == "nipllogistics.php") {
                        echo "active";
                    }
                    ?>

                                 nav-link red robotomedium  f14 p-3" href="niplcourses.php" >NIPL Courses</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "lifenims.php") {
                                    echo "active";
                                } ?> nav-link red robotomedium f14 p-3" href="lifenims.php" title="lifenims">Life @ NIMS</a>
                </li>
                <li class=" nav-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "stuplacement.php") {
                                    echo "active";
                                } ?> nav-link red robotomedium f14 p-3" href="stuplacement.php" title="studentplacenemt">Student Placement</a>
                </li>
                <li class=" nav-item">
                    <a class="<?php if (basename($_SERVER['PHP_SELF']) == "news.php") {
                                    echo "active";
                                } ?> nav-link red robotomedium f14 p-3" href="news.php">News</a>
                </li>
            </ul>

        </div>
    </div>
</nav>