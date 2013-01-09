var xmlHttp; //异步通信对象

//初始化XMLHttpRequest
function createXMLHttpRequest() {
    if (window.ActiveXObject) {
		try{
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");}
		catch(e){}
    } 
    else if (window.XMLHttpRequest) {
		try{
        xmlHttp = new XMLHttpRequest();}
		catch(e){}
    }
	
	if(!xmlHttp ||typeof(xmlHttp) == 'undefined'){
		alert('创建XMLHttpRequest失败');
		return null;
	}
	
	return xmlHttp;
}

/* 进行异步操作
 * info 发送服务器的数据请求
 */
function do_ajax(info){
	createXMLHttpRequest();
	var url = "index.php?c=multipoint&a=search&info="+info;
	
	xmlHttp.onreadystatechange = stateChange;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

/* readyState属性改变时的事件处理
 * data 服务器返回的文档
 */
function stateChange(){
	if(xmlHttp.readyState ==4 ){
		if(xmlHttp.status == 200){
			var data;
			if(xmlHttp.ContentType ="text/xml"){
				data = xmlHttp.responseXML; 
			}else{
				data = xmlHttp.responseText;
			}
		}
	}
}

/*
 * 得到焦点时触发事件
 */
function OnFocusFun(element,elementvalue){
	if(element.value==elementvalue){
	element.value="";
	element.style.color="#000";
	}
} 

/*
 * 离开输入框时触发事件
 */ 
function OnBlurFun(element,elementvalue){
	if(element.value==""||element.value.replace(/\s/g,"")==""){
	element.value=elementvalue;
	element.style.color="#999";
	}
}
