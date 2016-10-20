var date = new Date();
var y = date.getFullYear();
var m = date.getMonth();
var d = date.getDate();

var theDate = new Date(y,m,1);
var theDay = theDate.getDay();

var last = [31,28,31,30,31,30,31,31,30,31,30,31]
if(y%4 && y%100 != 0 || y%400 == 0){
	lastDay=last[1]=29;
}
var lastDay = last[m];

var row = Math.ceil((theDay+lastDay)/7);

var dNum = 1

var calendar = "<table border='1' style='width: 252px; height: 272px; text-align : center;' >" ;
calendar += "<tr>"
calendar += "<th>일</th>"
calendar += "<th>월</th>"
calendar += "<th>화</th>"
calendar += "<th>수</th>"
calendar += "<th>목</th>"
calendar += "<th>금</th>"
calendar += "<th>토</th>"
calendar += "</tr>"

for(var i = 1 ; i<=row ; i++){
	calendar += "<tr>"

	for(var k = 1 ; k<=7 ; k++){
		if(i==1 && k<=theDay || dNum>lastDay){
			calendar += "<td>&nbsp;</td>"
		} else if(dNum === d){
			calendar += "<td><font color='blue'>"+dNum+"</font></td>"
			dNum++
		} else {
			calendar += "<td>"+dNum+"</td>"
			dNum++
		}
	}
	calendar += "</tr>"
}

document.getElementById('calendar').innerHTML = calendar;


function myFunction1(){
						var bgm_url = "player.bgmstore.net/X8oM5"
						var bgm_url2 = "bgmstore.net/view/X8oM5"
						document.getElementById("bgm_arti").innerHTML = '<p>'+'<a href="http://'+bgm_url2+'" target="_blank">'+'01. blossom'+'</a>'+'</p>'+
		        '<embed src="http://'+bgm_url+'" allowscriptaccess="always" allowfullscreen="true" width="422" height="180">'+
		        '</embed>'+'<br>'
					}
					function myFunction2(){
						var bgm_url = "player.bgmstore.net/9SXA8"
						var bgm_url2 = "bgmstore.net/view/9SXA8"
						document.getElementById("bgm_arti").innerHTML = '<p>'+'<a href="http://'+bgm_url2+'" target="_blank">'+'02. dancin\''+'</a>'+'</p>'+
		        '<embed src="http://'+bgm_url+'" allowscriptaccess="always" allowfullscreen="true" width="422" height="180">'+
		        '</embed>'+'<br>'
					}
					function myFunction3(){
						var bgm_url = "player.bgmstore.net/lmFyB"
						var bgm_url2 = "bgmstore.net/view/lmFyB"
						document.getElementById("bgm_arti").innerHTML = '<p>'+'<a href="http://'+bgm_url2+'" target="_blank">'+'03. Plans'+'</a>'+'</p>'+
		        '<embed src="http://'+bgm_url+'" allowscriptaccess="always" allowfullscreen="true" width="422" height="180">'+
		        '</embed>'+'<br>'
					}
					function myFunction4(){
						var bgm_url = "player.bgmstore.net/O5ymE"
						var bgm_url2 = "bgmstore.net/view/O5ymE"
						document.getElementById("bgm_arti").innerHTML = '<p>'+'<a href="http://'+bgm_url2+'" target="_blank">'+'04. Lost Piano'+'</a>'+'</p>'+
		        '<embed src="http://'+bgm_url+'" allowscriptaccess="always" allowfullscreen="true" width="422" height="180">'+
		        '</embed>'+'<br>'
					}

    