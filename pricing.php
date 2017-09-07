<div class="main">

	<div class="main-inner">

	    <div class="container">

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget">

					<div class="widget-header">
						<i class="icon-th-large"></i>
                        <h3>添加</h3>
					</div> <!-- /widget-header -->

					<div class="widget-content" style="background-color:#d0e4fe">

						<div class="pricing-plans plans-3">

						<div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">

						        	<div class="plan-title">
						        		添加单词
					        		</div> <!-- /plan-title -->
						            <div class="plan-price">
					                	0<span class="term">已添加</span>
									</div> <!-- /plan-price -->

						        </div> <!-- /plan-header -->

                                <div class="plan-features">
                                <form class="bs-example bs-example-form" role="form">
									<div class="input-group"><lable class="input-group-addon" for="voc_in">单词名</lable> <input type="text" class="form-control" name="voc_in" id="voc_in"></div>
									<div class="input-group"><lable class="input-group-addon" for="pro_in_uk">音标英</lable> <input type="text" class="form-control" name="pro_in_uk" id="pro_in_uk"></div>
									<div class="input-group"><lable class="input-group-addon" for="pro_in_us">音标美</lable> <input type="text" class="form-control" name="pro_in_us" id="pro_in_us"></div>
                                    <div class="input-group"><lable class="input-group-addon" for="trans_in">翻译&emsp;</lable> <input type="text" class="form-control" name="trans_in" id="trans_in"></div>
                                </form>
                                </div>
                                </div>
 <!-- /plan-features -->

								<div class="plan-actions">
									<a class="btn" onclick="voc_insert()">添加</a>
								</div> <!-- /plan-actions -->

							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->



					    <div class="plan-container">
					        <div class="plan green">
						        <div class="plan-header">

                                    <div class="plan-title">
                                        添加例句
                                    </div> <!-- /plan-title -->

						            <div class="plan-price">
					                	5<span class="term">已添加</span>
									</div> <!-- /plan-price -->

						        </div> <!-- /plan-header -->

                                <div class="plan-features">
                                    <ul>
                                        <li><strong>&emsp;
&emsp;
&emsp;
&emsp;
添&emsp;
加&emsp;
例&emsp;
句&emsp;&emsp;&emsp;&emsp;



</strong></li>
                                    </ul>
                                    <textarea class="form-control input-sm" style="resize:vertical" rows="3"></textarea>
                                 </div> <!-- /plan-features -->


							</div> <!-- /plan -->
					    </div> <!-- /plan-container -->

					    <div class="plan-container">
					        <div class="plan">
						        <div class="plan-header">

						        	<div class="plan-title">
						        		添加文章
					        		</div> <!-- /plan-title -->

						            <div class="plan-price">
					                	30<span class="term">已添加</span>
									</div> <!-- /plan-price -->

						        </div> <!-- /plan-header -->

                                <div class="plan-features">
                                                                        <ul>
                                        <li><strong>&emsp;&emsp;
&emsp;
&emsp;
&emsp;
添&emsp;
加&emsp;
文&emsp;
章&emsp;&emsp;&emsp;&emsp;&emsp;



</strong></li>
                                    </ul>
                                    <textarea class="form-control input-lg" style="resize: vertical" rows="3"></textarea>
                                </div>
                                </div> <!-- /plan-features -->

								<div class="plan-actions">
									<a href="javascript:;" class="btn">提交</a>
								</div> <!-- /plan-actions -->

							</div> <!-- /plan -->

					    </div> <!-- /plan-container -->


					</div> <!-- /pricing-plans -->

					</div> <!-- /widget-content -->

				</div> <!-- /widget -->

		    </div> <!-- /span12 -->


	      </div> <!-- /row -->

	    </div> <!-- /container -->

	</div> <!-- /main-inner -->

</div> <!-- /main -->
<script>
var xmlHttp;
function voc_insert()
{
        var voc_in = document.getElementById("voc_in").value;
        var pro_in_uk = document.getElementById("pro_in_uk").value;
        var pro_in_us = document.getElementById("pro_in_us").value;
        var trans_in = document.getElementById("trans_in").value;
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return

    }
    var url="function/insert_voc.php";
    url=url+"?voc_in="+voc_in+"&pro_in_uk="+pro_in_uk+"&pro_in_us="+pro_in_us+"&trans_in="+trans_in;
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

