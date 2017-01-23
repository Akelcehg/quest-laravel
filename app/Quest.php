<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

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
    private $defaultRules = [
        'name' => 'required',
        'description' => 'required',
        'people_min' => 'required|integer',
        'people_max' => 'required|integer'
    ];

    private $defaultMessages = [
        'name.required' => 'Название квеста обязательно для заполнения',
        'description.required' => 'Описание квеста обязательно для заполнения',
        'people_min.required' => 'Минимальная цена обязательна для заполнения',
        'people_max.required' => 'Максимальная цена обязательна для заполнения',
        'people_min.integer' => 'Минимальная цена должна быть числом',
        'people_max.integer' => 'Максимальная цена должна быть числом',
    ];

    protected $fillable = ['name'];

    public function validate($input)
    {
        return Validator::make($input, $this->defaultRules, $this->defaultMessages);
    }

    public function images()
    {
        return $this->hasMany(QuestImage::class);
    }
}
