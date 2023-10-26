<?php 
	// db connection
	include 'conn.php';
	
	require __DIR__ . '\twilio-php-main\src\Twilio\autoload.php';

	use Twilio\Rest\Client;

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
		function new_recipient($number, $email, $name, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream, $appointment_date, $appointment_address, $address_other, $time_slot){
			
			global $conn;

			$statement = $conn->prepare("INSERT INTO recipients(number, email, name, gender, address, purpose_of_application, purpose_of_application_others, item_needed, item_needed_others, shoe_size, shoe_size_other, cloth_size, cloth_size_other, accessories, accessories_others, date, access_code, stream, appointment_date, appointment_address,
				address_other, time_slot) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$statement->bind_param('ssssssssssssssssssssss', $number, $email, $name, $gender, $address, $purpose_of_application, $purpose_of_application_others, $item_needed, $item_needed_others, $shoe_size, $shoe_size_other, $cloth_size, $cloth_size_other, $accessories, $accessories_others, $date, $access_code, $stream, $appointment_date, $appointment_address, $address_other, $time_slot);

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

		// time slot
		function application_time_slot(){
			global $conn;

			$statement = "SELECT * FROM application_stream";
			$record = $conn->query($statement);

			return $record;
		}


		// access code generate
		function accesscode($length = 6) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $randomString = '';

		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, strlen($characters) - 1)];
		    }

		    return $randomString;
		}


		// appointment stream
		function application_stream($time_slot_selected){
			global $conn;

			$statement = "SELECT * FROM application_stream";
			$record = $conn->query($statement);

			if ($record->num_rows > 0) {
				foreach ($record as $key => $value) {
					$stream_id = $value['id'];
					$stream_name = $value['name'];
					$stream_slot = $value['slot'];
					$out_slot = $value['out_slot'];
					$time_frame = $value['time_frame'];

					if ($stream_name == 'stream 1') {
						$s = 12;
						$e = 1;
					}else if ($stream_name == 'stream 2') {
						$s = 1;
						$e = 2;
					}else if ($stream_name == 'stream 3') {
						$s = 2;
						$e = 3;
					}else if ($stream_name == 'stream 4') {
						$s = 3;
						$e = 4;
					}

					if ($time_slot_selected === $time_frame) {
						// check if slot is available 
						$time_frame_dc = array("".$s.":00 noon to ".$s.":20pm",
											"".$s.":20pm to ".$s.":40pm",
											"".$s.":40pm to ".$e."pm");

						$rnd = array_rand($time_frame_dc);
						$time_allocated = $time_frame_dc[$rnd];

						if ($out_slot != 0) {
							// deduct 1 from out_slot time
							$out_slot -= 1;
							$update_slot_record = $this->update_slot_record($id=$stream_id, $new_record=$out_slot);
						}

						$shopping_date = "November 25, 2023";
						$shopping_address = "Education Glasshouse, Faculty of Edu., UNILAG.";					

						return array($stream_name, $shopping_date, $shopping_address, $time_allocated);
					}
					
				}
			}
		}


		function update_slot_record($id, $new_record){
			global $conn;

			$statement = "UPDATE application_stream SET out_slot='$new_record' WHERE id='$id'";
			$record = $conn->query($statement);

			return True;
		}

		function sendMail($email, $access_code, $stream_name, $shopping_date, $shopping_address, $time_allocated){
			$sendgridApiKey = '';
			$data = [
				'personalizations' => [
	                [
	                	'to' => [
	                    	['email' => $email]
	                 	],
	                    'dynamic_template_data' => [
		                    'access_code' => $access_code,
		                    'stream' => $stream_name,
		                    'appointment_date' => $shopping_date,
		                    'shopping_time' => $time_allocated,
		                    'appointment_address' => $shopping_address
	                    ],
	                ],
                ],
                'from' => ['email' => 'info@communitywardrobeng.org'],
                'template_id' => 'd-f0bc3b55a8a74804863aa2e43cf87e36',
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


		function sendSMS($number, $msg){
			$sid = '';
			$token = '';			

			$twilio_number = "+12013457610";
			$twilio = new Client($sid, $token);

			try{
                $twilio->messages->create(
									$number, // to
						            array(
								        'from' => $twilio_number,
								        'body' => $msg
								    )
			                    );	
            }catch (RestException $e){
                // 
            }		
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


	/**
	 * 
	 */
	class Contact
	{
		
		function save_contact_info($date, $name, $email, $message)
		{
			global $conn;

			$stmt = $conn->prepare("INSERT INTO contacts(date, name, email, message)VALUES(?,?,?,?)");
			$stmt->bind_param('ssss', $date, $name, $email, $message);

			if ($stmt->execute()) {
				return True;
			}
		}

		function sendMail($date, $name, $email, $message){
			$sendgridApiKey = '';
			$data = [
				'personalizations' => [
	                [
	                	'to' => [
	                    	['email' => 'info@communitywardrobeng.org']
	                 	],
	                    'dynamic_template_data' => [
		                    'date' => $date,
		                    'name' => $name,
		                    'email' => $email,
		                    'message' => $message
	                    ],
	                ],
                ],
                'from' => ['email' => 'info@soastechnology.com.ng'],
                'template_id' => 'd-e9125e0867b04c4ea0d8e9d1b7903874',
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

?>
