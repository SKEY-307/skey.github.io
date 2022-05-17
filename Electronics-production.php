<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pacome KPODAR - Fab Academy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.svg" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="index.php" class="nav-link scrollto "><i class="bx bx-home"></i>
                        <span>Home</span></a>
                </li>
                <li><a href="about.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li><a href="Assignments.php" class="nav-link scrollto active"><i class="bx bx-bookmarks"></i>
                        <span>Assignments</span></a>
                </li>
                <li><a href="fp.php" class="nav-link scrollto"><i class="bx bx-pyramid"></i>
                        <span>Projects</span></a>
                </li>
                <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
                <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <!-- <h2>About</h2> -->
                    <h2>Electronics Production</h2>
                </div>

                <div class="row">

                    <p><strong>Group Assigment</strong></p>
                    <p>
                        Characterize the design rules for your in-house PCB production process: document feeds,
                        speeds, plunge rate, depth of cut (traces and outline) and tooling. document your work (in a
                        group or individually) Document your work to the group work page and reflect on your
                        individual page what you learned.
                    </p>
                    <p>Individual Assignment:</p>
                    <p>
                        Make an in-circuit programmer that includes a microcontroller by milling and stuffing the
                        PCB, test it to verify that it works.
                    </p>
                    <p>Group assigment</p>
                    <p>
                        The objective of the group assignment was to Characterize the design rules for our PCB
                        production process: document feeds, speeds, plunge rate, depth of cut (traces and outline)
                        and tooling, and document our work (in a group or individually). To begin, I will start with
                        describing the hardware. The machine we used for our work is a mini cnc 1610 Pro.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/cnc 1610.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        The first part of the group assignment was to learn how to use the machine, this included
                        loading the cutting piece, working with the software, changing the bit, and starting a
                        carve.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/Grblcontrol.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        To perform our first tests, we used the Flatcam software with different parameters to make
                        observations. <a href="http://flatcam.org/">FlatCAM</a> is an open source CAM-software
                        specifically meant for PCB routing.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/flatcam_1.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        The thickness of the wick used for these tests has a size of 0.1 mm and the feed rate is
                        60mm/min we will observe three settings for the depth of cut, the first at -0.05mm the
                        second at -0.07mm and the third at -0.1.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/copper_cup.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        During these tests, we learned a lot about the process by making many mistakes.
                    </p><br>
                    <p>
                        We started our tests by zeroing the z-axis by eye, which gave us no accuracy for the depth
                        of cut. So our instructor showed us a simple technique with a piece of paper. The idea is to
                        put the paper on the pad and move it back and forth across the flat surface while lowering
                        the z-axis until the piece of paper can’t really move anymore.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/paper_zero_z.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/copper_cup_calib.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        <strong>V-bits, degrees, tip width, depth of cut and width of cut.</strong>
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/bit.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/tip diametre.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/Tool4.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/bit_depth_calculate.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        <strong>Milling</strong>
                    </p>
                    <p>
                        We used Mods to generate the .nc file needed for the milling machine. Then we used
                        Grblcontrole-candle for the communication. Here are the procedures to generate the file and
                        send the file to the machine.
                    </p>
                    <p>
                        <strong>
                            Step 1: Open <a href="http://mods.cba.mit.edu/"> Mods ></a> Right click > programs >
                            open server program > G-code: mill 2D PCB
                            png
                        </strong>
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/mods_programs.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        <strong>
                            Step 2: Select the image, and change the settings to you wanted or the machine needed,
                            like tool diameter, cut depth, speed, offset… After all settings done, click calculate.
                        </strong>
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/mod1.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        <strong>
                            Step 3: After saving the .nc file, open Grblcontrole-candle.
                        </strong>
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/grbl2.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/cuivre_test2.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/cut_test1.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/cuivre_test.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>IDEAL SETTINGS FOR PCB V-BIT</p>
                    <p>Bit type: V-bit</p><br>
                    <p>Bit size: Select 0.3 mm</p><br>
                    <p>Cut depth: 0.1</p><br>
                    <p>Max depth: 0.1</p><br>
                    <p>Cut speed: 2.5 mm/s</p><br>
                    <p>Plunge speed: 2.5 mm/s</p><br>
                    <p>IDEAL SETTING FOR PCB END-MILL</p>
                    <p>Bit type: end-mill</p><br>
                    <p>Bit size: 1 mm</p><br>
                    <p>Cut depth: 0.5</p><br>
                    <p>Max depth: 1.5</p><br>
                    <p>Cut speed: 2.5 mm/s</p><br>
                    <p>Plunge speed: 2.5 mm/s</p><br>

                    <p>
                        <strong>Individual Assignment</strong>
                    </p><br>
                    <p>
                        Once the materials were prepared as described above in the Materials section of the group
                        assignment, I began working on my individual task of creating an FTDI board.
                    </p>
                    <strong>Milling</strong>
                    <p>
                        .<a
                            href="http://academy.cba.mit.edu/classes/embedded_programming/FTDI/USB-FT230XS-UPDI.traces.jpg">
                            USB-FT230XS-UPDI Trace</a>
                        .<a
                            href="http://academy.cba.mit.edu/classes/embedded_programming/FTDI/USB-FT230XS-UPDI.interior.jpg">
                            USB-FT230XS-UPDI Outline</a>
                    </p>
                    <p>
                        To make the tracks
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/mod_updi_trace.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        For Cut
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/mod_updi_cut.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcd_milling.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_milling_cut.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_alc.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p><strong>Assembling/Soldering</strong></p>
                    <p>
                        The next step was to build the UPDI board. The components needed for the board are listed
                        below:
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_component.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_soldering.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_soldering_fin.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/pcb_plug.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p> <strong>Programming/Debugging</strong></p> <br>
                    <p>The first step in the process is to download and ensure that you have installed the FTDI
                        driver onto your computer so that it will recognize it as a USB device. You can do this by
                        going to <a
                            href="(https://ftdichip.com/drivers/vcp-drivers/)">[ftdichip.com/drivers/vcp-drivers]</a>
                        and downloading the driver for your OS.</p>
                    <div class="col-lg-5">
                        <img src="assets/img/fpdi_driver.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-5">
                        <img src="assets/img/cdmv2.jpg" class="img-fluid" alt="">
                    </div><br>
                    <p>
                        After extracting the files to a folder, open the device manager and add the driver.
                    </p>
                    <div class="col-lg-5">
                        <img src="assets/img/cdm_driver_install.jpg" class="img-fluid" alt="">
                    </div><br>

                    <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-6">
                            <strong> <a href="Computer-controlled-cutting.php"> <i class="bi bi-chevron-left"></i>
                                    Computer Controlled Cutting </a>
                            </strong>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <strong> <a href="3d.php"> 3D Printing and Scanning<i class="bi bi-chevron-right"></i>
                                </a>
                            </strong>
                        </div>



                    </div>








    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Pacome Kpodar</h3>
            <div class="social-links">
                <a href="https://twitter.com/pkpodar1" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://facebook.com/pkpodar1" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/pkpodar1" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://zoom.com/pkpodar1" class="google-plus"><i class="bx bxl-zoom"></i></a>
                <a href="https://linkedin.com/pkpodar1" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>KPacome - Fab Academy</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>