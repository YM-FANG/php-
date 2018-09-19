<?php
/**
 * Created by PhpStorm.
 * User: fangyuanmei
 * Date: 2018/9/19
 * Time: 10:49
 */

//监听者

class subject implements SplSubject{

    private  $objects = [];

    public function attach(SplObserver $observer){
        if(!in_array($observer,$this->objects)){
            $this->objects[] = $observer;
        }
    }

    public function detach(SplObserver $observer){
        $index = array_search($observer,$this->objects);
        if($index !=false){
            unset($this->objects[$index]);
        }
    }

    public function notify(){
        foreach ($this->objects as $observer){
            $observer->update($this);
        }
    }

    public function myWay1(){
        echo "myWay1  call".PHP_EOL;
    }

    public function myWay2(){
        echo "myWay2  call".PHP_EOL;
    }
}

