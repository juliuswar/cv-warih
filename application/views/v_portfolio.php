<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
    <link rel="icon" href="<?php echo base_url(); ?>assets/foto/200.JPG" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body>

    <div class="topnav">
        <a class="page-scroll" href="#bg">Contact</a>
        <a class='page-scroll' href="#certificate">Certificate</a>
        <a class='page-scroll' href="#portfolio">Portfolio</a>
        <a class='page-scroll' href="#about">About</a>
        
        <a class="author" href='#'>Julius Warih</a>
    </div>

    <div class="jumbotron text-center" id="#contact">
        <img src="<?php echo base_url(); ?>/assets/foto/200.JPG" class="rounded-circle" width="300" height="220" id='bg'>
        <h1 class="pt-3" >Julius Warih </h1>
        <p>Software Development | Web Development | Business Analyst | System Analyst</p>
        <div class="medsos">
            <p>LinkedIn : <a target="_blank" href='https://www.linkedin.com/in/julius-warih-angkasa-57a876134/'>Click my account LinkedIn</a></p>
            <p>Instagram :<a target="_blank" href="https://www.instagram.com/julius_warih/"> Click my account Instagram</a></p>
            <p>Facebook :<a target="_blank" href="https://www.facebook.com/warih17/"> Click my account Facebook</a></p>
            <h4 ><b>Download Curriculum Vitae :</b><a href="https://drive.google.com/file/d/1_tvsUXkLk-ct2X_iQOAOzr2po0dduFC1/view?usp=sharing"> Click my Curriculum Vitae</a></h4>
            <p class="email mt-5">Email : <u>warih70@gmail.com</u>
                | Phone Number : <u>(+62) 81345153650</u></p>
        </div>
    </div>

    <div class="about pb-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1 class="text-center">About</h1>
                    <hr>
                </div>

                <p class="text-center pt-3 ">Introduce myself, my name is Julius Warih. I recently graduated in 2023
with a master's degree from Dian Nuswantoro University in Semarang. I
specialize in developing ERP application systems and asset
management. I have 3 years of experience in this field. Additionally, I
have expertise in testing applications before they are deployed to users,
as well as in communication and teamwork to build applications.</p>
            </div>
        </div>
    </div>

    <div class="portfolio pb-5" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1 class="text-center">Portfolio</h1>
                    <hr>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="">
                        <a href="<?php echo base_url(); ?>/assets/foto/Job Description.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/Job Description.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>Job Description Website</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url(); ?>/assets/foto/frd jobdesc.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/frd jobdesc.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>FRD Job Description</p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/fsd jobdesc.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/fsd jobdesc.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>FSD Job Description</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/dokumentasi itop.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/dokumentasi itop.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Viona documentation</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/test_case_ITOP.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/test_case_ITOP.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>Test Case Viona Application</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/change_management.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/change_management.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>FSD Change Management </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/kasir.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/kasir.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>Kasir Application </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/gbi.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/gbi.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>Church Website </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/mobile.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/mobile.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>VisioNet Application using React Native </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/foto_erp.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/foto_erp.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>ERP Colomadoe using PHP</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/foto_rs_permata.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/foto_rs_permata.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>RS Permata Hati System using PHP</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/foto_omedikeu.png" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/foto_omedikeu.png" alt="Image" class="img-fluid"></a>
                        <p id='text'>Omedi Keu System using PHP </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="certificate pb-5" id="certificate">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1 class="text-center">Certificate</h1>
                    <hr>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="">
                        <a href="<?php echo base_url(); ?>/assets/foto/magang.jpg" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/magang.jpg" alt="Image" class="img-fluid"></a>
                        <p id='text'>Internship PT. VisioNet Data International</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url(); ?>/assets/foto/internal_hmti.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/internal_hmti.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Internal Division HMTI</p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/wakil.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/wakil.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Vice Chairman HMTI</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/national_competition.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/national_competition.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Committee National Competition</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/sandec.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/sandec.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Sandec Certificate</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/big_data.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/big_data.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Big Data Certificate</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/mlc2018.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/mlc2018.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Committee Mathematic Logic Competition 2018</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/jlpt.jpg" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/jlpt.jpg" alt="Image" class="img-fluid"></a>
                        <p id='text'>Japanese Language Proficiency Test (N5)</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail" data-aos="fade-up" data-aos-delay="200">
                        <a href="<?php echo base_url(); ?>/assets/foto/kotlin.PNG" data-fancybox="gallery"><img src="<?php echo base_url(); ?>/assets/foto/kotlin.PNG" alt="Image" class="img-fluid"></a>
                        <p id='text'>Kotlin for Android : Beginner to Advanced Certificate (Udemy)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer pb-5 jumbotron">
            <h2>
                <p>Copyright &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Julius Warih All Rights Reserved</p>
            </h2>
        </div>
    </footer>
    <!-- <div class="contact pb-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h1 class="text-center">Contact</h1>
                    <hr>
                </div>
                <form class="pt-3" action="mailto:marenight878@gmail.com" method="post" enctype="text/plain">
                    <div class="form-group">
                        <h2 for="exampleInputNama">Name</h2>
                        <input type="text" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" placeholder="Enter Nama" size="200">
                    </div>
                    <div class="form-group">
                        <h2 for="exampleInputEmail1">Email address</h2>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" size="200">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <h2 for="exampleInputNoTelp">Phone Number</h2>
                        <input type="text" class="form-control" id="exampleInputNoTelp" aria-describedby="notelpHelp" placeholder="Enter Phone Number" size="200">
                    </div>
                    <div class="form-group">
                        <h2 for="exampleInputText">Message</h2>
                        <textarea type="text" class="form-control" id="exampleInputText" rows='10' placeholder="Message" size="200"></textarea>
                    </div>
                    <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
        </div>
    </div> -->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

</html>