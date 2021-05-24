const sendBtn = document.querySelector('.send-btn button');

sendBtn.onclick = (e) => {
  e.preventDefault();
  if (!document.form_data.name.value) {
    alert("이름을 입력해 주세요.");
    document.form_data.name.focus();
    //alert 실행 후 포커스 깜빡임
    return;
  } //return을 빼면 다음 입력한 것들이 실행됨

  if (!document.form_data.email.value) {
    alert("이메일을 입력해 주세요.");
    document.form_data.email.focus();
    return;
  }
 
  if (!document.form_data.subject.value) {
    alert("제목을 입력해 주세요.");
    document.form_data.subject.focus();
    return;
  }

  if (!document.form_data.message.value) {
    alert("메세지 내용을 입력해 주세요.");
    document.form_data.message.focus();
    return;
  }
 
  document.form_data.submit();
  //submit함수는 html의 form태그의 action 경로로 넘겨주는 역할을 함
}