
<?php $my_env_var = getenv('IG_TOKEN'); ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ALISAFITDAY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@100;300;900&display=swap" rel="stylesheet">
  <meta name="keywords" content="alisafitday,alisa,lagzdina,fitness,nutrition,programming,introduction,dchstudija,health,food,active,lifestyle">
  <meta name="description" content="Introduction. Meet Alisa Lagzdiņa, ALISAFITDAY, get to know the services and products.">
  <meta name="author" content="Alisa Lagzdiņa">
  <script type="text/javascript" src="instafeed.min.js"></script>

</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img class="logo" src="images/logo.png" alt="" width="150">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="en dropdown-item" href="index.php">Home</a></li>
              <li><a class="lv dropdown-item" href="index.php">Galvenā</a></li>
              <li><a class="en dropdown-item" href="experience.html">Experience and qualifications</a></li>
              <li><a class="lv dropdown-item" href="experience.html">Pieredze un izglītība</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="planner.php">FITDAY planner</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="en nav-link" href="contact.html">Contact</a>
            <a class="lv nav-link" href="contact.html">Kontakti</a>
          </li>
        </ul>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            LV/ENG
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li><a class="langu dropdown-item" href="#">LV</a></li>
            <li><a class="langu dropdown-item" href="#">ENG</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>


  <!-- Title Image -->
  <div>
    <img class="title-image" src="images/titleImg.jpg" alt="title-image">
  </div>

  <!-- Profile info -->
  <div class="white-section">
    <div class="profile">
      <h2 class="en">Hello!</h2>
    <h2 class="lv">Sveiki!</h2>
      <p class="en">My name is Alisa. I am passionate about physical and biomechanical capabilities of human bodies and minds and also superpowers of modern technologies. I also enjoy creating iOS apps! Here is the place I share my passions to help you!</p>
<p class="lv">Mani sauc Alisa. Mani aizrauj cilvēka organisma fiziskās un biomehāniskās spējas kā arī moderno tehnoloģiju superspējas. Man arī ļoti patīk programmēt iOS aplikācijas! Šeit es dalīšos savos atklājumos ar Tevi un varbūt varēšu būt noderīga Tavu mērķu sasniegšanā!
</p>
    </div>
  </div>

  <!-- Picture slideshow -->
  <div id="carouselExampleControls" class="black-section carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="slideshow-image" src="images/fitness.jpg" class="d-block w-50" alt="...">

      </div>
      <div class="carousel-item">
        <img class="slideshow-image" src="images/nutrition.png" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img class="slideshow-image" src="images/goals.jpg" class="d-block w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img class="slideshow-image" src="images/programmer.jpg" class="d-block w-50" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Services -->
  <div class="white-section" >

    <h2 class="en">How can I help?</h2>
<h2 class="lv">Kā varu palīdzēt?</h2>
    <div class="row ">
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Fitness</h3>
          </div>
          <div class="card-body">
            <p class="en">Need personal trainer?</p>
            <p class="lv">Vai meklē treneri?</p>
            <p class="en">Need fitness programm?</p>
            <p class="lv">Vai tev ir nepieciešama vingrošanas programma?</p>
            <p class="en">Need online training?</p>
            <p class="lv">Vai vēlies vingrot attālināti?</p>

            <form action="contact.html">
            <button type="submit" class="en w-100 btn btn-lg btn-block btn-dark">Let me know!</button>
            <button type="submit" class="lv w-100 btn btn-lg btn-block btn-dark">Sazinies ar mani!</button>
            </form>

          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="en">Nutrition</h3>
            <h3 class="lv">Uzturs</h3>
          </div>
          <div class="card-body">
            <p class="en">Need advice on nutrition?</p>
            <p class="lv">Vai nepieciešams padoms uzturzinātnē?</p>
            <p class="en">Need help planning meals?</p>
            <p class="lv">Vai meklē palīdzību ēdienreižu plānošanā?</p>
            <p class="en">Have nutrition related questions?</p>
            <p class="lv">Vai Tev ir ar uzturu saistīti jautājumi?</p>

            <form action="contact.html">
            <button type="submit" class="en w-100 btn btn-lg btn-block btn-dark">Email me!</button>
            <button type="submit" class="lv w-100 btn btn-lg btn-block btn-dark">Dod ziņu!</button>
            </form>

          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3 class="en">Projects</h3>
            <h3 class="lv">Projekti</h3>
          </div>
          <div class="card-body">
            <p class="en">Health and fitness</p>
            <p class="lv">Veselība un sports</p>
            <p class="en">iOS app development</p>
            <p class="lv">iOS aplikāciju izstrāde</p>
            <p class="en">Web development</p>
            <p class="lv">Mājaslapu izstrāde</p>

            <form action="contact.html">
            <button type="submit" class="en w-100 btn btn-lg btn-block btn-dark">Contact me!</button>
            <button type="submit" class="lv w-100 btn btn-lg btn-block btn-dark">Raksti man!</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- My Apps -->

  <div class="black-section row">
    <div class="col-lg-6">
      <img class="phone-image" src="images/iphone6.png" alt="iphone-mockup">
    </div>
    <div class="col-lg-6">
      <h1 class="en big-heading">Get my health and fitness apps!</h1>
      <h1 class="lv big-heading">Piesakies un uzzini pirmais par manām veselīgā dzīvesveida aplikācijām!</h1>
      <p class="en">Workout planner timer app and ALISAFITDAY fitness and nutrition diaries are coming to app store soon!</p>
      <p class="lv">Treniņu un uztura dienasgrāmatas, kā arī treniņu taimera aplikācijas jau drīzumā!</p>
      <form>
        <div class="mb-3">
          <h2 class="en email-heading">Sign up to get notified first!</h2>
          <h2 class="lv email-heading">Piesakies, lai uzzinātu pirmais!</h2>
          <label for="exampleInputEmail1" class="en form-label">Email address</label>
          <label for="exampleInputEmail1" class="lv form-label">E-pasts</label>
          <input type="email" class="email form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="en form-text">We'll never share your email with anyone else.</div>
          <div id="emailHelp" class="lv form-text">Mēs nekad nedalīsimies ar Tavu epasta adresi!</div>
        </div>
        <button type="submit" class="en emailBtn btn btn-primary">Submit</button>
        <button type="submit" class="lv emailBtn btn btn-primary">Pieteikties</button>
      </form>
    </div>
  </div>



  <!-- INSTAGRAM API -->

  <div class="insta white-section" id="instafeed">
    <h1 class="en">Check out free workouts on my Instagram</h1>
    <h1 class="lv">Iepzīsties ar bezmaksas treniņiem manā Instagram treniņu kontā!</h1>
    <ul id="insta-gallery"></ul>
    <script type="text/javascript">
      var feed = new Instafeed({
        limit: 5,
        target: "insta-gallery",
        template: '<li><a href="{{link}}"><img title="{{caption}}" src="{{image}}" /></a><li>',
        accessToken:"<?php echo $my_env_var ?>",
      });
      feed.run();
    </script>
    <p class="follow">follow me <a href="https://www.instagram.com/alisafitday/">ALISAFITDAY</a></p>
  </div>

  <footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
      <span class="text-muted">ALISAFITDAY 2022 by Alisa Lagzdiņa. </span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="index.js" charset="utf-8"></script>

</body>

</html>
