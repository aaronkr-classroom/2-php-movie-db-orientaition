<!DOCTYPE html>
<html>
	<head><!-- 페이지 정보 -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- 제이쿼리 모바일 라이브러리 추가 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css" integrity="sha512-z2AFOVKBqcloFCT+Ugs0icqTfC8fBoGq2zP60MlESnL9CdusjEyVnNvHgs3RWtdMJxGkP0FDWfNp/puIP9CctA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js" integrity="sha512-FbnNPigZZCDhMM22ezvan3xN2/E/oBd9GxqtpiBcK1VZuzBAt0V1EmTtteoYuYxWrqwqBA6zb1OTB887QSjAsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
		<title>Movie Web App</title>
	</head>
	<body><!-- 페이지 내용 -->
		<!-- 시작 메뉴 화면 -->
		<main data-role="page" id="page0">
			<header data-role="header" data-position="fixed" data-theme="b">
				<h1>영화 정보 관리</h1>
				<a href="#page0" data-icon="home" data-iconpos="notext" class="ui-btn-right">영화 목록 (Home)</a>
			</header>

			<article data-role="content">
				<img style="margin: 20px auto; display: block;" src="img/cinema.jpg" />
				<ul data-role="listview" data-inset="true">
					<li><a href="./insert.php">영화 정보 추가</a></li>
					<li><a href="./update_select.php">영화 정보 수정</a></li>
					<li><a href="./delete_select.php">영화 정보 삭제</a></li>
					<li><a href="./select_all.php">전체 영화 조회</a></li>
				</ul>
			</article>

			<footer data-role="footer" data-position="fixed" data-theme="b">
				<h4>&copy; 2025 DJU Database</h4>
			</footer>
		</main>
	</body>
</html>