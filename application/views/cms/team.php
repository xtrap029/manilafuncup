<?php require_once('header.php');?>
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>Playing Teams</small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-flag"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Playing Teams</h3>
                                <small>
                                    All registered and approved teams
                                </small>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="font-example-box" style="min-height: auto;margin:0px;">
                                        <span class="pe-7s-user" style="font-size:70px"></span>
                                    </div>
                                    <table class="table table-striped table-hover tableExample2">
                                        <thead>
                                        <tr>
                                            <th><h4>Team Name</h4></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($men as $value) {
                                            ?>
                                            <tr>
                                                <td><a href="<?php echo base_url();?>cms/registration/show/<?php echo $value->id;?>"><?php echo ucwords(strtolower($value->team_name));?></a></td>
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

                    <div class="col-md-4">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="font-example-box" style="min-height: auto;margin:0px;">
                                        <span class="pe-7s-user-female" style="font-size:70px"></span>
                                    </div>
                                    <table class="table table-striped table-hover tableExample2">
                                        <thead>
                                        <tr>
                                            <th><h4>Team Name</h4></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($women as $value) {
                                            ?>
                                            <tr>
                                                <td><a href="<?php echo base_url();?>cms/registration/show/<?php echo $value->id;?>"><?php echo ucwords(strtolower($value->team_name));?></a></td>
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

                    <div class="col-md-4">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="font-example-box" style="min-height: auto;margin:0px;">
                                        <span class="pe-7s-users" style="font-size:70px"></span>
                                    </div>
                                    <table class="table table-striped table-hover tableExample2">
                                        <thead>
                                        <tr>
                                            <th><h4>Team Name</h4></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($coed as $value) {
                                            ?>
                                            <tr>
                                                <td><a href="<?php echo base_url();?>cms/registration/show/<?php echo $value->id;?>"><?php echo ucwords(strtolower($value->team_name));?></a></td>
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

<?php require_once('includes.php');?>
<script>  
    $(document).ready(function () {
        $('.tableExample2').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthChange": false,
            "order": [[ 0, 'desc' ]],
            "paging": false,
            "searching": false,
        });
    });
</script>
</body>
</html>