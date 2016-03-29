<?php require_once('header.php');?>
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>Manila Fun Cup 2016<br>Dashboard<br> <span class="c-white">v.1.0</span></small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-ball"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Manila Fun Cup 2016</h3>
                                <small>
                                    CMS page for managing player registrations and inquiries.
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-filled">

                            <div class="panel-body">
                                <h1 class="m-b-none">
                                    <?php echo $team->id;?>
                                </h1>
                                <div class="small">Playing Teams</div><br><br>
                                <div class="slight m-t-sm">
                                    <span class="c-white"><?php echo $pending->id;?></span> 
                                    &nbsp;&nbsp;Pending
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="c-white"><?php echo $declined->id;?></span> 
                                    &nbsp;&nbsp;Rejected
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h1 class="m-b-none">
                                    <?php echo $player->id;?>
                                </h1>
                                <div class="small">Approved Players</div><br><br>
                                <div class="slight m-t-sm">
                                    <span class="c-white"><?php echo $pending_player->id;?></span> 
                                    &nbsp;&nbsp;Pending
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="c-white"><?php echo $declined_player->id;?></span> 
                                    &nbsp;&nbsp;Rejected
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h1 class="m-b-none">
                                    <?php echo $pending->id;?>
                                </h1>
                                <div class="small">New/Pending Registrations</div><br><br>
                                <div class="slight m-t-sm"><i class="fa fa-clock-o"> </i> Last Inquired: <span class="c-white"><?php echo date_format(date_create($latest->date_created), "g:ia - F jS");?></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h1 class="m-b-none">
                                    <div id="DateCountdown" data-date="2016-04-30 00:00:00" style="width: 100%;"></div>
                                </h1>
                                <div class="small pull-right">Countdown before ManilaFunCup'16</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">

                                <h1 class="m-t-md m-b-xs" style="margin-top: 30px">
                                    <i class="pe pe-7s-flag text-warning"> </i>
                                    <?php echo ($team->id + $pending->id + $declined->id);?>
                                    <small>Teams</small>
                                </h1>
                                <div class="small">
                                    <span class="c-white">Total Interested Teams</span> from the beginning of activity. See detailed charts for more information locations and traffic source.
                                </div>

                                <h1 class="m-t-md m-b-xs" style="margin-top: 30px">
                                    <i class="pe pe-7s-add-user text-warning"> </i>
                                    <?php echo ($player->id + $pending_player->id + $declined_player->id);?>
                                    <small>Players</small>
                                </h1>
                                <div class="small">
                                    <span class="c-white">Total Interested Players</span> from the beginning of activity. See detailed charts for more information locations and traffic source.
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table  class="table">
                                        <thead>
                                        <tr>
                                            <th>Newest Team</th>
                                            <th>Date</th>
                                            <th>Division / Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($latest_team as $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo ucwords(strtolower($value->team_name));?></td>
                                                <td><?php echo date_format(date_create($value->date_created), "g:ia - F jS");?></td>
                                                <td>
                                                    <?php
                                                    switch ($value->division) {
                                                        case 'men':
                                                            ?>
                                                            <i class="fa fa-male"></i> 
                                                            <?php
                                                            break;
                                                        case 'women':
                                                            ?>
                                                            <i class="fa fa-female"></i> 
                                                            <?php
                                                            break;
                                                        
                                                        default:
                                                            ?>
                                                            <i class="fa fa-users"></i> 
                                                            <?php
                                                            break;
                                                    }
                                                    switch ($value->status) {
                                                        case 'new':
                                                            ?>
                                                            <small class="label" style="background-color:#27ae60">New</small>
                                                            <?php
                                                            break;
                                                        case 'approved':
                                                            ?>
                                                            <small class="label" style="background-color:#2980b9">Approved</small>
                                                            <?php
                                                            break;
                                                        case 'declined':
                                                            ?>
                                                            <small class="label" style="background-color:#c0392b">Disapproved</small>
                                                            <?php
                                                            break;
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url();?>cms/registration/show/<?php echo $value->id;?>"><i class="fa fa-envelope-square"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php require_once('includes.php'); ?>
<script>
    $(document).ready(function () {
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };  
        toastr.warning("Welcome back Admin! <br><small>How's your day?</small>");

        // Sparkline charts
        var sparklineCharts = function () {

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();

        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ "#f7af3e","#DE9536"]
        };

        $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);
    });
</script>
</body>
</html>