<?php @include('./Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>

<head>
  <style>
    .bgredenroll {
      background-color: hsla(359, 74%, 43%, 0.6);
    }

    body {
      overflow-x: hidden;
    }

    .top-40 {
      top: 30%;
    }

    .top-30 {
      top: 30%;
    }

    .top-10 {
      top: 12%
    }

    .end-20 {
      right: 15%;
    }

    .carou {
      height: 100vh;
      background-size: cover;
    }

    .enroll-btn {
      display: none;
      z-index: 1000;
      right: -40px;
      /* position: fixed; */
      top: 50%;
      position: absolute;
      rotate: -270deg;
    }

    @media (max-width:1600px) {
      .top-30 {
        top: 10%;
      }

    }

    @media (max-width:1400px) {
      .top-10 {
        top: 5%;
      }
    }


    @media (max-width:950px) {
      .enroll-btn {
        display: block;
        z-index: 1000;
        right: -40px;
        /* position: fixed; */
        top: 40%;
        position: absolute;
        rotate: -270deg;
      }

      .carou {
        width: 100vw;
        width: auto;
        height: 50vh;
        /* background-size: 100%; */
        background-size: contain;
        background-repeat: none;
        background-position: center;
      }

      .top-40 {
        top: 10%;
      }
    }
  </style>

  <script src="./counter-vannila.js"></script>
</head>
<!-- web banner start -->

<!-- <button class="btn btn-primary">Vertical Button</button> -->
<!--! scroll to bottom -->
<!-- <button id="scrollToTop" class="btn btn-primary"><i class="fas fa-arrow-up"></i></button> -->
<!--!scroll to bottom end  -->

<button type="button" class="white btn lg2 robotosemibold text-danger border-0  enroll-btn f22 rounded rounded-0"
  data-bs-toggle="modal" data-bs-target="#exampleModal">Enroll Now</button>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content bgred">
      <div class="modal-header">
        <h1 class="modal-title fs-5 white" id="exampleModalLabel">Enroll Now</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 ms-auto">
          <div class="ms-auto py-1 col-lg-12 col-md-12 col-sm-12 ">
            <form class="row g-3 needs-validation p-lg-4 p-md-0 p-1" novalidate>

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <input type="text" class="form-control mb-3 " id="validationCustom01" placeholder="Name" required>
              </div>
              <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                <input type="email" class="form-control mb-3 " id="validationCustom01" placeholder="Email ID" required>
              </div>
              <div class="col-lg-12 col-md-12 ol-sm-12  col-12">
                <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control " id="validationCustom01"
                  placeholder="Mobile Number" required>
              </div>

              <div class="col-lg-6 col-md-6 mb-3">
                
                <select onchange="print_city('staterrr', this.selectedIndex);" id="sts" name="stt"
                  class="form-control form-select" required></select>
              </div>

              <div class="col-lg-6 col-md-6 mb-3">
                <select id="staterrr" class="form-select" required>
                  <option selected disabled>City</option>
                </select>
              </div>
              <div class="col-lg-12 col-md-12 mb-3">

                <select class="form-select scrollable-menu text-secondary" id="validationCustom04" required>
                  <option selected disabled value="">Select Course</option>
                  <option value="B.B.A - Airlines and Airport Management">B.B.A - Airlines and Airport Management
                  </option>
                  <option value="B.Com - Banking and Finanace">B.Com - Banking and Finanace</option>
                  <option value="B.B.A - International Business">B.B.A - International Business</option>
                  <option value="M.B.A - Airlines and Airport Managment">M.B.A - Airlines and Airport Managment</option>
                  <option value="B.Sc - Fashion Designing">B.Sc - Fashion Designing</option>
                  <option value="Diploma in Airlines and Airport Management">Diploma in Airlines and Airport Management
                  </option>
                  <option value="Diploma in Banking Management">Diploma in Banking Management</option>
                  <option value="Diploma in Fashion Designing">Diploma in Fashion Designing</option>
                  <option value="Diploma in Hospitality">Diploma in Hospitality</option>
                  <option value="Diploma in Logistics">Diploma in Logistics</option>
                  <option value="Diploma in Marketing">Diploma in Marketing</option>
                  <option value="Pilot Training Program">Pilot Training Program</option>
                  <option value="PostGraduate in Information Technology">PostGraduate in Information Technology</option>
                  <option value="Others">Others</option>
                </select>

              </div>


              <div class="col-12 mb-3">
                <div class="form-check ">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label text-light" for="invalidCheck">
                    I agree to receive information regarding my enquiry from
                    National Institute of Management and Science
                  </label>
                </div>
              </div>

              <div class="col-12 d-flex justify-content-center">
                <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4"
                  type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



<!-- carousal -->

<section class="carousel-wrapper-main position-relative">
  <div id="carouselExampleIndicators" class="carousel slide position-relative">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="./pic/banners/carousel/aviation.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-3 col-md-8 col-sm-12  carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="robotobold text-start mb-3 ">Welcome to the National Institute of Management & Science
            </h2>
            <p class="text-start mb-3 f18 robotoregular">National Group of Institutions Started with the Vision To be a
              Leading
              Institution
              in providing World-class Education and Training in Aviation, Banking, Fashion
              Designing, Logistics & Hospitality, at National and International Levels.</p>
            <div class="text-start">
              <a href="about.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./pic/banners/carousel/aviation.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-4 col-md-6 col-sm-8 col-xs-12  carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="fw-bold text-start f30 mb-3 robotobold">Aviation & Airlines</h2>
            <p class="text-start mb-3 f18 robotoregular">National Institute of Management and Science has become very
              popular<br> among top Aviation companies, Airliners, Chartered flight
              companies, <br>Flight operation companies</p>
            <div class="text-start">
              <a href="nimsaviation.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./pic/banners/carousel/fd.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-4 col-md-6 col-sm-8 col-xs-12  carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="fw-bold text-start f30 robotobold mb-3">Banking</h2>
            <p class="text-start mb-3 f18 robotoregular">National Institute of Management and Science offers
              Banking course that is designed to suit graduates
              aspiring for Career.</p>
            <div class="text-start">
              <a href="nimslogistics.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./pic/banners/carousel/logistics.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-4 col-md-6 col-sm-12  carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="fw-bold text-start mb-3 f30 robotobold">B.Sc IT & Logistics</h2>
            <p class="text-start mb-3 f18 robotoregular">National Institute of Management and Science offers logistics
              courses which is the process / chain management of transport</p>
            <div class="text-start">
              <a href="nimslogistics.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./pic/banners/carousel/fd.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-4 col-md-6 col-sm-8 col-xs-12 carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="fw-bold text-start f30 robotobold mb-3">Fashion Designing</h2>
            <p class="text-start mb-3 f18 robotoregular">National Institute of Management and Science offers Fashion
              Designing Course which is a great starting point to get an
              overview of the Fashion industry.</p>
            <div class="text-start">
              <a href="nimsfashion.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./pic/banners/carousel/fd.jpg" class="d-block w-100 carou" alt="...">
        <div
          class="col-lg-4 col-md-6 col-sm-8 col-xs-12  carousel-caption top-40 flex-column d-flex justify-content-start align-items-lg-start align-items-sm-center ">
          <article class="text-wrap">
            <h2 class="fw-bold text-start f30 robotobold mb-3">B.sc Nutrition</h2>
            <p class="text-start mb-3 f18 robotoregular">The program provides a greater understanding of the
              scientific basis of Nutrition and the Influence of good Nutrition on health.</p>
            <div class="text-start">
              <a href="nimsnutrition.php" class="text-start"><button
                  class="btn bgred white f16 text-start robotomedium readmore btn-lg rounded rounded-0">View
                  Details</button></a>
            </div>
          </article>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container position-absolute top-10 end-20 d-lg-block d-md-none d-none">
    <div class="col-lg-4 col-md-4 col-sm-12 ms-auto">
      <div class="ms-auto bgredenroll py-2 col-lg-12 col-md-12 col-sm-12 ">
        <form class="row g-3 needs-validation p-lg-4 p-md-0 p-1" novalidate>
          <h3 class="robotomedium f24 mb-3 text-light">Enroll Now</h3>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Name" required>
          </div>
          <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="email" class="form-control mb-3" id="validationCustom01" placeholder="Email ID" required>
          </div>
          <div class="col-lg-12 col-md-12 ol-sm-12  col-12">
            <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01"
              placeholder="Mobile Number" required>
          </div>

          <div class="col-lg-6 col-md-6 mb-3">

            <select onchange="print_cit('staterbh', this.selectedIndex);" id="stss" name="stt"
              class=" form-select text-secondary" required>
            </select>


          </div>

          <div class="col-lg-6 col-md-6 mb-3">
            <select id="staterbh" class="form-select text-secondary" required>
              <option selected disabled>City</option>
            </select>
          </div>
          <div class="col-lg-12 col-md-12 mb-3">
            <select class="form-select scrollable-menu text-secondary" id="validationCustom04" required>
              <option selected disabled value="">Select Course</option>
              <option value="B.B.A - Airlines and Airport Management">B.B.A - Airlines and Airport Management</option>
              <option value="B.Com - Banking and Finanace">B.Com - Banking and Finanace</option>
              <option value="B.B.A - International Business">B.B.A - International Business</option>
              <option value="M.B.A - Airlines and Airport Managment">M.B.A - Airlines and Airport Managment</option>
              <option value="B.Sc - Fashion Designing">B.Sc - Fashion Designing</option>
              <option value="Diploma in Airlines and Airport Management">Diploma in Airlines and Airport Management
              </option>
              <option value="Diploma in Banking Management">Diploma in Banking Management</option>
              <option value="Diploma in Fashion Designing">Diploma in Fashion Designing</option>
              <option value="Diploma in Hospitality">Diploma in Hospitality</option>
              <option value="Diploma in Logistics">Diploma in Logistics</option>
              <option value="Diploma in Marketing">Diploma in Marketing</option>
              <option value="Pilot Training Program">Pilot Training Program</option>
              <option value="PostGraduate in Information Technology">PostGraduate in Information Technology</option>
              <option value="Others">Others</option>
            </select>

          </div>


          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label text-light f16 robotoregular" for="invalidCheck">
                I agree to receive information regarding my enquiry from
                National Institute of Management and Science
              </label>
            </div>
          </div>

          <div class="col-12 mt-4 d-flex justify-content-center">
            <button class="btn btn btn-primary border-0 navbutton red f16 robotomedium lg4"
              type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- NIMS Courses -->
<section class="mt-lg-5 mt-md-4 p-0 ">

  <div class="container-fluid mcourses m-0">

    <div class="row px-lg-5 px-md-4 px-4">
      <div class="col-lg-4 col-md-12 col-12 mt-lg-5 mt-md-3 mt-3">
        <h3 class="fs-4 f24 red robotosemibold borderimage ms-lg-5">NIMS Courses</h3>
        <h3 class="red f40 robotosemibold mt-lg-4 mt-md-4 ms-lg-5 ms-1">Management Courses</h3>
        <p class="card-text f16 robotoregular ms-lg-5 ms-1 my-3">NIMS Management courses are individuals with the
          necessary
          knowledge. These courses cover a broad range of topics
          including Aviation, Banking, Logistics.</p>
      </div>

      <!-- Aviation -->
      <style>
        .he-100{
          height: 80vh;
        }
      </style>
      
        <div class="col-lg-8 col-xl-8 col-md-12 col-12 d-flex mt-lg-0 mt-md-0 mt-2 py-lg-4 p-md-3 py-md-4">
    
          <div class="row ">
            <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
              <a href="nimsaviation.php" class=" text-decoration-none">
                <div class="card border-0 rounded border rounded-0 ">
                  <img src="pic/homepage/nimscourses/aviation-man1.svg" class="card-img-top rounded img-fluid rounded-0 h-100  w-100"
                    alt="aviation Course Image">
                  <div class="card-body  bgred  border border-0 ">
        
                      <h5 class="card-title white robotosemibold f22">Aviation</h5>
                      <p class="card-text f16  robotoregular white">National Institute of Management and Science
                        has become very popular among top aviation
                        companies, airliners, Chartered flight companies,
                        Flight operation companies.</p>
        
                  </div>
                </div>
              </a>
            </div>
            <div class="d-flex flex-column justify-content-between col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <article>
                <a href="nimsbanking.php" class=" text-decoration-none">
                  <div class="card mb-lg-3 mb-md-2 mb-lg-0 mb-md-4 p-0 border-0 border rounded rounded-0 mb-3">
                    <img src="pic/homepage/nimscourses/logistics.svg" class="card-img-top img-fluid w-100 rounded rounded-0"
                      alt="Banking Course Image">
                    <div class="card-body  bgred border border-0">
                      <h5 class="card-title white robotosemibold f22">Banking</h5>
                      <p class="card-text f16 robotoregular text-light">National Institute of Management and Science
                        offers Banking course that is designed to suit
                        graduates aspiring for career.</p>
                    </div>
                  </div>
                </a>
              </article>
              <article>
                <a href="nimslogistics.php" class=" text-decoration-none">
                  <div class="card mb-lg-2 mb-md-2 mb-3 p-0 border-0 border rounded-0 mb-3">
                    <img src="pic/homepage/nimscourses/logistics.svg" class="card-img-top rounded img-fluid w-100 rounded-0"
                      alt="Logistics course Image">
                    <div class="card-body  bgred">
                      <h5 class="card-title white robotosemibold f22">B.Sc. IT & Logistics</h5>
                      <p class="card-text f16 robotoregular text-light">National Institute of Management and Science
                        offers logistics courses which is the process /
                        chain management of transport.</p>
                    </div>
                  </div>
                </a>
              </article>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
      <!-- Aviation End -->

      <!-- banking and Logistics -->
 
      <!-- banking and Logistics End -->

    </div>
  </div>
</section>

<!-- Science Courses -->
<section class=" sciencecourses">
  <!-- <section class="p-0 sciencecourses" style="background:url(pic/homepage/nimscourses/management_courses_bg.svg); background-repeat:no-repeat;"> -->
  <div class="container-fluid p-lg-5 p-md-4 p-1 scourses">
    <div class="row px-lg-5 px-md-3 px-4">
      <div class="col-lg-4 col-md-6 col-12 order-1">
        <div class="card mb-3 border-0 rounded-0">
          <a href="nimsfashion.php"><img src="pic/homepage/nimscourses/fashion_designing.svg" class="card-img-top"
              alt="fashion designing course">
          </a>
          <div class="card-body bgred">
            <h5 class="card-title text-light robotosemibold f24">Fashion Designing</h5>
            <p class="card-text f16 robotoregular text-light">National Institute of Management and Science
              offers Fashion Designing course which is a great
              starting point to get an overview of the fashion
              industry.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12 gap-md-1 gap-sm-0 order-2">
        <div class="card mb-3 border-0 rounded-0">
          <a href="nimsnutrition.php"><img src="pic/homepage/nimscourses/bsc_nutrition.svg" class="card-img-top"
              alt="Bsc Nutrition course Image">
          </a>
          <!-- <div class="card-body bgred p-4 p-md-3">
            <h5 class="card-title text-light robotosemibold f24">Bsc Nutrition</h5>
            <p class="card-text py-md-0 py-1 f16 robotoregular text-light">The programme provides a greater understanding
              of the scientific basis of nutrition and the influence
              of good nutrition on health</p>
          </div> -->
          <div class="card-body bgred">
            <h5 class="card-title   text-light robotosemibold f24">Bsc Nutrition</h5>
            <p class="card-text f16 robotoregular text-light">National Institute of Management and Science
              offers a greater understanding
              of the scientific basis of nutrition and the influence
              of good nutrition on health </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 col-12 text-justify gap-md-0 gap-sm-0 order-sm-2">
        <h3 class="red f40 robotosemibold me-lg-5 me-1">Science Courses</h3>
        <p class="card-text f16 robotoregular me-lg-5 me-1 my-3">NIMS Science courses are individuals with the necessary
          knowledge.
          These courses cover a broad range of topics
          including Fashion Designing</p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid album">

<div class="container-fluid mt-lg-3 mt-md-4 mt-3">
<div class="my-lg-5 my-md-3 my-0 ">
  <div class="m-lg-4 m-md-3 m-0 ">
    <div class="row g-2 p-lg-5 p-md-3 p-0">
      <div class="col-4 ">
      <img src="./newbook.jpg" class="img-fluid  w-100 h-100 " alt="">
      </div>
      <div class="col-8">
        <div class="row g-2">
          <div class="col-6">
          <img src="./pic/homepage/gallery/event_clicks.svg" class=" w-100" alt="">
          </div>
          <div class="col-6">
          <img src="./pic/homepage/gallery/event_clicks.svg" class=" w-100" alt="">
          </div>
        </div>
        <div class="row ">
          <div class="col-12 mt-2">
          <img src="./pic/homepage/gallery/video.svg" alt="" class=" w-100">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</section>



<!-- Placement Partners -->
<section class="my-lg-5 my-md-4 my-4">
  <div class="container-fluid px-lg-5 px-md-3 px-4">
    <h3 class="fs-4 f24 red robotosemibold borderimage ms-5 mb-lg-2 mb-md-3 mb-3">Placement Partners</h3>
    <div class="row ">

      <div class="row my-lg-5 my-md-4 my-4 px-lg-5 px-md-4 px-3 d-flex">
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/air_india.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/air_asia.svg" alt="air asia logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/etihad.svg" alt="etihad logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/indigo.svg" alt="indigo logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/malaysia.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/qatar_airways.svg" alt="air india logo" class="img-fluid w-100">
        </div>
      </div>

      <div class="row mt-lg-4 mt-sm-2 px-lg-5 px-md-4 px-3 d-flex justify-content-between">
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/icici_bank.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/hdfc_bank.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/axis_bank.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/dbs.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/icici_mutual_fund.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/kotak.svg" alt="air india logo" class="img-fluid w-100">
        </div>
      </div>

      <div class="row mt-lg-4 mt-sm-2 px-lg-5 px-md-4 px-3 d-flex justify-content-between">
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/apl.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/maersk.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/falcon.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/flipkart.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/amazon.svg" alt="air india logo" class="img-fluid w-100">
        </div>
        <div class="col-lg-2 col-xl-2 col-4 col-sm-2 col-md-2 mb-2">
          <img src="pic/placedpartner_Logos/om_logistics.svg" alt="air india logo" class="img-fluid w-100">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- placement partners end -->

<!-- placement partners end -->

<!-- Testimonials -->



<section class="testimonial">
  <div class="container-fluid my-md-4 my-4">
  <div class="ms-lg-5 ms-md-3 ms-0 "> <h3 class="fs-4 f24 red robotosemibold ms-lg-5  borderimage ms-lg-3 ms-md-1 ms-1 mb-lg-3 mb-md-3 mb-5">Testimonials</h3></div>
   <div class=" ps-lg-5 ps-md-1 ps-0">
   <div class="ps-lg-3 ps-md-1 ps-0 px-xl-0 px-lg-0 px-md-3 ">
    <div class="row d-flex align-items-center mb-5 ps-lg-5  ps-md-3 mt-lg-4 mt-md-3 mt-4">

      <div class="col-lg-6 bgred col-md-12 p-5 col-sm-12  p-0 mb-4 mb-lg-0 mb-md-0 counter_bg">
        <!-- <div class="counter bgred"> -->

        <div class="counterbox">
          <div class="counter-1 mb-4 p-2">
            <article class="d-flex justify-content-evenly white gap-5 h1">
              <h3 class="white robotomedium"> No of Students </h3>
              &#58;
              <h3 class="robotomedium  " data-vanilla-counter="" data-start-at="1300" data-end-at="1500" data-time="1000"
                data-delay="0" data-format="{}">10</h3>
            </article>
          </div>
          <div class="counter-1 mb-4 p-2">
            <article class="d-flex justify-content-evenly white gap-5 h1">
              <h3 class="white robotomedium "> No of Students <br> Placed </h3>
              &#58;
              <h3 class="robotomedium" data-vanilla-counter data-start-at="1000" data-end-at="1200" data-time="1000"
                data-delay="0" data-format="{}"> 32</h3>
            </article>
          </div>
          <div class="counter-1 me-auto p-2">
            <article class="d-flex justify-content-evenly white gap-5 h1">
              <h3 class="white robotomedium ">Winning Awards</h3>
              <span class="me-4"> &#58;</span>
              <h3 class="robotomedium me-2" data-vanilla-counter data-start-at="10" data-end-at="77" data-time="3000"
                data-delay="0" data-format="{}">77</h3>
            </article>
          </div>
        </div>


       
      </div>


      <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0 ">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="5" aria-label="Slide 6"></button>

          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="pic/homepage/testimonials/1.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="pic/homepage/testimonials/2.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="pic/homepage/testimonials/3.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="pic/homepage/testimonials/4.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Fourth slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="pic/homepage/testimonials/5.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Fifth slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="pic/homepage/testimonials/6.svg" class="d-block w-100 img-fluid" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>sixth slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    </div>
  </div>
    <br class="d-lg-block d-md-block d-none">
    <br class="d-lg-block d-md-block d-none">
    <br class="d-lg-block d-md-block d-none">

    <style>
      .applyscholarship {
        background-image: url(pic/homepage/scholarship/apply_scholarship_bg.svg);

        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
    <div class="me-lg-5 me-md-1 me-0">
    <div class="row align-items-center  me-lg-5 me-md-1 me-0">

      <div class="col-lg-6 col-md-12 col-sm-12 p-0">
        <img src="./pic/homepage/scholarship/apply_scholarship.jpg" class="d-block img-fluid w-100"
          alt="scholarship Page Image">
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12  bgred py-5 applyscholarship">
        <div class="applyscholarship--content py-5 px-4">
          <div class="py-3">
            <h5 class=" fs-4 mb-lg-3 mb-md-1  f24 white robotomedium mb-3">Apply Scholarship Exam</h5>
            <p class=" robotoregular white f18 mb-3">Take Online Scholarship Test | Claim your Scholarship Up to
              Rs.60,000
              Get a chance to earn up to Rs.25,000/ month during the study period
              Internship in India or Internship in Abroad with a degree.</p>
            <a href="onlinescholarship.php"><button class="btn  red lg4 border-0 robotomedium f16 navbutton rounded-0">Apply
                Now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</section>
<!-- testimonials end -->


<!-- news -->
<section class="mt-lg-5 mt-md-2 mt-5">

  <div class="container-fluid px-lg-5 px-md-3 px-4">
    <h3 class="fs-4 f24 red robotosemibold borderimage ms-lg-5 mb-lg-3 mb-md-3 mb-3">News</h3>
    <div class="row p-lg-5 p-md-3  mt-lg-0 mt-md-2 mt-4 d-flex justify-content-evenly">
      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="card mb-3">
          <a href="news.php#admmissionnews">
            <img src="pic/homepage/news/admission_news.svg" class="card-img-top rounded rounded-0" alt="admission">
          </a>
          <div class="card-body">
            <h5 class="card-title f18 robotosemibold">Admission News</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="card mb-3">
          <a href="news.php#placement">
            <img src="pic/homepage/news/placement_news.svg" class="card-img-top" alt="placement">
          </a>
          <div class="card-body">
            <h5 class="card-title f18 robotosemibold">Placement News</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="card mb-3">
          <a href="news.php#scholarship"> <img src="pic/homepage/news/scholarship_news.svg" class="card-img-top"
              alt="scholarship">
          </a>
          <div class="card-body">
            <h5 class="card-title f18 robotosemibold">Scholarship News</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <div class="card mb-3">
          <img src="pic/homepage/news/growth_news.svg" class="card-img-top" alt="news">
          <div class="card-body">
            <h5 class="card-title f18 robotosemibold">Growth News</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="news.php"><button class="btn bgred white text-center f16 robotomedium readmore rounded-0">Read
          More</button></a>
    </div>

  </div>
</section>
<!-- news end -->

<!-- contact -->
<section class="mt-lg-5 mt-md-3 mt-5 mb-lg-3 mb-md-3 mb-3 px-lg-5 px-md-3 mx-3">
  <div class="container-fluid px-lg-5 px-md-3 px-4">
    <h3 class="fs-4 f24 red robotosemibold borderimage mb-3">Contact Us</h3>
    <div
      class="row d-flex justify-content-center a px-lg-5 px-md-3 px-4 gap-lg-0 gap-md-0 gap-1 p-4 rounded mt-5 bgred mb-5 mx-2">
      <div class="col-lg-4 col-xl-4 text-center col-md-4 col-12">
        <p class="text-light  robotomedium f20">
          <i class="bi bi-telephone-fill"></i>
          &nbsp;&nbsp;+91 979158 6555
        </p>
      </div>
      <div class="col-lg-4 col-xl-4 col-md-4 col-12 ">
        <p class="text-light text-center robotomedium f20">
          <i class="bi bi-phone-fill"></i>
          &nbsp;&nbsp;0452 452 0020
        </p>
      </div>
      <div class="col-lg-4 col-xl-4 col-md-4 col-12 ">
        <p class="text-light text-center robotomedium f20">
          <i class="bi bi-envelope-paper-fill"></i>
          &nbsp;&nbsp;info@nationalcollege.co.in
        </p>
      </div>
    </div>
    <div class="container-fluid mty-lg-4 my-md-3 my-2">
      <div class="row gap-4 my-5">
        <div
          class="col border-2 justify-content-around p-2 d-flex flex-lg-row flex-md-row rounded flex-column-reverse align-items-center border border-danger">
          <div class="mapcontent">
            <span class="d-flex">
              <!-- <i class="bi bi-geo-alt-fill text-danger fs-4"></i> -->
              <h3 class="red robotomedium f20 text-center ">
                <i class="bi bi-geo-alt-fill red fs-4"></i>
                Madurai, Main Campus<br>Near Income Tax Office,<br>BB Kulum,<br>Madurai - 625 002

              </h3>
            </span>
          </div>
          <div id="map" class="p-lg-3 p-md-2 p-1">
            <a href="https://goo.gl/maps/JtwU9VLvSawx1JzX7">
              <img src=" pic/homepage/Map madurai.svg" class="img-fluid w-100" alt="Map for Thirunelveli Location">
            </a>
          </div>
        </div>

        <div
          class="col  border-2 justify-content-around p-2 d-flex flex-lg-row flex-md-row rounded flex-column-reverse align-items-center border border-danger">
          <div class="mapcontent">
            <span class="d-flex">
              <!-- <i class="bi bi-geo-alt-fill text-danger fs-4"></i> -->
              <h3 class="red robotomedium f20 text-left ">
                <i class="bi bi-geo-alt-fill red fs-4"></i>
                1008, Asia tower, 3rd floor, <br>opposite to district court,<br>palayamkottai,
                thirunelveli,<br>tamilnadu 627 002

              </h3>
            </span>
          </div>
          <div id="map" class="p-lg-3 p-md-2 p-1">
            <a href="https://goo.gl/maps/zsnvWigeqzFZb4RA8">
              <img src=" pic/homepage/Map_tni.svg" class="img-fluid w-100" alt="Map for Thirunelveli Location">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<style>

</style>
<script>
  VanillaCounter();
</script>
<script src="./city.js"></script>
<script language="javascript">
  print_stat("stss");
</script>
<script src="./cities.js"></script>
<script language="javascript">
  print_state("sts");
</script>
<script src="./jquery/jquery-3.6.4.min.js"></script>
<script src="./script.js"></script>
<?php @include('./Head_Foot/footer.php'); ?>