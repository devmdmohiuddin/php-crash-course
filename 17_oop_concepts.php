<?php

  class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }

    // public function set_name() {
    //   $this->name = "Mohi";
    //   $this->email = "mohiuddin0240@gmail.com";
    //   $this->password = "12232423";
    // }

    // public function get_name() {
    //   return $this->name . $this->email . $this->password;
    // }


  }

  // $user = new User("mohi", "mohiuddin0240@gmail.com", "123456");

  // print_r($user);

  class Extra extends User {
    public $position;

    public function __construct($name, $email, $password, $position) {
      Parent::__construct($name, $email, $password);
      $this->position = $position;
    }
  }

  $extra = new Extra("Hasan", "hasan@gmail.com", "123456", "Developer");

  print_r($extra);


?>