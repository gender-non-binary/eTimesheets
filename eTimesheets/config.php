<?php

/**
 * Alice Jacka config.php 2.0 (created 27/6/18)
 *
 * set config variable attributes for use throughout the program
 */

$config['main']['title'] = 'eTimesheets'; // custon title (eg page titles, headings etc)


/// MySQL database ///

$config['sql']['addr']   = 'localhost';   // server address
$config['sql']['uname']  = "application"; // username and
$config['sql']['passwd'] = "klNIdhU(75^"; // password of user
$config['sql']['db']     = 'eTimesheets'; // datamase name


/// cycle config ///

// the start date of one cycle. Higher is quicker
// to calculate, but make it before the first cycle
// or you will get errors when viewing earlier cycles
//                                    \  this bit  /
$config['cycle']['start'] = strtotime("30 July 2018");

// length in seconds of a pay cycle, eg:
// +2 weeks, or +1 week 3 days 6 hours 5 minuites 3 seconds
//                          this thing \        /
$config['cycle']['length'] = strtotime("+2 weeks", 0);

// the global expected hours per cycle, for the
// extra/missed hours to be calculated from
//                                 that \  /
$config['cycle']['expectedWork'] = 3600 * 15;

// the global tollerence for over/under time
// ie. how large should the blue window be
// when displaying over/under time
//                                       that \ /
$config['cycle']['overtimeTolerance'] = 3600 * 2;


/// random ///

// time untill session timeout, in seconds
// default 120 (2 minuites)
// set to 0 to disable timeouts
$config['misc']['sesTimeout'] = 0;

// timezone. doesn't need any more explanation
// a list of supported ones can be found at
// https://secure.php.net/manual/en/timezones.php
$config['misc']['timezone'] = 'Australia/Melbourne';


/// debug ///

// override the current time usefull for
// reproducing a bug. default should be 'time()'
$config['debug']['timeOverride'] = time();

?>
