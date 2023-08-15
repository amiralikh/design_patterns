<?php

namespace App\Decorators;

class FullNameDecorator implements UserDecorator
{
    public function decorate($data)
    {
        $data['full_name'] = $data['first_name'] . ' ' . $data['last_name'];
        return $data;
    }
}
