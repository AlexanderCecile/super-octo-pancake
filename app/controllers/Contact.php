<?php
namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller {
	function index() {
		$this->view('Contact/index');
	}
	function read() {}
}
?>