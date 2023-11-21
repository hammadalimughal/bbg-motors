<?php
$page = 'BBG Motors DXB LLC-FZ';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="bannerst bannershift">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-text">
                        <div class="main-hosting">
                            <a href="index.php">Home</a><span><i class="fa-solid fa-chevron-right"></i></span>
                            <h6>Sell a Car</h6>

                        </div>

                        <h2>Sell a Car</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="motion">
                        <h2>SELL YOUR VEHICLE</h2>
                        <img src="images/minus.png" class="img-fluid loopimg" alt="img">
                        <div class="motion-p">
                            <p>Interested in trading in your current vehicle? It would probably be good to have an
                                estimate of what it’s worth first. After all, trading in a vehicle is a lot less hassle
                                than selling it yourself. And you can often lower your payments by trading in a vehicle
                                as well. Win-win!</p>
                            <p>We’re here to help you make an informed decision. Fill out the simple form below, and
                                we’ll send you an estimated appraisal within 48 hours. From there, it’s up to you what
                                you want to do!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex align-items-center justify-content-center">
                    <form id="yourForm" action="your_backend_script.php" method="post" style="
    width: 100%;
    margin: 0 auto;
    display: block;">
                        <div class="custom-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        <div class="hoster">
                                            <h6>1.</h6>
                                            <h4>Car information</h4>
                                            <p>add your car vehicle details</p>
                                            <span></span>
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">
                                        <div class="hoster">
                                            <h6>2.</h6>
                                            <h4>Vehicle Condition</h4>
                                            <p>add your car vehicle details</p>
                                            <span></span>
                                        </div>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">
                                        <div class="hoster">
                                            <h6>3.</h6>
                                            <h4>Contact Details</h4>
                                            <p>Your Contact details</p>
                                            <span></span>
                                        </div>
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="custom-from-input">
                                        <div class="row pt-3 align-items-center justify-content-center">
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">
                                                        Make
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">
                                                        Model
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">

                                                        Year
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3  align-items-center justify-content-center">
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">
                                                        Transmission
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">
                                                        Mileage
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">

                                                        VIN
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4 justify-content-center">
                                            <div class="col-md-6">

                                                <div class="main-tabs-input">
                                                    <label for="avatar">Upload your car Photos</label>
                                                    <div class="file-input-wrapper">
                                                        <input type="file" class="uploading" id="avatar" name="avatar"
                                                            accept="image/png, image/jpeg" />
                                                    <button type="button" id="addMorePictures"><i
                                                            class="fa-solid fa-plus"></i></button>
                                                    </div>

                                                    <!-- Container to hold additional file input fields -->
                                                    <div id="additionalFilesContainer"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="main-tabs-input">
                                                    <label for="">

                                                        Provide a hosted video url of your car
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3  align-items-center ">
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">
                                                        Exterior color
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">

                                                        Interior color
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="main-tabs-input">
                                                    <label for="">

                                                        Owner
                                                    </label>
                                                    <input type="text">
                                                </div>

                                            </div>
                                            <a href="#" class="save">
                                                Save and continue </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="cut-checkbox">
                                        <div class="row pt-5">
                                            <div class="car-box">
                                                <img src="images/sedan.png" class='img-fluid' alt="img">
                                                <p>What is the Exterior Condition?</p>
                                                <ul>
                                                    <li>
                                                        <input name="exteriorConditionGroup1" type="radio"
                                                            id="extraClean1">
                                                        <label for="extraClean1">Extra clean</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup1" type="radio" id="clean1">
                                                        <label for="clean1">Clean</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup1" type="radio"
                                                            id="average1">
                                                        <label for="average1">Average</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup1" type="radio"
                                                            id="belowAverage1">
                                                        <label for="belowAverage1">Below Average</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup1" type="radio"
                                                            id="dontKnow1">
                                                        <label for="dontKnow1">I don't know</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row pt-5">
                                            <div class="car-box">
                                                <img src="images/interior.png" class='img-fluid' alt="img">
                                                <p>What is the Interior Condition?</p>
                                                <ul>
                                                    <li>
                                                        <input name="exteriorConditionGroup2" type="radio"
                                                            id="extraClean2">
                                                        <label for="extraClean2">Extra clean</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup2" type="radio" id="clean2">
                                                        <label for="clean2">Clean</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup2" type="radio"
                                                            id="average2">
                                                        <label for="average2">Average</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup2" type="radio"
                                                            id="belowAverage2">
                                                        <label for="belowAverage2">Below Average</label>
                                                    </li>

                                                    <li>
                                                        <input name="exteriorConditionGroup2" type="radio"
                                                            id="dontKnow2">
                                                        <label for="dontKnow2">I don't know</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row pt-5">
                                            <div class="car-box">
                                                <img src="images/car-crash.png" class='img-fluid' alt="img">
                                                <p>Has the vehicle been in an accident?</p>
                                                <ul>
                                                    <li>
                                                        <input name="accidentGroup" type="radio" id="yesAccident">
                                                        <label for="yesAccident">Yes</label>
                                                    </li>

                                                    <li>
                                                        <input name="accidentGroup" type="radio" id="noAccident">
                                                        <label for="noAccident">No</label>
                                                    </li>

                                                    <li>
                                                        <input name="accidentGroup" type="radio" id="dontKnowAccident">
                                                        <label for="dontKnowAccident">I don't know</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="save">
                                                Save and continue </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="custome-from">
                                        <div class="row pt-4">
                                            <div class="col-md-6">
                                                <div class="customization-input">
                                                    <label for="">First name*</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="customization-input">
                                                    <label for="">Last name*</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-md-6">
                                                <div class="customization-input">
                                                    <label for="">Email Address*
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="customization-input">
                                                    <label for="">Phone number*
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-4">
                                            <div class="col-md-12">
                                                <div class="customization-input">
                                                    <label for="">Comment*
                                                    </label>
                                                    <textarea></textarea>
                                                </div>
                                                <a href="#" class="save">
                                                    Save and finish</a>
                                                <div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                </from>
                            </div>
                        </div>
                </div>
    </section>
</main>
<?php
$page = 'BBG Motors DXB LLC-FZ';
$pageDesc = '""';
include 'includes/footer.php';
$page = 'home';
?>