<?php
/* SVN FILE: $Id$ */

/**
 * Model behaviors base class.
 *
 * Adds methods and automagic functionality to Cake Models.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.cake.libs.model
 * @since			CakePHP(tm) v 1.2.0.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for file
 *
 * Long description for file
 *
 * @package		cake
 * @subpackage	cake.cake.libs.model
 */
class ModelBehavior extends Object {
/**
 * Contains configuration settings for use with individual model objects.  This
 * is used because if multiple models use this Behavior, each will use the same
 * object instance.  Individual model settings should be stored as an
 * associative array, keyed off of the model name.
 *
 * @var array
 * @access public
 * @see Model::$alias
 */
	var $settings = array();
/**
 * Allows the mapping of preg-compatible regular expressions to public or
 * private methods in this class, where the array key is a /-delimited regular
 * expression, and the value is a class method.  Similar to the functionality of
 * the findBy* / findAllBy* magic methods.
 *
 * @var array
 * @access public
 */
	var $mapMethods = array();
/**
 * Setup this behavior with the specified configuration settings.
 *
 * @param object $Model Model using this behavior
 * @param array $config Configuration settings for $Model
 * @access public
 */
	function setup(&$Model, $config = array()) { }
/**
 * Before find callback
 *
 * @param object $Model Model using this behavior
 * @param array $queryData Data used to execute this query, i.e. conditions, order, etc.
 * @return boolean True if the operation should continue, false if it should abort
 * @access public
 */
	function beforeFind(&$Model, $query) { }
/**
 * After find callback. Can be used to modify any results returned by find and findAll.
 *
 * @param object $Model Model using this behavior
 * @param mixed $results The results of the find operation
 * @param boolean $primary Whether this model is being queried directly (vs. being queried as an association)
 * @return mixed Result of the find operation
 * @access public
 */
	function afterFind(&$Model, $results, $primary) { }
/**
 * Before validate callback
 *
 * @param object $Model Model using this behavior
 * @return boolean True if validate operation should continue, false to abort
 * @access public
 */
	function beforeValidate(&$Model) { }
/**
 * Before save callback
 *
 * @param object $Model Model using this behavior
 * @return boolean True if the operation should continue, false if it should abort
 * @access public
 */
	function beforeSave(&$Model) { }
/**
 * After save callback
 *
 * @param object $Model Model using this behavior
 * @param boolean $created True if this save created a new record
 * @access public
 */
	function afterSave(&$Model, $created) { }
/**
 * Before delete callback
 *
 * @param object $Model Model using this behavior
 * @return boolean True if the operation should continue, false if it should abort
 * @access public
 */
	function beforeDelete(&$Model) { }
/**
 * After delete callback
 *
 * @param object $Model Model using this behavior
 * @access public
 */
	function afterDelete(&$Model) { }
/**
 * DataSource error callback
 *
 * @param object $Model Model using this behavior
 * @param string $error Error generated in DataSource
 * @access public
 */
	function onError(&$Model, $error) { }
}
?>