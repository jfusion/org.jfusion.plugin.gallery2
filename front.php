<?php namespace JFusion\Plugins\gallery2;
/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage gallery2
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

use JFusion\Plugin\Plugin_Front;

/**
 * JFusion plugin class for Gallery2
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage gallery2
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends Plugin_Front
{
	/**
	 * @var $helper Helper
	 */
	var $helper;

    /**
     * @return string
     */
    function getRegistrationURL() {
        return '?g2_view=core.UserAdmin&g2_subView=register.UserSelfRegistration';
    }

    /**
     * @return string
     */
    function getLostPasswordURL() {
        return '?g2_view=core.UserAdmin&g2_subView=core.UserRecoverPassword';
    }
}
