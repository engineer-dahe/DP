<?php
/**
 * Author: ddinnnng@qq.com
 * Date: 2016/7/27
 * Description:
 */
namespace Ddinnnng\Singleton;

final class Singleton {

    private static $instance;

    public static function getInstance() {
        if (! self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct() {

    }
    final private function __clone() {

    }

}