<?php
/**
 * AllIndicadoresTest class
 *
 * This test group will run all test.
 *
 * @package  Indicadores.Test.Case
 */
class AllIndicadoresTests extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All Indicadores Tests');
		$suite->addTestDirectoryRecursive(App::pluginPath('Indicadores') . 'Test' . DS . 'Case' . DS);

		return $suite;
	}
}
