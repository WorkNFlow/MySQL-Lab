<?php
require 'db.php';
require 'Student.php';

$student = new Student($pdo);
$all = $student->getAll();
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lab5</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex flex-col items-center justify-center min-h-screen bg-gray-100 gap-4">
    <h2 class="text-2xl font-bold">Сохранённые покупки:</h2>
    <ul class="list-disc">
      <?php foreach ($all as $row): ?>
        <li>
          <?php echo htmlspecialchars($row['name']); ?>,
          <?php echo (int) $row['ticket_quantity']; ?> билетов,
          <?php echo htmlspecialchars($row['film']); ?>,
          тип места: <?php echo htmlspecialchars($row['seat_type']); ?>,
          3D: <?php echo $row['is_3d'] ? 'Да' : 'Нет'; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="form.html" class="text-blue-600 hover:underline">Заполнить форму</a>
  </body>
</html>

