<?php

/**
 * @version 1.2.2 stable
 * @package RKR Cookie Banner
 * @copyright Copyright (C) 2018 René Kreijveld Webdevelopment, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: https://www.renekreijveld.nl
 * @author email email@renekreijveld.nl
 * @developer René Kreijveld
 *
 * Code improvements by dGrammatiko 
 *
 * RKR Cookie Banner is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version. See <http://www.gnu.org/licenses/>.
 *
 * RKR Cookie Banner is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
if ($params->get('cbCss') == 'j')
{
	$document->addStyleSheet('/modules/mod_rkr_cookiebanner/assets/rkr_cookiebanner.css');
}
?>

<div id="cookie-message" class="rkrCB <?php echo $params->get('cbPos');?>">
	<div class="rkrCBContent">
		<?php echo $params->get('cbText');?>
	</div>
	<div class="buttons">
		<a id="set-cookie" class="rkrCBAccept" href="#"><?php echo $params->get('cbAccept');?></a>&nbsp;
		<a id="remove-cookie-message" class="rkrCBRevoke" href="#"><?php echo $params->get('cbDeny');?></a>
	</div>
	<div style="clear:both;"></div>
</div>
<script type="text/javascript">
function SetCookie(c_name, value, expiredays) {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	var c_value = value + ";path=/" + ((expiredays==null) ? "" : ";expires=" + exdate.toGMTString());
	document.cookie = c_name + "=" + c_value;
}
document.getElementById("set-cookie").addEventListener('click', function() {
	SetCookie('rkr_accept_cookies', 'yes', 365 * 10);
	var msg = document.getElementById("cookie-message");
	msg.parentNode.removeChild(msg);
	<?php if ($params->get('cbRedirect') === "j") { ?>
	window.location = "<?php echo $params->get('cbRedirectURL'); ?>";
	<?php } else { ?>
	window.location.reload();
	<?php } ?>
});
document.getElementById("remove-cookie-message").addEventListener('click', function() {
	SetCookie('rkr_accept_cookies', 'no', 365 * 10);
	var msg = document.getElementById("cookie-message");
	msg.parentNode.removeChild(msg);
	<?php if ($params->get('cbRedirect') === "j") { ?>
	window.location = "<?php echo $params->get('cbRedirectURL'); ?>";
	<?php } else { ?>
	window.location.reload();
	<?php } ?>
});
</script>
