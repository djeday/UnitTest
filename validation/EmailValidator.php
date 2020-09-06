<?php

namespace App;

class EmailValidator {

    public function validate(string $email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }
}