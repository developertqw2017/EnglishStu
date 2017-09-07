<div class="account-container register">

	<div class="content clearfix">


			<h1>加入我们</h1>

			<div class="login-fields">

				<p>创建你的账户:</p>

				<div class="field">
					<label for="firstname">昵称:</label>
					<input type="text" id="nickname" name="nickname" value="" placeholder="昵称" class="login" />
				</div> <!-- /field -->

				<div class="field">
					<label for="email">邮箱地址:</label>
					<input type="text" id="email" name="email" value="" placeholder="邮箱" class="login" onblur="verify_email()"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="password">密码:</label>
					<input type="text" id="password" name="password" value="" placeholder="密码" class="login"/>
				</div> <!-- /field -->

				<div class="field">
					<label for="confirm_password">重复密码:</label>
					<input type="text" id="confirm_password" name="confirm_password" value="" placeholder="重复密码" class="login"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->

			<div class="login-actions">

				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">同意的条款和条件.</label>
				</span>

				<button class="button btn btn-primary btn-large" onclick="signup()">注册</button>

			</div> <!-- .actions -->


	</div> <!-- /content -->

</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="login.php">Login to your account</a>
</div> <!-- /login-extra -->

<script>
var xmlHttp;
function signup()
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return

    }
    var url="function/signup.php";
    var nickname = document.getElementById("nickname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    url=url+"?nickname="+nickname+"&email="+email+"&password="+password;
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

function verify_email()
{
var email_current = document.getElementById("email").value;
var regex = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
if(!regex.test(email_current))
{
var em = document.getElementById("email");
em.value=null;
em.placeholder="检查您的邮箱地址!";
}
}
</script>
