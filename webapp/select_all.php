<?php // update.php와 비슷함
// movieDB 데이터베이스 접속
$db = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB 데이터베이스 접속 실패!");;

$sql = "SELECT * FROM movie;";
$result = mysqli_query($db, $sql);

if ($result) {
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo "<script>alert(해당 정보가 없습니다!);location.replace('index.php');</script>";
    }
} else {
    $err_msg = mysqli_error($db);
    echo "<script>alert(SQL문 정보 조회 오류\\n오류 내용: $err_msg');</script>";
}

$taglist = '<li data-role="list-divider">영화 목록
            <span style="float: right">' . $count . '건
            </span></li>';

while($row = mysqli_fetch_array($result)) {
    $taglist .= '<li><img style="margin: 11px 20px; src="' . $row['poster'] . '">';
    $taglist .= '<h2>' . $row['title'] . '</h2>';
    $taglist .= '<span class="ui-li-$count">장르: ' . $genre = $row['genre'] . '</span>';
    $taglist .= '<p>상영날짜: ' . $row['date'] . '</p>';
    $taglist .= '<p>요금: ' . $row['price'] . '</p></li>';
}

mysqli_free_result($result);
mysqli_close($db);
?>

<!DOCTYPE html>
<html>
	<head><!-- 페이지 정보 -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- 제이쿼리 모바일 라이브러리 추가 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css" integrity="sha512-z2AFOVKBqcloFCT+Ugs0icqTfC8fBoGq2zP60MlESnL9CdusjEyVnNvHgs3RWtdMJxGkP0FDWfNp/puIP9CctA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js" integrity="sha512-FbnNPigZZCDhMM22ezvan3xN2/E/oBd9GxqtpiBcK1VZuzBAt0V1EmTtteoYuYxWrqwqBA6zb1OTB887QSjAsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
		<title>Movie Web App | Movie List</title>
	</head>
	<body><!-- 페이지 내용 -->
		<!-- 영화 정보 추가가 화면 -->
		<main data-role="page" id="page4">
			<header data-role="header" data-position="fixed" data-theme="b">
				<a href="#" data-icon="back" data-rel="back">&larr; 뒤로 (Back)</a>
                <h1>영화 정보 전체 검색 보기</h1>
				<a href="index.php" data-icon="home" data-iconpos="notext" class="ui-btn-right">영화 목록 (Home)</a>

                <nav data-role="navbar">
                    <ul>
                        <li><a href="./insert.php" class="ui-btn-active">입력</a></li>
                        <li><a href="./update_select.php">수정</a></li>
                        <li><a href="./delete_select.php">삭제</a></li>
                        <li><a href="./select_all.php" class="ui-btn-active">조회</a></li> 
                    </ul>
                </nav>
			</header>

			<article data-role="content">
                <h3>영화 목록</h3>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <?php echo $taglist; ?>
                </ul>
			</article>

			<footer data-role="footer" data-position="fixed" data-theme="b">
				<h4>&copy; 2025 DJU Database</h4>
			</footer>
		</main>
	</body>
</html>