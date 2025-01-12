// JavaScript Document
var dateTemp = new Date();
var dateTime = dateTemp.getHours();
var elMsg = document.getElementById('intro');

if(dateTime <= 12)
{
	elMsg.innerHTML = '<h3>Good Morning, nice to meet you!</h3>';
}
else
{
	elMsg.innerHTML = '<h3>Good Afternoon, nice to meet you!</h3>';
}
