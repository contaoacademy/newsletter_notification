<?php  

/**
 *
 * @package   newsletter_notification
 * @author    Christian Feneberg | Contao Academy
 * @license   GNU/LGPL
 * @copyright Contao Academy 2018
 */


/** Einstellungen **/
define('EMAIL_FROM','meine@email.de');
define('EMAIL_FROMNAME','Mein Absender');
define('EMAIL_ADMIN','meine@email.de');



// Registrieren des Hooks activateRecipient 
$GLOBALS['TL_HOOKS']['activateRecipient'][] = array('newsletterNotificationClass', 'myActivateRecipient'); 

// Registrieren des Hooks activateRecipient 
$GLOBALS['TL_HOOKS']['removeRecipient'][] = array('newsletterNotificationClass', 'myRemoveRecipient'); 


?>