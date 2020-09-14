<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav></nav>
    </header>
</body>
</html>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
$stmt = $pdo->query('SELECT * FROM table WHERE id = 3');
?>
<div>
<?php
foreach($stmt as $row) {
?>
    <div>
        <span>
<?php
    echo $row['id'];
?>
        </span>
        <span>
<?php
    echo $row['name'];
?>
        </span>
    </div>
<?php
}
?>
</div>
<?php
?>

<?php
$add = $pdo->exec('INSERT INTO ...');
?>