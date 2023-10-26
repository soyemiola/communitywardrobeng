<?php 
        include 'functions.php';
        
        $d = new Donation();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['donation']) {
                $username = htmlspecialchars(trim($_POST['username']));
                $email = htmlspecialchars(trim($_POST['email']));
                $amount = htmlspecialchars(trim($_POST['amount']));
                $ref = htmlspecialchars(trim($_POST['ref']));
                $date = htmlspecialchars(trim($_POST['date']));

                $save = $d->save_donor_record($username, $email, $amount, $ref, $date);

                if ($save == True) {
                        return True;
                }else{
                        return $conn->error;
                }
        }

 ?>