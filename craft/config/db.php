<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  /** Global Database Settings */
  '*' => array(
    'tablePrefix' => getenv('CRAFTENV_DB_PREFIX'),
    'server' => getenv('CRAFTENV_DB_HOST'),
    'database' => getenv('CRAFTENV_DB_NAME'),
    'user' => getenv('CRAFTENV_DB_USER'),
    'password' => getenv('CRAFTENV_DB_PASS'),
  ),

  /** Local Database Settings */
  'local' => array(),

  /** Staging Database Settings */
  'staging' => array(),

  /** Live Database Settings */
  'production' => array(),
);
