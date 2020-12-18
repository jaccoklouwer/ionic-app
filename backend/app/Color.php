<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @Relation
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'pivot_color_user')
                ->using(UserColor::class);
    }
}
