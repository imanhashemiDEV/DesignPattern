<?php

namespace App\DesignePatterns\Facade;



class FacadeSignUp
{
  private $validate;
  private $user;
  private $auth;
  private $mail;

  public function __construct()
  {
      $this->validate = new FacadeValidate();
      $this->user = new FacadeUser();
      $this->auth = new FacadeAuth();
      $this->mail = new FacadeMail();
  }

    public function signup($request)
    {
        if($this->validate->isValid($request)){
            $this->user->create($request);
            $this->auth->login($request->email, $request->password);
            $this->mail->to($request->email,'welcome','message');
        }
  }
}
