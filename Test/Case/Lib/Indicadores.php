<?php
/**
 * Copyright 2014
 *
 * Proyecto Licenciado bajo la Licencia MIT
 * La redistribución de los archivos deben conservar el aviso de copyright anterior.
 *
 * @author  Victor San Martin <vsanmartinm[at]gmail[dot]com>
 * @since 0.0.1
 * @copyright  Copyright 2014
 * @license MIT Licence (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Indicadores', 'Indicadores.Lib');

/**
 * Clase con Test para Indicadores
 */
class IndicadoresTest extends CakeTestCase {

	public function setUp() {
		Indicadores::init();
	}

	public function testCheck() {
		$this->assertTrue(Environment::check('moneda.dolar'));
	}
}
