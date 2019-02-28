<?php
abstract class checkAccess{
	
	public function __construct($module){
		return $this->isAllowModule($module);
	}
	function isAllowModule($module){
		return $module
	}
}
