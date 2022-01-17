<?php

class Song {
  private string $name;
  private int $durationInS;

  public function __construct(string $name, int $durationInS) {
    $this->name = $name;
    $this->durationInS = $durationInS;
  }

  public function infos() {
    return $this->name . " dure " . $this->durationInS . " secondes";
  }
}