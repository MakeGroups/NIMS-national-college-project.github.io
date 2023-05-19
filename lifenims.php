<?php @include './Head_Foot/primaryheader.php'; ?>
<?php @include('./Head_Foot/secondaryheader.php'); ?>
<style>
    .nav .nav-link {
        color: hsl(359, 74%, 43%);
        border: 2px solid hsl(359, 74%, 43%);
        /* background-color: yellow; */
    }

    .nav .nav-link.active {
        color: white;
        background-color: hsl(359, 74%, 43%);
        background: linear-gradient(to bottom,
                hsl(359, 98%, 47%),
                hsl(359, 94%, 24%));
    }
</style>
<div class="container-fluid px-4">

    <div class="px-5">
        <div class="d-flex  flex-lg-row flex-md-row flex-column align-items-center align-items-lg-start align-items-md-start mt-lg-4 mt-md-2 mt-4 mb-lg-3 mb-md-3 mb-3 p-lg-5 p-md-5 p-1">
            <!-- button -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 me-md-4">
                <div class="nav flex-lg-column flex-md-column flex-sm-row nav-pills gap-lg-5 gap-md-5 gap-2 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active p-lg-5 p-md-4 p-1 f16 robotomedium" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#Environment-Clicks" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Environment
                        Clicks</button>
                    <button class="nav-link p-lg-5 p-md-4 p-1 f16 robotomedium" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#Event-Clicks" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Event
                        Clicks</button>
                    <button class="nav-link p-lg-5 p-md-4 p-1 f16 robotomedium" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#Videos" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Videos</button>
                </div>
            </div>
            <!-- content -->
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 ps-lg-5 ps-md-4 ps-0 mt-lg-0 mt-md-0 mt-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Environment -->
                    <div class="tab-pane fade show active" id="Environment-Clicks" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <!-- <img src="pic/life@_nims/event_clicks/image_2.jpg" class="img-fluid w-100" alt="Environment image"> -->
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-title="Beautiful Environment" data-lightbox="life@nims"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <!-- <img src="pic/life@_nims/event_clicks/image_2.jpg" class="img-fluid w-100 w-100" alt="Environment image"> -->
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Beautiful Environment"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Event Clicks -->
                    <div class="tab-pane fade" id="Event-Clicks" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <!-- <img src="pic/life@_nims/event_clicks/image_2.jpg" class="img-fluid w-100 w-100" alt="Environment image"> -->
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Event Clicks"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Videos -->
                    <div class="tab-pane fade" id="Videos" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <!-- <img src="pic/life@_nims/event_clicks/image_2.jpg" class="img-fluid w-100 w-100" alt="Environment image"> -->
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                        <div class="row mt-lg-4 mt-md-3 mt-2">
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_2_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_2.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_4_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_4.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_3_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_3.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <a href="pic/life@_nims/enviornment_clicks/image_1_large.jpg" data-lightbox="life@nims" data-title="Our Culturals Videos"><img src="pic/life@_nims/enviornment_clicks/image_1.jpg" alt="environment pics" class="img-fluid w-100"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="lightbox-plus-jquery.min.js"></script>

<?php @include './Head_Foot/footer.php'; ?>