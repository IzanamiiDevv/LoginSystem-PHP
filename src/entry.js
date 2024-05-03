let title_toggle = false;
document.getElementById('chk').addEventListener('change',function(){
    document.getElementById('title').innerText = title_toggle ? "Codego: Sign up" : "Codego: Login";
    title_toggle = !title_toggle;
});