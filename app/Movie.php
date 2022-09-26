<?php

class Movie
{
  public $title;
  public $description;
  public $year;
  // public $actors = [];
  public $poster;

  function __construct($title, $description, $year, /*$actors,*/ $poster)
  {
    $this->title = $title;
    $this->description = $description;
    $this->year = $year;
    // $this->actors = $actors;
    $this->poster = $poster;
  }

  public function addActor($actor)
  {
  }

  public function RemoveActor($actor)
  {
  }
}
