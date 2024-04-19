<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="refresh" content="5"> -->
        <title>Logo design</title>
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

        <section class="develop-logo">                
            <div class="m-5 fw-bold">
                <h3 class="text-center my-4">We develop your professional logo</h3>
                <p>
                    Are you starting a company and need a logo? Have you been using the same logo for years? Do you also need the design of your business card, letterhead or a flyer?
                </p>
                <p>
                    We are logo experts and develop logos and business stationery for all conceivable forms of use. More than 15,000 satisfied customers already trust our agency 
                </p>
            </div>
        </section>

        <section class="references">
            <div class="mt-4">
                <h2 class="text-center mb-5">OUR REFERENCES</h2>
            </div>

            <?php 
                for($j=1; $j<=4; $j++){ ?>            
                    <div class="row row-cols-6 justify-content-center m-0 my-3">
                        <?php 
                            for($i=1; $i<=6; $i++){ ?>
                                <div class="col-auto my-2">
                                    <img class="rounded-2" src="images/brand/brand (<?=$i?>).jpeg" style="height:130px; width:130px;">
                                </div>
                        <?php } ?>
                    </div>
            <?php } ?>          

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link px-3" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="offer my-5">
            <div class="text-center">
                <b class="text-success">fixed prices without additional costs</b>
                <h2>OUR OFFERS</h2>
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

        <section class="service m-5">
            <div class="m-4">
                <small>THAT'S WHAT YOU GET</small>
                <p class="fs-4 fw-bold">Included Services</p>
            </div>
            <?php 
                $services = [
                    "First drafts in approx. 3 working days",
                    "Can be used universally (website, print, etc.)",
                    "Express options",
                    "Delivery of printable data",
                    "Unlimited fixes",
                    "High resolution vector formats: ai, eps, pdf",
                    "Unrestricted Use Rights",
                    "Raster formats in 300dpi resolution: jpg, png, psd",
                    "Design development by experienced graphic designers",
                    "100% satisfaction guarantee"
                ]; 
            ?>
            <div class="row justify-content-center m-0">
                <?php 
                foreach($services as $service){ ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="px-3">
                            <div class="form-check my-2">
                                <input class="form-check-input fs-5" type="checkbox" checked>
                                <label class="fs-6 fw-bold my-0"> <?=$service?></label>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
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
   </body>
</html>