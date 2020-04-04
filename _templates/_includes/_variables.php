<?php
  global $dir;
  global $activeTop;
  global $activeSub;
  global $activeMain;

  global $scriptList;
  global $styleList;

  global $prvLink;
  $prvLink = new NavLink(null, null, null);
  global $nxtLink;
  $nxtLink = new NavLink(null, null, null);
  // Nav object
  class NavLink {
  	public $link; // url
  	public $title; // Printed contents
    public $access; // Accessibility tag

    public function __construct($link, $title, $access) {
      $this -> link = $link;
      $this -> title = $title;
      $this -> access = $access;
    }

    public function getTtl() {
      if ($this -> access != null) {
        return $this -> title . "<span class=\"ah\"> " . $this -> access . "</span>";
      } else {
        return $this -> title;
      }
    }
  }

?>
