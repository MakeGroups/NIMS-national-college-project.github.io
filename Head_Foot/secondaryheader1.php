<nav class="navbar navbar-expand-lg lg1 primary--header sticky-top p-0">
    <div class="container-fluid">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script>
            // function makeActive() {
            //    var element = document.getElementById("text");
            //    element.classList.add("active");
            // //    element.innerHTML="This is Active";
            //     window.alert("worked");
            // }
                function makeActive()
                {
                    let element = document.querySelectorAll("a #text");
                    
                    element.forEach(text => {
                        text.addEventListener('click',function(){
                            element.forEach(text1 => text1.classList.remove('active'));
                            this.classList.add('active');
                        });
                        
                    });  
                }
        </script>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
                <li class="nav-item">
                    <a class="nav-link  red robotomedium f18 active" id="text" onclick="makeActive()" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link red robotomedium f18" id="text" href="about.php">About NIMS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle red robotomedium f18" id="active" href="nimscourses.php" role="button" data-bs-toggle="dropdown" onclick="navigate()" aria-expanded="false">
                        NIMS Courses
                    </a>
                    <ul class="dropdown-menu p-2 lg1">
                        <label class=" fs-6  red robotomedium f18">Management Courses</label>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsaviation.php">Aviation</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsbanking.php">Banking</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimslogistics.php">Logistics</a></li>
                        <label class="fs-6 red robotomedium f18">Science Courses</label>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsnutrition.php">Nutrition</a></li>
                        <li><a class="dropdown-item red robotomedium f16" href="nimsfashion.php">Fashion Designing</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link red robotomedium f18" id="active" href="niplcourses.php">NIPL Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link red robotomedium f18" id="active" href="lifenims.php">Life @ NIMS</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link red robotomedium f18" id="active" href="stuplacement.php">Student Placement</a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link red robotomedium f18" id="active" href="news.php">News</a>
                </li>
            </ul>

        </div>
    </div>
</nav>