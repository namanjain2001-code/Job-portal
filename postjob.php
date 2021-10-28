<?php
$pos = $_GET['pos'];
$skill = $_GET['skill'];
$ctc = $_GET['ctc'];
$dcrip = $_GET['dcrip'];
if ( strlen($pos) == 0 || strlen($skill) == 0|| strlen($dcrip) == 0) {
    echo "0";
} else {
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'jobhub');
    $p = "insert into jobs (pos,skill,CTC,dcrip) values ('$pos','$skill','$ctc','$dcrip')";
    $result = mysqli_query($con, $p);
    if (!$result) {
        echo "0";
    } else {
        echo "1";
    }
}
