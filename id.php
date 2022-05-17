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
                    <h2>Input Devices</h2>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <video controls autoplay loop muted width="100%" height="auto">
                            <source src="assets/img/week12/herovid.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <video controls autoplay loop muted width="100%" height="auto">
                            <source src="assets/img/week12/moisture-blink.mp4" type="video/mp4">
                        </video>
                    </div>
                </div> <br>
                <p>
                    For the individual assignment we were tasked with adding a sensor to a microcontroller board that we
                    have designed and reading it. To do this I intend to use the ESP32 microcontroller by adding a soil
                    moisture sensor and a voltage sensor. These elements will be part of my final project.




                <h3>Workflow</h3><br>
                <ul>
                    <li>Read the data sheet of the different components to be used</li>
                    <li>Design and produce the electronic board and Connect your sensors to your microcontroller board.
                    </li>
                    <li>Program your microcontroller to read your sensor.</li>
                    <li>Test your program.</li>
                    <li>Debug and adjust as necessary.</li>
                </ul>
                </p>
                <p>
                <h3>The data sheet of the different components.</h3><br>
                <ul>
                    <li>ESP32</li>
                </ul>
                The ESP32 chip comes with 48 pins with multiple functions.
                The figure below illustrates the ESP-WROOM-32 pinout.
                </p>

                <div class="col-lg-5">
                    <img src="https://i0.wp.com/randomnerdtutorials.com/wp-content/uploads/2018/08/esp32-pinout-chip-ESP-WROOM-32.png?quality=100&strip=all&ssl=1"
                        class="img-fluid" alt="">
                </div>
                <p>
                <ul>
                    <li>Soil moisture sensor</li>
                </ul>
                The soil moisture sensor consists of two probes which are used to measure the volumetric content of
                water. The two probes allow the current to pass through the soil and then it gets the resistance value
                to measure the moisture value.
                </p>
                <div class="col-lg-5">
                    <img src="https://i2.wp.com/www.esp8266learning.com/wp-content/uploads/2017/06/Soil-Moisture-Sensor.jpg?resize=355%2C355"
                        class="img-fluid" alt="">
                </div>
                <p>
                    When there is more water, the soil will conduct more electricity which means that there will be less
                    resistance. Therefore, the moisture level will be higher. Dry soil conducts electricity poorly, so
                    when there will be less water, then the soil will conduct less electricity which means that there
                    will be more resistance. Therefore, the moisture level will be lower. <br><br>

                    Input Voltage : 3.3 – 5V <br>
                    Output Voltage : 0 – 4.2V <br>
                    Input Current : 35mA<br>
                    Output Signal : Both Analog and Digital<br>
                    Pin Out<br>
                    The soil moisture sensor has four pins :<br><br>

                    VCC : Power<br>
                    A0 : Analog Output<br>
                    D0 : Digital Output<br>
                    GND : Ground<br> <br>
                    The Module also contains a potentiometer which will set the threshold value. This threshold value
                    will be compared by the LM393 comparator. The output LED will light up and down according to this
                    threshold value. <br> <br>
                    To connect the sensor in the analog mode, we will need to use the analog output of the sensor. When
                    taking the analog output from the soil moisture sensor, the sensor gives us a value from 0 to 1023.
                    The moisture is measured in percentage, so we will map these values from 0 to 100 and then we will
                    show these values on the serial monitor. <br> <br>

                    <em>Connections</em> <br> <br>

                    The connections for the soil moisture sensor to the ESP32 are as follows : <br>
                    VCC of the sensor to 3v3 of the Wemos<br>
                    GND of the sensor to GND of the Wemos<br>
                    A0 of the sensor to GPIO 35 of the ESP32<br>
                </p>
                <h5>Electronic design and production</h5>
                <div class="row">
                    <div class="col-lg-3">
                        <br><img src="assets/img/week12/schematic.jpg" class="img-fluid" alt=""> <br> <br>
                        <li>Schematic</li>
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week12/layout.jpg" class="img-fluid" alt=""> <br> <br>
                        <li>Pcb layout</li>
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week12/milling.jpg" class="img-fluid" alt=""> <br> <br>
                        <li>Milling pcb</li>
                    </div>
                    <div class="col-lg-3">
                        <br><img src="assets/img/week12/pcb.jpg" class="img-fluid" alt=""> <br> <br>
                    </div>
                </div>
                <p>
                    <li>Soldering</li>
                </p>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/week12/component.jpg" class="img-fluid" alt=""> <br> <br>

                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week12/soldering1.jpg" class="img-fluid" alt=""> <br> <br>

                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week12/soldering2.jpg" class="img-fluid" alt=""> <br> <br>
                    </div>
                </div>
                <p>
                    <strong>Programming</strong>
                </p>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/week12/code1.jpg" class="img-fluid" alt=""> <br> <br>

                    </div>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week12/code2.jpg" class="img-fluid" alt=""> <br> <br>

                    </div>
                    <div class="col-lg-4">
                        <video controls autoplay loop muted width="100%" height="auto">
                            <source src="assets/img/week12/herovid.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <p>
                <ul>
                    int sensor_pin = 34;<br>
                    int led= 2;<br>
                    int value ;<br>
                    void setup()<br>
                    {<br>
                    Serial.begin(115200);<br>
                    pinMode(led,OUTPUT);<br>
                    Serial.println("Reading");<br>
                    digitalWrite(led,1);<br>
                    delay(1000);<br>
                    digitalWrite(led,0);<br>
                    delay(1000);<br>
                    }<br>
                    void loop()<br>
                    {<br>
                    value= analogRead(sensor_pin);<br>
                    Serial.print("Moisture : ");<br>
                    Serial.println(value);<br>
                    if (value < 3000)<br>
                        {<br>
                        digitalWrite(led,1);<br>
                        }<br>
                        else<br>
                        {<br>
                        digitalWrite(led,0);<br>
                        }<br>
                        }<br>
                </ul>
                </p>
                <div class="col-lg-4">
                    <video controls autoplay loop muted width="100%" height="auto">
                        <source src="assets/img/week12/moisture-blink.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="row">
                    <div class="col-lg-10 col-md-9 col-sm-7">
                        <strong> <a href="mdmd.php"> <i class="bi bi-chevron-left"></i>
                                Mechanical Design, Machine Design </a>
                        </strong>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <strong> <a href="nac.php">Networking and communications<i class="bi bi-chevron-right"></i>
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