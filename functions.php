<?php
  require_once('/PHP/security.php');

/**
  * Simple class used throughout the website to get directories
  * and do other repetative tasks 
  */

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
