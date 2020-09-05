<?php

interface ValidatorInterface {

    public function validate(string $email) : bool;
}