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
                    <h2>Output Device</h2>
                </div>
                <div class="col-lg-5">
                    <img src="assets/img/week10/hero.jpg" class="img-fluid" alt="">
                </div>

                <p>
                <h3>Assignment Overview</h3><br>
                <strong>Group Assignment :</strong> <br>
                <li>Measure the power consumption of an output device.</li>
                <li>Document your work to the group work page and reflect on your individual page what you learned.</li>
                </p>
                <p>
                    <strong>Individual assignment :</strong> <br>
                    <li>Add an output device to a microcontroller board you've designed and program it to do something.
                    </li>
                </p>
                <p>
                    <strong>Group assigment</strong><br>
                </p>
                <div class="row">
                    <div class="col-lg-5">
                        <img src="assets/img/week10/Voltage-Multimeter.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/img/week10/Current-Multimeter.jpg" class="img-fluid" alt="">
                    </div>
                </div> <br>
                <p>
                    <strong>Individual Assignment</strong> <br>
                    For this individual assignment, I need to add an output device to a microcontroller and program it
                    for a specific function. According to my final project, my system is based on a microcontroller that
                    drives a stepper motor to open and close a manual valve. So for my work, I will design an electronic
                    board to drive a stepper motor.
                    The motor I will use for this work will be a Nema 17 driven by the DRV8825 driver.
                </p>
                <div class="col-lg-4">
                    <img src="assets/img/week10/neam_drive.jpg" class="img-fluid" alt="">
                </div> <br>
                <p>
                    <strong>Driver Wiring</strong> <br>
                    Before starting it is important to see how the stepper motor driver works.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/week10/driver_step_wiring%20diagram.jpg" class="img-fluid" alt="">
                    </div>
                </div> <br>
                <p>
                    <strong>Arduino test</strong> <br>
                    Now that we understand the connection to make the driver work, we will do a quick test with an
                    Arduino board to make sure that everything works well. <br>
                    For this part with the aurduino I followed the page of <a
                        href="https://lastminuteengineers.com/drv8825-stepper-motor-driver-arduino-tutorial/">lastminuteengineers</a>

                <ul>
                    <li>
                        Wiring
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/week10/arduino_test.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/week10/arduino_test2.jpeg" class="img-fluid" alt="">
                    </div>
                </div> <br>
                <p>
                    The connection finished, we can now move on to the arduino code.
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                Program
                            </li><br>
                            #define dirPin 4 <br>
                            #define stepPin 3 <br>
                            #define stepsPerRevolution 200 <br> <br>
                            void setup() {<br>
                            delay(5000);<br>
                            pinMode(stepPin, OUTPUT); <br>
                            pinMode(dirPin, OUTPUT); <br>
                            } <br> <br>
                            void loop() { <br>
                            digitalWrite(dirPin, HIGH); <br>
                            // Spin the stepper motor 1 revolution slowly: <br>
                            for (int i = 0; i < stepsPerRevolution; i++) { <br>
                                // These four lines result in 1 step:<br>
                                digitalWrite(stepPin, HIGH); <br>
                                delayMicroseconds(2000); <br>
                                digitalWrite(stepPin, LOW);<br>
                                delayMicroseconds(2000); <br>
                                }<br>
                                delay(1000); }<br>
                        </ul>
                    </div>
                    <div class="col-lg-4" style="padding:50% 0 0 0;position:relative;">
                        <iframe
                            src="https://player.vimeo.com/video/696530442?h=38a7dbe76d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                            title="arduino_test"></iframe>
                    </div>
                </div> <br>
                </p>
                <h5>Electronic Design</h5>
                <p>
                    <li>ATtiny 412 pinout</li>
                </p>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/week10/412pinout.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week10/schematic.jpg" class="img-fluid" alt=""> <br>
                        <li>Kicad Schematic</li>
                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week10/layout.jpg" class="img-fluid" alt=""> <br>
                        <li>Kicad layout design</li>
                    </div>

                </div> <br>
                <p>
                    <li>Flatcam</li>
                </p>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="assets/img/week10/flatcam_trace_cut2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week10/grblcontrol.jpg" class="img-fluid" alt=""> <br>
                        <li>Mini CNC for milling</li>
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week10/pcb_milling.jpg" class="img-fluid" alt=""> <br>
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week10/pcb_milling2.jpg" class="img-fluid" alt=""> <br>

                    </div>

                </div> <br>
                <li>Soldering</li>
                <div class="row">
                    <div class="col-lg-4">
                        <br><img src="assets/img/week10/component.jpg" class="img-fluid" alt=""> <br>

                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week10/pcb_end1.jpg" class="img-fluid" alt=""> <br>

                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week10/pcb_end2.jpg" class="img-fluid" alt=""> <br>

                    </div>
                </div> <br>
                <h5>Programming</h5>
                <div class="row">
                    <div class="col-lg-6">
                        #define dirPin 1 <br>
                        #define stepPin 0 <br>
                        #define stepsPerRevolution 200 <br> <br>
                        void setup() { <br>
                        delay(5000);<br><br>
                        // Declare pins as output: <br>
                        pinMode(stepPin, OUTPUT);<br>
                        pinMode(dirPin, OUTPUT);<br>
                        }<br>
                        void loop() { <br><br>
                        // Set the spinning direction clockwise:<br>
                        digitalWrite(dirPin, HIGH);<br><br>
                        // Spin the stepper motor 1 revolution slowly:<br>
                        for (int i = 0; i < stepsPerRevolution; i++) { <br><br>
                            // These four lines result in 1 step:<br>
                            digitalWrite(stepPin, HIGH);<br>
                            delayMicroseconds(2000);<br>
                            digitalWrite(stepPin, LOW);<br>
                            delayMicroseconds(2000);<br>
                            }<br><br>
                            delay(1000); <br> <br>
                            // Set the spinning direction counterclockwise: <br>
                            digitalWrite(dirPin, LOW); <br> <br>

                            // Spin the stepper motor 1 revolution quickly:<br>
                            for (int i = 0; i < stepsPerRevolution; i++) {<br>
                                // These four lines result in 1 step:<br>
                                digitalWrite(stepPin, HIGH);<br>
                                delayMicroseconds(1000);<br>
                                digitalWrite(stepPin, LOW);<br>
                                delayMicroseconds(1000);<br>
                                }<br> <br>
                                delay(1000); <br> <br>
                                // Set the spinning direction clockwise:<br>
                                digitalWrite(dirPin, HIGH);<br><br>
                                // Spin the stepper motor 5 revolutions fast:<br>
                                for (int i = 0; i < 5 * stepsPerRevolution; i++) {<br><br>
                                    // These four lines result in 1 step:<br>
                                    digitalWrite(stepPin, HIGH);<br>
                                    delayMicroseconds(500);<br>
                                    digitalWrite(stepPin, LOW);<br>
                                    delayMicroseconds(500);<br>
                                    }<br> <br>
                                    delay(1000); <br> <br>
                                    // Set the spinning direction counterclockwise:<br>
                                    digitalWrite(dirPin, LOW);<br><br>
                                    //Spin the stepper motor 5 revolutions fast:<br>
                                    for (int i = 0; i < 5 * stepsPerRevolution; i++) {<br><br>
                                        // These four lines result in 1 step:<br>
                                        digitalWrite(stepPin, HIGH);<br>
                                        delayMicroseconds(500);<br>
                                        digitalWrite(stepPin, LOW);<br>
                                        delayMicroseconds(500);<br>
                                        }<br><br>
                                        delay(1000); <br> <br>
                    </div>

                    <div class="col-lg-4">
                        <img src="assets/img/week10/arduino.jpg" class="img-fluid" alt="">
                    </div>
                </div> <br>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/week10/hero.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4" style="padding:50% 0 0 0;position:relative;">
                        <iframe
                            src="https://player.vimeo.com/video/696533053?h=544591c54f&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;" title="tiny_motor"></iframe>
                    </div>
                </div>

                <p>
                    <strong>Files</strong> <br>
                <ul>
                    <li><a
                            href="https://gitlab.fabcloud.org/academany/fabacademy/2022/labs/energylab/students/pacome-kpodar/-/blob/master/docs/files/week10/kicad.zip">KiCad
                            file</a></li>
                    <li><a
                            href="https://gitlab.fabcloud.org/academany/fabacademy/2022/labs/energylab/students/pacome-kpodar/-/blob/master/docs/files/week10/Gerber_file.zip">Gerber
                            file</a></li>
                    <li><a
                            href="https://gitlab.fabcloud.org/academany/fabacademy/2022/labs/energylab/students/pacome-kpodar/-/blob/master/docs/files/week10/g_code.zip">G-code
                            file</a></li>
                    <li><a
                            href="https://gitlab.fabcloud.org/academany/fabacademy/2022/labs/energylab/students/pacome-kpodar/-/blob/master/docs/files/week10/Arduino_code_stepmotor_tiny.zip">Arduino
                            code</a></li>
                </ul>
                </p>

                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <strong> <a href="mac.php"> <i class="bi bi-chevron-left"></i>
                                Molding and Casting </a>
                        </strong>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <strong> <a href="mdmd.php"> Mechanical Design, Machine Design<i
                                    class="bi bi-chevron-right"></i>
                            </a>
                        </strong>
                    </div>



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