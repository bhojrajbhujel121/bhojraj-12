<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Additional CSS styles for customization */
    .custom-about-container {
      margin-top: 50px;
      min-height: 84vh;
      padding: 20px;
    }
    .custom-about-heading {
      margin-top: 20px;
    }
    .custom-about-content {
      margin-top: 20px;
    }
    .custom-about-image {
      height: 550px;
      margin-bottom: 70px; 
      margin-left: 100px;
    }
    .custom-image-container {
    width: 70%; /* Adjust the width of the column as needed */
}


  </style>
</head>
<body>

<?php 
$active ='about';
include('head.php');
?>

<div id="page-container">
  <div class="container custom-about-container">
    <div id="content-wrap">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-4 mb-3 custom-about-heading">About Us</h1>
          <p class="custom-about-content"> 
          Founded with a vision to bridge the gap between blood donors and recipients, our platform serves as a beacon of hope for those in need of life-saving blood transfusions. We firmly believe that every drop of blood donated has the power to make a difference, and through our collective efforts, we strive to create a world where no one suffers due to the unavailability of blood.

Backed by a team of dedicated volunteers, medical professionals, and supporters, Our service is committed to raising awareness about the importance of regular blood donation and fostering a culture of altruism and compassion. Whether you're a first-time donor or a seasoned advocate, we welcome you to join us in our mission to save lives, one donation at a time.

Together, let's make a meaningful impact and ensure that no one ever has to face the daunting prospect of not having access to life-saving blood when they need it the most.

Join us today and be a hero in someone's life!
          </p>
        </div>
        <div class="col-lg-6" >
          <img class="img-fluid rounded custom-about-image" src="image\human-blood-donate-white-background_1308-110835.jpg" alt="error">
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>
</div>

</body>
</html>
