
<?php
//this is the header for the files
$title = "Decision Maker"; //title of the page
include "header.php";
?>

  <body>
    <div class="question">
      <div>Question: <input type="text" name="question"/></div>
    </div>
    <form action="decision.php" method="post">
    <div class="input_field_wrap">
      <button class="add_field_button">Add More Options</button>
      <div>option: <input type="text" name="option[]" required></div>
      <div>option: <input type="text" name="option[]" required></div>
      <div class="submit_options"><input type=submit></div>
    </div>
    </form>
    <script type = "text/javascript" src = "buttons.js"></script>
  </body>
  <!--TODO change this to a footer -->
</html>