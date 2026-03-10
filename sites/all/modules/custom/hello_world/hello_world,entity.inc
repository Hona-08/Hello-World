<?php
class HelloWorldGreeting extends Entity {
  public $gid;
  public $title;
  public $message;

  public function __construct(array $values = array()) {
    parent::__construct($values, 'hello_world_greeting');
  }
}