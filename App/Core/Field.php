<?php

namespace App\Core;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public string $type;
    public string $attribute;

    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
            <div class="form-group">
            <label>%s</label>
            <input type="%s" name="%s">
            </div>
        ',
            $this->getLabel($this->attribute),
            $this->type,
            $this->attribute
        );
    }

    public function passwordField()
    {
        $newField = clone $this;
        $newField->type = self::TYPE_PASSWORD;
        return $newField;
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'email' => 'Your email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password',
        ];
    }

    public function getLabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }
}
