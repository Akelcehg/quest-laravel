<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\QuestImage
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $image
 * @property string $thumbnail
 * @property int $quest_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereThumbnail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereQuestId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\QuestImage whereUpdatedAt($value)
 */
class QuestImage extends Model
{
    //
}
