<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $name
 */
class MyModel extends Model
{
    /**
     * Summary of relatedModel
     * @return HasOne<MyRelatedModel, MyModel>
     */
    public function relatedModel(): HasOne
    {
        return $this->hasOne(MyRelatedModel::class);
    }
}
