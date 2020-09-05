<?php

require_once 'ValidatorInterface.php';

class EmailValidator implements ValidatorInterface {

    public function validate(string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }
}