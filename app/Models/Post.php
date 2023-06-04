<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, AsSource, HasTranslations, Attachable;

    public $translatable = ['title', 'description'];

    protected $guarded = [];

    public function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getTitle(),
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getDescription(),
        );
    }
    public function getTitle($lang = null)
    {
        $lang = $lang ?? app()->getLocale();
        return $this->getTranslations('title')[$lang] ?? '';
    }
    public function getDescription($lang = null)
    {
        $lang = $lang ?? app()->getLocale();
        return $this->getTranslations('description')[$lang] ?? '';
    }
}
