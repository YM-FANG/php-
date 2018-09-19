<?php
/**
 * Created by PhpStorm.
 * User: fangyuanmei
 * Date: 2018/9/19
 * Time: 11:21
 */

class object2 implements SplObserver{

    public function update(SplSubject $subject){
        $subject->myWay2();
    }
}