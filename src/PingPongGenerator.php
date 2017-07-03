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

        function rejectWhitespace($num)
        {
            if (strpbrk($num," ")) {
                return "Spaces are not allowed.";
            }
        }

        function rejectNonNum($num)
        {
            if (!(is_numeric($num))) {
                return "Please enter a number.";
            }
        }

        function count($num)
        {
            $num_arr = [];
            for ($i = 1; $i <= $num; $i++) {
                array_push($num_arr, $i);
            }
            var_dump($num_arr);
            return $num_arr;
        }

        function ping($num)
        {
            if ($num % 3 == 0) {
                return "ping";
            }
        }

        function pong($num)
        {
            if ($num % 5 == 0) {
                return "pong";
            }
        }

        function pingPong($num)
        {
            if ($num % 15 == 0) {
                return "ping-pong";
            }
        }
    }

?>
