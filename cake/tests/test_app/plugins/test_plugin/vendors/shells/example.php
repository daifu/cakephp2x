<?php
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP Version 5.x
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The Open Group Test Suite License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.test_app.plugins.test_plugin.vendors.shells
 * @since         CakePHP(tm) v 1.2.0.7871
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
class ExampleShell extends Shell {
/**
 * main method
 *
 * @access public
 * @return void
 */
	public function main() {
		$this->out('This is the main method called from TestPlugin.ExampleShell');
	}
}
