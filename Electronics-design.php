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
                    <h2>Electronics Design</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="assets/img/week06/africa_board_blink.jpg" class="img-fluid" alt="">
                            </div><br>
                            <div class="col-lg-9">
                                <!-- <img src="assets/img/week05/mesh_r.jpg" class="img-fluid" alt=""> -->
                                <h4>Assignment Overview</h4><br>
                                <p>
                                    For this weeks assignment, we were tasked with designing, milling, soldering, and
                                    testing our own circuit board. The purpose of the assignment is to familiarize
                                    ourselves with the desgin tools and software (such as KiCad) and also how to test
                                    and debug a board. The details of the assignment are below.
                                </p>
                                <p><strong>Group assignment</strong></p>
                                <ul>
                                    <li>Use the test equipment in your lab to observe the operation of a microcontroller
                                        circuit board (in minimum, check operating voltage on the board with multimeter
                                        or voltmeter and use oscilloscope to check noise of operating voltage and
                                        interpret a data signal).</li>
                                    <li>
                                        Document your work to the group work page and reflect on your individual page
                                        what you learned.
                                    </li>
                                </ul>
                                <p><strong>Individual assignment</strong></p>
                                <ul>
                                    <li>
                                        Redraw one of the echo hello-world boards or something equivalent, add (at
                                        least) a button and LED (with current-limiting resistor) or equivalent input and
                                        output, check the design rules, make it, test it. Optionally, simulate its
                                        operation.
                                    </li>
                                </ul>
                            </div><br>
                            <p>
                                <strong>Learning outcomes</strong><br><br>
                                Select and use software for circuit board design Demonstrate workflows used in circuit
                                board design.
                            </p>
                            <div class="col-lg-8">
                                <h5>Group Assignment</h5>
                                <p>
                                    The group work involved using test equipment in the lab to observe the operation of
                                    a microcontroller circuit board using an oscilloscope and voltmeter. This week we
                                    used the equipment to check the final circuit board created for the individual work.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <img src="assets/img/week06/africa_test.jpg" class="img-fluid" alt="">
                            </div><br>
                            <div class="col-lg-4">
                                <br><img src="assets/img/week06/africa_test_blink.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <p>
                                    We used the small voltage generator to power the different current sources on the
                                    board (9v and 5v).With the multimeter we could test the components such as the
                                    capacitor, the led, the linear regulator, the button and the continuity between the
                                    pins. After these different tests, we uploaded a flashing program of the led on the
                                    board and thanks to the oscilloscope we have to observe the digital signal at the
                                    output.
                                </p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-lg-7">
                                <p>
                                    <strong>Individual Assigment</strong><br>
                                    The objective of this assignment was to redesign an existing circuit board using a
                                    design software of your choice and add a button and LED to it. The assignment called
                                    for the creation of the hello-world echo board, so we will be making the Adrianino,
                                    a board developed by Adrian Torres of the Fab Academy that uses the Arduino IDE
                                    programming language. A picture of the Adrianino in the image below. You can also
                                    find all the details about the design on <a
                                        href=" https://fabacademy.org/2020/labs/leon/students/adrian-torres/adrianino.html">
                                        Adrian Torres’ Fab Academy site</a>.
                                </p>

                            </div>
                            <div class="col-lg-5">
                                <img src="https://fabacademy.org/2020/labs/leon/students/adrian-torres/images/adrianino/a_32.jpg"
                                    class="img-fluid" alt="">
                            </div>
                        </div><br>
                        <p>
                            The following sections will detail, step-by-step the design process used to draw the
                            board like Adrianino using kiCad.
                        </p>
                        <p>
                            <strong>Learnig electronics design</strong><br><br>
                            In this section I will discuss the steps that were taken to learn electronics design.
                            Beginnig with installation and learning of the program (KiCad), through to drawing a board
                            and finalizing the trace to be milled.
                        </p>
                        <p>
                            <strong>KiCad</strong><br><br>
                            The main program to design our board with is <a href="https://www.kicad.org/">KiCad</a> and
                            open-source electronics design automation suite. It’s a collection of several different
                            programs that work together to help in the design of a PCB.
                        </p>
                        <div class="col-lg-5">
                            <img src="assets/img/week06/kicad.jpg" class="img-fluid" alt="">
                        </div><br>
                        <p>
                            <strong>Libraries</strong><br><br>
                            To make it a lot easier to design my board, I had to add several symbol and footprint
                            libraries to it. Specifically the <a
                                href="https://gitlab.fabcloud.org/pub/libraries/electronics/kicad">Fab Electronics
                                Library for KiCad</a> that contains the symbols and footprints of (almost) all the parts
                            that we’ll be using during the Academy.
                        </p>
                        <p>
                            For the installation process I recommend this <a
                                href="https://www.youtube.com/watch?v=Q-yT332uCWY&t=3523s">video</a> that was really
                            useful to me, created by
                            Fab Academy’s Kris of Aalto Fab.
                        </p>

                        <p>
                            <strong>Schematic Layout Manager</strong><br><br>
                            With all the libraries loaded, I went to the Schematic Layout Manager to start designing my
                            board: picking the components I need and connecting them by creating the <em>circuit
                                diagram</em>.
                        </p>
                        <p>A new window will open with an empty schema.</p>
                        <div class="col-lg-5">
                            <img src="assets/img/week06/kicad_schematic_test.jpg" class="img-fluid" alt="">
                        </div><br>
                        <p>
                            <strong>Adding all Components</strong><br><br>
                            To place parts, click the Place Symbol icon and click anywhere in the schema. This will open
                            up a new Choose Symbol window from which you can select your part, such as a resistor.
                        </p>
                        <div class="col-lg-5">
                            <img src="assets/img/week06/kicad_schematic_r.jpg" class="img-fluid" alt="">
                        </div><br>
                        <div class="row">
                            <div class="col-lg-8">
                                <p>Press OK and click the board at the location where you want to place the symbol. In
                                    case you
                                    aren’t happy with the location, hover your mouse over the component and press M to
                                    move or R
                                    to rotate the part.</p>
                                <p>To place another component press A, which will open the Choose Symbol menu again.
                                    However, in
                                    case you simply want to add the same component, hover over the one already on the
                                    schema and
                                    press C to copy it to your mouse and click anywhere to place it.</p>
                                <p>As I said before, my design will be inspired by the Adrianino card. An image of the
                                    board
                                    layout used as reference is pictured below:</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="assets/img/week06/Adrianino.jpg" class="img-fluid" alt="">
                            </div>
                        </div><br>
                        <p>
                            The micro-controller used at the heart of the board is called the AT-Tiny 1614
                            microcontroller. Its <a
                                href="https://fabacademy.org/2021/labs/vancouver/students/paul-cairns/assignments/7-electronics-design/ATtiny.pdf">design
                                specs can be found here</a>. A photo of the pinout is included below:
                        </p>
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="https://fabacademy.org/2020/labs/leon/students/adrian-torres/images/adrianino/a_56.jpg"
                                    class="img-fluid" alt="">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>
                                <ul>
                                    <li><em>VDD</em> : Supply voltage.</li>
                                    <li><em>GND</em>: Ground</li>
                                    <li><em>Digital pins</em>: Port A: PA0, PA1, PA2, PA3, PA4, PA5, PA6, PA7. Port B:
                                        PB0, PB1, PB2, PB3.</li>
                                    <li><em>Analog pins</em> : PA1, PA2, PA3, PA4, PA5, PA6, PA7. Port B: PB0, PB1.</li>
                                    <li><em>UPDI Programming pin</em> : PA0 (physical pin number 10).</li>
                                    <li><em>External Clock Pin</em> : PA3.</li>
                                </ul>
                                </p>
                            </div><br>
                            <div class="col-lg-5">
                                <p>
                                    <strong>Create your electrical schematic file.</strong><br><br>
                                    The next step in the electronics design workflow is to use one your electrical
                                    design
                                    software (in my case, KiCad) to generate your electrical schematic. For a very
                                    detailed
                                    step-by-step guide on how to do this, I recommend the video by Kris from AaltoFab
                                    shown
                                    above. That video will help walk you through the process of creating your electrical
                                    schematic. The components to include in the design are : <br>
                                <ul>
                                    <li>1 x AT-Tiny-1614 MCU</li>
                                    <li>1 x 1uF Capacitor</li>
                                    <li>2 x 4.99 kOhm Resistor</li>
                                    <li>1 x 499 Ohm Resistor</li>
                                    <li>1 x 1 kOhm Resisitor</li>
                                    <li>1 x LED</li>
                                    <li>1 x Button</li>
                                    <li>1 x 5V 1A Voltage regulator</li>
                                    <li>1 x F-1x2 pin connector (2.54mm)</li>
                                    <li>1 x F-1x8 pin connector (2.54mm) for I2C</li>
                                    <li>1 x F-1x4 pin connector (2.54mm)</li>
                                    <li>1 x M-1x6 pin connector (2.54mm) for FTDI</li>
                                    <li>1 x M-1x2 pin connector (2.54mm) for UPDI</li>
                                    <li>1 x M-2x3 pin connector</li>
                                </ul>
                                </p><br>
                            </div>
                            <div class="col-lg-7">
                                <img src="assets/img/week06/KICAD_conect_end.jpg" class="img-fluid" alt="">
                                <br>
                            </div>
                            <p>
                                Once you have finished creating your electrical schematic, the next step in the workflow
                                is to use your schematic files to create a board layout.
                            </p>
                            <p>
                                <strong>The board layout</strong><br><br>
                                Using KiCad, it is possible to convert your electrical schematic into a board layout
                                file where you can draw the layout of your components and create your traces. As
                                mentioned before, it is recommended that you use the video tutorial created by Kris from
                                AaltoFab shown above to learn how to do this using KiCad.
                            </p>
                            <p>
                                One very important step is to ensure that all of the connections are properly tagged in
                                your schematic file before converting to the board mode. Below are some of the settings
                                used for my trace widths as well as the results from my board layout.
                            </p>
                            <p>
                                Track width = 0.7mm <br><br>
                                For a thought to my dear continent, I design my board in the shape of Africa.
                            </p>
                            <div class="col-lg-6">
                                <img src="assets/img/week06/kicad_import_net.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/week06/connectic_pcb.jpg" class="img-fluid" alt="">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="assets/img/week06/connection_pcb_end.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5">
                                <img src="assets/img/week06/africa_pcb.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <br>
                        <P>
                            After finishing, I export my board layout to a gerber file by clicking on File>Fabrication
                            Outputs>Gerber <em>(.gbr)</em>
                        </P>
                        <p><strong>Milling and Soldering</strong></p>
                        <h6><strong>Flatcam</strong></h6>
                        <p>
                            We use flatcam to generate the gcode for the cnc. First we open the gerbe file in flatcam.
                        </p>
                        <div class="col-lg-6">
                            <img src="assets/img/week06/flat_grb.jpg" class="img-fluid" alt="">
                        </div><br>
                        <p>
                            For milling the traces of the board we used: - tool diameter: 0.33mm tool depth: 0.08mm -
                            feed rate: 60mm/m - spindle speed: 11000rpm - travel z: 2mm - cut z: 0.08mm. <br><br>
                            For milling out the board cut these were the best parameters used: - tool diameter: 1mm -
                            travel z: 2mm - cut z: -1.5mm - feedrate: 90mm/m - spindle rate: 11000rpm.
                        </p>
                        <div class="col-lg-6">
                            <img src="assets/img/week06/flat_gcode.jpg" class="img-fluid" alt="">
                        </div><br>

                        <p>
                            <strong>Mill the circuit board.</strong><br>
                            The next step in the workflow is to mill your circuit board. For this step we used a mini
                            cnc 1610 pro machine, with details describing operation and characerisation given in <a
                                href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/assignments/week04/">Assignment
                                5 - electronics production</a>. <br><br>
                            We use grb control sofware to control the cnc.
                        </p>

                        <div class="row">
                            <div class="col-lg-1"><img src="assets/img/week06/grbl_cut.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-5"><img src="assets/img/week06/cnc_mill_1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-3"><img src="assets/img/week06/africa_cut_pcb.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="col-lg-3"><img src="assets/img/week06/africa_cut_alcool.jpg" class="img-fluid"
                                    alt=""></div>
                        </div><br>
                        <p>
                            Once the milling was completed. The next step in the process was to solder the board. Below
                            is a photo of the final milled board. <br><br>
                            <strong>
                                Solder the components onto the circuit board.
                            </strong><br><br>
                            To solder the components on to the board. A photo of the components is shown below:
                        </p>
                        <div class="row">
                            <div class="col-lg-4"><img src="assets/img/week06/africa_cut_component.jpg"
                                    class="img-fluid" alt=""></div>
                            <div class="col-lg-4"><img src="assets/img/week06/pacome_soldering.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="col-lg-4"><img src="assets/img/week06/affrica_cut_soldering_end.jpg"
                                    class="img-fluid" alt=""></div>
                        </div><br>
                        <P>
                            Once the board was soldered, the next step in the process is to program the board. Those
                            details will be discussed in the next step. <br><br>
                            <strong>Program the circuit board</strong> <br>
                            <br>
                            The circuit board that was constructed was designed to be compatible with Arduino IDE and
                            thus reprogrammable based on the functions that you want it to perform. In this section we
                            will discuss how to program the standard “blink” sketch onto our AT-Tiny board. The steps
                            are as follows(for windows OS): - Install Arduino IDE - Download and install the AT-Tiny
                            board library - Set the board configuration and port - Upload the blink sketch using
                            Arduino. <br>
                            Before we begin, we will want to connect our board to our computer. we do this by connecting
                            our FTDI chip with our UPDI chip and slip that into the UPDI slot of our board. The image
                            below illustrates how to connect the hardware:
                        </P> <br>
                        <div class="col-lg-6">
                            <img src="assets/img/week06/africa_connect.jpg" class="img-fluid" alt="">
                        </div><br>
                        <p>
                            <strong>Download and install the AT-Tiny board library.</strong>
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="assets/img/week06/librairi_link.jpg" class="img-fluid" alt="">
                            </div><br>
                            <div class="col-lg-6">
                                <img src="assets/img/week06/librairi_download.jpg" class="img-fluid" alt="">
                            </div><br>
                        </div><br>

                        <p>
                            <strong>Set the board configuration and port.</strong> <br> <br>
                            Step you will return to the Arduino IDE and load your sketch as you normally would. You will
                            next want to set the board configuration as follows Tools > Boards > MegaTinyCore > ATtiny
                            1614 and you will want to set the programmer to Serial Port, Tools > programmer > Serial
                            UPDI . Other settings to consider are the clock. To set it at 20 MHz. <br><br>
                            <strong>Upload the blink sketch</strong><br>
                            By navigating to File > Examples > 01 Basics > blink you can open the blink sketch. For this
                            board change the pin number to Pin 8, which is the pin that the LED is wired to. You can do
                            this by replacing LED_BUILTIN in the code with 8. Once finished click upload.

                        </p>
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/img/week06/arduino.jpg" class="img-fluid" alt="">
                            </div><br>
                            <div class="col-lg-2">
                                <!-- <img src="assets/img/week06/arduino.jpg" class="img-fluid" alt=""> -->
                            </div><br>
                            <div class="col-lg-4">
                                <img src="assets/img/week06/africa_board_blink.jpg" class="img-fluid" alt="">
                            </div><br>
                        </div><br>
                        <p>
                            <strong>
                                Files
                            </strong><br>
                            The files that were created for this assignment can be found at the following links:
                        <ul>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/files/week06/Africa-hello.kicad_pcb">Board
                                    layout</a></li>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/files/week06/Africa-hello.kicad_sch">Electrical
                                    Schematic</a>
                            </li>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/files/week06/ATtiny-hello-F_Cu.gbr">Trace
                                    Gbr File</a></li>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/files/week06/ATtiny-hello-Edge_Cuts.gbr">Edge
                                    Gbr File</a></li>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/assignments/files/week06/africa_cut">Trace
                                    gcode</a></li>
                            <li><a
                                    href="https://fabacademy.org/2022/labs/energylab/students/pacome-kpodar/assignments/files/week06/africa_edge_cut">Edge
                                    gcode</a></li>
                        </ul>
                        </p>

                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-4">
                                <strong> <a href="3d.php"> <i class="bi bi-chevron-left"></i>
                                        3D Printing and Scanning </a>
                                </strong>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-8">
                                <strong> <a href="ccm.php">Computer Controlled Machining<i
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