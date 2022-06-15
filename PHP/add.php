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


//Handle new item
$newItem = $_POST["newItem"] ?? "";
$newItem =trim($newItem);
if ($newItem) {
  array_push($itemsArray, $newItem);
  file_put_contents("items.json", json_encode($itemsArray));
};

//Handle new meal
$newMeal = $_POST["newMeal"] ?? "";
$newMeal =trim($newMeal);
if ($newMeal) {
  array_push($mealsArray, $newMeal);
  file_put_contents("meals.json", json_encode($mealsArray));
};

//Handle new exercise
$newExercise = $_POST["newExercise"] ?? "";
$newExercise =trim($newExercise);
if ($newExercise) {
  array_push($exerciseArray, $newExercise);
  file_put_contents("exercises.json", json_encode($exerciseArray));
};

header("Location: /planner.php")

    ?>
