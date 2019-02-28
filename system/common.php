<?php
function loadModule($moduleName)
{
	//check access code here in future.....
	include_once(APP_PATH.'control/' . $moduleName . '/'.$moduleName. CONTROLLER_POST_FIX . '.php');
	$module = new $moduleName();
}
function loadHelper($moduleName)
{
	//check access code here in future.....
	if(file_exists(APP_PATH.'control/' . $moduleName . '/'.$moduleName. CONTROLLER_POST_FIX . '.php'))
	{
		include_once(APP_PATH.'control/' . $moduleName . '/'.$moduleName. CONTROLLER_POST_FIX . '.php');
		if(class_exists($moduleName))
		$module = new $moduleName();	
	}
	else
	{
		echo "404 Error page incude here in future...";
	}
	
}
function loadLib($moduleName)
{
	//check access code here in future.....
	include_once(APP_PATH.'control/' . $moduleName . '/'.$moduleName. CONTROLLER_POST_FIX . '.php');
	$module = new $moduleName();
}