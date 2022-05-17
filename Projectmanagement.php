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
                    <h2>Project Management</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            This week, I worked on defining a potential final project idea and started reviewing the
                            content of the class:
                        </p> <br>
                        <div class="col-lg-8">
                            <ul>
                                <li><span> <a href="git-scm.com">Git</a></span></li> <br>
                                <li>
                                    <span> <a href="https://guides.github.com/features/mastering-markdown/">
                                            Markdown</a></span>
                                </li>
                            </ul>
                        </div>
                        <p>
                            So I followed this Git tutorial for the installation and configuration of my Git repository.
                            I used VS code as a code editor to modify the markdown code used in my website.
                        </p>
                        <strong>Step 1</strong> <br>
                        <p>
                            The first thing you need to do when you install Git is to set your username and email
                            address. This is important because every Git commit uses this information, and it is
                            immutably embedded in the commits you start creating:
                        </p>
                        <ul>
                            <li><span>$ git config –global user.name “Pacome KPODAR”</span></li> <br>
                            <li><span>$ git config –global user.email “pkpodar1@gmail.com”</span></li> <br>
                        </ul>
                        <div class="col-lg-12">
                            <img src="assets/img/git_config_profile.jpg" class="img-fluid" alt="">
                        </div><br>
                        <strong>Step 2</strong> <br>
                        <p>
                            <br> Generate an SHH key on Git. <a
                                href="https://gitlab.fabcloud.org/help/ssh/index#generate-an-ssh-key-pair">follow this
                                tutorial</a>
                        </p>
                        <div class="col-lg-12">
                            <img src="assets/img/Generate_an_SSH_Key pair.jpg" class="img-fluid" alt="">
                        </div><br>
                        <strong> Step 3</strong> <br>
                        <ul>
                            <br>
                            <li><span> Clone the gitlab project on your computer</span></li> <br>
                            <li><span>Find the clone url at the top of the overview page of your project on
                                    gitlab.</span></li> <br>
                            <li><span>Run git clone git@gitlab.fabcloud.org:your/project/path.git</span></li> <br>
                        </ul>
                        <strong> Step 4</strong> <br>
                        <ul>
                            <br>
                            <li><span> <a href="http://www.mkdocs.org/#installation">Install </a>MkDocs on your
                                    computer.</span></li> <br>

                        </ul>
                        <strong> Step 5</strong> <br>
                        <ul>
                            <br>
                            <li><span>Preview your project : mkdocs serves your site is accessible under
                                    localhost:8000</span></li> <br>

                        </ul>
                        <strong> Step 6</strong> <br>
                        <ul>
                            <br>
                            <li><span>Building mkdocs locally</span></li> <br>

                        </ul>
                        <strong> Step 7</strong> <br>
                        <p>
                            Once you are happy with your changes and have saved them, go back to your terminal window
                            and type <strong>git status</strong> and hit return to execute the command.The output of
                            <strong>git status</strong> shows the modified files. To keep track of this change to this
                            file, you must add the
                            changes, then commit the changes.
                        </p>
                        <div class="col-lg-12">
                            <img src="assets/img/Git_status.jpg" class="img-fluid" alt="">
                        </div><br>
                        <strong> Step 8</strong> <br>
                        <p><strong><br>Add and commit changes</strong></p>
                        <p> You will use the add and commit functions to add and commit changes that you make to
                            git.</p>
                        <ul>
                            <br>
                            <li><span> <strong>git add</strong> takes a modified file in your working directory and
                                    places the modified version in a staging area.</span></li> <br>
                            <li><span> <strong>git commit</strong> takes everything from the staging area and makes a
                                    permanent snapshot of the current state of your repository that is associated with a
                                    unique identifier.</span></li> <br>
                            <!-- <li><span>Run git clone git@gitlab.fabcloud.org:your/project/path.git</span></li> <br> -->
                        </ul>
                        <strong> Step 9</strong> <br>
                        <p><strong><br>Push changes to GitHub</strong></p>
                        <p>So far we have only modified our local copy of the repository. To add the changes to your git
                            repo files on your computer to the version of your repository on Gitlab, you need to push
                            them Gitlab. <br> <br>
                            You can push your changes to Gitlab with: git puh -u
                        </p>
                        <div class="col-lg-12">
                            <img src="assets/img/Git_push-u.jpg" class="img-fluid" alt="">
                        </div><br> <br>
                        <p>
                            <strong> Gitlad_Last_Update</strong>
                        </p>
                        <div class="col-lg-12">
                            <img src="assets/img/Gitlad_Last_update.jpg" class="img-fluid" alt="">
                        </div><br>

                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-6">
                                <strong> <a href="Principlesandpractices.php"> <i class="bi bi-chevron-left"></i>
                                        Principles
                                        and Practices </a>
                                </strong>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <strong> <a href="Computer-aided-design.php"> Computer Aided Design <i
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