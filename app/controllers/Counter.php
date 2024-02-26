<?php
namespace app\controllers;

use stdClass;

class Counter extends \app\core\Controller {
	function index() {
		$counter_obj = new \app\models\Counter;
		$counter_obj->increment();
		$counter_obj->write();
		$this->view('Shared/counter', $counter_obj);
	}
}
?>