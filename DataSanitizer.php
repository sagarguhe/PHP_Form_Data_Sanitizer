<?php 
/**
 * DataSanitizer Class
 *
 * @category  Sanitizer
 * @package   DataSanitizer
 * @author    Sagar Guhe <billy_ani@yahoo.co.in>
 * @copyright Copyright (c) 2015
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @version   1.0
 **/

class DataSanitizer {

	protected $data = array();
	
	/**
	 * Initializes data array
	 * @param array $data the data array which is to be sanitized
	 */
	public function __construct($data = array()) {
		$this->data = $data;
	}

	/**
	 * Sanitizes Html data using htmlspecialchars
	 * @return array sanitized array
	 */
	public function sanitizeArrayHtml(){
		return array_map('self::__sanitizeHtml', $this->data);
	}

	/**
	 * Prepares data array to input it in a sql statements
	 * @return array array with sql escaped string
	 */
	public function sqlEscapeArray(){
		return array_map('self::__escapeString', $this->data);
	}

	/**
	 * sanitizes and escapes data array to be stored in database
	 * @return array sanitized and escaped data array
	 */
	public function sanitizeAndSqlEscArray(){
		return array_map('self::__sanitizeAndEscapeString', $this->data);
	}

	/**
	 * alternative to htmlspecialchars
	 * @param  string $str string to sanitize
	 * @return string      sanitized string
	 */
	public function sanitizeStr($str){
		return htmlspecialchars($str);
	}

	/**
	 * alternative to addslashes
	 * @param  string $str string to addslashes to
	 * @return string      slashed string
	 */
	public function sqlEscapeStr($str){
		return addslashes($str);
	}

	/**
	 * sanitize html and escape string to be added to the database
	 * @param  string $str 
	 * @return string      [description]
	 */
	public function sanitizeAndSqlEscString($str) {
		return addslashes(htmlspecialchars($str));
	}

	/**
	 * static method to sanitize the data string
	 * @param  string $elem the array element as a string
	 * @return string       sanitized string
	 */
	static function __sanitizeHtml($elem){
		return htmlspecialchars($elem);
	}

	/**
	 * static method to addslashes to the string
	 * @param  string $elem data string
	 * @return string       slashed data string
	 */
	static function __escapeString($elem){
		return addslashes($elem);
	}

	/**
	 * static method to sanitize and escape string tobe used to store in database
	 * @return [type] sanitized and escaped string 
	 */
	static function __sanitizeAndEscapeString($elem){
		$str = htmlspecialchars($elem);
		return addslashes($str);
	}

}
