<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/9/8
 * Description:
 */
namespace Ddinnnng\Factory;

class FruitFactory {

    const FRUIT_APPLE = 1;
    const FRUIT_BANANA = 2;

    static public function create($type) {
        switch ($type) {
            case self::FRUIT_APPLE:
                return new Apple();
            case self::FRUIT_BANANA:
                return new Banana();
            default:
                return false;
        }
    }
    
}