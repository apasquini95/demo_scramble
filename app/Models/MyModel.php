<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of MyModel
 * @property Carbon $date_prop
 * @property Carbon $datetime_prop
 */
class MyModel extends Model
{
    protected $table = 'my_models';
    
    protected function casts(): array
    {
        return [
            'date_prop'     => 'datetime:Y-m-d',
            'datetime_prop' => 'datetime',
        ];
    }
}
