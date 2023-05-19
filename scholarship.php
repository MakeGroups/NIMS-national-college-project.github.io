<?php @include('./Head_Foot/header.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<img src="pic/online_scholorship_exam/online_scholorship_exam.svg" class="img-fluid w-100" alt="Scholarship background">
<div class="container-fluid">

    <div class="row mt-3 p-4">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h3 class="fw-semibold text-danger mb-3">Future Leaders Scholarships Test</h3>
            <p class="mt-3">Future Leaders Scholarships is one of the Most Recognized and Trusted Scholarship Test at National College ( NIMS ).
                The Future Leaders Scholarships is the largest College Program, launched by NIMS in 2021 to Provide Financial
                Assistance to Deserving and Meritorious Students. The scholarships are aimed at preparing students for a successful
                career in Aviation & Banking Sectors by enrolling them in Industry-Endorsed Job Oriented Programs at NIMS. Being a
                Future Leaders Scholar, apart from Giving a Sense of Accomplishment about Partially funding for the Education, one
                can also qualify for the Best Jobs and Make their
                Resume Directly available to Top Companies.</p>
            <p class="mt-3">National College will award Future Leaders Scholarship Based on the Performance in Class12, written Future Leaders
                Scholarship Aptitude Test and Personal Interview.</p>
            <p class="mt-3">The Scholarships are Applicable Only for the Program Enrolled for by the Candidate During the Validity Period of
                Scholarship Offer. The benefits cannot be Deferred or Extended for upgrades, or Program Extensions in the future.
                The courses to which the Candidates are finally admitted under the Scholarship benefit are restricted to the Programs
                Semesters/ Courses that are offered at the participating National College (NIMS ) and courses offered under the
                Future Leaders Scholarship.</p>
            <p class="mt-3">The Scholars can Earn Merit Scholarship up to Rs.60,000 based on their Future Leaders Scholarship Test and Class
                XII Performance.</p>
        </div>

        <div class="col-lg-6 col-xl-6 col-md-6 col-12 p-5 bgred rounded">
            <form class="row g-3 needs-validation" novalidate>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Your Name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>

                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>





                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>



                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Select Course</option>
                    <option>...</option>
                </select>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Select Referrals</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>


                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn lg1" type="submit">Submit form</button>
                </div>
            </form>
        </div>

    </div>
</div>
<?php @include('Head_Foot/footer.php'); ?>