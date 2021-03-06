<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

\JLoader::register('JHtmlCategoriesAdministrator', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/html/categoriesadministrator.php');

use Joomla\CMS\Dispatcher\ComponentDispatcher;

/**
 * ComponentDispatcher class for com_categories
 *
 * @since  4.0.0
 */
class CategoriesDispatcher extends ComponentDispatcher
{
	/**
	 * The extension namespace
	 *
	 * @var    string
	 *
	 * @since  4.0.0
	 */
	protected $namespace = 'Joomla\\Component\\Categories';
}
