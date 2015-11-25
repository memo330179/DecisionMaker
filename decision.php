<?php
  $decision_array = $_POST["option"]; // the array of decisions coming back
  $decision_key = array_rand($decision_array); //get a random key
  $final_decision = $decision_array[$decision_key]; //store the decision
  $title = "Decision"; // set the title of the web page
  include_once "header.php"; //inlcude the header
  $question = $_POST["question"];
?>

<body>
  <h3>The answer to <?php echo '"'.$question.'"'; ?> is...</h3>
  <p><?php echo $final_decision ?></p>

<?php 
  include_once "footer.php";
?>


