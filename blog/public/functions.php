<?php
class Functions{
  const DOMAIN = 'BillJellesmaHelpDesk';
  function whitelisted_tags($text){
    return nl2br(strip_tags($text, '<center><strong><em>'));
  }
  public function getDomain(){
      echo self::DOMAIN;
    }
}
?>
