<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = 'smtp.office365.com';
$config['smtp_user'] = 'konyvtar.technikai.0@bme.hu';
$config['smtp_pass'] = 'IQpjf255gnG';
$config['smtp_crypto'] = 'tls'; // or 'tls'
$config['smtp_port'] = 587;
