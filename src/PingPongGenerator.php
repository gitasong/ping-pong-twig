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
        function count($num)
        {
            $num_arr = [];
            if (empty($num)) {
                return "Please enter a number.";
            } else {
                if (strpbrk($num," ")) {
                    return "Spaces are not allowed.";
                } else {
                    if (!(is_numeric($num))) {
                        return "Please enter a number.";
                    } else {
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
            }
        }
    }

?>
