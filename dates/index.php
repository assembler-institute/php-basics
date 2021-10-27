<?php 

  class MyCustomDates extends DateTime {
    
    function __construct() {
      parent::__construct();

    }
    
    function getAllDatesFormats() {
      return array(
        'formats' => array(
          DateTimeInterface::ATOM,
          DateTimeInterface::COOKIE,
          DateTimeInterface::ISO8601,    
          DateTimeInterface::RFC822,
          DateTimeInterface::RFC850,
          DateTimeInterface::RFC1036,
          DateTimeInterface::RFC1123,
          DateTimeInterface::RFC2822,
          DateTimeInterface::RFC3339,   
          DateTimeInterface::RFC3339_EXTENDED,     
          DateTimeInterface::RSS,
          DateTimeInterface::W3C,  
        ),
        'month' => array(
          'f','n','m','M' 
        ),
        'minutes' => array(
          'i'
        )
      );
    }
  }

  $date = new MyCustomDates();
  $formatsArray = $date->getAllDatesFormats();
  
  
  foreach($formatsArray as $key => $formats) {

    echo "<h1>Get current date $key</h1>";

    foreach($formats as $format) {
      $dateFormat = $date->format($format);
      echo $dateFormat.'<br/>';
    }
  }

?>