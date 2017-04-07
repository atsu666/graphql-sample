<?php

namespace App\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Nuwave\Relay\Support\Definition\RelayType;
use GraphQL\Type\Definition\ResolveInfo;

class UserType extends RelayType
{
    /**
     * Attributes of Type.
     *
     * @var array
     */
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user of the application.',
    ];

    /**
     * Get user by id.
     *
     * @param  string $id
     * @return User
     */
    public function resolveById($id)
    {
        return User::find($id);
    }

    /**
     * Available fields of Type.
     *
     * @return array
     */
    public function relayFields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::id()),
                'description' => 'The primary id of the user.'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'Full name of user.'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'Email address of user.'
            ]
            // ...
        ];
    }

    /**
     * List of related connections.
     *
     * @return array
     */
    public function connections()
    {
        return [];
    }
}
