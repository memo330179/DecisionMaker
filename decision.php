<?php
  $decision_array = $_POST["option"]; // the array of decisions coming back
  $decision_key = array_rand($decision_array); //get a random key
  $final_decision = $decision_array[$decision_key]; //store the decision
  $title = "Decision"; // set the title of the web page
  $question = $_POST["question"];
  include "header.php"; //inlcude the header
  ?>
  
  <div class='answer col-md-6 col-md-offset-3'>;
  <h1>The answer to <?php echo '"'.$question.'"' ; ?> is</h1>;
  <p class="decision"><?php echo $final_decision ?></p>;
  </div>
  

<?php
include "footer.php";
?>



