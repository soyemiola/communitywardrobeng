<script type="text/javascript" src="files/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<script type="text/javascript" src="files/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>

<script src="files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="files/assets/pages/data-table/js/dataTables.bootstrap4.min.js"></script>
<script src="files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>	

<script type="text/javascript" src="files/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-i18next/jquery-i18next.min.js"></script>

<script src="files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="files/assets/js/pcoded.min.js"></script>
<script src="files/assets/js/vartical-layout.min.js"></script>
<script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="files/assets/js/script.js"></script>
<script src="files/assets/js/multiselect-dropdown.js" ></script>

<script>
	if (document.getElementById('alert_msg_id')) {
		setTimeout(function(){
		    document.getElementById('alert_msg_id').style.display = 'None';
		}, 3000)
	}

	const edit_user = (id)=>{
		id = document.getElementById(id);

		$('#u_name').val(id.dataset.name);
		$('#u_email').val(id.dataset.email);

		access = document.getElementById('u_accesslevel');
		x_status = document.getElementById('u_status');
		
		for (var i=0; i < access.options.length; i++) {
			var option = access.options[i];

		  	if (option.value === id.dataset.accesslevel) {
		    	option.selected = true;
		  	}
		}


		for (var x=0; x < x_status.options.length; x++) {
			var option = x_status.options[x];

		  	if (option.value === id.dataset.ustatus) {
		    	option.selected = true;
		  	}
		}

		$('#edituser').modal('show');
	}
    
</script>

		<!-- create new user -->
		<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="causes" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="causes-selected-title">Add New User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div id="causes-selected-content">
		      		<form method="post" action="../assets/php/adduser.php">
		        		<input type="hidden" name="robot">
		        		<div class="form-group">
		        			<label>Full name</label>
		        			<input type="text" name="name" class="form-control shadow-none" required>
		        		</div>
		        		<div class="form-group">
		        			<label>email</label>
		        			<input type="email" name="email" class="form-control shadow-none" required>
		        		</div>
		        		<div class="form-group">
		        			<label>Password</label>
		        			<input type="password" name="password" class="form-control shadow-none" required>
		        		</div>
		        		<div class="form-group">
		        			<label>Access Level</label>
		        			<select class="form-control shadow-none" name="accesslevel">
		        				<option selected disabled>select option</option>
		        				<option value="1">Admin</option>
		        				<option value="2">Volunteer</option>
		        			</select>
		        		</div>
		        		<div class="form-group">
		        			<button type="submit" class="btn btn-sm btn-primary btn-block">
		        				Add user
		        			</button>
		        		</div>
		        	</form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>


		<!-- edit user record -->
		<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="causes" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="causes-selected-title">Update User record</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<div id="causes-selected-content">
		      		<form method="post" action="../assets/php/delete.php">
		        		<input type="hidden" name="robot">
		        		<div class="form-group">
		        			<label>Full name</label>
		        			<input type="text" name="name" id="u_name" class="form-control shadow-none" required>
		        		</div>
		        		<div class="form-group">
		        			<label>email</label>
		        			<input type="email" name="email" id="u_email" class="form-control shadow-none" required>
		        		</div>
		        		<div class="form-group">
		        			<label>Access Level</label>
		        			<select class="form-control shadow-none" name="accesslevel" id="u_accesslevel">
		        				<option selected disabled>select option</option>
		        				<option value="1">Admin</option>
		        				<option value="2">Volunteer</option>
		        			</select>
		        		</div>
		        		<div class="form-group">
		        			<label>Status</label>
		        			<select class="form-control shadow-none" name="status" id="u_status">
		        				<option selected disabled>select option</option>
		        				<option value="1">Active</option>
		        				<option value="2">Disabled</option>
		        			</select>
		        		</div>
		        		<div class="form-group">
		        			<button type="submit" class="btn btn-sm btn-primary btn-block">
		        				Update record
		        			</button>
		        		</div>
		        	</form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

