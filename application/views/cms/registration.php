<?php require_once('header.php');?>
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>All Registrations</small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-mail"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Registrations</h3>
                                <small>
                                    Online registrations and inquiries
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
                                <div class="table-responsive">
                                    <table id="tableExample2" class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Team Name</th>
                                            <th>Email</th>
                                            <th>Landline</th>
                                            <th>Mobile</th>
                                            <th></th>
                                            <th width="10px">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($teams as $value) {
                                            ?>
                                            <tr>
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
                                                    echo ucwords(strtolower($value->team_name));
                                                    ?>
                                                </td>
                                                <td><?php echo $value->email;?></td>
                                                <td><?php echo $value->landline;?></td>
                                                <td><?php echo $value->mobile;?></td>
                                                <td>
                                                    <a href="<?php echo base_url();?>cms/registration/show/<?php echo $value->id;?>"><i class="fa fa-envelope-square"></i></a>
                                                </td>
                                                <td>
                                                    <?php
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
        $('#tableExample2').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [ [8, 15, 30, -1], [8, 15, 30, "All"] ],
            "iDisplayLength": 8,
            "order": [[ 0, 'desc' ]],
            "columnDefs": [{ "orderable": false, "targets": 5 },{ "orderable": false, "targets": 4 },{ "orderable": false, "targets": 3 },{ "orderable": false, "targets": 2 }],
        });
    });
</script>
</body>
</html>