<?php
include 'db.php';
$result = $conn->query("SELECT * FROM clicks ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h1>Click Tracker Dashboard</h1>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>URL</th>
      <th>Device</th>
      <th>Time</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['url'] ?></td>
        <td><?= $row['device'] ?></td>
        <td><?= $row['time'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
<?php $conn->close(); ?>
