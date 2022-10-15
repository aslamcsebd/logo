<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <meta http-equiv="refresh" content="5"> -->
      <title>Home page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="assets/style.css">
      <link rel="stylesheet" type="text/css" href="assets/responsive.css">
   </head>
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






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
