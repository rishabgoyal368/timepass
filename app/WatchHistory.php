<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
  protected $table = 'watch_history';

  protected $fillable = [
    'user_id',
    'movie_id',
  ];

  /**
   * Get the user associated with the WatchHistory
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function movie()
  {
      return $this->hasOne(Movie::class, 'id', 'movie_id');
  }
}
