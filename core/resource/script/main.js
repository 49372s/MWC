var modalA = null;//Button Accept
var modalD = null;//Button Disaccept


window.addEventListener('DOMContentLoaded',()=>{
    init();
});

function init(){
    //Initialize Routine
    loginCheck()
    modalA = document.getElementById('modalAccept');
    modalD = document.getElementById('modalDisaccept');
}

function loginCheck(){
    $.post("/api/data/security/login/check/",(data)=>{
        if(data.result==false){
            if(data.data=="NO_LOGIN"){
                //ログインをしていないだけなのでログインを要求する
                editModalTitle("ログイン");
                editModalBody("<b>Note Deck Web</b>に[misskey]アカウントでログインする。<br><form method=\"post\" id=\"userLoginWithMi\"><label for=\"uLWMInstances\" class=\"form-label\">サーバードメイン</label><div class=\"input-group mb-3\"><span class=\"input-group-text\">https://</span><input type=\"text\" placeholder=\"misskey.io\" name=\"instance\" class=\"form-control\" id=\"uLWMInstances\"></div><label for=\"uLWMTokens\" class=\"form-label\">トークン</label><div class=\"input-group mb-3\"><span class=\"input-group-text\">TOKEN</span><input type=\"text\" placeholder=\"*****************************\" name=\"token\" class=\"form-control\" id=\"uLWMTokens\"></div></form><a href=\"javascript:requestMiAuth()\">トークンをお持ちでない場合</a>");
                editModalNegative("OK",false);
                editModalPositive("ログイン",true);
                modalCtl.show();
            }
        }else if(data.result==true){
            if(data.data=="Error"){
                //エラーもなぜかtrueになるMSNICクオリティなのでとりあえずここにエラー処理。この場合のエラーはTOKEN INVALID
                window.alert("TODO: TOKEN INVALID");
            }else{
                //ログイン成功
            }
        }
    })
}

function editModalTitle(str){
    document.getElementById('modalTitle').innerHTML = str;
}

function editModalBody(str){
    document.getElementById('modalBody').innerHTML = str;
}

function editModalNegative(str,flug = true){
    modalD.innerHTML = str;
    if(flug==true){
        modalD.classList.remove('d-none');
    }else{
        modalD.classList.add('d-none');
    }
}

function editModalPositive(str, flug = true){
    modalA.innerHTML = str;
    if(flug==true){
        modalA.classList.remove('d-none');
    }else{
        modalA.classList.add('d-none');
    }
}

function requestMiAuth(){
    const form = document.getElementById('userLoginWithMi');
    if(form.instance.value == ""){
        editModalTitle("ログイン");
        editModalBody("サーバードメインが入力されていません。");
        editModalNegative("戻る");
        editModalPositive("",false);
        modalD.onclick = ()=>{
            loginCheck();
        }
        return;
    }
    location.href = "/api/data/security/login/first/?instance="+form.instance.value
}