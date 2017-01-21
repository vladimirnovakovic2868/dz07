<?php

    if(isset($_POST['subject']) && isset($_POST['string']) && isset($_POST['replace'])){

        $subject = $_POST['subject'];
        $string = $_POST['string'];
        $replace = $_POST['replace'];

        echo str_replace($string, $replace, $subject);
    }

    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operation'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $res = "there was an error, wrong operation";

        switch ($_GET['operation']) {
            case "plus":
                $res = $a+$b;
                break;
            case 'minus':
                $res = $a-$b;
                break;
            case 'multiply':
                $res = $a*$b;
                break;
            case 'devide':
                $res = $a/$b;
                break;
            default:
                $res = "there was an error, wrong operation";
        }

        echo json_encode(array(
            'a' => $a,
            'b' => $b,
            'result' => $res
        ));
    }

?>