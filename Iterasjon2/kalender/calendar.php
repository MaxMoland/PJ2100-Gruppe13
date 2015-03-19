<?php

$today_date = time(); 
$day = date('d', $today_date); $month = date('m', $today_date); $year = date('Y', $today_date); 
$first_day = mktime(0,0,0,$month, 1, $year); 
$title = date('F', $first_day); 
$day_of_week = date('D', $first_day); 

switch($day_of_week) { case "Mon": $blank = 0; break; case "Tue": $blank = 1; break; case "Wed": $blank = 2; break; case "Thu": $blank = 3; break; case "Fri": $blank = 4; break; case "Sat": $blank = 5; break; case "Sun": $blank = 6; break; } 

$days_in_month = cal_days_in_month(0, $month, $year); 

echo '

<table border="0" cellspacing="0" cellpadding="0" position="center" width="450px" height="450px">
  '; echo '<tr>
    <th colspan="7">
      ' .$title . ' ' . $year. '
    </th>
  </tr>'; echo '
  
  <tr>
    <td width="42">
      M
    </td>
    <td width="42">
      T
    </td><td width="42">
      O
    </td>
    <td width="42">
      T
    </td>
    <td width="42">
      F
    </td><td width="42" class="weekend">
      L
    </td>
    <td width="42" class="weekend">
      S
    </td>
  </tr>';

  $day_count = 1;

  echo '  
  <tr>
    '; 
    while ( $blank > 0 ) {
      if ($day_count == 1 || $day_count == 7) {
        echo '<td class="weekend"> </td>';
      } else {
      echo '
    <td>
    </td>'; } $blank = $blank-1; $day_count++; } 

    $day_num = 1; 
  
    while ($day_num <= $days_in_month) { if ($day_count == 1 || $day_count == 7) { if ($day_num == $day) { echo '
    
    <td class="weekend today">
      <a href="./?d=' .$day_num. '&m=' .$month. '"> ' .$day_num. ' </a>
    </td>'; } else { echo '
    
    <td class="weekend">
      <a href="./?d=' .$day_num. '&m=' .$month. '"> ' .$day_num. ' </a>
    </td>'; } } else { if ($day_num == $day) { echo '
    
    <td class="today">
      <a href="./?d=' .$day_num. '&m=' .$month. '"> ' .$day_num. ' </a>
    </td>'; } else { echo '
    
    <td>
      <a href="./?d=' .$day_num. '&m=' .$month. '"> ' .$day_num. ' </a>
    </td>'; } } $day_num++; $day_count++; 
 
    if ($day_count > 7) { echo '
  </tr>
  
  <tr>
    '; $day_count = 1; } } 

    while ($day_count > 1 && $day_count <= 7) { if ($day_count == 1 || $day_count == 7) { echo '<td class="weekend">
    </td>'; } else { echo '
    
    <td>
    </td>'; } $day_count++; } 

    echo '
  </tr>
</table>';
?>