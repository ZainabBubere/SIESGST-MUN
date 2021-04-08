<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  width: 60%;
}

.numbertext img{
  width: 60%;

}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.container h1{
  font-size: 3vw;
}
</style>

<?php
  $title = "Past Conferences";
  include 'include/header.php';
?>

<div class="container box">

  <h1><span class="bold"> Some memories from</span><span class="lighter"> SIESGSTMUN 2020 </span></h1>
  <center>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247212/mun21/DSC_0183.jpg" style="width:80%;">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247189/mun21/IMG_6693.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247663/mun21/IMG_6746.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247717/mun21/IMG_7308.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247681/mun21/AIPPM.jpg" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247266/mun21/AIPPM2.jpg" style="width:80%">
  </div>
    </center>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>


  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247212/mun21/DSC_0183.jpg" style="width:100%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247189/mun21/IMG_6693.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247663/mun21/IMG_6746.jpg" style="width:100%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247717/mun21/IMG_7308.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247681/mun21/AIPPM.jpg" style="width:100%" onclick="currentSlide(5)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://res.cloudinary.com/mun-siesgst/image/upload/v1612247266/mun21/AIPPM2.jpg" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
</div>

<div class="row">
    <div class="col-sm-0 col-md-1"></div>
    <div class="col-sm-12 col-md-10">
      <h3>
        <span class="light">History of </span> <span class="bold">SIESGST MUN</span>
      </h3>
      <p>
        Model United Nations was introduced to the SIESGST student community in the year 2015. Starting out as a part of the larger cultural festival - Tatva Moksh Lakshya (TML) held every spring in the college, the SIESGST MUN has grown exponentially over the past three years, into a standalone event conducted in the days leading up to the festival.
        <br><br>
        The 2017 conference witnessed over 35 delegations from across the city and beyond attend for a session of the DISEC Committee to discuss actions to be taken against the unregulated sale and use of Unmanned Aerial Vehicles (UAVs). The session was co-chaired by Mr. Nikhil Tadikonda and Mr. Vinay Hegde. Delegates from various countries presented intriguing perspectives on the use of UAVs (‘drones’) and their role in the unsanctioned murders of civilian targets.
        <br><br>
        The 2018 conference saw over 40 delegates from across Mumbai and Navi Mumbai convene for a session of the DISEC, co-chaired by Mr. Puneet Pathak and Mr. Apurva Sinha. The delegates discussed steps to stop the development of nuclear, chemical and biological weapons. The discussion began with delegates voicing their opinions on steps the UN could take to curb the proliferation of such weapons, to reduce and safeguard the stockpile of existing weapons, and to prevent the spreading of WMD technologies.
        <br><br>
        In 2019, SIESGST MUN was ready to get bigger and better. A 2-day conference with 2 of the most important committees - the UNGA-Disarmament and International Security Committee and the United Nations Human Rights Committee which was a double delegation committee saw over 80 delegates from across Mumbai and Navi Mumbai from a myriad of different institutions ranging from the Humanities to the Engineering and Science Departments and the Commerce Colleges, all bringing their A-Game to the biggest iteration of SIESGST MUN. The DISEC chaired by Mr.Puneet Pathak passed a revolution to discuss the Restriction of Cyber Warfare and Preventing the Finance of Warfare and Weapons Trade. The UNHRC chaired by President Rangan Mujumdar and Vice-President Vignesh Narayanan discussed and reviewed the Rights to Privacy and the Legalization of Euthanasia.
        <br><br>
        In 2020, SIESGST MUN reached new heights. It was a two-day international relations conference which encompassed three committees viz. DISEC (Disarmament and International Security) and UNHRC (United Nations Human Rights Council) and AIPPM (All India Political Parties Meet). UNHRC which was a double delegation committee witnessed 28 delegations which discussed the agenda 'Preventing potential human rights infringements emerging with the technological developments in networking and communication' and was chaired by Mr. Tejas Shridhar and co-chaired by Mr. Shankar Balasubramanian . DISEC was a single delegate committee where 27 delegates put forth their views regarding the issues related to Nuclear Disarmament chaired by Mr. Ishaan Chitnis and co-chaired by Mr. Vignesh Narayanan. AIPPM observed a participation of 21 participants who voiced their opinions about implementation of uniform civil code across the country chaired by Mr. Hrishikesh Gayakwad.
        <br><br>
        SIESGST MUN endeavors to organise a valuable convention for an open colloquy on complex global issues that need immediate solutions.
      </p>
    </div>
  </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</div>

<?php include 'include/footer.php'; ?>
