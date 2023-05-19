<?php @include('./Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<div class="container-fluid p-lg-5 p-md-4">
    <!-- tabs -->
    <ul class="nav nav-pills ms-lg-5 ms-md-4  mb-lg-5 mb-md-4 mb-3 mt-lg-0 mt-md-0  mt-3 gap-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a href="nimsaviation.php" class="text-decoration-none"><button class="nav-link f15 robotomedium ">Aviation</button></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="nimsbanking.php" class="text-decoration-none"><button class="nav-link f15 robotomedium">Banking</button></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="nimslogistics.php" class="text-decoration-none"> <button class="nav-link f15 robotomedium">B.Sc It & Logistics</button></a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="nimsfashion.php" class="text-decoration-none"><button class="nav-link f15 robotomedium">Fashion Designing</button></a>
        </li>

        <li class="nav-item" role="presentation">
            <a href="nimsnutrition.php" class="text-decoration-none"><button class="nav-link f15 robotomedium active">Nutrition</button></a>
        </li>
    </ul>
    <div class="row px-lg-5 px-md-4 px-0 mt-lg-5 mt-md-4 mt-4">
        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-3">
            <img src="pic/nims_courses/nutrition/bsc_nutrition.jpg" alt="MBA Aviation Course" class="img-fluid w-100">
        </div>
        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
            <h3 class="mb-3 mt-lg-0 mt-md-0 mt-3 mt-3 f26 robotosemibold red">B.Sc. Nutrition</h3>
            <p class="f16 robotoregular">The program provides a greater understanding of the scientific basis of nutrition
                and the influence of good nutrition on health. It has a multidisciplinary emphasis
                providing a broad base of knowledge and skills which provides the student with
                an opportunity to interact with the community and participate in the development
                process and to face the challenges at global platform. </p>
            <h4 class="mb-2 mt-3 f22 robotosemibold red">Duration :</h4>
            <p class="f16 robotoregular">3 Years</p>
            <h4 class="mb-2 mt-3 f22 robotosemibold red">Certificate Type :</h4>
            <p class="f16 robotoregular">Degree Award by Algappa University</p>

            <h4 class="mb-2 mt-3 f22 robotosemibold red">Eligibility</h4>
            <!-- <table class="table-responsive table-bordered border-danger p-5">
                <thead class="bgred white f16 robotomedium">
                    <tr>
                        <td class="text-center">Qualification</td>
                        <td class="text-center">Subject</td>
                        <td class="text-center">Course</td>
                    </tr>
                </thead>
                <tbody class="f14 robotomedium p-2">
                    <tr>
                        <td class="text-center">12th or Any Stream</td>
                        <td class="text-center">Physics, Chemistry & Maths,/Biology/Agriculture/
                            Micro-Biology/ Home Science</td>
                        <td class="text-center">B.Sc. Nutrition</td>
                    </tr>
                </tbody>
            </table> -->
            <table class="table table-bordered border-danger">
                <thead class="bgred white f16 robotomedium">
                    <tr>
                        <td scope="row" class="text-center">Qualification</td>
                        <td scope="row" class="text-center">Subject</td>
                        <td scope="row" class="text-center">Course</td>
                    </tr>
                </thead>
                <tbody class="f14 robotomedium ">
                    <tr>
                        <td class="text-center">12th or Any Stream</td>
                        <td class="text-center">Physics, Chemistry <span id="" class="readmore d-lg-block d-md-block d-sm-none d-none"> & Maths,/Biology/Agriculture/
                            Micro-Biology/ Home Science</span> <p id="" class="retrigger d-lg-none d-md-none d-sm-block d-block text-decoration-underline text-secondary f12">Read more...</p></td>
                        <td class="text-center">B.Sc. Nutrition</td>
                    </tr>
                    <script>
                        // const readmore=document.getElementById("readmore");
                        const readmore = document.querySelector('.readmore');
                        const retrigger = document.querySelector('.retrigger');
                     
                        retrigger.addEventListener('click',function()
                        {
                            readmore.classList.remove('d-none');    
                            retrigger.classList.add('d-none');
                        })

                    </script>
                </tbody>
            </table>
            <p class="f16 robotosemibold mt-4">*subject to passing the our Aptitude test followed by Personal Interview.</p>
        </div>
    </div>
    <div class="row mt-5 px-lg-5 px-md-4 px-0">
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
            <h4 class="mb-3 f22 robotosemibold red">Course Curriculum</h4>
            <p class="f16 robotoregular">The curriculum varies, from learning about Physiology, Clinical Psychology, Applied Science,
                Fundamentals of Food Science & Nutrition, Therapeutic Nutrition, Nutrition & Dietetics etc.
                which helps the candidate in capturing good jobs with handsome salaries.</p>
        </div>
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-12">
            <h4 class="mb-3 mt-lg-0 mt-md-0 mt-3 f22 robotosemibold red">Pedgogy</h4>
            <p class="f16 robotoregular">During each semester students will learn different sets of theoretical subjects as well as practical
                workshops along with laboratory sessions. Students will also undergo hands-on training and experimental
                learning during campus training in various departments of the College.</p>
        </div>
    </div>

    <!-- nimsnutritionform start -->

    <!-- <div class="row mt-4 mb-4">
                <img src="pic/nims_courses/nutrition/nutrition_get_course_info.svg" alt="Nutrition course form" class="img-fluid w-100">
            </div> -->
    <!-- <div class="container-fluid  my-auto py-lg-5 py-md-5 nimsnutritionformbg mb-5 mt-5">
        <div class="row p-5">
            <div class="ms-auto bgred col-lg-6 col-md-6 col-sm-12 p-2">
                <form class="row g-3 needs-validation p-lg-5 p-md-5 p-1" novalidate>
                    <h3 class="robotomedium f24 mb-3 text-light">Get Course Info</h3>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Name" required>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                        <input type="email" class="form-control mb-3" id="validationCustom01" placeholder="Email ID" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                        <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Subject" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                        <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Subject" required>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address" rows="5"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- <style>
    .nimsnutritionbg {
        background-image: url('pic/nims_courses/nutrition/nutrition_get_course_info.jpg');
        width: 100%;
        height: 80vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    @media(max-width:756px) {
        .nimsnutritionbg {
            background-image: url('pic/nims_courses/nutrition/nutrition_get_course_info.jpg');
            width: 100%;
            height: 90vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>
<div class="container-fluid  my-auto py-3 nimsnutritionbg mb-5 mt-5">
    <div class="row p-lg-5 p-md-5 p-2">
        <div class="ms-auto bgred col-lg-6 col-md-6 col-sm-12 p-2">
            <form class="row g-3 needs-validation p-lg-5 p-md-5 p-1" novalidate>
                <h3 class="robotomedium f24 mb-3 text-light">Get Course Info</h3>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Name" required>
                </div>
                <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="email" class="form-control mb-3" id="validationCustom01" placeholder="Email ID" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                    <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                    <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Subject" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                    <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                    <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Subject" required>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address" rows="5"></textarea>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div> -->

    <style>
        .resformcard {
            position: absolute;
            z-index: 1000;
        }

        .top-25 {
            top: 14%;
            right: 4%;
        }

        @media(max-width:1440px) {

            /* .top-25 {
                        top: 3%;
                        right: 2%;
                    } */
            .top-25 {
                top: 1%;
                bottom: 1%;
                right: 2%;
            }
        }

        @media(max-width:1300px) {
            .resformcard {

                position: static;
            }
        }
    </style>

    <section class="container-fluid m-0 p-0 my-5 px-lg-5 px-md-4 px-0">
        <div class="card position-relative border border-0 rounded rounded-0">
            <img src="./pic/nims_courses/aviation/aviation_get_course_info_bg.jpg" class="card-img position-relative border border-0 rounded rounded-0" alt="...">
            <div class="card-overlay resformcard top-25">
                <div class="ms-auto bgred col-xl-4 col-lg-12 col-md-12 col-sm-12 p-2">
                    <form class="row g-3 needs-validation p-3" novalidate>
                        <h3 class="robotomedium f24 mb-2 text-light">Get Course Info</h3>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <input type="text" class="form-control mb-2" id="validationCustom01" placeholder="Name" required>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                            <input type="email" class="form-control mb-2" id="validationCustom01" placeholder="Email ID" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                            <input type="tel" pattern="[0-9]{10}" class="mb-2 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                            <input type="text" class="form-control mb-2" id="validationCustom01" placeholder="Subject" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12  col-12 mb-3">
                            <select class="form-select">
                                <option selected disabled>Qualification</option>
                                <option value="1">HSC</option>
                                <option value="2">Diploma</option>
                                <option value="3">UG</option>
                                <option value="3">PG</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12  col-12 mb-3">
                            <select class="form-select">
                                <option selected disabled>Courses</option>
                                <option value="1">Aviation</option>
                                <option value="2">Banking</option>
                                <option value="3">Fashion Designing</option>
                                <option value="2">Hospitality</option>
                                <option value="3">Logistics</option>
                                <option value="3">Nutrition</option>
                            </select>
                        </div>
                        <div class="mb-2">

                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address" rows="5" required></textarea>
                        </div>
                        <div class="col-12 mt-3 d-flex justify-content-center">
                            <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- nimsnutritionform end -->

</div>
<script src="./script.js"></script>
<?php @include('./Head_Foot/footer.php'); ?>