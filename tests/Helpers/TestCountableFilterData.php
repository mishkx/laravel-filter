<?php

namespace Czim\Filter\Test\Helpers;

use Czim\Filter\FilterData;

class TestCountableFilterData extends FilterData
{
    /**
     * @var array<string, string>
     */
    protected $rules = [
        'name'                   => 'string',
        'relateds'               => 'array',
        'position'               => 'integer',
        'with_inactive'          => 'boolean',
    ];

    /**
     * @var array<string, mixed>
     */
    protected $defaults = [
        'name'          => null,
        'relateds'      => [],
        'position'      => null,
        'with_inactive' => false,
    ];
}
