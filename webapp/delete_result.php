<?php 
// movieDB 데이터베이스 접속
$db = mysqli_connect("localhost", "movie_user", "1234", "movieDB")
    or die("movieDB 데이터베이스 접속 실패!");

$title = $_POST['title'];

$sql = "SELECT * FROM movie WHERE title='" . $title . "';";
$result = mysqli_query($db, $sql);

if (!$result) {
    $err_msg = mysqli_error($db);
    echo "<script>alert(SQL문 정보 오류\\n오류 내용: '$err_msg');</script>";
} else {
    $row = mysqli_fetch_array($result);
    unlink($row['title']); // 예시 파일에서 'photo' 사용...

    $sql = "DELETE FROM movie WHERE title = '" . $title . "';";
    $result = mysqli_query($db, $sql);

    if ($result) {
        echo "<script>alert('$title' 정보 삭제 성공!);</script>";
    } else {
        $err_msg = mysqli_error($db);
        echo "<script>alert(SQL문 정보 오류 \\n오류 내용: $err_msg');</script>";
    }
}

mysqli_close($db);

echo "<script>location.replace('index.php');</script>";
?>