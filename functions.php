<?php
  require_once('/PHP/security.php');
  class Globals{
    const DOMAIN = 'BillJellesmaHelpDesk';
    public function getDomain(){
      echo self::DOMAIN;
    }
    public function getPHPDir(){
      echo self::DOMAIN . '/PHP';
    }
    public function getJSDir(){
      echo self::DOMAIN . '/js';
    }
    public function getLibDir(){
      echo self::DOMAIN . '/Libs';
    }
  }

?>
