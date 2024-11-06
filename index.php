
<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
include "layout/header.php";
?>

<div style="background-color: #08618d;">
    <div class="container text-white py-05">
      <div class="row align-items-center g-5">
        <div class="col-md-6">
            <h1 class="mb-5 display-2"><strong>Best Online Bookshelf</strong></h1>
              <p>
                    Find a large selection of newest E-books from most popular brands and with afforble prices.
              </p>
                </div>
               <div class="col-md-6 text-center">
              <img src="./images/e-books.jpg" class="img-fluid" alt="hero" />
          </div>
        </div>
    </div> 
</div>


<?php
include "layout/footer.php";
?>

