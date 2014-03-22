function pwdshow(){
	var x = document.getElementById("password").checked;
    if (x == 1) {
        document.getElementById("pw").type = 'text';
    }
    if (x == 0) {
        document.getElementById("pw").type = 'password';
    }
}

function validateEmail(val) {
    var mail = val.value;
    var re = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
    if (mail.search(re)) {
        alert("E-Mail 格式錯誤!");
    }
}