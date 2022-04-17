<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'content', 'category_id', 'thumbnail'];
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category(){
        return $this->BelongsTo(Category::class);
    }

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getImage(){

        if(!$this->thumbnail){
            return asset("no-image.png");
        }
        return asset("uploads/{$this->thumbnail}");
    }

    public function getPostDate(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at )->
        format('d F, Y');

    }



}
