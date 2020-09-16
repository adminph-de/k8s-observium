<?php

## Check http://www.observium.org/docs/config_options/ for documentation of possible settings

// Database config ---  This MUST be configured
$config['db_extension'] = 'mysqli';
$config['db_host']      = 'localhost';
$config['db_user']      = 'observium';
$config['db_pass']      = '0bserv1um';
$config['db_name']      = 'observium';

// Base directory
#$config['install_dir'] = "/opt/observium";

// Default community list to use when adding/discovering
$config['snmp']['community'] = array("public");

// Authentication Model
$config['auth_mechanism'] = "mysql";    // default, other options: ldap, http-auth, please see documentation for config help

// Enable alerter
// $config['poller-wrapper']['alerter'] = TRUE;

//$config['web_show_disabled'] = FALSE;    // Show or not disabled devices on major pages.

// Set up a default alerter (email to a single address)
//$config['email']['default']        = "user@your-domain";
//$config['email']['from']           = "Observium <observium@your-domain>";
//$config['email']['default_only']   = TRUE;

// Geocoding Configuration

$config['geocoding']['enable']             = TRUE;                  // Enable Geocoding
$config['geocoding']['api']                = 'google';               // Which GEO API use ('mapquest', 'google', 'yahoo', 'openstreetmap', 'yandex')
$config['geocoding']['api_key']            = 'AIzaSyAQPqHOdgV4MSeyA1ZD4bZnSwhaO-QDyko';                   // API KEY if required
$config['geocoding']['dns']                = FALSE;                 // Use DNS LOC records for geolocation
$config['geocoding']['default']['lat']     =  "49.266034559067194";         // Default latitude
$config['geocoding']['default']['lon']     =  "6.799816238098174";        // Default longitude

// Location
$config['location']['menu']['type'] = 'geocoded'; // geocoded, nested, plain
$config['location']['menu']['nested_reversed'] = FALSE; // set to TRUE if your locations are most-to-least significant
$config['location']['menu']['nested_split_char'] = ','; // splitting character for nested location hierarchy
$config['location']['menu']['nested_max_depth'] = 4; // maximum levels in nested location hierarchy

// Location Mapping
// Use this feature to map ugly locations to pretty locations
// Here KEY must exactly match to device sysLocation
//$config['location']['map']['Under the Sink']          = "Under The Sink, The Office, London, UK";
$config['location']['map']['SCN']          = "Germany,Saarland,Wadgassen,Karl-Koch-Str. 1";
$config['location']['map']['SCN2']         = "Germany,Saarland,Saarlouis,Ludwig-Karl-Balzer-Allee 17-19";
$config['location']['map']['SCN (Building 02 Server Room)']          = "Germany,Saarland,Wadgassen,Karl-Koch-Str. 1";

// Here KEY is regular expression
//$config['location']['map_regexp']['/Under the Sink/'] = "Under The Sink, The Office, London, UK";
//$config['location']['map_regexp']['/^$/']             = "Some Empty Location Rewrite";


// End config.php
