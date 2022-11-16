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
                <h2 class="text-center">OUR REFERENCES</h2>
            </div>

            <?php 
                for($j=1; $j<=4; $j++){ ?>            
                    <div class="row row-cols-5 justify-content-center m-0 my-4">
                        <?php 
                            for($i=1; $i<=5; $i++){ ?>
                                <div class="col-auto col-xs-12">
                                    <img src="images/brand/brand (<?=$i?>).jpeg" style="height:130px; width:130px;">
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
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>

        <div class="px-3 mt-4">   
            <section class="package">
                <div class="text-center">
                    <b class="text-success">fixed prices without additional costs</b>
                    <h1>OUR OFFERS</h1>
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

        <section class="requestDesign mt-4">
            <div class="m-4">
                <small class="text-success">THAT'S WHAT YOU GET</sma>
                <p class="fs-3">Included Services</p>
            </div>


            <div class="row justify-content-center m-0">
                <?php 
                    for($i=1; $i<=4; $i++){ ?>
                        <div class="col-md-6 col-sm-12 col-xs-12 px-4">
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
