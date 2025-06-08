<?php 
// movieDB 데이터베이스 접속
$db = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB 데이터베이스 접속 실패!");

$genre = $_POST['genre'];
$title = $_POST['title'];
$date = $_POST['date'];
$price = $_POST['price'];
$poster = $_POST['poster'];

$upload_dir = './img/posters/';
$upload_file = $upload_dir . basename($poster['name']);

if(isset($_FILES['poster'])) {
    if (move_uploaded_file($file['tmp_name'], $upload_file)) {
        $sql = "INSERT INTO movie(id, title, genre, date, price, poster)
                VALUES (null, '$title', '$genre', '$date', '$price', '$file')";
        $result = mysqli_query($db, $sql);

        if ($result) {
            echo "<script>alert('$title' 정보 추가 성공!);</script>";
        } else {
            $err_msg = mysqli_error($db);
            echo "<script>alert(SQL문 정보 추가 오류 \\n오류 내용: $err_msg');</script>";
        }
    } else {
        echo "<script>alert(파일 업로드 실패!);</script>";
    }
} else {
    echo "<script>alert(파일 업로드 오류 발생!);</script>";
}

mysqli_close($db);

echo "<script>location.replace('index.php');</script>";
?>