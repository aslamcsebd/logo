<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="5"> -->
        <title>Home page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>

        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
      
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <link rel="stylesheet" type="text/css" href="assets/responsive.css">
    </head>

    <style type="text/css">
        .slider { width: 95%; margin: 10px auto; }
        .slick-slide { margin: 0px 5px; }
        .slick-slide img { width: 100%; }
        .slick-prev:before,
        .slick-next:before { color: black; }
        .brand .slick-arrow{display: none !important;}
        .brand img{ height: 100px !important; }
        
        .autoplay img{ width: 220px; height: 220px !important; border-radius: 25px; margin: auto;}
        .slick-dots {display: none !important;}

        /* WE DEVELOP YOUR PROFESSIONAL LOGO */                
        .hr-lines{
            font-size: 1.5em;
            position: relative;
            max-width: 400px;
            margin: 20px auto;
            text-align: center;
            word-spacing: 5px;   
        }

        .hr-lines:before{
            content:"";
            height: 1.5px;
            width: 155px;
            background: red;
            display: block;
            position: absolute;
            top: 150%;
            left: 0;
        }

        .hr-lines:after{
            content:" ";
            height: 1.5px;
            width: 175px;
            background: red;
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
        }

        /* professional */
        .professional ul li{ list-style: none; }
        .professional ul{ margin: 2em; font-size: 20px; font-weight: 400;}

        .package h1 b{ border-bottom: 2px solid #000; width:50px; }
        .package ul li{ list-style: none; }    
        .package .thumbnail {
            padding: 10px;
            -webkit-box-shadow: 0 0 5px 2px rgb(0 0 0 / 50%);
            box-shadow: 0 0 5px 2px rgb(0 0 0 / 50%);
            border-radius: 5px;
        }       

        .process h4 span{ border-bottom: 2px solid #000; width:100px; }
        .process .title{ margin-bottom: 50px; }

        .portfolio h4 span{ border-bottom: 2px solid #000; width:100px; }
        .portfolio .title{ margin-bottom: 50px; }

        .portfolio2 img{ width: 250px; height: 180px !important; margin: auto;}
        
    </style>
    
    <body>
        <!-- navbar -->
        <?php include 'include/navbar.php';?>

        <div>
            <img src="images/home.jpeg" alt="" width="100%" height="500">
        </div>

        <div class="centered">
            <h2 class="fw-bold">Logo design by experts</h2>

            <table class="my-4">           
                <tbody>
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label>Individual design</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label>Unlimited fixes</label>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label>Satisfaction Guarantee</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" checked disabled>
                            <label>Backup free</label>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <a class="btn btn-success rounded-5 fs-4 fw-bold text-light orderNow" href="#">ORDER NOW</a>
        </div>

        <section class="brand slider">
            <?php 
                for($i=1; $i<=10; $i++){ ?>
                    <div>
                        <img src="images/brand/brand (<?=$i?>).jpeg">
                    </div>
            <?php } ?>
        </section>
        
        <p class="hr-lines">
            <span class="float-start">WE DEVELOP YOUR</span> <br>
            <span class="float-end">PROFESSIONAL LOGO</span>
        </p>
        <br>

        <section class="autoplay slider col-sm-12">
            <?php 
                for($i=1; $i<=10; $i++){ ?>
                    <div class="col-sm-12">
                        <img src="images/brand/brand (<?=$i?>).jpeg">
                    </div>
            <?php } ?> 
        </section>

        <div class="professional">
            <ul>
               <li>Are you starting a company and need a logo?</li>
               <li>Have you been using the same logo for years?</li>
               <li>Do you also need the design of your business card, letterhead or a flyer?</li>
               <li>We are logo experts and develop logos and business stationery</li>
               <li>for all conceivable forms of use.</li>
               <li><b>More than 15,000 satisfied customers already trust our agency.</b></li>
            </ul>
        </div>

        <section class="package">
            <h1 class="text-center mb-4">
                <b>OUR PACKAGE</b>
            </h1>

            <div class="row justify-content-center m-0 mb-4">
                <?php for($i=1; $i<=3; $i++){ ?>
                    <div class="col-md-3 col-sm-12 rounded-5 m-4 thumbnail">
                        <div class="text-center mb-4">
                            <p class="fw-bold text-success fs-4">Logo design</p>
                            <i class="fa-solid fa-euro-sign fa-2x">&nbsp; 149</i>
                            <p class="text-secondary">plus VAT</p>
                        </div>
                        
                        <?php 
                            $packages = [
                                "6 logo designs",
                                "Individal design",
                                "Unlimited fixes",
                                "Design by 2 experienced designs",
                                "Logo for web & print",
                                "Vactor & raster formats",
                                "AI, EPS, PDF, PNG, JPG, PSD",
                                "Unrestricted Use Rights",
                                "Free backup service",
                                "Satisfaction Guarantee"
                            ]; 
                        ?>
                        
                        <ul>
                            <?php 
                                foreach($packages as $package){ ?>
                                    <li class="py-1">
                                        <i class="fa-regular fa-circle-check text-success"></i>
                                        <?=$package?>
                                    </li>
                            <?php } ?>
                        </ul>
                        <p class="text-center">
                            <a class="btn btn-success rounded-5 fs-5 fw-bold text-light orderNow" href="#">ORDER NOW</a>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section class="process">
            <div class="text-center title">
                <h4 class="my-3">
                    <span>THE DESIGN PROCESS</span>
                </h4>       
                <h3>
                    THE LOGO DEVELOPMENT
                </h3>     
            </div>
            
            <div class="row justify-content-center m-0">
                <?php 
                    $process = [
                        '<i class="fa-solid fa-5x fa-pen-nib"></i>',
                        '<i class="fa-solid fa-5x fa-plane-departure"></i>',
                        '<i class="fa-solid fa-5x fa-desktop"></i>',
                        '<i class="fa-solid fa-5x fa-object-ungroup"></i>',
                        '<i class="fa-solid fa-5x fa-pen-to-square"></i>'
                    ];?>

                    <?php
                        foreach($process as $key => $pro) { ?>
                            <div class="col mx-2">
                                <div class="text-center">
                                    <p><?=$pro?></p>
                                    <h5 class=""><?=$key?>. Title name</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non expedita dolore ipsum similique qui, facilis quae tempora itaque dolores consectetur sequi nam. Expedita, eligendi. Quidem necessitatibus corporis fugiat suscipit nobis!</p>
                                </div>
                            </div>                            
                    <?php } ?>                
            </div>        
        </section>

        <style>
            .satisfaction{
                position: relative;    
            }

            .satisfaction .text{
                position: absolute;
                z-index: 999;
                margin: 0 auto;

                text-align: left;
                top: 50%;
                left: 70%;
                right: 0;        
                transform: translate(-50%, -50%);           
              
                /* background: rgba(0, 0, 0, 0.8); */
                font-family: Arial,sans-serif;
                color: #000;
                width: 45%;
            }
        </style>

        <div class="satisfaction">
            <img src="images/home.jpeg" alt="" style="width:100%; height:600px;">
            <div class="text">
                <h4 class="fw-bold text-center">YOUR SATISFACTION <br> GUARANTEE</h4>
                <p>
                    We're happy when you are too. So that you don't have to take any risks with your
                    purchase, we offer you our satisfaction guarantee.
                    We will revise the design you have chosen until you are completely satisfied. All
                    correction loops up to the completion of the logo are included in the price. We do
                    not charge extra for correction loops.
                    So you can be sure that the logo will be finished exactly how you want it. If you
                    don't like any of the first drafts we developed and you haven't decided on a draft
                    for further processing, you will even get your money back within the first 30 days.
                </p>
            </div>
        </div>

        <section class="portfolio">
            <div class="text-center title">
                <h4 class="my-3">
                    <span>PORTFOLIO</span>
                </h4>       
                <h3>
                    OUR REFERENCES
                </h3>     
            </div>

            <section class="portfolio2 slider col-sm-12">
            <?php 
                for($i=1; $i<=10; $i++){ ?>
                    <div class="col-sm-12">
                        <img src="images/brand/brand (<?=$i?>).jpeg">
                        <p class="text-center fw-bold mt-2">Logo design</p>
                    </div>
            <?php } ?> 
        </section>

        <style>
            .startToday{
                position: relative;    
            }

            .startToday .text{
                position: absolute;
                z-index: 999;
                margin: 0 auto;

                text-align: left;
                top: 50%;
                left: 0%;
                right: 0;        
                transform: translate(-50%, -50%);           
              
                /* background: rgba(0, 0, 0, 0.8); */
                font-family: Arial,sans-serif;
                color: #000;
                width: 40%;
            }
        </style>


        <div class="startToday">
            <img src="images/home.jpeg" alt="" style="width:100%; height:600px;">
            <div class="text">
                <small>START TODAY</small>
                <h4 class="fw-bold">Let't create your design</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis doloremque quos sint iure, voluptas natus ratione dolore quaerat enim voluptates doloribus in obcaecati assumenda? Praesentium doloribus aut quod excepturi ipsum?
                </p>
                <a class="btn btn-success rounded-5 fs-5 fw-bold text-light orderNow" href="#">ORDER NOW</a>

            </div>
        </div>










        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {            
                $(".brand").slick({
                    dots: true,                    
                    infinite: true,
                    centerMode: true,
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });   

                $('.autoplay').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,
                });    
                
                $('.portfolio2').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                });   
            });
        </script>   
   </body>
</html>
