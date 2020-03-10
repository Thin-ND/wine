<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use GraphQL;
use App\Wine;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class WinesQuery extends Query
{
    protected $attributes = [
        'name' => 'wines',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Wine'));
    }

    public function resolve($root, $args)
    {
        return Wine::all();
    }
}
