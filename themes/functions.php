<?php
/**
* Helpers for theming, available for all themes in their template files and functions.php.
* This file is included right before the themes own functions.php
*/
 

/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ly = CWebbit::Instance();
  $html = null;
  if(isset($ly->config['debug']['display-webbit'])) {
    $html = "<hr><h3>Debuginformation</h3><p>The content of CWebbit:</p><pre>" . htmlent(print_r($ly, true)) . "</pre>";
  }
  return $html;
}


/**
* Prepend the base_url.
*/
function base_url($url) {
  return CWebbit::Instance()->request->base_url . trim($url, '/');
}


/**
* Return the current url.
*/
function current_url() {
  return CWebbit::Instance()->request->current_url;
}


