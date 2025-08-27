<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property null|string $nickname
 * @property null|\Carbon\Carbon $dob
 */
class MyModel extends Model
{
    protected $table = 'my_models';

    protected function casts(): array
    {
        return [
            'dob' => 'datetime:Y-m-d',
        ];
    }
}
