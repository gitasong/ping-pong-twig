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

        // reject whitespace
        function rejectWhitespace($num)
        {
            if (strpbrk($num," ")) {
                return "Spaces are not allowed.";
            }
        }

        // reject non-numeric input
        function rejectNonNum($num)
        {
            if (!(is_numeric($num))) {
                return "Please enter a number.";
            }
        }

        // basic count method
        function count($num)
        {
            $num_arr = [];
            for ($i = 1; $i <= $num; $i++) {
                array_push($num_arr, $i);
            }
            var_dump($num_arr);
            return $num_arr;
        }

        // return ping
        function ping($num)
        {
            if ($num % 3 == 0) {
                return "ping";
            }
        }

        // return pong
        function pong($num)
        {
            if ($num % 5 == 0) {
                return "pong";
            }
        }

        // return ping-pong
        function pingPong($num)
        {
            if ($num % 15 == 0) {
                return "ping-pong";
            }
        }

        // combining all methods
        function combineCount($num)
        {
            $num_arr = [];
            for ($i = 1; $i <= $num; $i++) {
                if ($i % 15 == 0) {
                    array_push($num_arr, "ping-pong");
                } elseif ($i % 3 == 0) {
                    array_push($num_arr, "ping");
                } elseif ($i % 5 == 0) {
                    array_push($num_arr, "pong");
                } else {
                    array_push($num_arr, $i);
                }
            }
            var_dump($num_arr);
            return $num_arr;
        }
    }

?>
