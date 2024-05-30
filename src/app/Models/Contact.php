<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $fio
 * @property string $company
 * @property string $phone_number
 * @property string $email
 * @property string birth_date
 * @property string photo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static ContactFactory factory($count = null, $state = [])
 * @method static Builder|Contact newModelQuery()
 * @method static Builder|Contact newQuery()
 * @method static Builder|Contact query()
 * @method static Builder|Contact whereCreatedAt($value)
 * @method static Builder|Contact whereEmail($value)
 * @method static Builder|Contact whereEmailVerifiedAt($value)
 * @method static Builder|Contact whereId($value)
 * @method static Builder|Contact whereName($value)
 * @method static Builder|Contact wherePassword($value)
 * @method static Builder|Contact whereRememberToken($value)
 * @method static Builder|Contact whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fio',
        'company',
        'phone_number',
        'email',
        'birth_date',
        'photo',
    ];
}
