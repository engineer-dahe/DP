<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/7/27
 * Description:
 */

class SingletonTest extends PHPUnit_Framework_TestCase {

    public function testSingleton() {
        $a = \Ddinnnng\Singleton\Singleton::getInstance();
        $a->test = 1;
        $b = \Ddinnnng\Singleton\Singleton::getInstance();
        $b->test = 2;

        $this->assertEquals(2, $a->test);
    }

}