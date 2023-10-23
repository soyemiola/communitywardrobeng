<?php 


	include 'func.php';


	/**
	 * Volunteers
	 */
	class Volunteers extends ApplicationForm
	{
		
		// fetch recipient list
		function recipients($status=null){
			global $conn;

			if ($status) {
				$statement = "SELECT * FROM recipients WHERE checkin='$status'";
			}else{
				$statement = "SELECT * FROM recipients";
			}
			
			$record = $conn->query($statement);

			return $record;
		}

		// check in recipient
		function check_in_recipient($id){
			global $conn;

			$checkin = 'checkin';

			$statement = "UPDATE recipients SET checkin='$checkin' WHERE id='$id'";
			$ck = $conn->query($statement);

			if($ck){
				return True;
			}
		}

		
		// Update checklist
		function save_checkout($id, $accessories){
			global $conn; 

			$check_status = 'checked';

			$statement = "UPDATE recipients SET checkout_item='$accessories', checkout='$check_status' WHERE id='$id'";

			if($conn->query($statement) === TRUE){
				return True;
			}
		}

		// create accessories
		function add_accessories($name, $count){
			global $conn;

			$statement = $conn->prepare("INSERT INTO accessories(name, count) VALUES (?,?)");

			$statement->bind_param('ss', $name, $count);

			if($statement->execute()){
				return True;
			}else{
				return False;
			}
		}

		// select accesories
		function edit_accessories($id){
			global $conn;

			$statement = "SELECT * FROM accessories WHERE id='$id'";
			$record = $conn->query($statement);

			return $record;
		}

		// update accessories
		function update_accessories($id, $name, $count){
			global $conn; 

			$statement = "UPDATE accessories SET name='$name', count='$count' WHERE id='$id'";

			if($conn->query($statement) === TRUE){
				return True;
			}
		}

		// fetch volunteers list
		function volunteers_list(){
			global $conn;

			$statement = "SELECT * FROM volunteers_registration";
			$record = $conn->query($statement);

			return $record;
		}

		function volunteers_details($id){
			global $conn;

			$statement = "SELECT * FROM volunteers_registration WHERE id='$id'";
			$record = $conn->query($statement);

			return $record;
		}
	}


	/**
	 * Donation
	 */
	class Donation
	{
		
		function save_donor_record($name, $email, $amount, $reference, $date){
			global $conn;

			$statement = $conn->prepare("INSERT INTO m_donors(name, email, amount, reference, date) VALUES (?,?,?,?,?)");

			$statement->bind_param('sssss', $name, $email, $amount, $reference, $date);

			if($statement->execute()){
				return True;
			}else{
				return False;
			}
		}
	}


	/**
	 * Application
	 */
	class Community
	{

		function fetch_all_user_volunteer(){
			global $conn;

			$action = $conn->query("SELECT * FROM users");

			if ($action) {
				return $action;
			}
		}

		function add_volunteer_user($name, $email, $password, $accesslevel){
			global $conn;

			$status = 1;

			$statement = "INSERT INTO users(name, email, password, accesslevel, status)VALUES(?,?,?,?,?)";
			$in = $conn->prepare($statement);
			$in->bind_param('sssss', $name, $email, $password, $accesslevel, $status);

			if ($in->execute()) {
				return True;
			}
		}

		function disable_volunteer_user($id){
			global $conn;

			$status = 0;

			$statement = $conn->query("UPDATE users SET status='$status' WHERE id='$id'");

			if($statement){
				return True;
			}
		}

		function fetch_user_volunteer($id){
			global $conn;

			$action = $conn->query("SELECT * FROM users WHERE id='$id'");

			if ($action) {
				return $action;
			}
		}

		function update_volunteer_user($id, $name, $email, $password, $accesslevel){
			global $conn;

			$status = 0;

			$statement = $conn->query("UPDATE users SET name='$name', email='$email', $password='$password', accesslevel='$accesslevel', status='$status' WHERE id='$id'");

			if($statement){
				return True;
			}
		}


		function delete_user_volunteer($id){
			global $conn;

			$action = $conn->query("DELETE FROM users WHERE id='$id'");

			if ($action) {
				return True;
			}
		}


		function authenticate($email, $password){
			global $conn;

			$status = 1;

			$statement = "SELECT * FROM users WHERE email='$email' and password='$password' and status='$status' LIMIT 1";
			$record = $conn->query($statement);

			if ($record) {
				return $record;
			}
			
		}
		
		function total_registered(){
			global $conn;

			$statement = 'SELECT count(*) as count FROM recipients';
			$record = $conn->query($statement);

			return $record;
		}

		function total_gifted(){
			global $conn;

			$statement = 'SELECT count(*) as count FROM recipients WHERE checkout != "" and checkout_item != ""';
			$record = $conn->query($statement);

			return $record;
		}

		function volunteers(){
			global $conn;

			$status = 1;

			$statement = 'SELECT count(*) as count FROM volunteers_registration WHERE status="$status"';
			$record = $conn->query($statement);

			return $record;
		}

		function volunteers_form_submit(){
			global $conn;

			$status = 0;

			$statement = 'SELECT * FROM volunteers_registration WHERE status="$status"';
			$record = $conn->query($statement);

			return $record;
		}

		function total_accessories_items(){
			global $conn;

			$statement = 'SELECT count(*) as count, sum(count) as total FROM accessories';
			$record = $conn->query($statement);

			return $record;
		}


		// function to set volunteers status
		function set_volunteer_status($status, $volunteer_id){
			global $conn;

			$statement = "UPDATE volunteers_registration SET status='$status' WHERE id='$volunteer_id'";
			$update = $conn->query($statement);

			if($update){
				return True;
			}else{
				return False;
			}
		}
	}
?>