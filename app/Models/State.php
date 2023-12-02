<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;
class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'color'
    ];

    /**
     * The Todo that belong to the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Todo(): BelongsToMany
    {
        return $this->hasMany(Todo::class);
    }
}
