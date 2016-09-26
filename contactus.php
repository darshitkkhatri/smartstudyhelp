<?php

	class GoogleRecaptcha 
	{
	    /* Google recaptcha API url */
	    private $google_url = "https://www.google.com/recaptcha/api/siteverify";
	    private $secret = '6LdyKxwTAAAAAPo_vWq7UMJgV23ANCppom1RvN2A';
 
	    public function VerifyCaptcha($response)
	    {
	        $url = $this->google_url."?secret=".$this->secret.
	               "&response=".$response;
 
	        $curl = curl_init();
	        curl_setopt($curl, CURLOPT_URL, $url);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	        curl_setopt($curl, CURLOPT_TIMEOUT, 15);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, TRUE);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, TRUE); 
	        $curlData = curl_exec($curl);
 
	        curl_close($curl);
 
	        $res = json_decode($curlData, TRUE);
	        if($res['success'] == 'true') 
	            return TRUE;
	        else
	            return FALSE;
	    }
 
	}
    $response = $_POST['g-recaptcha-response'];

    if(!empty($response))
    {
          $cap = new GoogleRecaptcha();
          $verified = $cap->VerifyCaptcha($response);

          if(!$verified) {
            echo "Please reenter captcha";
			exit;
		  }
    }
	else{
		echo 'hahahah';exit;
	}

	$error = array();
	if(empty($_POST['name']))
		$error[] = 'Name';
	if(empty($_POST['email']))
		$error[] = 'Email';
	if(empty($_POST['country']))
		$error[] = 'Country';
	if(empty($_POST['price']))
		$error[] = ' Price';
	if(empty($_POST['subject']))
		$error[] = 'Subject';
	if(empty($_POST['content']))
		$error[] = 'Content';
	if(!empty($error)){
		echo implode(', ',$error) . ' are compulsory.';
		exit;
	}
		
	include('PHPMailer/class.phpmailer.php');
	$email = new PHPMailer();
	$email->From      = "{$_POST['email']}";
	$email->FromName  = "{$_POST['name']}";
	$email->Subject   = "{$_POST['subject']}";
	$email->Body      = "Name : {$_POST['name']}, Email : {$_POST['email']}, Country : {$_POST['country']} , Cost : {$_POST['price']} \n\n {$_POST['content']}";
	$email->AddAddress( 'support@smartstudyhelp.com' );

	if(isset($_FILES['file1']))
		$email->AddAttachment( $_FILES['file1']['tmp_name'], $_FILES['file1']['name']);
	if(isset($_FILES['file2']))
		$email->AddAttachment( $_FILES['file1']['tmp_name'], $_FILES['file2']['name']);
	if(isset($_FILES['file2']))
		$email->AddAttachment( $_FILES['file1']['tmp_name'], $_FILES['file2']['name']);

	if($email->Send())
		echo "success";
	else
		echo "mailfail";
	
	
