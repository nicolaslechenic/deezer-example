<?php

class User {
  private int $id;
  private array $favorites;

  public function __construct(int $id) {
    $this->id = $id;
    $this->favorites = [];
  }

  public function addToFav(Song $song) {
    array_push($this->favorites, $song);
  }

  public function getFavorites() {
    return $this->favorites;
  }
}
