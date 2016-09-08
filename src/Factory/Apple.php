<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/9/8
 * Description:
 */
namespace Ddinnnng\Factory;

class Apple implements IFruit {

    public function getTaste()
    {
        // TODO: Implement getTaste() method.
        return "Is sweet and sour";
    }


    public function getColor()
    {
        // TODO: Implement getColor() method.
        return 'Red';
    }
}