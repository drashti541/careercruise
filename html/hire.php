<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/logo.png" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../css/hire.css">
    <link rel="stylesheet" href="../modal/post.css">
    <link rel="stylesheet" href="../head-foot/header1.css">
    <link rel="stylesheet" href="../head-foot/footer.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <script src="https://kit.fontawesome.com/a42162768d.js" crossorigin="anonymous"></script> 
    <title>CAREER CRUISE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>  
</head>
<body>
    <?php 
        include '../head-foot/header.php'
    ?>
    <!-- <section id="container-fluid">
        <div class="banner text-center">
            <h1>RECRUITMENT</h1>
        </div>
    </section> -->

    <section id="banner">
   <div class="container">
        <div class="row">
            <div class="col-md-12">
	            <img src="../images/hire1.png" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>
</section>

    <section id="features">
        <!-- title -->
        <div class="title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <!-- features-middle -->
                        <div class="features_middle">
                            <h2>Our special features</h2>
                            <!-- sub-title -->
                            <p>To making the decision to hire a new employee, deciding what skills and experience an employee will need, recruiting for the position, selecting an employee, onboarding, and new employee training.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- feature-img -->
                        <div class="feature_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid margin_top_up ipad_px_30">
            <div class="row">
                <div class="col-sm-12 col-lg-10 offset-lg-1">
                        <?php 
                            include '../modal/post.php'
                        ?>
                    <div class="row"> 
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="single_feature">
                                <h4>Posting Job.</h4>
                                <p>Describe the job duties, responsibilities, skills, and level of experience etc.</p>
                                <center><button class="btn" data-toggle="modal" data-target="#myModal">Post job</button></center>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-air-freshener fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="air-freshener" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M378.94 321.41L284.7 224h49.22c15.3 0 23.66-16.6 13.86-27.53L234.45 69.96c3.43-6.61 5.55-14 5.55-21.96 0-26.51-21.49-48-48-48s-48 21.49-48 48c0 7.96 2.12 15.35 5.55 21.96L36.22 196.47C26.42 207.4 34.78 224 50.08 224H99.3L5.06 321.41C-6.69 333.56 3.34 352 21.7 352H160v32H48c-8.84 0-16 7.16-16 16v96c0 8.84 7.16 16 16 16h288c8.84 0 16-7.16 16-16v-96c0-8.84-7.16-16-16-16H224v-32h138.3c18.36 0 28.39-18.44 16.64-30.59zM192 31.98c8.85 0 16.02 7.17 16.02 16.02 0 8.84-7.17 16.02-16.02 16.02S175.98 56.84 175.98 48c0-8.85 7.17-16.02 16.02-16.02zM304 432v32H80v-32h224z"></path></svg><!-- <i class="fas fa-air-freshener"></i> -->
                                </div>
                            </div>
                        </div>
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="single_feature">
                                <h4>Resume Screening.</h4>
                                <p>straightforward way to remove unqualified applicants from the application process. </p>
                                <center><a href="resume.php" class="btn btn-view d-block m-auto">Resume Screening</a></center>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-anchor fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="anchor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M12.971 352h32.394C67.172 454.735 181.944 512 288 512c106.229 0 220.853-57.38 242.635-160h32.394c10.691 0 16.045-12.926 8.485-20.485l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0l-67.029 67.029c-7.56 7.56-2.206 20.485 8.485 20.485h35.146c-20.29 54.317-84.963 86.588-144.117 94.015V256h52c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-52v-5.47c37.281-13.178 63.995-48.725 64-90.518C384.005 43.772 341.605.738 289.37.01 235.723-.739 192 42.525 192 96c0 41.798 26.716 77.35 64 90.53V192h-52c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h52v190.015c-58.936-7.399-123.82-39.679-144.117-94.015h35.146c10.691 0 16.045-12.926 8.485-20.485l-67.029-67.029c-4.686-4.686-12.284-4.686-16.971 0L4.485 331.515C-3.074 339.074 2.28 352 12.971 352zM288 64c17.645 0 32 14.355 32 32s-14.355 32-32 32-32-14.355-32-32 14.355-32 32-32z"></path></svg><!-- <i class="fas fa-anchor"></i> -->
                                </div>
                            </div>
                        </div> 
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-5">
                            <div class="single_feature">
                                <h4>Initial screening of applicants.</h4>
                                <p>Schedule a pre-screening interview with those who meet both your minimum and preferred qualifications.</p>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg><!-- <i class="fa fa-home"></i> -->
                                </div>
                            </div>
                        </div>
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-5">
                            <div class="single_feature">
                                <h4>start conducting group discussion.</h4>
                                <p>invite multiple candidates to an interview at once to discuss the available position as a group.</p>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-bell-slash fa-w-20" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="bell-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M633.82 458.1l-90.62-70.05c.19-1.38.8-2.66.8-4.06.05-7.55-2.61-15.27-8.61-21.71-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84c-40.33 8.38-74.66 31.07-97.59 62.57L45.47 3.37C38.49-2.05 28.43-.8 23.01 6.18L3.37 31.45C-2.05 38.42-.8 48.47 6.18 53.9l588.35 454.73c6.98 5.43 17.03 4.17 22.46-2.81l19.64-25.27c5.42-6.97 4.17-17.02-2.81-22.45zM157.23 251.54c-8.61 67.96-36.41 93.33-52.62 110.75-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h241.92L157.23 251.54zM320 512c35.32 0 63.97-28.65 63.97-64H256.03c0 35.35 28.65 64 63.97 64z"></path></svg><!-- <i class="fa fa-bell-slash"></i> -->
                                </div>
                            </div>
                        </div>
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-6">
                            <div class="single_feature">
                                <h4>Start Conducting interviews instantly.</h4>
                                <p>To initial interviews typically begin with phone calls with the HR representatives. </p>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-cloud-download-alt fa-w-20" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="cloud-download-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z"></path></svg><!-- <i class="fa fa-cloud-download-alt"></i> -->
                                </div>
                            </div>
                        </div>
                        <!-- single-feature -->
                        <div class="col-sm-6 col-lg-6">
                            <div class="single_feature">
                                <h4>Onboarding and new employee orientation.</h4>
                                <p>Once your offer has been accepted, it's time to bring the new employee on board.</p>
                                <!-- feature-icon -->
                                <div class="feature_icon">
                                    <svg class="svg-inline--fa fa-atom fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="atom" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M413.03 256c40.13-54.89 41.51-98.62 25.14-128-10.91-19.52-40.54-50.73-116.33-41.88C300.36 34.89 267.64 0 224 0s-76.36 34.89-97.84 86.12C50.43 77.34 20.73 108.48 9.83 128c-16.38 29.4-15 73.09 25.14 128-40.13 54.89-41.51 98.62-25.14 128 29.21 52.34 101.68 43.58 116.33 41.88C147.63 477.1 180.36 512 224 512s76.37-34.9 97.84-86.12c14.64 1.7 87.11 10.46 116.33-41.88 16.38-29.4 15-73.09-25.14-128zM63.38 352c-4.03-7.21-.19-24.8 14.95-48.29 6.96 6.53 14.2 12.89 21.87 19.18 1.71 13.71 4 27.08 6.76 40.08-24.56.89-39.89-4.37-43.58-10.97zm36.82-162.88c-7.66 6.29-14.9 12.65-21.87 19.18-15.13-23.5-18.97-41.09-14.95-48.3 3.41-6.14 16.39-11.47 37.92-11.47 1.71 0 3.87.3 5.69.37a472.191 472.191 0 0 0-6.79 40.22zM224 64c9.47 0 22.2 13.52 33.86 37.26-11.19 3.7-22.44 8-33.86 12.86-11.42-4.86-22.67-9.16-33.86-12.86C201.8 77.52 214.53 64 224 64zm0 384c-9.47 0-22.2-13.52-33.86-37.26 11.19-3.7 22.44-8 33.86-12.86 11.42 4.86 22.67 9.16 33.86 12.86C246.2 434.48 233.47 448 224 448zm62.5-157.33c-26.7 19.08-46.14 29.33-62.5 37.48-16.35-8.14-35.8-18.41-62.5-37.48-1.99-27.79-1.99-41.54 0-69.33 26.67-19.05 46.13-29.32 62.5-37.48 16.39 8.17 35.86 18.44 62.5 37.48 1.98 27.78 1.99 41.53 0 69.33zM384.62 352c-3.67 6.62-19 11.82-43.58 10.95 2.76-13 5.05-26.37 6.76-40.06 7.66-6.29 14.9-12.65 21.87-19.18 15.13 23.49 18.97 41.08 14.95 48.29zm-14.95-143.71c-6.96-6.53-14.2-12.89-21.87-19.18a473.535 473.535 0 0 0-6.79-40.22c1.82-.07 3.97-.37 5.69-.37 21.52 0 34.51 5.34 37.92 11.47 4.02 7.22.18 24.81-14.95 48.3zM224 224c-17.67 0-32 14.33-32 32s14.33 32 32 32 32-14.33 32-32-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-atom"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
    <div class="container counter">
        <h1 class="heading-text">OUR TEAM MEMBER</h1>
            <div class="counter-row container-fluid">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <div class="logo">
                                                <img src="../images/homep-team-1s.png" alt="">
                                            </div>
                                            <h4>Sahil Shaikh</h4>
                                            <p>Back-end Developer</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body text-center mt-4">
                                            <h4>Sahil Shaikh</h4>
                                            <p>Handles the backend of website.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <div class="logo">
                                                <img src="../images/homep-team-4r.png" alt="">
                                            </div>
                                            <h4>Rashika Machhi</h4>
                                            <p>Database Developer</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body text-center mt-4">
                                            <h4>Rashika Machhi</h4>
                                            <p>Handles the database of the website.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                            <div class="logo">
                                                <img src="../images/homep-team-3m.png" alt="">
                                            </div>
                                            <h4>Maitry Shah</h4>
                                            <p>Data Analyst</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body text-center mt-4">
                                            <h4>Maitry Shah</h4>
                                            <p>Handles the data of the website.</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                            <div class="logo">
                                                <img src="../images/homep-team-2d.png" alt="">
                                            </div>
                                            <h4>Drashti Chitre</h4>
                                            <p>Front-end Developer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-body text-center mt-4">
                                            <h4>Drashti Chitre</h4>
                                            <p>Handles the frontend of the website</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="social-icon" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <?php 
        include '../head-foot/footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../head-foot/header.js"></script>
    <script src="../modal/post.js" defer></script>
    <script>
        $(".st1").click(function(){
    $(".profile").prop("checked",true);
})
$(".st2").click(function(){
    $(".settings").prop("checked",true);
})
$(".st3").click(function(){
    $(".post").prop("checked",true);
})
$(".st4").click(function(){
    $(".books").prop("checked",true);
})

$("ul li").click(function(){
    $(this).addClass("active").siblings().removeClass("active");
})
    </script>
</body>
</html>