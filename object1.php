<?php
/**
 * Created by PhpStorm.
 * User: fangyuanmei
 * Date: 2018/9/19
 * Time: 11:18
 */

class object1 implements SplObserver{

    public function update(SplSubject $subject){
        $subject->myWay1();
    }
}