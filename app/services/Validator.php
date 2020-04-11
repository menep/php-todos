<?php

namespace App\Services;

class Validator
{
    protected static function required($value)
    {
        if (!isset($value)) {
            throw new Exception('Property is required');
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
                    if (!method_exists(self, $rule)) {
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
