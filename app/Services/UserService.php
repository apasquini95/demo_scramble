<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    /**
     * Summary of getByName
     * @param string $name
     * @param bool $toBuilder
     * @return ($toBuilder is true ? Builder<User> : Collection<int, User>)
     */
    public function getByName(string $name, bool $toBuilder = false): Builder|Collection
    {
        $query = User::query()
            ->where('name', '=', $name);

        return $toBuilder
            ? $query
            : $query->get();
    }
}