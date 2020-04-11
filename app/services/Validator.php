<?php

namespace App\Services;

class Validator
{
    public $errors = [];

    protected function required($value)
    {
        if (!isset($value)) {
            $this->errors[] = 'Property is required';
        }
        if (is_string($value) && empty($value)) {
            $this->errors[] = 'Property is required: empty string provided';
        }
    }

    protected function string($value)
    {
        if (!is_string($value)) {
            $this->errors[] = 'Property is not a string';
        }
    }

    protected function maxChar255($value)
    {
        if (strlen($value) > 255) {
            $this->errors[] = 'Max allowed characters is 255';
        }
    }

    public function validate($todo, $criteria)
    {
        foreach ($criteria as $property => $rules) {
            try {
                if (!isset($todo[$property])) {
                    throw new \Exception("Could not validate: '{$property}' not set");
                }
                foreach (\explode(',', $rules) as $rule) {
                    if (!method_exists($this, $rule)) {
                        throw new \Exception("Could not validate: '{$rule}' rule unknown");
                    }
                    $this->$rule($todo[$property]);
                }

                return $this->errors;
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
