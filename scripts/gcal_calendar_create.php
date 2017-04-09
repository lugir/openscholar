<?php
  xdebug_start_trace('/tmp/xdebug/fac.xt');

  $params = array(
   'Summary' => 'My_Calendar',
   'Description' => 'Description of my calendar',
   'TimeZone' => 'America/Los_Angeles',
   'Location' => 'New York',
  );

  error_log("EAM Entering " . __FILE__ . ":" . __LINE__);

  # FIXME: authenticate

  $account_name = "OpenScholarGAuth";
  $by_name = true;
  gauth_account_authenticate($account_name, $by_name);

  $is_authenticated = gauth_account_is_authenticated($account_name, $by_name);
  error_log("EAM Entering " . __FILE__ . ":" . __LINE__ . ", is_authenticated = " . $is_authenticated);

  error_log("EAM Entering " . __FILE__ . ":" . __LINE__);

  $cal = gcal_calendar_create($params, $account_name);

  error_log("EAM Entering " . __FILE__ . ":" . __LINE__);

  print_r($cal ? $cal : "Create calendar failed");

  xdebug_stop_trace();
?>
