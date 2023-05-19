<?php @include('./Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<style>
    /* .form-check-input:checked {
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .form-check-input[type="radio"] {
        background-color: transparent;
    } */

    .nc-bg {
        background-image: url('./pic/nipl_courses/nipl_webbanner.svg');
        width: 100%;
        height: 50vh;
        background-size: cover;
    }

    @media (max-width:576px) {
        .nc-bg {
            background-image: url('./pic/nipl_courses/nipl_webbanner.svg');
            width: 100%;
            height: 50vh;
            background-size: cover;
            background-position: right;
            background-color: hsla(0, 0%, 0%, 0.372);
            background-blend-mode: multiply;
            display: flex;
            justify-content: center;
        }
    }
</style>
<div class="me-0">
    <div class="nc-bg d-flex">
        <div class="container-fluid p-5 d-flex">
            <div class="captionholder col-lg-6 col-md-6 col-sm-12 col-xs-12 px-lg-5 px-md-4 px-0 align-self-center">
                <h1 class="text-light robotobold pt-0 f36 mb-3">NIPL</h1>
                <h4 class="text-light robotomedium f20 mb-3">NATIONAL INSTITUTE OF PROFESSIONAL LEARNING
                </h4>
            </div>
        </div>
    </div>
    <!-- <img src="pic/nipl courses/nipl_webbanner.svg" class="img-fluid w-100" alt="about background"> -->
    <!-- <img src="pic/nipl_courses/nipl_webbanner.svg" class="img-fluid w-100" alt="about background"> -->
    <!-- <div class="row">
        <h1 class="text-danger fw-semibold">NIPL</h1>
        <h4 class="text-danger">NATIONAL INSTITUTE OF PROFESSIONAL LEARNING</h4>
    </div> -->

    <div class="container-fluid mb-4">
        <div class="row px-lg-5 px-md-4 px-2 py-lg-5 py-5 aboutniplbg">
            <div class="col-lg-7 col-md-7 order-1 col-sm-12 align-self-center">
                <div class="text-light px-lg-5 px-md-4 px-2">
                    <h3 class="red f36 robotobold mb-3 text-light">About NIPL</h3>
                    <p class="text-light f20 roboto">The National Institute of Professional Learning (NIPL) is a
                        leading provider of education
                        and training programs in India. Our institute offers a wide range of courses that cater to
                        various fields, including banking, aviation, fashion designing, logistics, marketing, and
                        hospitality. Our programs are designed to equip students with the knowledge and skills
                        needed to succeed in these competitive industries.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 mb-4 align-self-center order-sm-2">
                <center><img src="pic/nipl_courses/nipl_logo1.svg" class="img-fluid w-50" alt="About NIPL logo">
                </center>
            </div>
        </div>

        <div class="container">
            <div class="bor ms-lg-5 ms-md-0 ms-3 my-lg-3 my-md-5 my-3 f32 robotomedium">
                <h3 class="fw-bold ms-lg-5 ms-md-0 mb-3 red borderimage" id="courses">NIPL Courses</h3>
            </div>

            <div class="row mt-5 gap-0">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center  position-relative mb-4">
                    <div class="card text-bg-dark ms-auto border border-0 rounded-0 rounded bg-transparent">
                        <a href="./niplaviation.php" class="white "><img src="./pic/nipl_courses/airlines_and_airport_management.svg" class="card-img" alt="...">
                            <div class="card-img-overlay text-center d-flex justify-content-center align-items-center py-auto">
                                <h5 class="card-title f30 robotomedium text-capitalize">airlines and airport management</h5>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12  d-flex justify-content-center position-relative mb-4">
                    <!-- <div class="me-auto">
                        <a href="niplfashion.php" class="position-relative"><img
                                src="pic/nipl_courses/fashion_designing.svg" class="img-fluid w-100"
                                alt="fashion designing">
                            <h3 class="white position-absolute  top-50 robotomedium ">Fashion Designing
                            </h3>
                        </a>
                    </div> -->
                    <div class="card text-bg-dark me-auto border border-0 rounded-0 rounded bg-transparent">
                        <a href="./niplfashion.php" class="white"><img src="./pic/nipl_courses/fashion_designing.svg" class="card-img" alt="...">
                            <div class="card-img-overlay text-center d-flex justify-content-center align-items-center py-auto">
                                <h5 class="card-title f30 robotomedium text-capitalize">Fashion Designing</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row  gap-0">

                <div class="col-lg-6 col-md-6  col-sm-12 col-12 d-flex justify-content-center mb-4  position-relative ">

                    <!-- <div class="ms-auto">
                        <a href="niplbanking.php" class="position-relative">
                            <img src="pic/nipl_courses/banking_management copy.svg" class="img-fluid w-100"
                                alt="aviation">
                            <h3 class="white position-absolute top-50 robotomedium ">Banking Management
                            </h3>
                        </a>
                    </div> -->
                    <div class="card text-bg-dark ms-auto border border-0 rounded-0 rounded bg-transparent">
                        <a href="./niplbanking.php" class="white "><img src="./pic/nipl_courses/banking_management copy.svg" class="card-img" alt="...">
                            <div class="card-img-overlay text-center d-flex justify-content-center align-items-center py-auto">
                                <h5 class="card-title f30 robotomedium text-capitalize">Banking Management</h5>
                            </div>
                        </a>
                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12  d-flex justify-content-center position-relative">
                    <!-- <div class="me-auto">
                        <a href="nipllogistics.php" class="position-relative"><img src="pic/nipl_courses/logistics.svg"
                                class="img-fluid w-100" alt="fashion designing">
                            <h3 class="white position-absolute  top-50 robotomedium ">Logistics
                            </h3>
                        </a>
                    </div> -->

                    <div class="card text-bg-dark me-auto border border-0 rounded-0 rounded bg-transparent">
                        <a href="./nipllogistics.php" class="white "><img src="./pic/nipl_courses/logistics.svg" class="card-img" alt="...">
                            <div class="card-img-overlay text-center d-flex justify-content-center align-items-center py-auto">
                                <h5 class="card-title f30 robotomedium text-capitalize">Logitics</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
     

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

                .top-25 {
                    top: 3%;
                    right: 2%;
                }
            }

            @media(max-width:1300px) {


                .resformcard {

                    position: static;
                }
            }
        </style>

        <section class="container-fluid  p-5">
            <div class="card position-relative border border-0 rounded rounded-0 mx-5 my-5">
                <img src="./pic/nims_courses/aviation/aviation_get_course_info_bg.jpg" class="card-img position-relative border border-0 rounded rounded-0" alt="...">
                <div class="card-overlay resformcard top-25">
                    <div class="ms-auto bgred col-xl-4 col-lg-12 col-md-12 col-sm-12 p-2">
                        <form class="row g-3 needs-validation p-3" novalidate>
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
                                <select class="form-select" required>
                                    <option selected disabled value="" >Qualification</option>
                                    <option value="1">HSC</option>
                                    <option value="2">Diploma</option>
                                    <option value="3">UG</option>
                                    <option value="3">PG</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                                <select class="form-select" required>
                                    <option selected disabled value="">Courses</option>
                                    <option value="1">Aviation</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Fashion Designing</option>
                                    <option value="2">Hospitality</option>
                                    <option value="3">Logistics</option>
                                    <option value="3">Nutrition</option>
                                </select>
                            </div>
                            <div class="mb-3">

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

        <!-- niplcoursesform end -->
    </div>
    <script src="./script.js"></script>
    <?php @include('Head_Foot/footer.php'); ?>