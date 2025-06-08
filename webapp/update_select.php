<!DOCTYPE html>
<html>
	<head><!-- 페이지 정보 -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- 제이쿼리 모바일 라이브러리 추가 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.css" integrity="sha512-z2AFOVKBqcloFCT+Ugs0icqTfC8fBoGq2zP60MlESnL9CdusjEyVnNvHgs3RWtdMJxGkP0FDWfNp/puIP9CctA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js" integrity="sha512-FbnNPigZZCDhMM22ezvan3xN2/E/oBd9GxqtpiBcK1VZuzBAt0V1EmTtteoYuYxWrqwqBA6zb1OTB887QSjAsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
		<title>Movie Web App | Update Search</title>
	</head>
	<body><!-- 페이지 내용 -->
		<!-- 시작 메뉴 화면 -->
		<main data-role="dialog" id="page2">
			<header data-role="header" data-position="fixed" data-theme="b">
				<h1>영화 정보 검색</h1>
			</header>

			<article data-role="content">
				<h3>수정할 영화 검색</h3>
                <form name="form2-1" method="POST" action="update.php" date-ajax="false">
                    <div class="ui-body ui-body-a">
                        <label>검색 영화명: </label>
                        <input type="search" name = "stitle" value="" data-mini="true" data-inline="true">
                    </div>
                    <input type="submit" value="검색" data-mini="true"
                    <input type="reset" value="취소" data-mini="true"
                </form>
			</article>
		</main>
	</body>
</html>