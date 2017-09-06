<?php

Class Controller_Sample extends Controller{
  public function action_index(){
      $this->response->body('Sample Controller is Running <br/>'.PHP_EOL);
  }
}