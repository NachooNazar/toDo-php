<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'state_id'
    ];

    /**
     * Get the user associated with the Todo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
