<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/9/8
 * Description:
 */
use Ddinnnng\Factory\FruitFactory;
class FruitFactoryTest extends PHPUnit_Framework_TestCase {
    
    public function testFactory() {
        $apple = FruitFactory::create(FruitFactory::FRUIT_APPLE);
        $banana = FruitFactory::create(FruitFactory::FRUIT_BANANA);

        $this->assertEquals('Green', $apple->getColor());
        $this->assertEquals('Yellow', $banana->getColor());
    }
    
}