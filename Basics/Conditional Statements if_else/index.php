<?php 

if (10 <= 5) {
	echo 'that is true';
} else {
	echo 'that is not true';
}

echo '<br>';

if(false)
 echo 'first line line'; // this line is not display
echo 'second line'; // this line is display

echo '<br>';
// elseif
$score = 80;

if ($score >=90) {
    echo 'A';
} elseif ($score >= 80) {
    echo 'B';
} elseif ($score >= 70) {
    echo 'C';
} elseif ($score >= 60) {
    echo 'D';
} else {
    echo 'F';
}

echo '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $score = 95 ?>

    <?php if ($score >= 90): ?>
        <strong style="color:green">A</strong>
    <?php elseif ($score >= 80): ?>
        <strong>B</strong>
    <?php elseif ($score >= 70): ?>
        <strong>C</strong>
    <?php elseif ($score >= 60): ?>
        <strong>D</strong>
    <?php else: ?>
        <strong style="color:red">F</strong>
    <?php endif ?>
</body>
</html>