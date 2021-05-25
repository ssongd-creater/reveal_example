<?php

include_once "connect.php";

$name = mysqli_real_escape_string($db_conn, $_POST['name']);
$email = mysqli_real_escape_string($db_conn, $_POST['email']);
$subject = mysqli_real_escape_string($db_conn, $_POST['subject']);
$message = mysqli_real_escape_string($db_conn, $_POST['message']);
$regist = date("Y-m-d"); //4자리 연도, 2자리 월, 2자리 일
//name값을 기준으로

//echo $name, $email, $subject, $message;

$sql = "INSERT INTO re_message(RE_name, RE_email, RE_subject, RE_msg, RE_reg) VALUES('$name', '$email', '$subject', '$message', '$regist')";

$msg_result = mysqli_query($db_conn, $sql);
//입력해주는 정보

echo "
<script>
 alert('메시지가 입력되었습니다.');
 location.href='/reveal/index.php';
</script>
";
//location을 입력하면 입력된 페이지로 넘어간다

?>