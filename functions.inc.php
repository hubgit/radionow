<?php

$now = time();

$stations = array(
  'radio1',
  '1xtra',
  'radio2',
  'radio3',  
  'radio4',
  'radio5',
  '6music',
  'bbc7',
  );
  
if (array_key_exists('station', $_GET) && in_array($_GET['station'], $stations))
  $station = $_GET['station'];
else
  require 'choices.php';


$xml = simplexml_load_file("http://www.bbc.co.uk/radio/aod/availability/{$station}.xml");
$items = array();
foreach ($xml->entry as $entry){
  $start = strtotime((string) $entry->availability['start']);
  $end = strtotime((string) $entry->availability['end']);
  if ($now < $start || $now > $end)
    continue;
  
  $items[(string) $entry->pid] = array(
    'start' => $start,
    'end' => $end,
    'xml' => $entry,
    );
}

uasort($items, 'sort_by_start_date'); 
function sort_by_start_date($a, $b){
   return ($a['start'] < $b['start']);
}