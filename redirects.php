<?php
/**
  * You can easily put a list of many 301 url redirects in this format
  * Trailing slashes matters here so /old-url1 is different from /old-url1/
  */

$redirect_targets = array(
  // your redirects
  // '/stoff/' => '/staff-profiles/',
);


if ( (isset($redirect_targets[ $_SERVER['REQUEST_URI'] ] ) ) && (php_sapi_name() != "cli") ) {
  echo 'https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ];
  header('HTTP/1.0 301 Moved Permanently');
  header('Location: https://'. $_SERVER['HTTP_HOST'] . $redirect_targets[ $_SERVER['REQUEST_URI'] ]);

  if (extension_loaded('newrelic')) {
    newrelic_name_transaction("redirect");
  }
  exit();
}
