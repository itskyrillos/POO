<?php
class Validator
{
    private function sanitize($input, $filter)
    {
        return trim(filter_var($input, $filter));
    }

    private function validationFilter($input, $filter)
    {
        return filter_var($input, $filter);
    }

    private function validate($input)
    {
        if (isset($input) && !empty($input) && $input != "" && $input != " ") {
            return $input;
        } else {
            return "<p>Donnée introduite non valide</p>";
        }
    }

    public function string($input)
    {
        return validate(
            sanitize($input, FILTER_SANITIZE_STRING)
        );
    }

    public function int($input)
    {
        return validate(
            validationFilter(
                sanitize($input, FILTER_SANITIZE_NUMBER_INT),
                FILTER_VALIDATE_INT
            )
        );
    }

    public function float($input)
    {
        return validate(
            validationFilter(
                sanitize($input, FILTER_SANITIZE_NUMBER_FLOAT),
                FILTER_VALIDATE_FLOAT
            )
        );
    }

    public function email($input)
    {
        return validate(
            validationFilter(
                sanitize($input, FILTER_SANITIZE_EMAIL),
                FILTER_VALIDATE_EMAIL
            )
        );
    }

    public function url($input)
    {
        return validate(
            validationFilter(
                sanitize($input, FILTER_SANITIZE_URL),
                FILTER_VALIDATE_URL
            )
        );
    }
}
