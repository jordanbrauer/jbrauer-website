<?php
/**
 * Title: about.php
 * Version: 0.0.1
 * Company: jBrauer Web Design & Development
 * Author: Jordan Brauer <jbrauer.inc@gmail.com>
 * Created: 15/08/2016
 * Description: About page of my website.
 */

/**
 * Require the Smarty library.
 */
require_once 'lib/vendor/smarty/setup.php';

/**
 * Instantiate a new $template object.
 */
$template = new Template();

/**
* Assign the $page_lang.
*
* eg.
* $temlpate->assign('page_lang', $page_lang);
* {$page_lang}
*/
$template->assign('page_lang', 'en');

/**
 * Assign the $page_title.
 *
 * eg.
 * $template->assign('page_title', $page_title);
 * {$page_title}
 */
$template->assign('page_title', 'About');

/**
 * Render the $template.
 *
 * eg.
 * $template->display('path/to/template.tpl');
 */
$template->display('templates/page.tpl');
?>
