<script src="<?php echo base_url();?>assets/luna_theme/vendor/pacejs/pace.min.js"></script>
<script src="<?php echo base_url();?>assets/luna_theme/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/luna_theme/vendor/bootstrap/js/bootstrap.min.js"></script>

<?php
if(isset($menu)){
    if($menu == "dash"){
    	?>
        <script src="<?php echo base_url();?>assets/luna_theme/vendor/toastr/toastr.min.js"></script>
		<script src="<?php echo base_url();?>assets/luna_theme/vendor/sparkline/index.js"></script>
		<script src="<?php echo base_url();?>assets/luna_theme/vendor/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url();?>assets/luna_theme/vendor/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url();?>assets/luna_theme/vendor/flot/jquery.flot.spline.js"></script>

		<script src="<?php echo base_url();?>assets/timecircle/TimeCircles.js"></script>
        <script>
        $(function(){
            $("#DateCountdown").TimeCircles({
            "animation": "smooth",
            "bg_width": 0.2,
            "fg_width": 0.03,
            "circle_bg_color": "#ffffff",
            "time": {
                "Days": {
                    "text": "Days",
                    "color": "#f6a821",
                    "show": true
                },
                "Hours": {
                    "text": "Hours",
                    "color": "#f6a821",
                    "show": true
                },
                "Minutes": {
                    "text": "Minutes",
                    "color": "#f6a821",
                    "show": true
                },
                "Seconds": {
                    "text": "Seconds",
                    "color": "#f6a821",
                    "show": false
                }
            }
        });
        })
        </script>
    	<?php
    }
    else if($menu == "reg" || $menu == "team"){
    	?>
        <script src="<?php echo base_url();?>assets/luna_theme/vendor/toastr/toastr.min.js"></script>
    	<?php
    }
}
?>

<script src="<?php echo base_url();?>assets/luna_theme/vendor/datatables/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/luna_theme/scripts/luna.js"></script>