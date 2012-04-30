<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Utilities
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

include_once JPATH_PLATFORM . '/joomla/utilities/utility.php';

/**
 * Test class for JUtility.
 * Generated by PHPUnit on 2009-10-26 at 22:28:32.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Utilities
 *
 */
class JUtilityTest extends TestCase
{
	/**
	 * @var JUtility
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		$this->saveFactoryState();
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @return void
	 */
	protected function tearDown()
	{
		$this->restoreFactoryState();
	}

	/**
	 * Test cases for parseAttributes
	 *
	 * @return array
	 */
	function casesParseAttributes()
	{
		return array(
			'jdoc' => array(
				'<jdoc style="fred" />',
				array( 'style' => 'fred' )
			),
			'xml' => array(
				"<img hear=\"something\" there=\"somethingelse\" />",
				array( 'hear' => 'something', 'there' => 'somethingelse' )
			),
		);
	}
	/**
	 * Test parseAttributes
	 *
	 * @param   string	tag to be parsed
	 * @param   array	resulting array of attribute values
	 *
	 * @return void
	 *
	 * @dataProvider casesParseAttributes
	 */
	public function testParseAttributes( $tag, $expected )
	{
		$this->assertThat(
			JUtility::parseAttributes($tag),
			$this->equalTo($expected)
		);
	}
}

class Mock_Session
{
	function getFormToken($data)
	{
		return (bool) $data;
	}
}