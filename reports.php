<div class="main">

    <div class="main-inner">

        <div class="container">

         <div class="row">

            <div class="span8">

            <div class="info-box">
 <div class="img-news-display"><a href="/news/articles/xtres"><img style="max-width:100%;overflow:hidden" src="https://media-image1.baydn.com/da6090a5609701a672ee86efb6a72ae95ff92a544db2cff3361ef4a62fd7f202.png" alt="文章图片"><div class="img-news-info"><p class="img-news-meta"><span><!-- react-text: 1519 -->难度：<!-- /react-text --><!-- react-text: 1520 -->高考 四级<!-- /react-text --></span><span><!-- react-text: 1522 -->单词：<!-- /react-text --><!-- react-text: 1523 -->173<!-- /react-text --></span><span><!-- react-text: 1525 -->读后感：<!-- /react-text --><!-- react-text: 1526 -->428<!-- /react-text --></span></p><p class="img-news-title">1 dead, 31 hospitalized for food poisoning in NW China</p></div></a></div>

             </div>


            </div>
            <div class="span4">

                <div class="widget">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Some Stats</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <canvas id="pie-chart" class="chart-holder" height="250" width="538"></canvas>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->




            </div> <!-- /span6 -->

         </div>

          <!-- /row -->

          <div class="row">



            <div class="span8">

                <div class="widget">

                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                        <h3>Another Chart</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <canvas id="bar-chart" class="chart-holder" height="250" width="538"></canvas>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

            </div> <!-- /span8 -->
             <div class="span4">

                <div class="widget">

                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                        <h3>Another Chart</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <canvas id="bar-chart" class="chart-holder" height="250" width="538"></canvas>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

              </div> <!-- /span4 -->

          </div> <!-- /row -->







        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script>

var pieData = [
    {
        value: 30,
            color: "#F38630"
                },
                {
                    value: 50,
                        color: "#E0E4CC"
                },
                {
                    value: 100,
                        color: "#69D2E7"
                }

            ];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

    </script>
