<?php
$summ = $_POST['summ'];
$percent = 10;
$date = $_POST['date'];
$years = $_POST['years'];
$radio = $_POST['radio'];
$summadd = $_POST['summadd'];
$result = Calculate($summ, $percent);
if (!isset($_POST['submit']) && $summ !== '' && $date !== '' && $summadd !== '') 
{
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $result = $summ + ($summ + $summadd) * $days * (0.1 / 365);
    for ($i = 1; $i < $years * 12; $i++ ) {
        $month++;
        $result = $result + ($result + $summadd) * $days * (0.1 / 365);
    }

    echo ceil($result);
} 
else 
{
    echo 'error';
}
echo $result;
?>
