<?php 
	// db connection
	include 'conn.php';
	

	class ApplicationForm
	{
		
		function __construct()
		{
			
		}

		// check if email already exit
		function check_email_exist($email){
			global $conn;

			$statement = "SELECT * FROM recipients WHERE email= '$email' LIMIT 1";
			$record = $conn->query($statement);

			return $record;
		}

		// check if number already exit
		function check_number_exist($number){
			global $conn;

			$statement = "SELECT * FROM recipients WHERE number= '$number' LIMIT 1";
			$record = $conn->query($statement);

			return $record;
		}

		// function to save registration form
		function new_recipient($number, $email, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream, $appointment_date, $appointment_address, $address_other, $time_slot){
			
			global $conn;

			$statement = $conn->prepare("INSERT INTO recipients(number, email, gender, address, purpose_of_application, purpose_of_application_others, item_needed, item_needed_others, shoe_size, shoe_size_other, cloth_size, cloth_size_other, accessories, accessories_others, date, access_code, stream, appointment_date, appointment_address,
				address_other, time_slot) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$statement->bind_param('sssssssssssssssssssss', $number, $email, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream, $appointment_date, $appointment_address, $address_other, $time_slot);

			if($statement->execute()){
				return $statement->insert_id;
			}else{
				return False;
			}
			
		}

		// appointment slip
		function appointment_slip($id){
			global $conn;

			$statement = "SELECT * FROM recipients WHERE id= '$id' LIMIT 1";
			$record = $conn->query($statement);

			return $record;

		}

		// purpose of application record
		function app_purpose(){
			global $conn;

			$statement = "SELECT * FROM application_purpose";
			$record = $conn->query($statement);

			return $record;
		}


		// item needed records
		function items_needed(){
			global $conn;

			$statement = "SELECT * FROM items_needed";
			$record = $conn->query($statement);

			return $record;
		}


		// Accessories records
		function accessories(){
			global $conn;

			$statement = "SELECT * FROM accessories";
			$record = $conn->query($statement);

			return $record;
		}

		// access code generate
		function accesscode($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $randomString = '';

		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, strlen($characters) - 1)];
		    }

		    return $randomString;
		}


		// appointment stream
		function application_stream(){
			global $conn;

			$statement = "SELECT * FROM application_stream";
			$record = $conn->query($statement);

			if ($record->num_rows > 0) {
				foreach ($record as $key => $value) {
					$stream_name = $value['name'];
					$stream_slot = $value['slot'];
					$appointment_date = $value['date'];
					$address = $value['address'];

					$available_slot = $this->count_stream_slots($stream=$stream_name, $slot=$stream_slot);

					if ($available_slot != 0) {
						return array($stream_name, $appointment_date, $address);
					}
				}
			}
		}


		function count_stream_slots($stream, $slot){
			global $conn;

			$statement = "SELECT count(*) as slot FROM recipients WHERE stream = '$stream'";
			$record = $conn->query($statement);

			foreach ($record as $key => $value) {
				return $slot - $value['slot'];
			}
		}

		function sendMail($email, $access_code, $stream, $appointment_date, $appointment_address){
			$data = [
				'personalizations' => [
	                [
	                	'to' => [
	                    	['email' => $email]
	                 	],
	                    'dynamic_template_data' => [
		                    'access_code' => $access_code,
		                    'stream' => $stream,
		                    'appointment_date' => $appointment_date,
		                    'appointment_address' => $appointment_address
	                    ],
	                ],
                ],
                'from' => ['email' => 'info@soastechnology.com.ng'],
                'template_id' => 'd-f0bc3b55a8a74804863aa2e43cf87e36 ',
            ];
                    
            $ch = curl_init('https://api.sendgrid.com/v3/mail/send');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
				'Authorization: Bearer ' . $sendgridApiKey,
				'Content-Type: application/json',
			]);
                    
			$result = curl_exec($ch);
			curl_close($ch);                    
                    
		}
	}



	/**
	 * 
	 */
	class Form extends ApplicationForm
	{
		
		function __construct()
		{
			// code...
		}

		function coy_profile(){
			global $conn;

			$statement = "SELECT * FROM coy_profile LIMIT 1";
			$record = $conn->query($statement);

			return $record;
		}
	}


	/**
	 * 
	 */
	class Volunteers_Registration
	{
		function application_form($date, $name, $number, $email, $gender, $address, $dob, $position, $eme_contact, $eme_contact_rel, $eme_contact_rel_other, $aboutus, $previous_recipient, $publicity, $term_of_agreement)
		{
			global $conn;
			$status = 0;

			$statement = $conn->prepare("INSERT INTO volunteers_registration(date, name, number, email, gender, address, dob, position, eme_contact, eme_contact_rel, eme_contact_rel_other, aboutus, previous_recipient, publicity, term_of_agreement, status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$statement->bind_param('ssssssssssssssss', $date, $name, $number, $email, $gender, $address, $dob, $position, $eme_contact, $eme_contact_rel, $eme_contact_rel_other, $aboutus, $previous_recipient, $publicity, $term_of_agreement, $status);

			if($statement->execute()){
				return True;
			}else{
				return False;
			}
		}
	}

?>
