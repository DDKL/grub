<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>GrubRank - Home</title>
  <link rel="stylesheet" href="css/styles.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/mdb.min.css">
  <script>
    $(document).ready(function() {
      // $('.header').height($(window).height());

      $(".navbar a").click(function() {
        $("body,html").animate({
          scrollTop: $("#" + $(this).data('value')).offset().top
        }, 1000)

      })

    })
  </script>
  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>
  <script src="js/mdb.min.js"></script>

</head>

<body class="index-body">

  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="index.php">GrubRank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="testosterone.php">Testosterone</a></li>
        <li class="nav-item"><a class="nav-link" href="estrogen.php">Estrogen</a></li>
		<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        <!--li class="nav-item"><a class="nav-link" href="no.html">Nitric Oxide</a></li>
      <li class="nav-item"><a class="nav-link" href="sleep.html">Sleep</a></li>
      <li class="nav-item"><a class="nav-link" href="stamina.html">Stamina</a></li>
      <li class="nav-item"><a class="nav-link" href="brain.html">Brain</a></li>
      <li class="nav-item"><a class="nav-link" href="skin.html">Younger Skin</a></li-->
      </ul>
    </div>
  </nav>

  <header class="header">
    <div class="overlay">
    </div>
    <div class="container">
      <div class="description ">
        <h1> World's #1 Resource for Nutrition
          <p> Finally, an online database that compiles information across the internet into one, simple and easily-accessible resource.
          </p>
          <a href="#about" class="btn btn-elegant btn-lg js-scroll-trigger">Get Started</a> </h1>
      </div>
    </div>



  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto mb-4">
          <h2 class="text-white mb-4">A bunch of information compiled into one simple resource.</h2>
          <p class="text-white-50">Foods are here to help you get to the top of your being. When you want to succeed, you need the right diet to help you get there. The internet is full of information, some with very conflicting reports, which is why this website was created to help you make the best decision for yourself by compiling all the reports and information available in the web into one single master database for your benefit.</p>
          <p class="text-white-50">Bacon ipsum dolor amet beef rump pork belly ball tip biltong ground round chislic fatback salami cupim picanha shank kielbasa. Drumstick beef corned beef frankfurter. Cupim doner brisket, pork belly bresaola venison shankle pastrami boudin picanha pork chislic. T-bone swine shoulder, rump strip steak ball tip alcatra short ribs hamburger sausage meatloaf pig chicken shankle turkey. Chicken salami sausage jerky pastrami rump kielbasa tri-tip.</p>
		</div>
		
			<div class="card-deck mb-4 col-lg-8 mx-auto">
			  <div class="card blue-gradient">
				<div class="card-body text-center">
				  <h4 class="card-title text-white"><a>Testosterone</a></h4>
				  <p class="card-text text-white-50">Spicy jalapeno nisi tenderloin pariatur shankle ipsum laboris. Turducken salami picanha flank consectetur in, bresaola porchetta excepteur. Elit biltong ea drumstick pork chop ex pastrami spare ribs tenderloin ullamco ipsum buffalo flank.</p>
				  <a href="testosterone.php" class="btn primary-color-dark text-white">Click</a>
				</div>
			  </div>
			  <div class="card purple-gradient">
				<div class="card-body text-center">
				  <h4 class="card-title text-white"><a>Estrogen</a></h4>
				  <p class="card-text text-white-50">Spicy jalapeno nisi tenderloin pariatur shankle ipsum laboris. Turducken salami picanha flank consectetur in, bresaola porchetta excepteur. Elit biltong ea drumstick pork chop ex pastrami spare ribs tenderloin ullamco ipsum buffalo flank.</p>
				  <a href="estrogen.php" class="btn secondary-color-dark text-white">Click</a>
				</div>
			  </div>
			</div>
			
      </div>
          <p class="text-white-50 mx-auto">© 2020 GrubRank All rights reserved.</p>
    </div>
  </section>



</body>

</html>

<!--
<!DOCTYPE html>

<html>
<head>
<title>Testosterone Foodie</title>
<meta name="description" content="Testosterone Food Database">
<meta name="keywords" content="health, women's health, men's heath, testosterone, food, health, masculinity, manliness, testosterone food, foods that boost testosterone, foods that kill testosterone"/>

<link rel="stylesheet" type="text/css" href="">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>

<body>
<center>
<h1>Search</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<h2>About</h2>
Curious whether or not a particular food will help boost your testosterone levels? Tired of having to waste time to search through hundreds of Google results and find conflicting reports at the end of the day, leaving you more confused than anything? Don't fret - we got you covered. Like a typical male millenial looking to get healthy, jacked, and attractive to the opposite sex, I was looking for food that would boost my testosterone levels in order to supplement my workouts and have the highest levels in energy my body could handle. But I was tired of having to scour through Google results and wasting time reading through the lists from different sources, and I didn't know which source was THE source to trust in. So I decided to compile data from many different sources into one single source. And this website is the result.

Affiliates, click here.

This site provides you a database of testosterone boosting/killing foods, as well as information on testosterone boosters.
</center>
</body>
</html>

-->
