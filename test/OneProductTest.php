<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/7/27
 * Description:
 */

class OneProductTest extends PHPUnit_Framework_TestCase {
    
    public function testSingleton() {
        $one = \Ddinnnng\Singleton\OneProduct::getInstance();
        $one->products[] = 1;
        $two = \Ddinnnng\Singleton\OneProduct::getInstance();
        $two->products[] = 2;

        $this->assertEquals([1, 1], $one->products);
    }
    
}