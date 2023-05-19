<?php @include('Head_Foot/primaryheader.php'); ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<style>
    .form-check-input {
        border-color: black;
    }

    .form-check-input:checked {
        background-color: red;
        border-color: red;
    }

    .onlineribbon {
        overflow-x: hidden;
        max-width: 100%;
        background-image: url(pic/online_application/onlineribbon.svg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
<div class="container">

    <div class="container p-lg-5 p-md-5 p-3 onlineribbon">
        <div class="title-app-content">
            <div class="text-center p-lg-5 p-md-5 p-1">
                <h3 class="red robotomedium mb-3 text-capitalize">National Intitute of management and science</h3>
                <h5 class="red robotomedium text-capitalize">Application Form</h5>
            </div>
        </div>
        <div class="form-info ">
            <form orm class="row g-5 px-2 px-lg-5 px-md-5 needs-validation my-3" novalidate>
                <div class="personalinfo-box bgred p-3 mb-5">
                    <h3 class="white robotomedium f20 text-uppercase">Personal Information</h3>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label  robotomedium f18 text-capitalize">
                        name of the application (mr/ms/mrs)
                        :</label>
                    <input type="text"
                        class="form-control  border-0 bg-transparent border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">D.O.B
                        :</label>
                    <input type="date"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Religion
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Nationality
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Mother Tongue
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Marriage Status
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">address for
                        communication :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h2 for="nationality" class=" f20 robotomedium  mb-3">Sex :</h2>
                    <div class="form-group  d-flex gap-5">

                        <div class="form-check ">
                            <input class="form-check-input " type="radio" name="nationality" required id="nationalityUS"
                                value="India">
                            <label class="form-check-label   f18 robotomedium mb-3" for="gendermale">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nationality" id="nationalityUK"
                                value="Others" required>
                            <label class="form-check-label   f18 robotomedium mb-3" for="genderfemale">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">State
                        :</label>
                   
                    <input type="text" class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black" id="validationCustom01" required>
                    <!-- <div class="col-lg-6 col-md-6 mb-3">
                        <select onchange="print_city('staterrr', this.selectedIndex);" id="sts" name="stt"
                          class="form-control form-select" required></select>
                      </div> -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">City
                        :</label>
                    <!-- <select id="state"
                        class="form-select bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        required>
                        <option selected disabled>City</option>
                    </select> -->
                    <input type="text" class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black" id="validationCustom01" required>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Pin
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Email
                        :</label>
                    <input type="email"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Mobile
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Alternative
                        Mobile
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>
                </div>
                <div class="educationalinfo-box bgred p-3 mb-5">
                    <h3 class="white robotomedium f20">EDUCATIONAL INFORMATION</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Courses
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01"
                        class="form-label robotomedium f18 text-capitalize">Institution/University :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Year Of Passing
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Percentange Of
                        Marks
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>
                </div>
                <div class="educationalinfo-box bgred p-3 mb-5">
                    <h3 class="white robotomedium f20">FAMILY INFORMATION</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Father’s Name
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Occupation/Title
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Mobile :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Telephone
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Mother’s Name
                        :</label>
                    <input type="text"
                        class="form-control  bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Occupation/Title
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Mobile :</label>
                    <input type="text"
                        class="form-control bg-transparent  border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="validationCustom01" class="form-label robotomedium f18 text-capitalize">Telephone
                        :</label>
                    <input type="text"
                        class="form-control bg-transparent border-0 border-bottom rounded rounded-0 border-1 border-black"
                        id="validationCustom01" required>
                </div>
                <div class="col-12 text-center">
                    <button class="btn rounded-0 btn-danger readmore bgred btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./script.js"></script>
<?php include('Head_Foot/footer.php'); ?>