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

App::uses('Component', 'Controller');
App::uses('Indicadores', 'Indicadores.Lib');

/**
 * Componente para Indicadores
 *
 * Permite acceder a los indicadores económicos desde el Controlador
 *
 * @package Indicadores.Controller.Component
 */
class IndicadoresComponent extends Component {

/**
 * Método que permite leer el indicador económico
 *
 * En caso de llamar esté metodo sin parámetros, devuelve todos los indicadores
 *
 * @param string $key Nombre del indicador
 * @return array|string Si viene vacío, devuelve un arreglo con todos los indicadores, en otro caso devuelve el valor
 */
	public function read($key = null) {
		return Indicadores::read($key);
	}

/**
 * Método que permite validar si existe un indicador
 *
 * @param string $key Nombre del indicador
 * @return boolean Si existe o no el indicador
 */
	public function check($key = null) {
		return Indicadores::check($key);
	}
}
