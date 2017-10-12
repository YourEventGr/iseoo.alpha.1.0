<!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div> -->
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Events</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Venues</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Equipments</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Sponsors</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <!-- <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Transaction Summary <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div> -->
          <br />
          <script type="text/javascript">
                window.onload = function () {
                  var chart = new CanvasJS.Chart("chartContainer",
                  {

                    title:{
                      text: "Transaction",
                      fontSize: 30
                    },
                                      animationEnabled: true,
                    axisX:{

                      gridColor: "Silver",
                      tickColor: "silver",
                      valueFormatString: "DD/MMM"

                    },                        
                                      toolTip:{
                                        shared:true
                                      },
                    theme: "theme2",
                    axisY: {
                      gridColor: "Silver",
                      tickColor: "silver"
                    },
                    legend:{
                      verticalAlign: "center",
                      horizontalAlign: "right"
                    },
                    data: [
                    {        
                      type: "line",
                      showInLegend: true,
                      lineThickness: 2,
                      name: "Revenue",
                      markerType: "square",
                      color: "#F08080",
                      dataPoints: [
                      { x: new Date(2010,0,3), y: 650 },
                      { x: new Date(2010,0,5), y: 700 },
                      { x: new Date(2010,0,7), y: 710 },
                      { x: new Date(2010,0,9), y: 658 },
                      { x: new Date(2010,0,11), y: 734 },
                      { x: new Date(2010,0,13), y: 963 },
                      { x: new Date(2010,0,15), y: 847 },
                      { x: new Date(2010,0,17), y: 853 },
                      { x: new Date(2010,0,19), y: 869 },
                      { x: new Date(2010,0,21), y: 943 },
                      { x: new Date(2010,0,23), y: 970 }
                      ]
                    },
                    {        
                      type: "line",
                      showInLegend: true,
                      name: "Total Order",
                      color: "#20B2AA",
                      lineThickness: 2,

                      dataPoints: [
                      { x: new Date(2010,0,3), y: 510 },
                      { x: new Date(2010,0,5), y: 560 },
                      { x: new Date(2010,0,7), y: 540 },
                      { x: new Date(2010,0,9), y: 558 },
                      { x: new Date(2010,0,11), y: 544 },
                      { x: new Date(2010,0,13), y: 693 },
                      { x: new Date(2010,0,15), y: 657 },
                      { x: new Date(2010,0,17), y: 663 },
                      { x: new Date(2010,0,19), y: 639 },
                      { x: new Date(2010,0,21), y: 673 },
                      { x: new Date(2010,0,23), y: 660 }
                      ]
                    }

                    
                    ],
                        legend:{
                          cursor:"pointer",
                          itemclick:function(e){
                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                              e.dataSeries.visible = false;
                            }
                            else{
                              e.dataSeries.visible = true;
                            }
                            chart.render();
                          }
                        }
                  });

              chart.render();
              }
              </script>
              <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
              <div id="chartContainer" style="height: 300px; width: 100%;">  </div>


          
        </div>
        <!-- /page content -->