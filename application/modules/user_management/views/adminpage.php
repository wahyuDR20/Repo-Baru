<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <h1>ini adalah halaman admin</h1> -->
    <!-- <a href="<?php echo site_url('user_management/user/logout'); ?>">Logout</a> -->
    <!-- <a href="<?php echo site_url("user_management/user/register_load")?>">Register</a> -->
    <div class="container-fluid">

<div class="row my-3">
        <!-- bar charts group -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="card ">
                <div class="card-header white">
                    <h6>Bar Graph</h6>
                </div>
                <div class="card-body">
                        <div id="mainb" style="height:350px;"></div>
                </div>
            </div>
        </div>
        <!-- /bar charts group -->

        <!-- pie chart -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Mini Pie</h6>
                </div>
                <div class="card-body">
                        <div id="echart_mini_pie" style="height:350px;"></div>
                </div>
            </div>
        </div>
        <!-- /Pie chart -->
    </div>
    <div class="row my-3">
            <!-- bar charts group -->
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header white">
                        <h6>Pie Graph</h6>
                    </div>
                    <div class="card-body">
                            <div id="echart_pie" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <!-- /bar charts group -->

            <!-- pie chart -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header white">
                        <h6>Pie Area</h6>
                    </div>
                    <div class="card-body">
                            <div id="echart_pie2" style="height:350px;"></div>
                    </div>
                </div>
            </div>
            <!-- /Pie chart -->

            <div class="col-md-4">
                    <div class="card no-b">
                        <div class="card-header white">
                            <h6>Donut Graph</h6>
                        </div>
                        <div class="card-body">
                            <div id="echart_donut" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
        </div>
<!-- page content -->
<div class="right_col" role="main">
<div class="">

    <div class="row pt-3 pb-3">


       
    </div>
    <div class="row pt-3 pb-3">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Scatter Graph</h6>
                </div>
                <div class="card-body">
                    <div id="echart_scatter" style="height:350px;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Line Graph</h6>
                </div>
                <div class="card-body">
                    <div id="echart_line" style="height:350px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-3">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Horizontal Bar</h6>
                </div>
                <div class="card-body">
                    <div id="echart_bar_horizontal" style="height:370px;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>World Map</h6>
                </div>
                <div class="card-body">
                    <div id="echart_world_map" style="height:370px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-3">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Pyramid</h6>
                </div>
                <div class="card-body">
                    <div id="echart_pyramid" style="min-height:200px;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Sonar</h6>
                </div>
                <div class="card-body">
                    <div id="echart_sonar" style="height:370px;"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card">
                <div class="card-header white">
                    <h6>Gauge</h6>
                </div>
                <div class="card-body">
                    <div id="echart_gauge" style="height:370px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->
</div>
</div>
</body>
</html>