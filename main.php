<?php
/**
 * Created by PhpStorm.
 * User: fangyuanmei
 * Date: 2018/9/19
 * Time: 11:22
 */

require_once "object1.php";
require_once "object2.php";
require_once "subject.php";

$obj1 = new object1();
$obj2 = new object2();
$sub = new subject();
$sub -> attach($obj1);
$sub -> attach($obj2);

$sub ->notify();

