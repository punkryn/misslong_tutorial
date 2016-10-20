/* 예제1 몸무게
var a = prompt("키를 입력하세요");
var b = prompt("몸무게를 입력하세요");
var c = (a-100)*0.9 ;
if(b>(a-100)*0.9){
document.write("정상 체중 초과"+"<br/>"+"당신의 정상 몸무게는 : "+c);
} else if(b<(a-100)*0.9){
document.write("정상 체중 미만"+"<br/>"+"당신의 정상 몸무게는 : "+c);
} else {
document.write("정상 체중"+"<br/>"+"당신의 정상 몸무게는 : "+c);
}
*/


/* 돈계산
var tra = 3000
var food = 6000
var drink = 3000
var result = tra + food + drink > 10000 ? 
			 tra + food + drink - 10000 + '원 초과' :
			 document.write("9ood");

document.write(result);
*/
//<table border='1'><tr><td>num</td></tr></table>

/*
var num = 1
var t = "<table border='1'>"
for(i=1; i<=5; i++){
	t+="<tr>";
		for(k=1; k<=7; k++){
			if(num===29) break ;
			t+="<td>"+num+"</td>";
			num++
			}
	t+="</tr>";
}
t+="</table>"
document.write(t);
*/

/*
var userEmail = prompt("Email입력");
var arrUrl = [".co.kr",".com",".net",".or.kr",".go.kr"];

var check1 = false ;
var check2 = false ;

if(userEmail.indexOf("@")>0){
	var check1 = true ;
}

for(var i = 0; i<arrUrl.length; i++){
	if(userEmail.indexOf(arrUrl[i])>0){
		var check2 = true ;
	}
}

if(check1 === true && check2 === true){
	document.write(userEmail);
} else {
	alert("잘못 입력하셨습니다.");
	location.reload() ;
}
*/

/*
var userName = prompt("이름을 입력하세요.")
reg_1 = /^[가-힣]{2,5}$/;
while(true){
	if(reg_1.test(userName)){
		break
	}else{
		alert('이름 형식이 잘못 되었습니다.');
		userName=prompt("이름을 입력하세요.");
	}
}


var userPhone = prompt('전화번호를 입력하세요.')
reg_2 = /^(010|016|011)\d{3,4}\d{4}$/;
while(true){
	if(reg_2.test(userPhone)){
		break;
	}else{
		alert("다시 입력하세요.");
		var userPhone = prompt('전화번호를 입력하세요.');
	}
}


var userEmail = prompt('이메일?');
reg_3 = /^\w{5,12}@[a-z]{2,10}[\.][a-z]{2,3}[\.]?[a-z]{0,2}$/;
while(true){
	if(reg_3.test(userEmail)){
		break;
	}else{
		var userEmail = prompt('이메일?');
	}
}


document.write(userName,"<br/>");
document.write(userPhone,"<br/>");
document.write(userEmail,"<br/>");

*/

/*
var date = new Date();
var y = date.getFullYear();
var m = date.getMonth();
var d = date.getDate();

var theDate = new Date(y, m , 1);
var theDay = theDate.getDay();

var last=[31,28,31,30,31,30,31,31,30,31,30,31]
if(y%4 && y%100 != 0 || y%400==0){
	lastDate=last[1]=29;
}

var lastDate = last[m] ;

var row = Math.ceil((theDay+lastDate)/7);

document.write("<h1>"+y+"."+(m+1)+"</h1>");

var calendar = "<table border='1'>";
calendar += "<tr>";
calendar += "<th>일</th>";
calendar += "<th>월</th>";
calendar += "<th>화</th>";
calendar += "<th>수</th>";
calendar += "<th>목</th>";
calendar += "<th>금</th>";
calendar += "<th>토</th>";
calendar += "</tr>";

var dNum = 1;

for(var i=1 ; i<=row ; i++){
	calendar+="<tr>";

	for(var k=1; k<=7; k++){
		if(i==1 && k<=theDay || dNum>lastDate){
			calendar += "<td> &nbsp; </td>";
		} else {
			calendar += "<td>"+dNum+"</td>"
			dNum++;
		}
	}
	calendar += "</tr>" ;
}

document.write(calendar);
*/

/*
var theBtn = document.getElementById('btn');
var s = document.getElementById('img_src');
theBtn.onmouseover=function(){
	document.getElementById("title").innerHTML = "마우스 오버";
	theBtn.firstChild.src="/img.jpg";
	s.innerHTML=theBtn.firstChild.src;
}

theBtn.onmouseout=function(){
	document.getElementById("title").innerHTML = "마우스 아웃";
	theBtn.firstChild.src = "/kdence.gif"
	s.innerHTML=theBtn.firstChild.src ;
}
*/

/*
document.log_f.onsubmit=function(){
	var id_v=document.log_f.user_id.value;
	var pw_v=document.log_f.user_pw.value;


alert(id_v);
alert(pw_v);

}

if(document.log_f.chk1.checked){
	alert(11);
}
*/

var color = ["white","yellow","aqua","purple"]
var i = 0 ;
function colorBg(){
	i++
	if(i>=color.length){
		i=0;
	}
}

var bodyTag = document.getElementsByTagName("body")[0];
bodyTag.style.backgroundColor=color[i];