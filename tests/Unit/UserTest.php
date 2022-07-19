<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_check_if_user_columns_is_correct()
    {
        $user = new User;

        $expected = [
            'name',
            'is_admin',
            'email',
            'photo',
            'password',
            'telephone',
            'birth_date',
            'cpf',
            'street',
            'number',
            'neighborhood',
            'city',
            'state',
            'cep',
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());



        $this->assertEquals(0, count($arrayCompared));
    }
}