<?php
/**
 * @package      ITPrism Modules
 * @subpackage   ITPSubscribe
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * ITPSubscribe is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined('_JEXEC') or die;

JLoader::register('ItpSubscribeHelper', dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php');

// Translate strings
$rssTitle = $params->get("rss_title");
if(0 === strpos($rssTitle, "MOD_ITPSUBSCRIBE")) {
    $rssTitle = JText::_($rssTitle);
}

$facebookTitle = $params->get("facebook_title");
if(0 === strpos($facebookTitle, "MOD_ITPSUBSCRIBE")) {
    $facebookTitle = JText::_($facebookTitle);
}

$twitterTitle = $params->get("twitter_title");
if(0 === strpos($twitterTitle, "MOD_ITPSUBSCRIBE")) {
    $twitterTitle = JText::_($twitterTitle);
}

$emailTitle = $params->get("email_title");
if(0 === strpos($emailTitle, "MOD_ITPSUBSCRIBE")) {
    $emailTitle = JText::_($emailTitle);
}

$googleTitle = $params->get("google_title");
if(0 === strpos($googleTitle, "MOD_ITPSUBSCRIBE")) {
    $googleTitle = JText::_($googleTitle);
}

$extraTwitterTitle = $params->get("extra_twitter_title");
if(0 === strpos($extraTwitterTitle, "MOD_ITPSUBSCRIBE")) {
    $extraTwitterTitle = JText::_($extraTwitterTitle);
}

$headText = $params->get("header_text");
if(0 === strpos($headText, "MOD_ITPSUBSCRIBE")) {
    $headText = JText::_($headText);
}

$feedburnerButton = $params->get("feedburner_bn");;
if(0 === strpos($feedburnerButton, "MOD_ITPSUBSCRIBE")) {
    $feedburnerButton = JText::_($feedburnerButton);
}

require JModuleHelper::getLayoutPath('mod_itpsubscribe', $params->get('layout', 'default'));