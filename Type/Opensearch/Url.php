<?php
/**
 * HUBzero CMS
 *
 * Copyright 2005-2015 HUBzero Foundation, LLC.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * HUBzero is a registered trademark of Purdue University.
 *
 * @package   hubzero-cms
 * @author    Shawn Rice <zooley@purdue.edu>
 * @copyright Copyright 2005-2015 HUBzero Foundation, LLC.
 * @copyright Copyright 2005-2014 Open Source Matters, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GPLv2
 */

namespace Hubzero\Document\Type\Opensearch;

use Hubzero\Base\Object;

/**
 * URL for the OpenSearch Description
 *
 * Inspired by Joomla's JOpenSearchUrl class
 */
class Url extends Object
{
	/**
	 * Type item element
	 *
	 * @var  string
	 */
	public $type = 'text/html';

	/**
	 * Rel item element
	 *
	 * @var  string
	 */
	public $rel = 'results';

	/**
	 * Template item element.
	 * Has to contain the {searchTerms} parameter to work.
	 *
	 * @var  string
	 */
	public $template;
}
