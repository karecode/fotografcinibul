@extends('backend.layouts.app')
@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Haftalık</span>
                        <h5>Hit Raporu</h5>
                    </div>
                    <div class="ibox-content">
                        <?php $visitors = 0; ?>
                        @foreach($aylik as $a)
                            <?php $visitors += $a->visitors?>
                        @endforeach
                        <h1 class="no-margins">{{$visitors}}</h1>

                        <small>Toplam ziyaretçi</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Annual</span>
                        <h5>Orders</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">275,800</h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                        <small>New orders</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Today</span>
                        <h5>Vistits</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">106,120</h1>
                        <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                        <small>New visits</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label @if($yeni_kayit_ort>100) label-primary @elseif($yeni_kayit_ort<100) label-danger @else label-info @endif pull-right">Bu Hafta</span>
                        <h5>Yeni Üye</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">{{$yeni_kullanici_sayisi}}</h1>
                        @if($yeni_kayit_ort>100)
                            <div class="stat-percent font-bold text-navy">{{$yeni_kayit_ort}}% <i
                                        class="fa fa-level-up"></i></div>
                        @elseif($yeni_kayit_ort<100)
                            <div class="stat-percent font-bold text-danger">{{$yeni_kayit_ort}}% <i
                                        class="fa fa-level-down"></i></div>
                        @else
                            <div class="stat-percent font-bold text-info">{{$yeni_kayit_ort}}% <i
                                        class="fa "></i></div>
                        @endif

                        <small>Toplam</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            <div class="col-lg-12" style="min-height: 400px;max-height: 250px">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Haftalık Hit
                            <small>Sitenin haftalık hit raporu</small>
                        </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div style="height: 300px!important;" id="ct-chart1" class="ct-perfect-fourth"></div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Kullanıclıarın Kullandığı Web Tarayıcılar</h5>
                    </div>
                    <div class="ibox-content">
                        <canvas id="doughnutChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sayfa Görüntülenme Grafiği</h5>
                    </div>
                    <div class="ibox-content">
                        <canvas id="doughnutChart"></canvas>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Messages</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content ibox-heading">
                            <h3><i class="fa fa-envelope-o"></i> New messages</h3>
                            <small><i class="fa fa-tim"></i> You have 22 new messages and 16 waiting in draft folder.
                            </small>
                        </div>
                        <div class="ibox-content">
                            <div class="feed-activity-list">

                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right text-navy">1m ago</small>
                                        <strong>Monica Smith</strong>
                                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum
                                        </div>
                                        <small class="text-muted">Today 5:60 pm - 12.06.2014</small>
                                    </div>
                                </div>

                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">2m ago</small>
                                        <strong>Jogn Angel</strong>
                                        <div>There are many variations of passages of Lorem Ipsum available</div>
                                        <small class="text-muted">Today 2:23 pm - 11.06.2014</small>
                                    </div>
                                </div>

                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">5m ago</small>
                                        <strong>Jesica Ocean</strong>
                                        <div>Contrary to popular belief, Lorem Ipsum</div>
                                        <small class="text-muted">Today 1:00 pm - 08.06.2014</small>
                                    </div>
                                </div>

                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">5m ago</small>
                                        <strong>Monica Jackson</strong>
                                        <div>The generated Lorem Ipsum is therefore</div>
                                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                    </div>
                                </div>


                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">5m ago</small>
                                        <strong>Anna Legend</strong>
                                        <div>All the Lorem Ipsum generators on the Internet tend to repeat</div>
                                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                    </div>
                                </div>
                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">5m ago</small>
                                        <strong>Damian Nowak</strong>
                                        <div>The standard chunk of Lorem Ipsum used</div>
                                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                    </div>
                                </div>
                                <div class="feed-element">
                                    <div>
                                        <small class="pull-right">5m ago</small>
                                        <strong>Gary Smith</strong>
                                        <div>200 Latin words, combined with a handful</div>
                                        <small class="text-muted">Yesterday 8:48 pm - 10.06.2014</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Siteye Erişim Haritası <small>(Haftalık)</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">

                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div id="world-map" style="height: 300px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>User project list</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <table class="table table-hover no-margins">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>User</th>
                                            <th>Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                            <td>Samantha</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 24%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-warning">Canceled</span></td>
                                            <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                            <td>Monica</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 66%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                            <td>John</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 54%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 02:20pm</td>
                                            <td>Agnes</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 09:40pm</td>
                                            <td>Janet</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 22%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="label label-primary">Completed</span></td>
                                            <td><i class="fa fa-clock-o"></i> 04:10am</td>
                                            <td>Amelia</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 66%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small>Pending...</small>
                                            </td>
                                            <td><i class="fa fa-clock-o"></i> 12:08am</td>
                                            <td>Damian</td>
                                            <td class="text-navy"><i class="fa fa-level-up"></i> 23%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Small todo list</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <ul class="todo-list m-t small-list">
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                            <span class="m-l-xs todo-completed">Buy a milk</span>

                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Go to shop and find some products.</span>

                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Send documents to Mike</span>
                                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins
                                            </small>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Go to the doctor dr Smith</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                            <span class="m-l-xs todo-completed">Plan vacation</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Create new stuff</span>
                                        </li>
                                        <li>
                                            <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                            <span class="m-l-xs">Call to Anna for dinner</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
@stop
@section('css')
    <link href="/backend/css/plugins/chartist/chartist.min.css" rel="stylesheet">
@stop
@section('js')
    <!-- Flot -->
    <script src="/backend/js/plugins/flot/jquery.flot.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="/backend/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="/backend/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/backend/js/demo/peity-demo.js"></script>


    <!-- jQuery UI -->
    <script src="/backend/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="/backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="/backend/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="/backend/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/backend/js/demo/sparkline-demo.js"></script>

    <script src="/backend/js/plugins/chartist/chartist.min.js"></script>

    <script src="/backend/js/plugins/chartJs/Chart.min.js"></script>


    <script>
        $(document).ready(function () {


            var mapData = {

                @foreach($harita as $h)
                <?php $j = 0; ?>
                "{{$h[0]}}": {{$h[1]}},
                @endforeach

            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>



    <script>
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        $(document).ready(function () {


            // Simple line

            new Chartist.Line('#ct-chart1', {
                labels: [@foreach($aylik as $a)'<?php $s = explode(' ', $a->date);echo $s[0];?>',@endforeach],
                series: [

                    [@foreach($aylik as $a)<?php echo $a->visitors?>,@endforeach]

                ]
            }, {
                fullWidth: true,
                chartPadding: {
                    right: 40
                }
            });

            var doughnutData = [
                    @foreach($most_viewed_pages as $a)
                {
                    value: <?php echo $a->pageViews;?>,
                    color: getRandomColor(),
                    highlight: "#1ab394",
                    label: "<?php echo $a->url?>"
                },
                @endforeach
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
            };
            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var myNewChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);


            var doughnutData = [
                    @foreach($top_browsers as $a)
                {
                    value: <?php echo $a->sessions;?>,
                    color: getRandomColor(),
                    highlight: "#1ab394",
                    label: "<?php echo $a->browser?>"
                },
                @endforeach
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
            };
            var ctx = document.getElementById("doughnutChart2").getContext("2d");
            var myNewChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);
        });
    </script>

@stop