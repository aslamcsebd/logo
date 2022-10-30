<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="5"> -->
        <title>Home page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
      
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <link rel="stylesheet" type="text/css" href="assets/responsive.css">
    </head>

    <body>
        <!-- navbar -->
        <?php include 'include/navbar.php';?>

        <div class="box">
            <img src="images/home.jpeg" alt="" width="100%" height="500">       
            <div class="text">
                <h1 class="fw-bold">Logo design by experts</h1>
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
        </div>

        <section class="brand slider">
            <?php 
                for($i=1; $i<=10; $i++){ ?>
                    <div>
                        <img src="images/brand/brand (<?=$i?>).jpeg">
                    </div>
            <?php } ?>
        </section>
                   
        <div class="px-3">
            <div class="hr-lines develop">
                <span class="float-start">WE DEVELOP YOUR</span> 
                <div class="tl-1"></div>
                <div class="tl-2"></div>
            </div>
            <div class="hr-lines develop">                
                <div class="tl-2"></div>
                <div class="tl-1"></div>
                <span class="float-end">PROFESSIONAL LOGO</span>
            </div>
            <br>        
            <section class="autoplay slider">
                <?php 
                    for($i=1; $i<=10; $i++){ ?>
                        <div class="col-sm-12">
                            <img src="images/brand/brand (<?=$i?>).jpeg">
                        </div>
                <?php } ?> 
            </section>
            
            <section class="professional">
                <ul class="p-0">
                    <li>Are you starting a company and need a logo?</li>
                    <li>Have you been using the same logo for years?</li>
                    <li>Do you also need the design of your business card, letterhead or a flyer?</li>
                    <li>We are logo experts and develop logos and business stationery</li>
                    <li>for all conceivable forms of use.</li>
                    <li><b>More than 15,000 satisfied customers already trust our agency.</b></li>
                </ul>
            </section>
   
            <section class="package">
                <div class="hr-lines">
                    <div>
                        <b lass="mb-0">OUR PACKAGE</b>
                    </div>
                    <div class="tl-2"></div>
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                </div>               

                <div class="row justify-content-center m-0 mb-4">
                    <?php for($i=1; $i<=3; $i++){ ?>
                        <div class="col-md-3 col-sm-12 mx-4">
                            <div class="rounded-5 my-4 thumbnail">
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
                            </div>
                            <p class="text-center">
                                <a class="btn btn-success rounded-5 fs-5 fw-bold text-light orderNow" href="#">ORDER NOW</a>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
        
        <section class="process">
            <div class="text-center title">
                <div class="hr-lines">
                    <div>THE DESIGN PROCESS</div>
                    <div class="tl-2"></div>
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                </div>
                <h3 class="mt15">
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
                            <div class="col-sm-2 mx-2 col-xs-12">
                                <div class="text-center">
                                    <p><?=$pro?></p>
                                    <h5 class="">
                                        <?=$key+1?>. Title name
                                    </h5>
                                    <p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non expedita dolore ipsum similique qui, facilis quae tempora itaque dolores consectetur sequi nam. Expedita, eligendi. Quidem necessitatibus corporis fugiat suscipit nobis!</p>
                                </div>
                            </div>                            
                    <?php } ?>                
            </div>        
        </section>

        <section class="satisfaction">
            <div class="row justify-content-center m-0">
                <div class="col-md-6 col-sm-12">
                    <img src="images/satisfaction.png" alt="">                   
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="m-4">
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
            </div>
        </section>

        <div class="px-3">
            <section class="portfolio">          
                <div class="text-center">
                    <div class="hr-lines">
                        <div>PORTFOLIO</div>
                        <div class="tl-2"></div>
                        <div class="tl-1"></div>
                        <div class="tl-2"></div>
                    </div>
                    <h3 class="mt15">
                        OUR REFERENCES
                    </h3>     
                </div>

                <section class="portfolio2 slider mt-4">
                    <?php 
                        for($i=1; $i<=10; $i++){ ?>
                            <div class="col-md-4 col-sm-12">
                                <img src="images/brand/brand (<?=$i?>).jpeg">
                                <p class="text-center fs-4 fw-bold mt-2">Logo design</p>
                            </div>
                    <?php } ?> 
                </section>
            </section>
        </div>
       
        <section class="startToday">
            <div class="row justify-content-center m-0">
                <div class="col-md-6 col-sm-12 text-white">
                    <div class="m-4">
                        <small>START TODAY</small>
                        <h4 class="fs-2 fw-bold">Let's create your design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis doloremque quos sint iure, voluptas natus ratione dolore quaerat enim voluptates doloribus in obcaecati assumenda? Praesentium doloribus aut quod excepturi ipsum?
                        </p>
                        <a class="btn btn-success rounded-5 fs-5 fw-bold bg-light text-success orderNow" href="#">ORDER NOW</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="images/startToday.png" alt="">
                </div>
            </div>
        </section>
       
        <section class="requestDesign mt-4">
            <div class="row justify-content-center m-0">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <form action="#" class="mx-4">
                       <h3 >
                           <b>Request a design</b>
                       </h3>
                        <div class="row">                  
                            <div class="form-group col-md-6 col-sm-12">
                                <label>First name*</label>
                                <input class="form-control" name="" value="" type="text" placeholder="" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label>Surname*</label>
                                <input class="form-control" name="" value="" type="text" placeholder="" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 my-2">
                                <label>E-mail*</label>
                                <input class="form-control" name="" value="" type="email" placeholder="" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 my-2">
                                <label>Phone*</label>
                                <input class="form-control" name="" value="" type="text" placeholder="" readonly>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label>News*</label>
                                <textarea class="form-control" rows="2" name="" value="" type="text" placeholder="" readonly></textarea>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label>Here you can attach files</label>
                                <input class="form-control" style="border: 1px dashed green; padding: 18px 20px;" name="" value="" type="file" placeholder="" readonly>
                            </div>
                           <div class="form-group col-md-6 col-sm-12 my-4 text-center">
                              <a class="btn btn-success rounded-5 fs-6 fw-bold text-light orderNow" href="#">ORDER NOW</a>
                           </div>
                        </div>
                    </form>
                </div>
               <div class="col-md-6 col-sm-12 col-xs-12 px-4">
                  <h3>
                        <b>We develop the design you need</b>
                  </h3>
                  <div class="mx-3">
                        <div class="form-check">
                           <input class="form-check-input bg-success fs-4" type="checkbox" checked disabled>
                           <label class="text-success fs-5">Professional design</label>
                        </div>
                        <div class="form-check my-2">
                           <input class="form-check-input bg-success fs-4" type="checkbox" checked disabled>
                           <label class="text-success fs-5">Experienced graphic design</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input bg-success fs-4" type="checkbox" checked disabled>
                           <label class="text-success fs-5">Cheap prices</label>
                        </div>
                  </div>
               </div>
            </div>
        </section>
      
        <section class="business">
            <div class="row justify-content-center m-0">
                <div class="col-md-6 col-sm-12">
                    <img src="images/startToday.png" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="text-center title">
                        <h4 class="my-3">
                            BUSINESS CARDS, LETTERHEAD, FLYERS, <br>
                            LEAFLETS AND BROCHURES FROM PROFESSIONALS
                        </h4>     
                    </div>
                    <div class="m-4">
                        <p>
                            Would you like a business card, letterhead, flyer, leaflet or brochure to be
                            developed? Despite the advent of digital media, print design is still an integral
                            part of daily advertising and should always be part of a successful marketing
                            mix. A quality business card, a professional flyer or a compelling brochure will
                            have a very lasting impact on your potential customers that is difficult to achieve
                            online. <br><br>
                            We create corresponding designs for many purposes. More than 15,000
                            satisfied customers already trust our agency. We will create an individual,
                            perfectly tailored design for you at a reasonable price.
                        </p>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="faq">
            <div class="text-center">
                <div class="hr-lines">
                    <div class="fs-1 fw-bold">FAQ</div>
                    <div class="tl-2"></div>
                    <div class="tl-1"></div>
                    <div class="tl-2"></div>
                </div>
            </div>

            <section class="faq2 row m-2">
                <?php 
                    for($i=1; $i<=10; $i++){ ?>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h5>
                                <i class="fa-solid fa-circle-dot text-primary"></i>&nbsp;
                                What is the exact flow of the design process?
                            </h5>
                            <p>
                                Yes, you are welcome to do so. You can send us the missing information as soon
                                as you have it. We then add these to the respective draft. This gives you the
                                opportunity to order an inexpensive package (e.g. logo, business card and
                                stationery) even if you do not yet have the data for the business card and
                                stationery.
                            </p>   
                        </div>
                <?php } ?>
            </section>
        </section>
      
        <section class="contactUs">
            <div class="text-center pb-2">
                <h1>
                    <span class="fw-bold">Contact Us</span>
                </h1>    
                <small class="text-secondary">Sample text. Click to select the text box. Click again or double <br> click to start editing the text.</small>
           
            </div>
            <div class="row justify-content-center m-0 py-4 text-white">
                <div class="col-md-2 col-xs-12 text-center ">
                    <i class="fa-solid fa-location-dot fa-2x"></i>
                    <h6 class="mt-2 mb-3 fs-5">ADDRESS</h6>
                    <p>27 13 Lowe Haven</p>
                </div>
                <div class="col-md-2 col-xs-12 text-center">
                    <i class="fa-solid fa-mobile-screen fa-2x"></i>
                    <h6 class="mt-2 mb-3 fs-5">PHONE</h6>
                    <p>111 343 43 43</p>
                </div>
                <div class="col-md-2 col-xs-12 text-center">
                    <i class="fa-regular fa-envelope fa-2x"></i>
                    <h6 class="mt-2 mb-3 fs-5">EMAIL</h6>
                    <p>business@info.com</p>
                </div>
            </div>            
        </section>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {   

                $('.brand').slick({
                    dots: true,
                    infinite: true,
                    // speed: 300,
                    centerMode: true,
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });

                $('.autoplay').slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });


                $('.portfolio2').slick({
                    dots: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });

            });
        </script>   
   </body>
</html>
