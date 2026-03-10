<?php
require 'db.php';
require 'Student.php';

$student = new Student($pdo);

$name = htmlspecialchars($_POST['name'] ?? '');
$quantity = intval($_POST['quantity'] ?? 0);
$film = htmlspecialchars($_POST['film_name'] ?? '');
$is3d = isset($_POST['3D']) ? 1 : 0;
$seatType = $_POST['seat-type'] ?? '';

$student->add($name, $quantity, $film, $is3d, $seatType);

header('Location: index.php');
exit();

