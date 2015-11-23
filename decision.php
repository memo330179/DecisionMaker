<?php
    $decision_array = $_POST['option'];
    $decision_key = array_rand($decision_array);
    $final_decision = $decision_array[$decision_key];
?>


<p><?php echo $final_decision; ?></p>