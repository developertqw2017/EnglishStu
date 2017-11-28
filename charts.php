<script type="text/javascript">

function action_to1(page){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
{
    document.getElementById("index_page").innerHTML=xmlhttp.responseText;
        }
        xmlhttp.open("POST",page,true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send();
    };
</script>
   <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    </h3>
                                <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><i class=" icon-caret-down"></i> &nbsp</a>
                                <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                                <li><a href="#"><i class=" icon-share-alt icon-large"></i> 复制</a></li>
                                <li><a onclick="deleteCom(this)"><i class=" icon-trash icon-large"></i> 删除</a></li>
                                <li><a href="#"><i class=" icon-share icon-large"></i> 转发</a></li>
                                </ul>
                                </div>

                                    <input type="text" class="search-query" placeholder="查词" name="voc" id="voc" value="">
                                    <button class="add-on search-submited" id = "search_voc" onclick="showUser()"><i class="icon-search"></i></button>
                            </div>
                                <div id="bdtts_div_id">
                                    <audio id="tts_autio_id" autoplay="autoplay">
                                    <source id="tts_source_id" src="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=5&text=" type="audio/mpeg">
                                    <embed id="tts_embed_id" height="0" width="0" src="">
                                    </audio>
                                </div>
                           <!-- /widget-header -->
                            <div class="widget-content" id="voc1">
                            <!-- /bar-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>更多例句</h3>
                                <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><i class=" icon-caret-down"></i> &nbsp</a>
            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 复制</a></li>
            <li><a onclick="deleteCom(this)"><i class=" icon-trash icon-large"></i> 删除</a></li>
            <li><a href="#"><i class=" icon-share icon-large"></i> 转发</a></li>
            </ul>
            </div>

                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="area-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /line-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    笔记</h3>
            <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><i class=" icon-caret-down"></i> &nbsp</a>
            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 复制</a></li>
            <li><a onclick="deleteCom(this)"><i class=" icon-trash icon-large"></i> 删除</a></li>
            <li><a href="#"><i class=" icon-share icon-large"></i> 转发</a></li>
            </ul>
            </div>

                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="pie-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /pie-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                    <div class="span6">
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    书签</h3>

            <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><i class=" icon-caret-down"></i> &nbsp</a>
            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 复制</a></li>
            <li><a onclick="deleteCom(this)"><i class=" icon-trash icon-large"></i> 删除</a></li>
            <li><a href="#"><i class=" icon-share icon-large"></i> 转发</a></li>
            </ul>
            </div>

                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="donut-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /bar-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-header">
                                <i class="icon-bar-chart"></i>
                                <h3>
                                    应用</h3>
            <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><i class=" icon-caret-down"></i> &nbsp</a>
            <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
            <li><a href="#"><i class=" icon-share-alt icon-large"></i> 复制</a></li>
            <li><a onclick="deleteCom(this)"><i class=" icon-trash icon-large"></i> 删除</a></li>
            <li><a href="#"><i class=" icon-share icon-large"></i> 转发</a></li>
            </ul>
            </div>

                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <canvas id="line-chart" class="chart-holder" width="538" height="250">
                                </canvas>
                                <!-- /-chart -->
                            </div>
                            <!-- /widget-content -->
                        </div>
                        <!-- /widget -->
                    </div>
                    <!-- /span6 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /main -->
   <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script>
var xmlHttp;
function showUser()
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return;

    }
    var url="function/get_voc.php";
    var voc_value = document.getElementById("voc").value;
    console.log(voc_value);
    url=url+"?voc="+voc_value;
    xmlHttp.onreadystatechange=stateChanged;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);

}

function stateChanged()
{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        document.getElementById("voc1").innerHTML=xmlHttp.responseText;

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
function doTTS(){
    var ttsDiv = document.getElementById('bdtts_div_id');
    var ttsAudio = document.getElementById('tts_autio_id');
    var ttsText = document.getElementById('baidu_player').innerHTML;

    ttsDiv.removeChild(ttsAudio);
    var au1 ='<audio id="tts_autio_id" autoplay="autoplay">';
    var sss ='<source id="tts_source_id "src="http://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=5&text='+ttsText+'" type="audio/mpeg">';
    var eee='<embed id="tts_embed_id" height="0" width="0" src="">';
    var au2 = '</audio>';
    ttsDiv.innerHTML = au1 + sss + eee +au2;

    ttsAudio = document.getElementById('tts_autio_id');

    ttsAudio.play();
}


</script>

