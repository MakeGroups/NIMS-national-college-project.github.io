<?php @include('./Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<style>
    .form-check-input:checked {
        background-color: #ffffff;
        border-color: #ffffff;
    }

    .form-check-input[type="radio"] {
        background-color: transparent;
    }

    .os-bg {
        background-image: url('./pic/online_scholorship_exam/online_scholorship_exam.svg');
        width: 100%;
        height: 50vh;
        background-size: cover;
    }

    @media (max-width:576px) {
        .os-bg {
            background-image: url('./pic/online_scholorship_exam/online_scholorship_exam.svg');
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
<header class="onlinescholarship">
    <div class="container-fluid m-0 p-0">
        <div class="os-bg ">
            <div class="container-fluid p-lg-5 p-md-3 p-1">
                <div class="captionholder pt-5 col-lg-6 col-md-6 col-sm-12 px-5 col-xs-12">
                    <h1 class="text-light robotobold pt-lg-5 pt-0 f36 mb-3">Online Scholarship</h1>
                    <h4 class="text-light robotomedium f18 mb-3">Admission 2023 -Future Leaders - Online Scholarship
                        Test
                    </h4>
                    <p class="text-light robotoregular f14 mb-3">Take Online Scholarship Test | Claim your Scholarship
                        Up to
                        Rs.60,000 |
                        Get a
                        chance to earn up to Rs.25,000/
                        month during the study period Internship in India or Internship in Abroad with a degree.</p>
                </div>
            </div>
        </div>

    </div>
</header>
<article>
    <div class="container-fluid">
        <div class="p-lg-5 p-md-3 p-1">        <div class="row px-lg-5 px-md-3 px-1 ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ps-1">
                <article class="my-3">
                    <h3 class="red robotobold f26 mb-4">Future Leaders Scholarships Test</h3>
                    <p class="text-dark robotoregular mb-3 f16">
                        Future Leaders Scholarships is one of the Most Recognized and Trusted Scholarship Test at
                        National College ( NIMS ).
                        The Future Leaders Scholarships is the largest College Program, launched by NIMS in 2021 to
                        Provide Financial
                        Assistance to Deserving and Meritorious Students. The scholarships are aimed at preparing
                        students for a successful
                        career in Aviation & Banking Sectors by enrolling them in Industry-Endorsed Job Oriented
                        Programs at NIMS. Being a
                        Future Leaders Scholar, apart from Giving a Sense of Accomplishment about Partially funding for
                        the Education, one
                        can also qualify for the Best Jobs and Make their
                        Resume Directly available to Top Companies.
                    </p>
                    <p class="text-dark robotoregular mb-3 f16">
                        National College will award Future Leaders Scholarship Based on the Performance in Class12,
                        written Future Leaders
                        Scholarship Aptitude Test and Personal Interview.
                    </p>
                    <p class="text-dark robotoregular mb-3 f16">
                        The Scholarships are Applicable Only for the Program Enrolled for by the Candidate During the
                        Validity Period of
                        Scholarship Offer. The benefits cannot be Deferred or Extended for upgrades, or Program
                        Extensions in the future.
                        The courses to which the Candidates are finally admitted under the Scholarship benefit are
                        restricted to the Programs
                        Semesters/ Courses that are offered at the participating National College (NIMS ) and courses
                        offered under the
                        Future Leaders Scholarship.
                    </p>
                    <p class="text-dark robotoregular mb-3 f16">
                        The Scholars can Earn Merit Scholarship up to Rs.60,000 based on their Future Leaders
                        Scholarship Test and Class
                        XII Performance. </p>
                </article>
                <article>

                </article>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 bgred ">
                <form class="row g-3 needs-validation p-lg-5 p-md-5 p-3" novalidate>
                    <h3 class="robotomedium f24 mb-3 text-light">Information about you</h3>
                    <div class="border-0  col-12">
                        <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Name" required>
                    </div>
                    <div class=" col-12">
                        <input type="email" class="form-control mb-3" id="validationCustom01" placeholder="Email ID" required>
                    </div>
                    <div class=" col-12">
                        <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Mobile Number" required>
                    </div>
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="gender" class="text-white f20 robotomedium mb-3">Gender</label>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input " type="radio" name="gender" id="genderMale" value="male">
                                        <label class="form-check-label text-white f18 robotomedium mb-3" for="genderMale">Male</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                                        <label class="form-check-label text-white f18 robotomedium mb-3" for="genderFemale">Female</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other">
                                        <label class="form-check-label text-white f18 robotomedium mb-3" for="genderOther">Other</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nationality" class="text-white f20 robotomedium mb-3">Nationality</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nationality" id="nationalityUS" value="India">
                                        <label class="form-check-label  text-white f18 robotomedium mb-3" for="nationalityUS">India</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nationality" id="nationalityUK" value="Others">
                                        <label class="form-check-label  text-white f18 robotomedium mb-3" for="nationalityUK">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="date" class="form-label text-light f18 robotomedium">Date Of Birth</label>
                    <div class="col-12">
                        <input type="date" class="form-control mb-3" id="validationCustom01" placeholder="Date Of Birth" required>

                    </div>
                    <div class="col-12">
                        <input type="tel" pattern="[0-9]{10}" class="mb-3 form-control" id="validationCustom01" placeholder="Father/Mother/Guardian Mobile Number" required>
                    </div>
                    <div class=" col-12 mb-2">
                        <select class="form-select">
                            <option selected disabled>Select Course</option>
                            <option value="BBA-Airlines and Airport Management">BBA-Airlines and Airport Management
                            </option>
                            <option value="B.com-Banking & Services">B.com-Banking & Services</option>
                            <option value="BBA-International Business">BBA-International Business</option>
                            <option value="MBA-Airlines and Airport Management">MBA-Airlines and Airport
                                ManagementBsc-Fashion Designing
                            </option>
                            <option value="Bsc-Fashion Designing">Bsc-Fashion Designing
                            </option>
                        </select>
                    </div>
                    <div class=" col-12 mb-2">
                        <select class="form-select ">
                            <option selected disabled>Select Referral</option>
                            <option value="Google">Google
                            </option>
                            <option value="Facebook / TV AD / Other Social Media ">Facebook / TV AD / Other Social Media
                            </option>
                            <option value="Ramya">Ramya</option>
                            <option value="Lalitha">Lalitha
                            </option>
                            <option value="Saranya">Saranya
                            </option>
                            <option value="Martin">Martin
                            </option>
                            <option value="Me. Seenivasa Kumar">Me. Seenivasa Kumar
                            </option>
                            <option value="Brindha">Brindha
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Address" rows="5"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary border-0 navbutton red f16 robotomedium lg1" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</article>
<script src="./script.js"></script>
<?php @include('./Head_Foot/footer.php'); ?>