<?php

namespace Seat\Kassie\Calendar\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Web\Models\User;

/**
 * Class Attendee.
 *
 * @package Seat\Kassie\Calendar\Models
 */
class Attendee extends Model
{
    /**
     * @var string
     */
    protected $table = 'calendar_attendees';

    /**
     * @var array
     */
    protected $fillable = [
        'character_id',
        'operation_id',
        'user_id',
        'status',
        'comment'
    ];

    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime'];

    /**
     * @return BelongsTo
     */
    public function character(): BelongsTo
    {
        return $this->belongsTo(CharacterInfo::class, 'character_id', 'character_id');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
