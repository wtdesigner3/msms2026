<!-- ================== BEGIN BASE JS ================== -->
	<!--<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>-->
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/js/demo/table-manage-responsive.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
    <script src="assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="assets/js/demo/form-wysiwyg.demo.min.js"></script>
	<script src="assets/js/datepicker.js"></script>
    <script type="text/javascript">$('.pickdate').datepicker({/*startDate: new Date(),*/autoclose: true, format: 'yyyy-mm-dd'});$('form').attr('autocomplete', 'off')</script>
    <script type="text/javascript">
		$(window).load(function() {
		function getQueryVariable(variable) {
			var query = window.location.search.substring(1);
			var vars = query.split('&');
			for (var i = 0; i < vars.length; i++) {
				var pair = vars[i].split('=');
				if (decodeURIComponent(pair[0]) == variable) {
					return decodeURIComponent(pair[1]);
				}
			}
			return "notfound";
			console.log('Query variable %s not found', variable);
		}
		});
		
	  
		
	<?php if(isset($_SESSION['success'])){ ?>
		  $.toast({
				text: '<?php echo $_SESSION['success']; ?>',
				heading: 'Success',
				showHideTransition: 'slide',
				icon: 'success'
			});
	<?php } unset($_SESSION['success']); ?>	
	
	
	<?php if(isset($_SESSION['error'])) { ?>	
		  $.toast({
				text: '<?php echo $_SESSION['error']; ?>',
				heading: 'Ooh Snapp..',
				showHideTransition: 'slide',
				icon: 'error'
			});
	<?php } unset($_SESSION['error']); ?>	


	<?php if(isset($_SESSION['info'])) { ?>	
		  $.toast({
				text: '<?php echo $_SESSION['info']; ?>',
				heading: 'Ooh Great..',
				showHideTransition: 'slide',
				icon: 'info'
			});
	<?php } unset($_SESSION['info']); ?>
	
	
	<?php if(isset($_SESSION['warning'])){ ?>	
		  $.toast({
				text: '<?php echo $_SESSION['warning']; ?>',
				heading: 'Ooh..',
				showHideTransition: 'slide',
				icon: 'warning'
			});
	<?php } unset($_SESSION['warning']); ?>
	
	<?php if(isset($_SESSION['status'])) { ?>	
		  $.toast({
				text: '<?php echo $_SESSION['status']; ?>',
				heading: 'Ooh Great..',
				showHideTransition: 'slide',
			});
	<?php } unset($_SESSION['status']); ?>
	
		
 </script>
    
   