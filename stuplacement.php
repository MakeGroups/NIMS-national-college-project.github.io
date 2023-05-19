<?php @include('./Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<!-- <img src="pic/student placement/sp_webbanner.svg" class="img-fluid w-100" alt="Placement banner Image"> -->
<style>
    .an-bg {
        background-image: url('./pic/student placement/sp_webbanner.svg');
        width: 100%;
        height: 60vh;
        background-size: cover;
    }
body{
    overflow-x:hidden;
}
 

    .ribbonred {
        background-image: url('pic/student placement/aviation_and_airlines/aviation_and_airport/aa_background.svg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    

            .resformcard {
                position: absolute;
                z-index: 1000;
            }

            .top-25 {
                top: 14%;
                right:9%;
            }

            @media(max-width:1440px) {

                .top-25 {
                    top: 3%;
                    right:2%;
                }
            }

            @media(max-width:1300px) {
       

                .resformcard {

                    position: static;
                }
            }
            @media (max-width:768px) {
        .an-bg {
            background-image: url('./pic/student placement/sp_webbanner.svg');
            width: 100%;
            padding: 20px;
            height: 70vh;
            background-size: cover;
            background-position: center;
            background-color: hsla(0, 0%, 0%, 0.372);
            background-blend-mode: multiply;
            display: flex;
            justify-content: center;
        }
    }

</style>
<div class="an-bg d-flex">
    <div class="container-fluid p-lg-5 p-md-3 p-0 d-flex ">
        <div class="captionholder col-lg-6 col-md-12  col-sm-12 col-xs-12 ps-lg-5 ps-md-3 ps-1 align-self-center">
            <h2 class="text-light robotobold pt-0 mb-3 f36">Begin an exciting career in
                Aviation/Banking/Fashion Design/Hospitality/Logistics</h2>
            <p class="text-light mt-2 f16 robotoregular">If you are creative, passionate about Management skill and
                would love to learn
                the essential skills to work
                in the Fast Growing Management Sector, take your talent to the next level with The National Institute of
                Management & Science.(NIMS)</p>
            <p class="text-light mt-2 f16 robotoregular">If you have an eye for detail, understand Customer Services,
                have the ability to
                manage the Marketing and
                are passionate about the Banking & Finance, don’t let your talent be wasted. Sharpen your skills with
                National Institute of Management & Science.(NIMS)</p>
            <p class="text-light mt-2 f16 robotoregular">We are well equipped with excellent facilities and trained
                faculty to help you
                learn better. With one-to-one
                teaching, you will get to learn and experience on day by day basis what’s required to help you to
                advance
                your career. At NIMS you will have hands-on practical knowledge and exposure to the industry.</p>
        </div>
    </div>
</div>




    <ul class="nav nav-pills my-5 mx-5 px-lg-5 px-md-3 px-0 gap-2 " id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active f15 robotomedium" id="pills-aviation-tab" data-bs-toggle="pill"
                data-bs-target="#pills-aviation" type="button" role="tab" aria-controls="pills-aviation"
                aria-selected="true">Airline & Airport Management</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link f15 robotomedium" id="pills-banking-tab" data-bs-toggle="pill"
                data-bs-target="#pills-banking" type="button" role="tab" aria-controls="pills-banking"
                aria-selected="false">Banking, Finance & Insurance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link f15 robotomedium" id="pills-logistics-tab" data-bs-toggle="pill"
                data-bs-target="#pills-logistics" type="button" role="tab" aria-controls="pills-logistics"
                aria-selected="false">Logistics</button>
        </li>
    </ul>
    <div class="tab-content " id="pills-tabContent">
        <!-- Airline & Airport management -->
        <div class="tab-pane  fade show active" id="pills-aviation" role="tabpanel" aria-labelledby="pills-aviation-tab"
            tabindex="0">
            <div class="row mt-4  px-lg-5 px-md-3 px-0 ">
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/air_india.svg" class="img-fluid w-50" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/air_asia.svg" class="img-fluid w-50" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/ethihad_airways.svg" class="img-fluid w-50"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/indigo.svg" class="img-fluid w-50" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/malaysia_airlines.svg" class="img-fluid w-50"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/singapore_airlines.svg" class="img-fluid w-50"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/qatar_airways.svg" class="img-fluid ms-3 w-50"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/spicejet.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/lufthansa.svg" class="img-fluid w-75" alt="">
                </div>
            </div>
            <div class="container-fluid m-0 my-4">
                <div class="row bgred p-5 ribbonred">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 my-auto mx-auto ps-lg-5 ps-md-5 p-0">
                        <div class="airplane--title">
                            <h3 class="white f30 robotobold">Aviation & Airport Management</h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="row  my-5 flex-wrap">
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12  mb-lg-0  mb-md-0 mb-4 col-md-4 col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_1.svg"
                                        class="img-fluid w-50" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 mb-lg-0 mb-md-0 mb-4 col-sm-2 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_2.svg"
                                        class="img-fluid w-50" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_3.svg"
                                        class="img-fluid w-50" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                            <div class="row m-0 justify-content-center mx-auto">
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12  mb-lg-0 mb-md-0 mb-4  col-sm-2 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_4.svg"
                                        class="img-fluid w-50" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_5.svg"
                                        class="img-fluid w-50" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="pills-banking" role="tabpanel" aria-labelledby="pills-banking-tab" tabindex="0">
            <div class="row mt-4">
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/icici_bank.svg" class="img-fluid w-50"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/HDFC_Bank.svg" class="img-fluid w-75"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/Axis_Bank.svg" class="img-fluid w-75"
                        alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/DBS.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/icici_prudential_mutualfund.svg"
                        class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/hdfc-mutual-fund.svg"
                        class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/ICICIPrudentialLifeInsurance.svg"
                        class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/banking_finance_insurance/kotak_life_insurance.svg"
                        class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="container-fluid my-4">
                <div class="row bgred p-5 ribbonred">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 my-auto mx-auto ps-lg-5 ps-md-5 p-0">
                        <div class="airplane--title">
                            <h3 class="white f30 robotobold">Banking Management</h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                            <div class="row  my-5">
                                <div
                                    class="col-lg-4 mb-lg-0 mb-md-0 mb-4 col-md-4 col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_1.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4  mb-lg-0 mb-md-0 mb-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_2.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4   col-sm-4  d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_3.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                            <div class="row m-0 justify-content-center mx-auto">
                                <div
                                    class="col-lg-4 col-md-4  mb-lg-0 mb-md-0 mb-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_4.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_5.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- logistics -->
        <div class="tab-pane fade" id="pills-logistics" role="tabpanel" aria-labelledby="pills-logistics-tab"
            tabindex="0">
            <div class="row mt-4">
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/apl.svg" class="img-fluid w-50" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/aviation_and_airlines/air_asia.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/maersk_line.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/falcon_logistics.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/Flipkart.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/Amazon.svg" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-2 col-xl-2 col-md-2 col-6 d-flex justify-content-center">
                    <img src="pic/student placement/logistics/om_logistics.svg" class="img-fluid w-75" alt="">
                </div>
            </div>
            <div class="container-fluid my-4">
                <div class="row bgred p-5 ribbonred">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 my-auto mx-auto ps-lg-5 ps-md-5 p-0">
                        <div class="airplane--title">
                            <h3 class="white f30 robotobold">Logistics</h3>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                            <div class="row  my-5">
                                <div
                                    class="col-lg-4 mb-lg-0 mb-md-0 mb-4 col-md-4 col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_1.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4  mb-lg-0 mb-md-0 mb-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_2.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4   col-sm-4  d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_3.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                            <div class="row m-0 justify-content-center mx-auto">
                                <div
                                    class="col-lg-4 col-md-4  mb-lg-0 mb-md-0 mb-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_4.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                                <div
                                    class="col-lg-4 col-md-4  col-sm-4 d-flex justify-content-center flex-column align-items-center">
                                    <img src="pic/student placement/aviation_and_airlines/aviation_and_airport/aa_5.svg"
                                        class="img-fluid w-75" alt="">
                                    <p class=" mt-3 text-center text-light f20 robotomedium">Company Name
                                    </p>
                                    <p class=" mt-2 text-center text-light f20 robotoregular">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>



        <section class="container-fluid m-0 px-5 my-5 ">
            <div class="card position-relative px-5 border border-0 rounded rounded-0">
                <img src="./pic/nims_courses/aviation/aviation_get_course_info_bg.jpg" class="card-img position-relative border border-0 rounded rounded-0" alt="...">
                <div class="card-overlay resformcard top-25">
                    <div class="ms-auto bgred col-xl-4 col-lg-12 col-md-12 col-sm-12 p-2">
                        <form class="row g-3 needs-validation p-3" novalidate>
                            <h3 class="robotomedium f24 mb-3 text-light">Get Course Info</h3>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Name"
                                    required>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                                <input type="email" class="form-control mb-3" id="validationCustom01"
                                    placeholder="Email ID" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                                <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01"
                                    placeholder="Mobile Number" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                                <input type="text" class="form-control mb-3" id="validationCustom01"
                                    placeholder="Subject" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  col-12">
                                <select class="form-select">
                                    <option selected disabled>Qualification</option>
                                    <option value="1">HSC</option>
                                    <option value="2">Diploma</option>
                                    <option value="3">UG</option>
                                    <option value="3">PG</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12  col-12">
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
                            <div class="mb-3">

                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address"
                                    rows="5" required></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


<script src="./script.js"></script>
<?php @include('./Head_Foot/footer.php'); ?>