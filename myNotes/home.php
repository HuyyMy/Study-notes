<?php

/**
 * 单例模式
 *
 * @author huyueyang<hyyphp@163.com>
 * @date   2017-7-22 15:47:24
 */

class DB
{
    private $_db;
    private static $_instance;

    private function __construct()
    {
        $this->_db = pg_connect(); //postgrsql;
    }

    /**
     * 禁止克隆
     */
    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function addUserInfo()
    {

    }

    public function getUserInfo()
    {

    }
}

$db = DB::getInstance();

$db->addUserInfo();
$db->getUserInfo();
