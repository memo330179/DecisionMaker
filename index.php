
<?php
//this is the header for the files
$title = "Decision Maker"; //title of the page
include "header.php";
?>

  <form action="decision.php" method="post" class="col-md-4 col-md-offset-4">
  <div class="input-group">
    <label for="question">Question:</label>
      <input type="text" name="question" class="form-control" placeholder="Question" aria-describedby="basic-addon1" required>
  </div>
    <div class="input_field_wrap">
      <div class="input-group">
        <label for="option[]">Options:</label>
        <input type="text" name="option[]" class="form-control" placeholder="Write an option" aria-describedby="basic-addon1" required>
        <input type="text" name="option[]" class="form-control input2" placeholder="Write an option" aria-describedby="basic-addon1" required>
      </div>  
      <span class="btn-group">
      <div class="submit_options"><input class="btn btn-info" type=submit></div>
      <button class="add_field_button btn btn-info">Add More Options</button>
      </span>
    </div>
  
  </form>
  <script type = "text/javascript" src = "buttons.js"></script>
<?php
  include_once "footer.php";
?>