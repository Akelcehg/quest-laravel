<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereUpdatedAt($value)
 */
class Message extends Model
{
    //
}
