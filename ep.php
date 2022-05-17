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
                    <h2>Embedded Programing</h2>
                </div>

                <p>
                <h3>Assignment Overview</h3><br>
                <strong>Group Assignment :</strong> <br>
                <li>Compare the performance and development workflows for other architectures.</li>
                <li>Document your work to the group work page and reflect on your individual page what you learned.
                </li>
                </p>
                <p>
                    <strong>Individual assignment :</strong> <br>
                    <li>Read the datasheet for your microcontroller.</li>
                    <li>Use your programmer to program your board to do something.</li>
                </p>
                <p>
                    <strong>Learning Outcomes</strong><br>
                    <li>Identify relevant information in a microcontroller datasheet.</li>
                    <li>Implement programming protocols.</li><br>
                <h3>Individual Assigment</h3>
                The individual assignment consisted of two tasks. The first was to read and understand that data shee
                for the microcontroller you are programming, and the second is to program the board. We will begin by
                discussing that datasheet. <br>
                </p>
                <h5>ATtiny1614 Datasheet</h5>
                <p>
                    The ATtiny1614 is a members of the tinyAVR® 1-series of microcontrollers.
                <ul>
                    <div class="col-lg-6">
                        <img src="assets/img/week08/tinyAVR_series.jpg" class="img-fluid" alt="">
                    </div><br>
                </ul>
                It use the AVR® 8-bit processor with hardware multiplier, running at up to 20 MHz and with 16 KB Flash,
                2 KB of SRAM, and 256 bytes of EEPROM in a 14-pin package. Below are some of the specifications :
                <br><br>
                <strong>CPU</strong> : AVR 8-bit CPU running at up to 20 MHz. <br><br>
                <strong>Memories</strong> : 16 KB in systemp self-programmable flash memory.
                <ul>
                    <li>256 bytes EEPROM</li>
                    <li>2 KB SRAM</li>
                    <li>Write/erase flash 10,000 cycles, EEPROM 100,000 cycles.</li>
                </ul>
                <strong>System</strong> : Power-on reset.
                <ul>
                    <li>Brown out detection</li>
                    <li>Internal and external clock option</li>
                    <li>16/20 MHz lower-power RC oscillater.</li>
                    <li>Single pin programming and debugging interface (UPDI).</li>
                </ul>
                </p>
                <h5>Block diagram</h5>
                <p>
                    One of the first and most critical diagrams in the spec sheet is the block diagram. This diagram
                    gives an overiew of the chip internals, system details, peripherals, and provides an idea of the I/O
                    of the chip. The image below is presents the block diagram for the AT-tiny 1614. (p. 13, Figure 3-1)
                <ul>
                    <div class="col-lg-5">
                        <img src="assets/img/week08/block_diagram.jpg" class="img-fluid" alt="">
                    </div><br>
                </ul>
                </p>
                <h5>Pinout</h5>
                <p>
                    The next diagram of importance in the spec sheet is the pinout. The pinout describes the which
                    peripherals and I/O types are available at each pin. The image below presents the pinout. (p.14,
                    Figure 4.1)
                <ul>
                    <div class="col-lg-5">
                        <img src="assets/img/week08/pinout1.jpg" class="img-fluid" alt="">
                    </div><br>
                </ul>
                The important pins to consider for the AT-tiny are the VDD (pin 1), the GND (pin 14), and the UPDI (pin
                10). Other important pins to pay attention to are :
                <li>Pins 2-5, 8,9 11, 12: Digital/analog functions to read or output to peripherals,</li>
                <li>Pins 6 and 7: GPIO and clock,</li>
                <li>Pin 13 GPIO/Clock/Analalog function.</li>
                </p>

                <h5>Peripheral Module Address Map.</h5>
                <p>
                    The ATtiny 1614 has numerous peripherals with various addresses below is a list of the types of
                    peripherals it contains :
                <ul>
                    <li>Virtual Ports (A/B)</li>
                    <li>I/O registers</li>
                    <li>CPU</li>
                    <li>Reset controller</li>
                    <li>Sleep controller</li>
                    <li>Clock Controller</li>
                    <li>Brown-out detector</li>
                    <li>Voltage reference</li>
                    <li>Port configuration</li>
                    <li>Analog comparators</li>
                    <li>Digital-to-Analog converters</li>
                    <li>Universal Synchronous Asynchronous Receiver Transmitter</li>
                    <li>Serial Peripheral interface</li>
                    <li>Timer/counter</li>
                    <li>System configuration</li>
                </ul>
                This information can all be found in the peripherals section (p. 42, Section 7) and is all neatly
                summarized in Table 7-1 as illustrated below.
                </p>
                <div class="row">

                    <div class="col-lg-4">
                        <img src="assets/img/week08/peripheral_address_map.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5">
                        <img src="assets/img/week08/peripheral_address_map2.jpg" class="img-fluid" alt="">
                    </div>

                </div><br>
                <p>
                    Details of each peripheral are given in the chapters that follow. We will not discuss them in detail
                    here. The last two things we will discuss before moving ahead to programming the board will be the
                    CPU and the UPDI.
                </p>
                <h5>AVR CPU</h5>
                <p>
                    The AVR CPU uses 8-bit AVR CPU. The CPU is able to access memories, perform calculations, control
                    peripherals, and execute instructions in the progrm memory. This CPU uses a HARVARD Architecture
                    with seperate buses for program and data. Instruction in the program memory are executed with
                    single-level pipelining. While one instruction is being ecuted, the net instruction is prefetched
                    from the program memory, which enables instruction to be executed on every clock cycle. (p.48,
                    Sections 8.1-8.3). <br> The features of this AVR CPU are :
                <ul>
                    <li>8-Bit, High-Performance AVR RISC CPU</li>
                    <li>135 instructions</li>
                    <li>Hardware multiplier</li>
                    <li>32 8-Bit Registers Directly Connected to the Arithmetic Logic Unit (ALU)</li>
                    <li>Stack in RAM</li>
                    <li>Stack Pointer Accessible in I/O Memory Space</li>
                    <li>Direct Addressing of up to 64 KB of Unified Memory :</li>
                    <li>Entire Flash accessible with all LD/ST instructions</li>
                    <li>True 16/24-Bit Access to 16/24-Bit I/O Registers</li>
                    <li>Efficient Support for 8-, 16-, and 32-Bit Arithmetic</li>
                    <li>Configuration Change Protection for System Critical Features.</li>
                </ul>
                A block diamgram that illustrates the architecture is shown below :
                <ul>
                    <div class="col-lg-4">
                        <img src="assets/img/week08/avr_arch.jpg" class="img-fluid" alt="">
                    </div>
                </ul>
                </p>
                <h5>UPDI</h5>
                <p>
                    The UPDI is an interface for external programming and on-chip debugging of a device. The UPDI
                    supports programming of nonvolatile memory (NVN) spalce; FLASH, EEPROM, ukbi and the user row.
                    Furthermore, the UPDI can access the entire I/O and data space of the device. Programming and
                    debugging are done the the UPDI Physical interface (UPDI PHY), which is a 1-wire interface that uses
                    the RESET pin. The UPDI access layer grants access to the bus matrix, with memory mapped access to
                    system blocks such as NVM, and peripherals. (p.516, Section 33.2). The fueature of the Unified
                    Program and Debug Interface are as follows (p.516, Section 33.1) : <br> <br>
                    <strong>Programming</strong>:
                <ul>
                    <li>External programming through UPDI 1-wire (1W) interface</li>
                    <li>Enable programming by 12V or fuse</li>
                    <li>Uses the RESET pin of the device for programming</li>
                    <li>No GPIO pins occupied during operation</li>
                    <li>Asynchronous Half-Duplex UART protocol towards the programmer</li>
                </ul>
                </p>
                <h5>Debugging</h5>
                <p>
                <ul>
                    <li>Memory mapped access to device address space (NVM, RAM, I/O)</li>
                    <li>No limitation on device clock frequency</li>
                    <li>Unlimited number of user program breakpoints</li>
                    <li>Two hardware breakpoints</li>
                    <li>Run-time readout of CPU Program Counter (PC), Stack Pointer (SP), and Status register (SREG) for
                        code profiling</li>
                    <li>Program flow control -> Go, Stop, Reset, Step Into</li>
                    <li>Non-intrusive run-time chip monitoring without accessing system registers -> Monitor CRC status
                        and sleep status.</li>
                </ul>
                </p>
                <h5>Unified Programming and Debug Interface (UPDI)</h5>
                <p>
                    Built-in error detection with error signature readout requency measurement of internal oscillators
                    using the Event System.
                <ul>
                    <div class="col-lg-4">
                        <img src="assets/img/week08/UPDI_block.jpg" class="img-fluid" alt="">
                    </div>
                </ul>
                </p>
                <h5>Programming</h5>
                <p>
                    The circuit board that was constructed was designed to be compatible with Arduino IDE and thus
                    reprogrammable based on the functions that you want it to perform. In this section we will discuss
                    how to program the standard “blink” sketch onto our AT-Tiny board. The steps are as follows(for
                    windows OS) :
                <ul>
                    <li>Install Arduino IDE</li>
                    <li>Download and install the AT-Tiny board library</li>
                    <li>Set the board configuration and port</li>
                    <li>Upload the blink sketch using Arduino</li>
                </ul>
                Before we begin, we will want to connect our board to our computer. we do this by connecting our FTDI
                chip with our UPDI chip and slip that into the UPDI slot of our board. The image below illustrates how
                to connect the hardware:
                <ul>
                    <div class="col-lg-4">
                        <br><img src="assets/img/week06/africa_connect.jpg" class="img-fluid" alt="">
                    </div>
                </ul>
                </p>
                <h5>Download and install the AT-Tiny board library</h5>
                <div class="row">
                    <div class="col-lg-5">
                        <br><img src="assets/img/week06/librairi_link.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5">
                        <br><img src="assets/img/week06/librairi_download.jpg" class="img-fluid" alt="">
                    </div>
                </div><br>
                <h5>Set the board configuration and port</h5>
                <p>
                    Step you will return to the Arduino IDE and load your sketch as you normally would. You will next
                    want to set the board configuration as follows Tools > Boards > MegaTinyCore > ATtiny 1614 and you
                    will want to set the programmer to Serial Port, Tools > programmer > Serial UPDI . Other settings to
                    consider are the clock. To set it at 20 MHz.
                </p>
                <h5>Upload the blink Sketch</h5>
                <p>
                    By navigating to File > Examples > 01 Basics > blink you can open the blink sketch.
                    To see what Arduino pin numbers are associated to it, you need to find the Arduino pinout overview.
                    I googled “ATtiny1614 Arduino pinout” to see if I could also make the blinking work while using the
                    pin number that the LED is connected to according to Arduino/megaTinyCore.
                    <br>
                    I found several Fab Academy websites that showed images of the pinout. One site pointed to the
                    source of the pinout in the <a
                        href="https://github.com/SpenceKonde/megaTinyCore/blob/master/megaavr/extras/ATtiny_x14.md">megaTinyCore
                        documents</a> :
                <ul>
                    <div class="col-lg-7">
                        <img src="https://raw.githubusercontent.com/SpenceKonde/megaTinyCore/master/megaavr/extras/ATtiny_x14.gif"
                            class="img-fluid" alt="">
                    </div>
                </ul>
                For this board change the pin number to Pin 8, which is the pin that the LED is wired to. You can do
                this by replacing LED_BUILTIN in the code with 8. Once finished click upload.
                </p>
                <div class="row">
                    <div class="col-lg-5">
                        <br> <img src="assets/img/week06/arduino.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4" style="padding:50% 0 0 0;position:relative;">
                        <iframe
                            src="https://player.vimeo.com/video/691320730?h=d37d1528f9&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;" title="afrique.mp4"></iframe>
                    </div>
                </div><br>
                <h5>Pressing the button</h5>
                <p>
                    My button is connected on the PA3 pin of the Atiny which corresponds to the number 10 for the
                    arduino library. I'm going to program the button to have the function of on/off switch for the led.
                </p>

                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            const int led = 8;<br>
                            const int buttonPin = 10;<br>
                            boolean oldbuttonState = LOW;<br>
                            boolean newbuttonState = LOW;<br>
                            boolean LEDstatus = LOW;<br>

                            void setup() {<br>
                            pinMode(led, OUTPUT);<br>
                            pinMode(buttonPin, INPUT);<br>
                            digitalWrite(led, LOW);<br>
                            }<br>
                            void loop() {<br><br>

                            newbuttonState = digitalRead(buttonPin);<br><br>

                            if (newbuttonState != oldbuttonState)<br><br>
                            {
                            if (newbuttonState == HIGH )<br><br>
                            {
                            if ( LEDstatus == LOW )<br><br>
                            {
                            digitalWrite(led, HIGH);<br>
                            LEDstatus = HIGH;<br>
                            }<br><br>

                            else<br>
                            {<br>
                            digitalWrite(led, LOW);<br>
                            LEDstatus = LOW;<br>
                            }<br>
                            }<br>
                            oldbuttonState = newbuttonState;<br>
                            }<br>
                            }

                        </ul>
                    </div>
                    <div class="col-lg-4" style="padding:50% 0 0 0;position:relative;">
                        <iframe
                            src="https://player.vimeo.com/video/691344475?h=0c78ad2859&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                            title="button_interrup.mp4"></iframe>
                    </div>

                </div><br>

                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <strong> <a href="ccm.php"> <i class="bi bi-chevron-left"></i>
                                Computer Controlled Machining </a>
                        </strong>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <strong> <a href="mac.php"> Molding and Casting<i class="bi bi-chevron-right"></i>
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
            <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p> -->
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