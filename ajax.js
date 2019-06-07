function add() 
{ 
	var tmp = document.querySelector('input[name = addMessage]');
	var params = 'addMessage=' + tmp.value; 
	ajaxPost('del.php',params).then(resolve => 
{ 
	var request = new XMLHttpRequest(); 
	request.open('POST', 'del.php', true);
}).catch(reject => 
{ 
	alert(reject); 
}) 
} 


function ajaxPost(url, params) 
{ 
	return new Promise(function(resolve, reject) 
{ 
	var request = new XMLHttpRequest(); 
	request.open('POST',url,true); 
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=utf-8');
	request.addEventListener("load", function() 
{ 
if(request.readyState == 4) 
{ 
	resolve(request.responseText); 
} 
else 
{ 
reject(Error("Ошибка получения данных")); 
} 
}); 
	request.send(params); 
}); 
}