<?php

namespace App\Services;

class Validator
{
    protected static function required($value)
    {
        if (!isset($value)) {
            var_dump('Property is required');
        }
        if (is_string($value) && empty($value)) {
            var_dump('Property is required: empty string provided');
        }
    }

    protected function string($value)
    {
        if (!is_string($value)) {
            var_dump('Property is not a string');
        }
    }

    protected function maxChar255($value)
    {
        if (strlen($value) > 255) {
            var_dump('Max allowed characters is 255');
        }
    }

    public static function validate($todo, $criteria)
    {
        foreach ($criteria as $property => $rules) {
            try {
                if (!isset($todo[$property])) {
                    throw new \Exception("Could not validate: '{$property}' not set");
                }
                foreach (\explode(',', $rules) as $rule) {
                    if (!method_exists(static::class, $rule)) {
                        throw new \Exception("Could not validate: '{$rule}' rule unknown");
                    }
                    self::$rule($todo[$property]);
                }
            } catch (\Exception $e) {
                // TODO: throw 500
                var_dump($e->getMessage());
                die();
            }
        }
        
        // $errors = [];
        // list('body' => $body) = $todo;
        // // required, string, max char 255
        // if (!isset($body) || !is_string($body)) {
        //     throw new Exception('Error: malformed \'body\' property');
        // }
    }
}
