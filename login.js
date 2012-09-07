// js för inloggning.


function createObject() {
var request_type;
var browser = navigator.appName;
if(browser == "Microsoft Internet Explorer"){
request_type = new ActiveXObject("Microsoft.XMLHTTP");
}else{
request_type = new XMLHttpRequest();
}
return request_type;
}

var http = createObject();

var nocache = 0;
function login() {

 document.getElementById('logginstatus').innerHTML = "Loading..."
 
var username = encodeURI(document.getElementById('username').value);
var password = encodeURI(document.getElementById('password').value);

 
nocache = Math.random();

http.open('get', 'login.php?username='+username+'&password='+password+'&nocache = '+nocache);
http.onreadystatechange = loginReply;
http.send(null);
}
function loginReply() {
if(http.readyState == 4){ 
var response = http.responseText;
 if(response == 0){

document.getElementById('logginstatus').innerHTML = '';
  
 } 
 else {
document.getElementById('logginstatus').innerHTML = 'Välkommen ' + response;
}
}
}



