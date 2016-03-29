<?php require_once('header.php');?>
    <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-header">
                            <div class="pull-right text-right" style="line-height: 14px">
                                <small>
                                    <a href="<?php echo base_url();?>cms/registration">All Registrations</a>
                                    / <a href="<?php echo base_url();?>cms/registration/show/<?php echo $team->id;?>">Read Registration</a>
                                     / Edit Registration
                                </small>
                            </div>
                            <div class="header-icon">
                                <i class="pe page-header-icon pe-7s-mail-open"></i>
                            </div>
                            <div class="header-title">
                                <h3 class="m-b-xs">Edit Registration</h3>
                                <small>
                                    Edit online registrations and inquiries
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
                                    <div class="col-md-12">
                                        <form action="" method="post">
                                            <h4>Main</h4><br>
                                            <div class="form-group col-md-8">
                                                <label>Team Name</label>
                                                <?php echo form_error('team_name', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_name" class="form-control" value="<?php echo $team->team_name;?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Team Division</label>
                                                <?php echo form_error('division', '<font color="#e74c3c">', '</font>');?>
                                                <select name="division" class="form-control">
                                                    <option value="men" <?php echo $team->division == 'men' ? 'selected' : '';?>>Mens</option>
                                                    <option value="women" <?php echo $team->division == 'women' ? 'selected' : '';?>>Womens</option>
                                                    <option value="coed" <?php echo $team->division == 'coed' ? 'selected' : '';?>>Co-Ed</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <?php echo form_error('email', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="email" class="form-control" value="<?php echo $team->email;?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Landline</label>
                                                <?php echo form_error('landline', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="landline" class="form-control" value="<?php echo $team->landline;?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Mobile</label>
                                                <?php echo form_error('mobile', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="mobile" class="form-control" value="<?php echo $team->mobile;?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <?php echo form_error('address', '<font color="#e74c3c">', '</font>');?>
                                                <textarea name="address" class="form-control" rows="3"><?php echo $team->address;?></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Notes</label>
                                                <?php echo form_error('notes', '<font color="#e74c3c">', '</font>');?>
                                                <textarea name="notes" class="form-control" rows="3"><?php echo $team->notes;?></textarea>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Status</label>
                                                <?php echo form_error('status', '<font color="#e74c3c">', '</font>');?>
                                                <select name="status" class="form-control">
                                                    <option value="new" <?php echo $team->status == 'new' ? 'selected' : '';?>>New</option>
                                                    <option value="approved" <?php echo $team->status == 'approved' ? 'selected' : '';?>>Approved</option>
                                                    <option value="declined" <?php echo $team->status == 'declined' ? 'selected' : '';?>>Declined</option>
                                                </select>
                                                <br><br><br><br>
                                            </div>

                                            <h4>Core Players</h4><br>

                                            <div class="form-group col-md-6">
                                                <label>Team Coach</label>
                                                <?php echo form_error('team_coach', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_coach" class="form-control" value="<?php echo $team->team_coach;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Coach Contact</label>
                                                <?php echo form_error('team_coach_contact', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_coach_contact" class="form-control" value="<?php echo $team->team_coach_contact;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Coach Email</label>
                                                <?php echo form_error('team_coach_email', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_coach_email" class="form-control" value="<?php echo $team->team_coach_email;?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Team Captain #1</label>
                                                <?php echo form_error('team_captain[0]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain[]" class="form-control" value="<?php echo $team->team_captain;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Captain #1 Contact</label>
                                                <?php echo form_error('team_captain_contact[0]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain_contact[]" class="form-control" value="<?php echo $team->team_captain_contact;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Captain #1 Email</label>
                                                <?php echo form_error('team_captain_email[0]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain_email[]" class="form-control" value="<?php echo $team->team_captain_email;?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Team Captain #2</label>
                                                <?php echo form_error('team_captain[1]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain[]" class="form-control" value="<?php echo $team->team_captain_2;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Captain #2 Contact</label>
                                                <?php echo form_error('team_captain_contact[1]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain_contact[]" class="form-control" value="<?php echo $team->team_captain_2_contact;?>">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Captain #2 Email</label>
                                                <?php echo form_error('team_captain_email[1]', '<font color="#e74c3c">', '</font>');?>
                                                <input type="text" name="team_captain_email[]" class="form-control" value="<?php echo $team->team_captain_2_email;?>">
                                                <br><br>
                                            </div>

                                            <h4>Players</h4><br>
                                            <?php
                                            for ($i=0; $i < 14; $i++) { 
                                                ?>
                                                <div class="form-group col-md-6">
                                                    <label>Player #<?php echo $i + 1;?></label>
                                                    <?php echo form_error('player_name['.$i.']', '<font color="#e74c3c">', '</font>');?>
                                                    <input type="text" name="player_name[]" class="form-control" value="<?php if(isset($players[$i]->player_name))echo $players[$i]->player_name;?>">
                                                    <input type="hidden" name="player_id[]" value="<?php if(isset($players[$i]->id))echo $players[$i]->id;?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Player #<?php echo $i + 1;?> Contact</label>
                                                    <?php echo form_error('player_contact['.$i.']', '<font color="#e74c3c">', '</font>');?>
                                                    <input type="text" name="player_contact[]" class="form-control" value="<?php if(isset($players[$i]->contact))echo $players[$i]->contact;?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Player #<?php echo $i + 1;?> Email</label>
                                                    <?php echo form_error('player_email['.$i.']', '<font color="#e74c3c">', '</font>');?>
                                                    <input type="text" name="player_email[]" class="form-control" value="<?php if(isset($players[$i]->email))echo $players[$i]->email;?>">
                                                </div>
                                                <?php
                                            }
                                            ?>               
                                            <div class="pull-right">
                                                <input type="submit" class="btn btn-w-md btn-warning" value="Save Changes">                      
                                                <a href="<?php echo base_url();?>cms/registration/show/<?php echo $team->id;?>" class="btn btn-default">Cancel</a>                      
                                            </div>       
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php require_once('includes.php');?>
<?php
    if($this->session->flashdata('message')){
    ?>
    <script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };  
        toastr.warning('Yay! Changes saved!');
    });
    </script>
    <?php
    }
    else if(validation_errors()){
    ?>
    <script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };  
        toastr.error('Woah! - No changes were saved, please verify required details!');
    });
    </script>
    <?php
    }
?>
</body>
</html>