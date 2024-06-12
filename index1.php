<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <title>MK Hotals-Home</title>
  <?php
    require('include/links.php');
  ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
      /* in form to remove number areas last point */
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
       input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
       }

       /* Firefox */
       input[type=number] {
       -moz-appearance: textfield;
        }

      .custom-bg{
        background-color:#2ec1ac;
        border:1px solid #2ec1ac;
      }  
      .custom-bg:hover{
        background-color:#2ec1ac;
        border-color:#2ec1ac;
      } 
      .h-line{
        width: 150px;
        margin:0 auto;
        height:1.7px;
      }
      .availability-form{
        margin-top:-50px;
        z-index: 2;
        position: relative;
      } 
      @media screen and (max-width:575px){
        .availability-form{
        margin-top:0px;
        padding:0 25px;
      }  
      }
      
    </style>
  </head>
  <body class="bg-light">
<?php
require('include/header.php');
?>


<!-- careousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
<div class="container-fluid px-lg-4 mt-4">
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ing37.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ing39.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ing39.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>  
</div>   
</div>


<!-- check availability form -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500">Check-In</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500">Check-Out</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500">Adult</label>
          <select class="form-select shadow-none" >
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight:500">Children</label>
          <select class="form-select shadow-none" >
               <option value="1">One</option>
               <option value="2">Two</option>
               <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="Submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- our rooms -->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h3>

<div class="container">
  <div class="row">
    
  <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
      <img src="images/ing30.avif" class="card-img-top" >
    
      <div class="card-body">
        <h5>Simple Room </h5>
        <h6 class="mb-4">₹500 per night</h6>
        <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          1 Rooms
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          1 Bathroom
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          1 Balcony
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Bed
        </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Wifi
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Television
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          AC
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Room Heater
        </span>
      </div>
      <div class="rating mb-4">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
</div>
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
      <img src="images/ing30.avif" class="card-img-top" >
    
      <div class="card-body">
        <h5>Normal Room </h5>
        <h6 class="mb-4">₹1500 per night</h6>
        <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Rooms
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Bathroom
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          1 Balcony
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Bed
        </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Wifi
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Television
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          AC
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Room Heater
        </span>
      </div>
      <div class="rating mb-4">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
    <img src="images/ing30.avif" class="card-img-top" >
    
      <div class="card-body">
        <h5>Luxury Room </h5>
        <h6 class="mb-4">₹2500 per night</h6>
        <div class="features mb-4">
        <h6 class="mb-1">Features</h6>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          3 Rooms
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Bathroom
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          2 Balcony
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          3 Bed
        </span>
    </div>
    <div class="facilities mb-4">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Wifi
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Television
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          AC
        </span>
        <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
          Room Heater
        </span>
      </div>
      <div class="rating mb-4">
      <h6 class="mb-1">Rating</h6>
      <span class="badge rounded-pill bg-light">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">
      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
    </div>
  </div>
</div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
    </div>
  </div>
</div>



<!-- facilities -->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h3>

<div class="container mt-5">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/download.png" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/download.png" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/download.png" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/download.png" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-mg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/download.png" width="80px" alt="">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
    </div>
  </div>
</div>


<!-- testiononials -->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTINONIALS</h3>

<div class="container">
  <!-- Swiper -->
  <div class="swiper swiper-testinonials">
    <div class="swiper-wrapper">
      
        <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px"/>
        <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
           Fugit accusantium veritatis recusandae repudiandae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px"/>
        <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
           Fugit accusantium veritatis recusandae repudiandae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px"/>
        <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
           Fugit accusantium veritatis recusandae repudiandae.
        </p>
        <div class="rating">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
      </div>
      </div>
    
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
    </div>
</div>


<!-- reach us -->
<h3 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h3>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-4 p-4 mb-lg-0 mb-3 bg-white rounded">
    <iframe class="w-100" height="320px" rounded src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115330.43462063557!2d81.80158454999999!3d25.40226375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1708696107401!5m2!1sen!2sin"  loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
     <div class="bg-white p-4 rounded mb-4">
      <h5>Call Us</h5>
      <a href="tel:+917896541230" class="d-inline-block mb-2 text-decoration-none text-dark">
      <i class="bi bi-telephone-fill"></i>+917896541230
      </a>
      <br>
      <a href="tel:+917896541230" class="d-inline-block  text-decoration-none text-dark">
      <i class="bi bi-telephone-fill"></i>+917896541230
      </a>
     </div>

     <div class="bg-white p-4 rounded mb-4">
      <h5>Follow Us</h5>
      <a href="#" class="d-inline-block mb-3 ">
      <span class="badge bg-light text-dark fs-6 p-2">
      <i class="bi bi-twitter me-1"></i> Twitter
      </span>
      </a>
      <br>
      <a href="#" class="d-inline-block mb-3 ">
      <span class="badge bg-light text-dark fs-6 p-2">
      <i class="bi bi-instagram"></i>Instragram
      </span>
      </a>
      <br>
      <a href="#" class="d-inline-block mb-3 ">
      <span class="badge bg-light text-dark fs-6 p-2">
      <i class="bi bi-facebook"></i> Facebook
      </span>
      </a>
      <br>
      
     </div>
    </div>
  </div>
</div>

<!-- footer -->
<?php
require('include/footer.php');
?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".swiper-testinonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1020:{
          slidesPerView:3,
        },
      }
    });
  </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->   
  </body>
</html>