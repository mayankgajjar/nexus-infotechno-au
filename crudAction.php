<?php

	

	include_once 'include/action.php';

	$action = new Action();

	$action_method = $_GET['action'];



	if(isset($action_method) && $action_method != '' && $action_method == 'addContactInquiry'){

 		$contact_inquiry_data = $action->addContactInquiry($_REQUEST);

		$contact_inquiry_data = json_decode($contact_inquiry_data);

		unset($action_method);

		print_r($contact_inquiry_data);

		/*if($contact_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}*/

 	}



 	if(isset($action_method) && $action_method != '' && $action_method == 'addQuoteInquiry'){

 		$quote_inquiry_data = $action->addQuoteInquiry($_REQUEST);

		$quote_inquiry_data = json_decode($quote_inquiry_data);

		unset($action_method);

		if($quote_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}

 	}



 	if(isset($action_method) && $action_method != '' && $action_method == 'addSeoInquiry'){

 		$seo_inquiry_data = $action->addSeoInquiry($_REQUEST);

		$seo_inquiry_data = json_decode($seo_inquiry_data);

		unset($action_method);

		if($seo_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}

 	}



 	if(isset($action_method) && $action_method != '' && $action_method == 'addDesignInquiry'){

 		$design_inquiry_data = $action->addDesignInquiry($_REQUEST);

		$design_inquiry_data = json_decode($design_inquiry_data);

		unset($action_method);

		if($design_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}

 	}

 	

 	if(isset($action_method) && $action_method != '' && $action_method == 'addAppInquiry'){

 		$app_inquiry_data = $action->addAppInquiry($_REQUEST);

		$app_inquiry_data = json_decode($app_inquiry_data);

		unset($action_method);

		if($app_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}

 	}



	if(isset($action_method) && $action_method != '' && $action_method == 'addBettingInquiry'){

 		$betting_inquiry_data = $action->addBettingInquiry($_REQUEST);

		$betting_inquiry_data = json_decode($betting_inquiry_data);

		unset($action_method);

		if($betting_inquiry_data->success == 1){

			echo 'Your inquiry has been send.';

		} else {

			echo 'Something went wrong, your inquiry not send.';

		}

 	} 	



 	

 	



?>