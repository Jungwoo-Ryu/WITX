<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼 데이터 수집
    $name = $_POST['name']; // 'name'은 사용자의 이름을 담는 입력 필드의 'name' 속성 값
    $email = $_POST['email']; // 'email' 입력 필드의 'name' 속성 값
    $subject = $_POST['subject']; // 'subject' 입력 필드의 'name' 속성 값
    $message = $_POST['message']; // 'message' 텍스트 영역의 'name' 속성 값

    // 메일을 보내기 위한 설정
    $to = 'witxagency@gmail.com'; // 메일을 받을 주소
    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $body = "Received a message from $name\n\n$message";

    // 메일 보내기 함수 호출
    if(mail($to, $subject, $body, $headers)) {
        echo '메일을 성공적으로 보냈습니다.';
    } else {
        echo '메일을 보내는데 실패했습니다.';
    }
}
?>
