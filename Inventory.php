<?php
$page = 'BBG Motors DXB LLC-FZ';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>
<main>
    <section class="bannerst">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-text">
                        <div class="main-hosting">
                            <a href="index.php">Home</a><span><i class="fa-solid fa-chevron-right"></i></span>
                            <h6>inventory</h6>

                        </div>

                        <h2>Inventory</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-slide products-sec">
        <div class="container-fluid">
            <div class="row pt-2 pb-5">
                <div class="col-12 col-md-3">
                    <div class="loster">
                        <div class="mian-text">
                            <img src="images/searching-car.png" class="img-fluid" alt="img">
                            <h4>Search Options</h4>

                        </div>
                        <div class="seleter">
                            <form action="" method="">

                                <ul class="form-content">
                                    <li>
                                        <select>
                                            <option value="" disabled selected>
                                                Condition </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>
                                                Body </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>Make</option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>Model</option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>
                                                Year </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li class="range-silder">

                                        <p>

                                        <div class="hopless">
                                            <input type="text" id="min-amount" readonly>
                                            <input type="text" id="max-amount" readonly>
                                        </div>
                                        </p>

                                        <div id="slider-range"></div>
                                        <label class="text-for" for="amount">Price</label>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>

                                                Transmission </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>

                                                Max Mileage </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select>
                                            <option value="" disabled selected>

                                                Listing status </option>
                                            <option value="option 01">option 01</option>
                                            <option value="option 02">option 02</option>
                                            <option value="option 03">option 03</option>
                                            <option value="option 04">option 04</option>
                                            <option value="option 05">option 05</option>
                                        </select>
                                    </li>
                                    <li>
                                        <input type="text" placeholder="Search by location">
                                    </li>
                                    <li class="all-null">
                                        <i class="fa-solid fa-arrows-rotate"></i><a class="btn-zero" href="#">Reset
                                            All</a>
                                    </li>

                                </ul>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="main-selter">
                        <div class="elementor-widget-container">
                            <div class="stm-sort-by-options clearfix">
                                <span CLASS="text-for">Sort by:</span>
                                <div class="stm-select-sorting">
                                    <select tabindex="-1" class="select2-hidden-accessible" aria-hidden="true"
                                        data-select2-id="365">
                                        <option value="date_high" data-select2-id="367">Date: newest first</option>
                                        <option value="date_low">Date: oldest first</option>
                                        <option value="engine_high">Engine: highest first</option>
                                        <option value="engine_low">Engine: lowest first</option>
                                        <option value="price_high">Price: highest first</option>
                                        <option value="price_low">Price: lowest first</option>
                                        <option value="fuel-consumption_high">Fuel consumption: highest first</option>
                                        <option value="fuel-consumption_low">Fuel consumption: lowest first</option>
                                        <option value="mileage_high">Mileage: highest first</option>
                                        <option value="mileage_low">Mileage: lowest first</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-1.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="Detail.php">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-2.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-3.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-1.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-2.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-3.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-1.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-2.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="prod-card">
                                <figure>
                                    <img class="img-fluid" src="images/featured-3.png" alt="">
                                </figure>
                                <div class="prod-info">
                                    <h6 class="prod-title">Nissan X-Trail 2023</h6>
                                    <span class="model">2023</span>
                                </div>
                                <ul class="prod-det">
                                    <li><img src="images/li-1.png" alt=""> 4 people</li>
                                    <li><img src="images/li-2.png" alt=""> hybrid</li>
                                    <li><img src="images/li-3.png" alt=""> 6.3 km/ 1-line</li>
                                    <li><img src="images/li-4.png" alt=""> Automatic</li>
                                </ul>
                                <hr>
                                <div class="card-footer">
                                    <span class="price">$440 / month</span>
                                    <ul>
                                        <li><a href="javascript:;"><i class="fa-regular fa-heart"></i></a></li>
                                        <li><a href="javascript:;">Book Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <button class="arrow" id="prevPage" disabled>← <span class="nav-text">PREV</span></button>
                        <div class="pages">
                            <button type="button" data-page="1" class="page-number active">1</button>
                            <button type="button" data-page="2" class="page-number">2</button>
                            <button type="button" data-page="3" class="page-number">3</button>
                            <button type="button" data-page="4" class="page-number">4</button>
                            <button type="button" data-page="5" class="page-number">5</button>
                        </div>
                        <button class="arrow" id="nextPage"><span class="nav-text">NEXT</span> →</button>
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