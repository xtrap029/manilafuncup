<?php require_once('header.php');?>
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>
                                    <a href="<?php echo base_url();?>cms/registration">All Registrations</a>
                                     / Read Registration
                                </small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-mail-open"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Read Registration</h3>
                                <small>
                                    Read online registrations and inquiries
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <h2 class="m-t-xs m-b-none">
                                                <?php echo ucwords(strtolower($team->team_name));?>
                                            </h2>
                                            <small>Team Division: <font color="#f6a821"><?php echo ucfirst($team->division);?></font></small><br>
                                            <?php
                                            switch ($team->status) {
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
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <table class="table small m-t-sm">
                                            <tbody>
                                            <tr>
                                                <td>Email</td>
                                                <td><strong class="c-white"><?php echo $team->email;?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><strong class="c-white"><?php echo $team->address;?></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-3">
                                        <table class="table small m-t-sm">
                                            <tbody>
                                            <tr>
                                                <td>Landline</td>
                                                <td><strong class="c-white"><?php echo $team->landline;?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>
                                                <td><strong class="c-white"><?php echo $team->mobile;?></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-2 m-t-sm pull-right" style="text-align:right">
                                        <span class="c-white"><?php echo date_format(date_create($team->date_created), "g:ia - F jS");?></span>
                                        <br>
                                        <small>Date Received</small>
                                        <br>
                                        <a href="<?php echo base_url();?>cms/registration/edit/<?php echo $team->id;?>"><i class="fa fa-edit"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <h4>Core Players</h4>

                                <div class="v-timeline vertical-container">
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <div class="p-sm">
                                                <span class="vertical-date pull-right"> <small>Team Coach</small> </span>
                                                <h2><font color="#f6a821"><?php echo ucwords(strtolower($team->team_coach));?></font></h2>
                                                <p><?php echo $team->team_coach_email." | ".$team->team_coach_contact;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <div class="p-sm">
                                                <span class="vertical-date pull-right"> <small>Team Captain #1</small> </span>
                                                <h2><font color="#f6a821"><?php echo ucwords(strtolower($team->team_captain));?></font></h2>
                                                <p><?php echo $team->team_captain_email." | ".$team->team_captain_contact;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline-block">
                                        <div class="vertical-timeline-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="vertical-timeline-content">
                                            <div class="p-sm">
                                                <span class="vertical-date pull-right"> <small>Team Captain #2</small> </span>
                                                <h2><font color="#f6a821"><?php echo ucwords(strtolower($team->team_captain_2));?></font></h2>
                                                <p><?php echo $team->team_captain_2_email." | ".$team->team_captain_2_contact;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-filled">
                                    <div class="panel-body">
                                        <font color="#f6a821">Registration Notes</font><br><br>
                                        <?php echo $team->notes;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <h4>Players</h4>

                                <div class="v-timeline vertical-container">
                                    <?php
                                    foreach ($players as $key => $value) {
                                        ?>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small>Player <?php echo $key + 1;?></small> </span>
                                                    <h2><font color="#f6a821"><?php echo ucwords(strtolower($value->player_name));?></font></h2>
                                                    <p><?php echo $value->email." | ".$value->contact;?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php  
                                    }
                                    ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>                </div>
            </div>
    </section>

<?php require_once('includes.php');?>
</body>
</html>