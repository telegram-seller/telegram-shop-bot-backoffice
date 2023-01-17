<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = "messages";
    
    protected $fillable = [
        "name",
        "content",
        "slug",
        "button"
    ];

    protected $appends = [
        "formmated_created_at"
    ];

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d/m/Y H:i');
    }

    public static function create(array $attributes)
    {
        $nameWithoutSpaces = preg_replace(" ", "_", $attributes["name"]);
        $attributes["slug"] = strtolower($nameWithoutSpaces);

        $message = new Message($attributes);

        $message->save();

        return $message;
    }

    public function update(array $attributes = [], array $options = [])
    {
        $nameWithoutSpaces = preg_replace(" ", "_", $attributes["name"]);
        $attributes["slug"] = strtolower($nameWithoutSpaces);

        parent::update($attributes, $options);
    }
}
