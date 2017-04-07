<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * 複数代入を行う属性
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];

    /**
     * タスク所有ユーザーの取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
