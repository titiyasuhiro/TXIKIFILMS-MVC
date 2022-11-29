<?php

class LienHelper {
    // attribut
    public static $url = 'http://xbau4383.odns.fr/txikifilms/index.php';

    // methode
    public static function getLien(string $_controller, string $_action) {
        return self::$url . '?controller=' . $_controller . '&method=' . $_action;
    }
}