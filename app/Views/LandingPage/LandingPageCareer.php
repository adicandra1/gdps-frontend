<?php

namespace App\Views\LandingPage;

use App\Views\LandingPage\Partials\BaseLandingPage;

class LandingPageCareer extends BaseLandingPage
{
    function content(): string
    {
        $this->startHtmlParsing(); ?>

        <style>
            * {
                margin: 0px;
                padding: 0px;
                font-family: Helvetica, Arial, sans-serif;
            }

            /* Full-width input fields */
            input[type=text],
            input[type=email],
            input[type=password] {
                width: 90%;
                padding: 12px 20px;
                margin: 8px 26px;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                font-size: 16px;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 26px;
                border: none;
                cursor: pointer;
                width: 90%;
                font-size: 20px;
            }

            button:hover {
                opacity: 0.5;
            }

            .registration {
                text-align: center;
                padding: 14px 20px;
                margin: 8px 26px;
                border: none;
                cursor: pointer;
                width: 90%;
                font-size: 20px;
            }


            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            .avatar {
                width: 200px;
                height: 200px;
                border-radius: 50%;
            }

            /* The Modal (background) */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.4);
            }

            /* Modal Content Box */
            .modal-content {
                background-color: #fefefe;
                margin: 4% auto 15% auto;
                border: 1px solid #888;
                width: 40%;
                padding-bottom: 30px;
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                animation: zoom 0.6s
            }

            @keyframes zoom {
                from {
                    transform: scale(0)
                }

                to {
                    transform: scale(1)
                }
            }
        </style>

        <!-- HOME -->
        <section class="section-hero home-section overlay inner-page bg-image" style="background-image: url('<?= base_url('assets/landing/' . 'images/azmi/person.jpeg') ?>');" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quas fugit ex!</p>
                        </div>
                        <form method="post" class="search-jobs-form">
                            <div class="row mb-10">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                                        <option>Anywhere</option>
                                        <option>San Francisco</option>
                                        <option>Palo Alto</option>
                                        <option>New York</option>
                                        <option>Manhattan</option>
                                        <option>Ontario</option>
                                        <option>Toronto</option>
                                        <option>Kansas</option>
                                        <option>Mountain View</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="#next" class="scroll-button smoothscroll">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>
        </section>


        <section class="site-section" id="next">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="section-title mb-2">50 Job Listed</h2>
                    </div>
                </div>

                <ul class="job-listings mb-5">
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                        <a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'"></a>


                        <div class="job-listing-logo">
                            <img src="<?= base_url('assets/landing/' . 'images/job_logo_1.jpg') ?>" alt="Image" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>Product Designer</h2>
                                <strong>Adidas</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> New York, New York
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-danger">Part Time</span>
                            </div>
                        </div>

                    </li>
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'"></a>

                        <div class="job-listing-logo">
                            <img src="<?= base_url('assets/landing/' . 'images/job_logo_1.jpg') ?>" alt="Image" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2>Digital Marketing Director</h2>
                                <strong>Sprint</strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> Overland Park, Kansas
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-success">Full Time</span>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="row pagination-wrap">
                    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                        <span>Showing 1-7 Of 43 Jobs</span>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="custom-pagination ml-auto">
                            <a href="#" class="prev">Prev</a>
                            <div class="d-inline-block">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                            </div>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal-wrapper" class="modal">

                <form class="modal-content animate" action="">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                        <!-- <img src="1.png" alt="Avatar" class="avatar"> -->
                        <h1 style="text-align:center">Login</h1>
                    </div>

                    <div class="container">
                        <input type="email" placeholder="Enter Email" name="uname">
                        <input type="password" placeholder="Enter Password" name="psw">
                        <button type="submit">Login</button>

                        <div class="registration">
                            <a href="registration">Registration?</a>
                        </div>
                    </div>
                </form>
            </div>

        </section>

        <!-- ============================================================================================================================================ -->

            <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?= base_url('assets/landing/' . 'images/azmi/hanggar2.jpeg')?>');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="text-white">Looking For A Job?</h2>
                        <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <a href="login.html" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                    </div>
                </div>
            </div>
        </section>

    <?php return $this->endParsingAndGetHtml();
    }
}
