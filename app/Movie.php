<?php

class Movie
{
  public $title;
  public $description;
  public $year;
  public $actors = [];
  public $poster;

  function __construct($title, $description, $year, $actors, $poster)
  {
    $this->title = $title;
    $this->description = $description;
    $this->year = $year;
    $this->actors = $actors;
    $this->poster = $poster;
  }

  public function addActor($actor/*, $cast*/)
  {
    /*if (!in_array($actor, $cast)) {*/
    $this->actors[] = $actor;
    //}
  }

  /*public function removeActor($actor, $cast)
  {
    if (in_array($actor, $cast)) {
      $key = array_search($actor, $cast);
      $this->actors[] = [array_splice($cast, $key)];
    }
  }*/
}
