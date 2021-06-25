<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * Class Client
 * @package App\Models
 * @mixin Builder
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property Carbon $date_profiled
 * @property string $primary_legal_counsel
 * @property Carbon $date_of_birth
 * @property string $profile_image
 * @property string $case_details
 */
class Client extends Model
{
    use HasFactory;
    use Notifiable;

    protected $casts = [
        'date_profiled' => 'date',
        'date_of_birth' => 'date'
    ];

    protected $guarded = [];
}
