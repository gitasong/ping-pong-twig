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
                $error_message = "Please enter a number.";
                return $error_message;
            } else {
                if (strpbrk($num," ")) {
                    $error_message = "Spaces are not allowed.";
                    return $error_message;
                } else {
                    if (!(is_numeric($num))) {
                        $error_message = "Please enter a number.";
                        return $error_message;
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
