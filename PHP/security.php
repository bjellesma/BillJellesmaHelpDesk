<?php
/**
 * Functions to better secure code
 */
  function escape($string){
    return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
  }
