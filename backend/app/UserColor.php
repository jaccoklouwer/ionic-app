<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserColor extends Pivot
{
    protected $table = 'pivot_color_user';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
