<?php
require 'vendor/autoload.php';

function sayHello($name) {
  echo "Hello $name!";
}

$client = new MongoDB\Client("mongodb+srv://KIMIKGYEOM:20241752@cluster0.4irrwae.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
$collection = $client->moviedb->movies;
$movies = $collection->find();
?>

<html>
<head>
  <title>PHP MongoDB 연동 예제</title>
</head>
<body>
  <h1>👋 PHP MongoDB 연동 예제</h1>

  <?php sayHello('remote world'); ?>

  <h2>🎬 영화 목록 (MongoDB)</h2>
  <ul>
    <?php foreach ($movies as $movie): ?>
      <li>
        <strong><?= htmlspecialchars($movie['title'] ?? '제목없음') ?></strong> 
        (<?php 
          if (isset($movie['release_date'])) {
            if ($movie['release_date'] instanceof MongoDB\BSON\UTCDateTime) {
              echo $movie['release_date']->toDateTime()->format('Y-m-d');
            } else {
              echo htmlspecialchars((string)$movie['release_date']);
            }
          } else {
            echo '날짜없음';
          }
        ?>)<br>
        장르: <?= htmlspecialchars($movie['genre'] ?? '정보없음') ?><br>
        가격: <?= htmlspecialchars($movie['price'] ?? '정보없음') ?>원<br>
        <?php if (!empty($movie['photo'])): ?>
          <img src="./photo/<?= htmlspecialchars(basename($movie['photo'])) ?>" alt="<?= htmlspecialchars($movie['title']) ?>" style="width:100px; height:auto;">
        <?php endif; ?>
      </li>
      <hr>
    <?php endforeach; ?>
  </ul>

  <hr>

  <?php phpinfo(); ?>
</body>
</html>
