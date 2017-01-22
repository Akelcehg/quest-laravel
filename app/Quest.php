<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Quest
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $people_min
 * @property int $people_max
 * @property int $default_price
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest wherePeopleMin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest wherePeopleMax($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereDefaultPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Quest whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\QuestImage[] $images
 */
class Quest extends Model
{
    public function images()
    {
        return $this->hasMany(QuestImage::class);
    }
}
