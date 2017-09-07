<div class="account-container">

	<div class="content clearfix">

			<h2>欢迎来到英语学习助手</h2>

			<div class="login-fields">

				<p>Please provide your details</p>

				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->

				<div class="field">
					<label for="password">Password:</label>
					<input type="text" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->

			</div> <!-- /login-fields -->

			<div class="login-actions">

				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">7天内自动登录</label>
				</span>

				<button class="button btn btn-success btn-large" onclick="login()">登录</button>

			</div> <!-- .actions -->




	</div> <!-- /content -->

</div> <!-- /account-container -->
<script>
var xmlHttp;
function login()
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return

    }
    var url="function/login.php";
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    url=url+"?username="+username+"&password="+password;
    console.log(url);
    xmlHttp.onreadystatechange=stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null)

}

function stateChanged()
{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        alert(xmlHttp.responseText);
    }

}

function GetXmlHttpObject()
{
    var xmlHttp=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();

    }
    catch (e)
    {
        //Internet Explorer
        try
        {
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

</script>
