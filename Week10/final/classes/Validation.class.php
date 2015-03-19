<?php

class Validation {

    public function fieldIsNotEmpty($fieldVar) {
        if (!empty($fieldVar)) {
            return true;
        } else {
            return false;
        }
    }

    public function emailIsValid($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) != false) {
            return true;
        } else {
            return false;
        }
    }

    public function phoneIsValid($phone) {
        $error_message = "";
        $justNums = preg_replace("/[^0-9]/", '', $phone);
        $phone = $justNums;
        //eliminate leading 1 if its there
        if (strlen($phone) == 11) {
            $phone = preg_replace("/^1/", '', $phone);
        }

        //if we have 10 digits left, it's probably valid.
        if (strlen($phone) != 10) {
            $error_message .= "x";
        }

        if (!is_numeric($phone)) {
            $error_message .= "x";
        }
        
        if (empty($error_message)) {
        return true;
        } else {
            return false;
        }
    }
}
