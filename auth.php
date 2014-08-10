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

use JFusion\Plugin\Plugin_Auth;
use JFusion\User\Userinfo;

use GalleryUtilities;

/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage gallery2
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Auth extends Plugin_Auth
{
	/**
	 * @var $helper Helper
	 */
	var $helper;

    /**
     * @param Userinfo $userinfo
     * @return string
     */
    function generateEncryptedPassword(Userinfo $userinfo) {
        $this->helper->loadGallery2Api(false);
        $testcrypt = GalleryUtilities::md5Salt($userinfo->password_clear, $userinfo->password_salt);
        return $testcrypt;
    }
}
