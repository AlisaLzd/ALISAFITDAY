  <?php


  $items = [];
  $meals = ["What will you eat today?"];
  $exercises = [];


if (file_exists("PHP/items.json")) {

    $json = file_get_contents("PHP/items.json");
    $items = json_decode($json);
};
if (file_exists("PHP/meals.json")) {

    $json = file_get_contents("PHP/meals.json");
    $meals = json_decode($json);
};
if (file_exists("PHP/exercises.json")) {

    $json = file_get_contents("PHP/exercises.json");
    $exercises = json_decode($json);
}


   ?>
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
  <script type="text/javascript" src="instafeed.min.js"></script>

</head>

<body>

  <div>
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
          <div class="dropdown ">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              COLOR
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="colorTheme dropdown-item" href="#">MONO</a></li>
              <li><a class="colorTheme dropdown-item" href="#">COLOR</a></li>
            </ul>
          </div>
        </div>

      </div>
    </nav>
  </div>

<div class="planner">
  <div class="row">
    <div class="box col-md-6">
      <div class="plannerHeader text-white bg-dark rounded-3">
        <h2>Your FITDAY planner</h2>
        <h4 class="date"></h4>
      </div>
    </div>
    <div class="box col-md-6">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h4>Daily quote:</h4>
        <p class="quote">
          “When you have a dream, you’ve got to grab it and never let go.”
          — Carol Burnett
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box col-md-12">
      <div class="h-100 p-5 bg-light border rounded-3">
          <h4>To do list:</h4>

        <div class="item">

<table cellspacing = "10" border="0">

<?php  for ($i = 0; $i < sizeof($items); $i++) {
       ?>
<tr>
  <form action="/PHP/delete.php" method="post">
    <td><input type="checkbox" name="checkbox" value="<?php echo $i ?>" onchange="this.form.submit()"</td>
    <td><h6><?php echo $items[$i]; ?></h6></td>
  </form>
</tr>
<?php
   }  ?>
</table>
</div>

  <form class="form-group" action="/PHP/add.php" method="post">
            <input  type="text" name="newItem" placeholder="Add goal" autocomplete="off">
            <button type="submit" name="list" class="btn-secondary"><span>+</span></button>
          </form>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="box col-md-6">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h3>MEALS:</h3>

        <table cellspacing = "10" border="0">
        <?php  for ($i = 0; $i < sizeof($meals); $i++) { ?>
        <tr>
          <form action="/PHP/delete.php" method="post">
            <td><h6><?php echo $meals[$i]; ?></h6></td>
            <td><button type="submit" name="closeMeal" class="btn-secondary" value="<?php echo $i ?>">X</button></td>
          </form>
        </tr>
        <?php }  ?>
        </table>

          <form class="form-group" action="/PHP/add.php" method="post">

                    <input type="text" name="newMeal" placeholder="Add meal" autocomplete="off">
                    <button type="submit" class="btn-secondary" name="list">+</button>

                  </form>
    </div>
      </div>

    <div class="box col-md-6">
      <div class="h-100 p-5 bg-light border rounded-3">
        <h3>EXERCISES:</h3>
        <table cellspacing = "10" border="0">
        <?php  for ($i = 0; $i < sizeof($exercises); $i++) { ?>
        <tr>
          <form class="form-group" action="/PHP/delete.php" method="post">
            <td ><h6><?php echo $exercises[$i]; ?></h6></td>
            <td ><button type="submit" class="btn-secondary" name="closeExercise" value="<?php echo $i ?>">X</button></td>
          </form>
        </tr>
        <?php }  ?>
        </table>
          <form class="form-group" action="/PHP/add.php" method="post">
                    <input type="text" name="newExercise" placeholder="Add exercise" autocomplete="off">
                    <button type="submit" class="btn-secondary" name="list">+</button>
                  </form>
      </div>
    </div>
  </div>
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
