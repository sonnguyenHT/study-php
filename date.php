<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now :' . date('Y-m-d') . "<br>";

echo 'Next week:' . date('Y-m-d', $nextWeek) . "<br>";

echo "========= <br>";

$now = new DateTime();
$nextWeek = new DateTime('today + 1 week');
echo 'Now: ' . $now->format('Y-m-d') . "<br>";
echo 'Next Week:' . $nextWeek->format('Y-m-d') . "<br>";
?>