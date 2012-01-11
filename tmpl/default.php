<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div id="itp-social-box<?php echo $params->get('moduleClassSfx');?>">

<?php if($params->get("mail_form")){?>
<form style="<?php echo $params->get("feedburner_style");?>" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $params->get("feedburner_uri");?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
    <p style="text-align:left;"><?php echo $params->get("header_text");?></p>
    <p><input type="text" style="width:<?php echo $params->get("feedburner_iw"); ?>px" name="email" class="inputbox" /></p>
    <input type="hidden" value="<?php echo $params->get("feedburner_uri");?>" name="uri" />
    <input type="hidden" name="loc" value="<?php echo $params->get("feedburner_l");?>" />
    <input type="submit" class="button" value="<?php echo $params->get("feedburner_bn");?>" />
</form>
<?php }?>

<?php if($params->get("eform", "")){?>
<?php echo $params->get("eform");?>
<?php }?>

<?php
$style = $params->get('style'); 

if ( false !== strpos( $style, "big" ) ) {
	$dir = $style;
	$style = "big";
}

switch ( $style ) {

	case "big" :?>
	
	   <?php if ( $params->get('show_rss') ) {?>
            <a type="application/rss+xml" rel="alternate" href="<?php echo $params->get('rss_url'); ?>" <?php if($params->get('rss_open_new')) { echo 'target="_blank"';}?>>
            <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('rss_title'); ?>" title="<?php echo $params->get('rss_title'); ?>" src="modules/mod_itpsubscribe/images/<?php echo basename( $dir ); ?>/rss.png"/>
            </a>
        <?php }?>
        
        <?php if ( $params->get('show_facebook') ) {?>  
            <a href="<?php echo $params->get('facebook_url'); ?>" <?php if($params->get('facebook_open_new')) { echo 'target="_blank"';}?>>
            <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('facebook_title'); ?>" title="<?php echo $params->get('facebook_title'); ?>" src="modules/mod_itpsubscribe/images/<?php echo basename( $dir ); ?>/facebook.png"/>
            </a>
        <?php }?>
        
		<?php if ( $params->get('show_twitter') ) {?>  
	        <a href="<?php echo $params->get('twitter_url'); ?>" <?php if($params->get('twitter_open_new')) { echo 'target="_blank"';}?> >
	        <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('twitter_title'); ?>" title="<?php echo $params->get('twitter_title'); ?>" src="modules/mod_itpsubscribe/images/<?php echo basename( $dir ); ?>/twitter.png"/>
	        </a>
	    <?php }?>
	    
	    <?php if ( $params->get('show_email') ) {?>
            <a href="<?php echo $params->get('email_url'); ?>" <?php if($params->get('email_open_new')) { echo 'target="_blank"';}?> >
            <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('email_title'); ?>" title="<?php echo $params->get('email_title'); ?>" src="modules/mod_itpsubscribe/images/<?php echo basename( $dir ); ?>/email.png"/>
            </a>
        <?php }?>
    

    <?php break; ?>
    
	    <?php default: // SMALL ?>
	    
	    <?php if ( $params->get('show_rss') ) {?>
	       <div>
		    <a type="application/rss+xml" rel="alternate" href="<?php echo $params->get('rss_url'); ?>" <?php if($params->get('rss_open_new')) { echo 'target="_blank"';}?>>
		    <img style="border: 0pt none ; vertical-align: middle; " alt="" src="modules/mod_itpsubscribe/images/small/rss.png" width="16" height="16" />
			</a>
			<a type="application/rss+xml" rel="alternate" href="<?php echo $params->get('rss_url'); ?>" <?php if($params->get('rss_open_new')) { echo 'target="_blank"';}?>><?php echo $params->get('rss_title'); ?></a>
		  </div>
	    <?php }?>
	    
	    <?php if ( $params->get('show_email') ) {?>
	       <div>
			<a href="<?php echo $params->get('email_url'); ?>" <?php if($params->get('email_open_new')) { echo 'target="_blank"';}?>>
			<img style="border: 0pt none ; vertical-align: middle; " alt="" src="modules/mod_itpsubscribe/images/small/email.png" width="16" height="16" />
			</a>
			<a href="<?php echo $params->get('email_url'); ?>" <?php if($params->get('email_open_new')) { echo 'target="_blank"';}?>><?php echo $params->get('email_title'); ?></a>
		  </div>
		<?php }?>
		
		<?php if ( $params->get('show_facebook') ) {?> 
          <div>
            <a href="<?php echo $params->get('facebook_url'); ?>" <?php if($params->get('facebook_open_new')) { echo 'target="_blank"';}?>>
            <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('facebook_title'); ?>" src="modules/mod_itpsubscribe/images/small/facebook.png" width="16" height="16" />
            </a>
            <a href="<?php echo $params->get('facebook_url'); ?>" <?php if($params->get('facebook_open_new')) { echo 'target="_blank"';}?>><?php echo $params->get('facebook_title'); ?></a>
        </div>
        <?php }?>
		
		<?php if ( $params->get('show_twitter') ) {?>	
		  <div>
			<a href="<?php echo $params->get('twitter_url'); ?>" <?php if($params->get('twitter_open_new')) { echo 'target="_blank"';}?>>
			<img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('twitter_title'); ?>" src="modules/mod_itpsubscribe/images/small/twitter.png" width="16" height="16" />
			</a>
			<a href="<?php echo $params->get('twitter_url'); ?>" <?php if($params->get('twitter_open_new')) { echo 'target="_blank"';}?>><?php echo $params->get('twitter_title'); ?></a>
		</div>
		<?php }?>
	
    <?php break; ?>
    
<?php 
} ?>
<?php echo ItpSubscribeHelper::getExtraButtons($params);?>
<?php
// Showing the extra twitter icon 
if ( $params->get('show_extra_twitter') ) {
	$extra_twitter_icon = $params->get('extra_twitter_icon');
?>
          <div >
            <a href="<?php echo $params->get('extra_twitter_url'); ?>">
            <img style="border: 0pt none ; vertical-align: middle; " alt="<?php echo $params->get('extra_twitter_title'); ?>" title="<?php echo $params->get('extra_twitter_title'); ?>" src="modules/mod_itpsubscribe/images/twitters/<?php echo basename($extra_twitter_icon); ?>"/>
            </a>
          </div>
<?php } ?> 
</div>

