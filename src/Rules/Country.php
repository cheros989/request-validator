<?php

namespace Progsmile\Validator\Rules;


class Country extends BaseRule
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

        $value = trim($this->getParams()[1]);

        return $this->respect('CountryCode')->validate($value);
    }
}