function goHome()
{
	getHtml("home");	
}

function goProduct()
{
	getHtml("product");	
}

function goAbout() 
{
	getHtml("about");
}

function goContact() 
{
	getHtml("contact");
}

function goChat() 
{
	getHtml("chat")
}

function toLogin()
{
	getHtml("login")
}

function login()
{
	console.log("this is login method");
	userName = document.getElementById("username").value;
	password = document.getElementById("password").value;
	console.log(password);
	console.log(md5(password));
}

function reset()
{
	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
}


function getHtml(path) 
{
	$.ajax(
	{
		url: "./controller/userController.php?path="+ path, // 后端接口URL
		method: "GET",
		success: function(data) 
		{
			updatePage(data);
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) 
		{

			// 状态码

			console.log(XMLHttpRequest.status);

			// 状态

			console.log(XMLHttpRequest.readyState);

			// 错误信息

			console.log(textStatus);

		}
	})
}

function updatePage(data) 
{
	document.getElementById("mainPage").innerHTML = data
}