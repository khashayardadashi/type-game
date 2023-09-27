document.addEventListener("contextmenu",e=>e.preventDefault(),false);
//document.addEventListener("copy", e => {
//e.clipboardData.setData("text/plain", "کپی ممنوع است");
//e.preventDefault();
//}, false);
document.getElementById("input").addEventListener("paste",e=>e.preventDefault());
var m=0;
var s=0;
var s10=0;
var Interval;
document.getElementById("input").addEventListener("keydown",start);
document.getElementById("btn").addEventListener("click",end);
function start(){
    clearInterval(Interval);
    Interval=setInterval(run ,10);
}
function end(){
    clearInterval(Interval);
    document.getElementById("input").value;
    if(document.getElementById("input").value==document.getElementById("text").innerHTML){
       var second10=document.getElementById("s10").innerText;
        var second=document.getElementById("s").innerText;
        var minute=document.getElementById("m").innerText;
        document.getElementById("input-1").value=minute+":"+second+":"+second10;

    }
    else
    {
        alert("لطفا متن را درست وارد کنید !");
        document.getElementById("s10").innerHTML="00";
       document.getElementById("s").innerHTML="00";
       document.getElementById("m").innerHtml="00";
       window.location.reload();
        
    } 
    document.getElementById("input").value="";
}

    function res(){
       clearInterval(Interval);
       document.getElementById("s10").innerHTML="00";
       document.getElementById("s").innerHTML="00";
       document.getElementById("m").innerHtml="00";
       document.getElementById("input").value="";
       document.getElementById("input-1").value="";
       s=0;
       s10=0;
       m=0;

    }
    function run (){
    s10++;
    if(s10<10){
        document.getElementById("s10").innerHTML="0"+s10;
    }
    else{
        document.getElementById("s10").innerHTML=s10;
    }
    if(s10>=60){
        s+=1;
        s10=0;
        document.getElementById("s10").innerHTML="00";
    }
    if(s<10){
        document.getElementById("s").innerHTML="0"+s;
    }
    else{
        document.getElementById("s").innerHTML=s;
    }
    if(s>=60){
        m+=1;
        s=0;
        document.getElementById("s").innerHTML="00";
    }
    if(m<10){
        document.getElementById("m").innerHTML="0"+m;
    }
    else{
        document.getElementById("m").innerHTML=m;
    }
    
}
var number = 0;
var start = setInterval(effect ,10);
function effect(){

var result = document.getElementById("text");
var text = "پدر - کوه - خفن - قشنگ";
number += 1;
result.innerHTML = text.substring(0,number);
if(number > text.length) {
clearInterval(start);
  }
}