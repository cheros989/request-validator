<?php

namespace Progsmile\Validator\Rules;


class Regex extends BaseRule
{
    public function getMessage()
    {
        return 'Field :field: has wrong value';
    }

    public function isValid()
    {
        if ($this->isNotRequiredAndEmpty()) {
            return true;
        }

        $regex = trim($this->getParams()[2]);
        $value = trim($this->getParams()[1]);

        return $this->respect('Regex', [$regex])->validate($value);
    }
}