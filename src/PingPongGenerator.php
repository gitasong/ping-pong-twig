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
        function validate($val)
        {
            if (empty($val)) {
                $error_message = "Please enter a number.";
                return $error_message;
            } else {
                if (strpbrk($val," ")) {
                    $error_message = "Spaces are not allowed.";
                    return $error_message;
                } else {
                    if (!(is_numeric($val))) {
                        $error_message = "Please enter a number.";
                        return $error_message;
                    } else {
                        $error_message = "";
                    }
                }
            }
        }

        function count($num)
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
            return $num_arr;
        }
    }
?>
