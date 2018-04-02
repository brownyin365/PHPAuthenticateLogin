<?php


require_once 'core/init.php';

$user = DB::getInstance()->update('users', 3, array(
'password' => 'password',
'name' => 'williams'

));
















/*$user = DB::getInstance()->get('users', array('username', '=', 'Robert'));

if(!$user->count()){
	echo 'No User';
}else{
	echo $user->first()->username;
}
*/





