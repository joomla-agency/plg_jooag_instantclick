<?php
/**
 * @version   1.0
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2011 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 * Modified by: Joomla-Agentur.de or Joomla-Agency.com
 */

defined('_JEXEC') or die;

class plgSystemInstantClick extends JPlugin {
	
	public function onBeforeRender() {
	
    	$app = JFactory::getApplication();
    	$doc = JFactory::getDocument();


    	if ($app->isAdmin()){
			//$doc->addScript( JURI::base().'media/instantclick/instantclick.min.js' );	
        }
		else{ 
			$doc->addScript( JURI::base().'media/instantclick/instantclick.min.js' );
			$doc->addCustomTag('<script data-no-instant>InstantClick.init();</script>');

        }

    }

}