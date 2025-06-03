<?php
require 'vendor/autoload.php'; // MongoDB 드라이버 오토로딩

function sayHello($name) {
	echo "Hello $name!";
}

// MongoDB 연결
$client = new MongoDB\Client("mongodb+srv://KIMIKGYEOM:20241752@cluster0.4irrwae.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");

// 컬렉션 선택
$collection = $client->moviedb->movies;

// 데이터 조회
$movies = $collection->find();
?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<h1>👋 PHP MongoDB 연동 예제</h1>

		<?php 
			sayHello('remote world'); 
		?>

		<h2>🎬 영화 목록 (MongoDB)</h2>
		<ul>
			<?php foreach ($movies as $movie): ?>
				<li><?= $movie['title'] ?> (<?= $movie['year'] ?>)</li>
			<?php endforeach; ?>
		</ul>

		<hr>

		<?php phpinfo(); ?>
	</body>
</html>
