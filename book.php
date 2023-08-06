<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">

    <style>
        form {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
  max-width: 800px;
  margin: 0 auto;
  margin-left: 49rem;


}

label {
  font-size: 1.2rem;
  font-weight: bold;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 1.2rem;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #2ecc71;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 1.2rem;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #27ae60;
}

.col-6 {
  grid-column: span 1;
}

.col-12 {
  grid-column: span 2;
}

.col-8 {
  grid-column: span 1;
}

.col-4 {
  grid-column: span 1;
}

/* Additional styles for the "arrivals", "leaving on" and "guests" fields */

.arrivals-container,
.leaving-container,
.guests-container {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}

.arrivals-container label,
.leaving-container label,
.guests-container label {
  margin-bottom: 5px;
}

.arrivals-container select,
.leaving-container select,
.guests-container input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 1.2rem;
  margin-top: 5px;
}

.arrivals-container select,
.leaving-container select {
  background-color: #fff;
}

.guests-container input {
  background-color: transparent;
  border: none;
  font-weight: bold;
}



    </style>
</head>
<body>

<!-- header section starting -->

<section class="header">
    <a href="home.php" class="logo">Trippy.</a>

    <nav class="navbar">
        <a href="home.php"> home </a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>

    </nav>

    <button class="menu-btn">&#9776;</button>
</section>

<!-- end_header -->

<div class="heading" id = "head3">
    <h1>Booking</h1>
</div>


<section class="booking">
    <h1 class="heading-title"> Book your trip </h1>
        <!-- <form  method="POST" action="http://localhost/miniproject/book_form.php"></form>
        <div class="flex">
            <div class="inputBox">
                <span style="font-size: 2rem;">name :</span>
                <input class="input" type="text" placeholder="enter your name" name="name" id="">
            </div>
            <div class="inputBox">
                <span style="font-size: 2rem;">email :</span>
                <input class="input" type="email" placeholder="enter your email id" name="email" id="">
            </div>

            <div class="inputBox">
                <span style="font-size: 2rem;">phone :</span>
                <input class="input" type="number" placeholder="enter your telephone number" name="phone" id="">
            </div>

            <div class="inputBox">
                <span style="font-size: 2rem;">address:</span>
                <input class="input" type="text" placeholder="enter your address" name="address" id="">
            </div>
            <div class="inputBox">
                <span style="font-size: 2rem;">where to :</span>
                <input class="input" type="text" placeholder="place you want to visit" name="location" id="">
            </div>
            <div class="inputBox">
                <span style="font-size: 2rem;">how many :</span>
                <input class="input" type="number" placeholder="number of guests" name="guests" id="">
            </div>

            <div class="inputBox">
                <span style="font-size: 2rem;">arrivals :</span>
                <input class="input" type="date"  name="arrivals" id="">
            </div>

            <div class="inputBox">
                <span style="font-size: 2rem;">leaving :</span>
                <input class="input" type="date"  name="leaving" id="">
            </div>

            <input type="submit" value="submit" class="btn" name = "send">
        </div> -->

    
<form method="POST" action="http://localhost/miniproject/book_form.php">
    
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="tel" name="phone" placeholder="Phone"><br>
    <input type="text" name="address" placeholder="Address"><br>
    <input type="text" name="location" placeholder="Location"><br>
    <input type="number" name="guests" placeholder="Number of guests"><br>
    <input type="date" name="arrivals" placeholder="Arrival date"><br>
    <input type="date" name="leaving" placeholder="Leaving date"><br>
    <input type="submit" value="Submit">
</form>
    
</section>







<!-- footer_section -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class ="fas fa-angle-right"></i> home </a>
            <a href="about.php"> <i class ="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class ="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class ="fas fa-angle-right"></i> book</a>

        </div>


        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class ="fas fa-angle-right"></i> ask question </a>
            <a href="#"> <i class ="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class ="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class ="fas fa-angle-right"></i> terms of use</a>

        </div>

        <div class="box" >
            <h3>contact innfo</h3>
            <a href="#"> <i class ="fas fa-phone"></i> +023-65-8484 </a>
            <a href="#"> <i class ="fas fa-phone"></i> +023-65-8484 </a>
            <a href="#"> <i class ="fas fa-envelope"></i> g.rishank22@gmail.com </a>
            <a href="#"> <i class ="fas fa-map"></i> jaipur, rajasthan -302094</a>



        </div>

        <div class="box" id="box3">
            <h3>follow us</h3>
            <a href="#"></a><i class="bi bi-linkedin" >linkedn</i></a>
            <a href="#"></a><i class="bi bi-instagram">instagram</i></a>
            <a href="#"></a><i class="bi bi-facebook">facebook</i></a>
            <a href="#"></a><i class="bi bi-twitter">twitter</i></a>








        </div>

    </div>

    <div class="credit"> created by <span>mr. rishank goyal</span> | all rights reserved</div>
</section>




<!-- end_footer -->







<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="script.js"></script>
    
</body>
</html>