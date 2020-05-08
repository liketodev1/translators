<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageUser extends Model
{
   protected $table = 'language_user';

   protected $primaryKey = 'id';

   protected $fillable = [
       'user_id',
       'lang_from_id',
       'lang_to_id',
       'slow',
       'standard',
       'urgent',

   ];

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function langFrom()
   {
       return $this->belongsTo(Options::class,'lang_from_id');
   }

   public function langTo()
   {
       return $this->belongsTo(Options::class,'lang_to_id');
   }

}
