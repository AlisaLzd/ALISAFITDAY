<?php
// ECHO "<pre>";
// var_dump(intval($_POST["checkbox"]));
// echo  "</pre>";

//Create arrays
if (file_exists("items.json")){
  $json = file_get_contents("items.json");
  $itemsArray = json_decode($json,true);
} else {
  $itemsArray = [];
};
if (file_exists("meals.json")){
  $json = file_get_contents("meals.json");
  $mealsArray = json_decode($json,true);
} else {
  $mealsArray = [];
};
if (file_exists("exercises.json")){
  $json = file_get_contents("exercises.json");
  $exerciseArray = json_decode($json,true);
} else {
  $exerciseArray = [];
};

if (isset($_POST["checkbox"])) {
  //Handle delete item
  $idItem = intval($_POST["checkbox"]);
  if ($idItem > 0) {
  array_splice($itemsArray,$idItem,1);
  file_put_contents("items.json", json_encode($itemsArray));
  } elseif ($idItem === 0) {
    array_shift($itemsArray);
    if (sizeof($itemsArray) === 0){
      $itemsArray = ["Set your goals for today!"];
    };
    file_put_contents("items.json", json_encode($itemsArray));
  };
} elseif (isset($_POST["closeMeal"])) {
  //Handle delete meal
  $idMeal = intval($_POST["closeMeal"]);
  if ($idMeal > 0) {
  array_splice($mealsArray,$idMeal,1);
  file_put_contents("meals.json", json_encode($mealsArray));
} elseif ($idMeal === 0) {
    array_shift($mealsArray);
    if (sizeof($mealsArray) === 0){
      $mealsArray = ["What will you eat today?"];
    };
    file_put_contents("meals.json", json_encode($mealsArray));
  };
} elseif (isset($_POST["closeExercise"])) {
  //Handle delete exercise
  $idEx = intval($_POST["closeExercise"]);
  if ($idEx > 0) {
  array_splice($exerciseArray,$idEx,1);
  file_put_contents("exercises.json", json_encode($exerciseArray));
  } elseif ($idEx === 0) {
    array_shift($exerciseArray);
    if (sizeof($exerciseArray) === 0){
      $exerciseArray = ["What will you do today?"];
    };
    file_put_contents("exercises.json", json_encode($exerciseArray));
  };
};


header("Location: /planner.php")

    ?>
