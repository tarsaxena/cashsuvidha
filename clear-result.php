<?php

if (!isset($_SESSION)) {
    session_start();
}
//session_destroy();
$parameters = array("score_of_fb", "score_of_tw", "score_of_gp", "score_of_lin", "score_of_pin","score_of_ins","suvidha_id","suvidha_score_id");
//                        print_r($parameters);
    foreach ($parameters as $parameter) {
//        echo $_SESSION[$parameter].'<br>';
//        continue;
        unset($_SESSION[$parameter]);
    }
//	unset($_SESSION['suvidha_score_id']);
    header("Location: ../index.php");