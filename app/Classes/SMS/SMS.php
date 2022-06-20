<?php

namespace App\Classes\SMS;

class SMS
{
   private  $mobile;
   private  $message;

    /**
     * @param string $mobile
     * @param string $message
     */
    public function __construct(string $mobile, string $message)
    {
        $this->mobile = $mobile;
        $this->message = $message;
    }


    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function getMessage(): string
    {
        return $this->message;
    }


}
