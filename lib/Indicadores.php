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

App::uses('HttpSocket', 'Network/Http');
App::uses('Hash', 'Utility');

/**
 * Clase Indicadores
 *
 * @package Indicadores.lib
 */
class Indicadores {

/**
 * Flag
 * @var boolean
 */
	private static $__init = false;

/**
 * Se ocupa para guardar los valores de cada indicador
 * @var array
 */
	private static $__indicadores = array();

/**
 * Se inicia la libreria, éste se conecta al servicio y guarda los valores para su posterior uso
 * @return boolean Una vez iniciada o ya iniciada la libreria
 */
	public static function init() {
		if (self::$__init) {
			return true;
		}

		$HttpSocket = new HttpSocket();
		$response = $HttpSocket->get("http://indicadoresdeldia.cl/webservice/indicadores.json");

		if ($response->isOk()) {
			self::$__indicadores = json_decode($response->body, true);
		}

		return self::$__init = true;
	}

/**
 * Método que permite leer el indicador económico
 *
 * En caso de llamar esté metodo sin parámetros, devuelve todos los indicadores
 *
 * @param string $key Nombre del indicador
 * @return array|string Si viene vacío, devuelve un arreglo con todos los indicadores, en otro caso devuelve el valor
 */
	public static function read($key = null) {
		self::init();
		if ($key === null) {
			return self::$__indicadores;
		}
		return Hash::get(self::$__indicadores, $key);
	}

/**
 * Método que permite validar si existe un indicador
 *
 * @param string $key Nombre del indicador
 * @return boolean Si existe o no el indicador
 */
	public static function check($key = null) {
		self::init();
		if ($key == null) {
			return false;
		}

		return Hash::get(self::$__indicadores, $key) !== null;
	}
}
