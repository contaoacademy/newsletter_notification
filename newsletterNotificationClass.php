<?php 


class newsletterNotificationClass { 
	public function myActivateRecipient($strEmail, $arrRecipients, $arrChannels)
	{
		$objEmail = new Email();
	 	$objEmail->subject = 'Neue Newsletteranmeldung'; 
	 	$objEmail->from = EMAIL_FROM; 
	 	$objEmail->fromName = EMAIL_FROMNAME; 
	 	$objEmail->text = "Es gibt eine neue Newsletter-Anmeldung:\n"; 
	 	$objEmail->text .= $strEmail."\n\n"; 
	 	$objEmail->text .= "in folgende Verteiler:\n";
		
		$arrChannelTitles = \NewsletterChannelModel::findByIds($arrChannels);
		
	 	foreach($arrChannelTitles as $key=>$value)
	 	{
	     	$objEmail->text .= "Channel-ID: " . $value->id ." (".$value->title .")\n"; 
	 	}
	 	
	 	$objEmail->sendTo(EMAIL_ADMIN);
		
		unset($objMail);
	}

	public function myRemoveRecipient($strEmail, $arrChannels)
	{
		$objEmail = new Email();
	 	$objEmail->subject = 'Abmeldung vom Newsletter'; 
	 	$objEmail->from = EMAIL_FROM; 
	 	$objEmail->fromName = EMAIL_FROMNAME; 
	 	$objEmail->text = "Es gibt eine Abmeldung vom Newsletter:\n"; 
	 	$objEmail->text .= $strEmail."\n\n"; 
	 	$objEmail->text .= "aus folgenden Verteilern:\n";
	 	
	 	$arrChannelTitles = \NewsletterChannelModel::findByIds($arrChannels);
		
	 	foreach($arrChannelTitles as $key=>$value)
	 	{
	     	$objEmail->text .= "Channel-ID: " . $value->id ." (".$value->title .")\n"; 
	 	}
	 	
	 	$objEmail->sendTo(EMAIL_ADMIN);
		
		unset($objMail);
	}

}



?>