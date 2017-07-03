<!-- rejectNoInput -->
<!-- reject whitespace -->
<!-- reject non-numeric input -->
<!-- count -->
<!-- return ping -->
<!-- return pong -->
<!-- return ping-pong -->

<?php
    class PingPongGenerator
    {
        // rejectNoInput
        function rejectNoInput($num)
        {
            if (empty($num)) {
                return "Please enter a number.";
            }
        }
    }

?>
