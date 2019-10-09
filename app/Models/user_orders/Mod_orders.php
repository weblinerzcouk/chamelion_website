<?php

namespace App\Models\user_orders;

use App\Models\delivery_info\Mod_deliveryinfo;
use App\Models\ordered_products\Mod_ordered_products;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Mod_orders extends Model
{
    protected $table = 'orders';

   public function getdeliveryaccc()
   {
       return $this->belongsTo(Mod_deliveryinfo::class,'delivery_info');
   }
   public function getussser()
   {
       return $this->belongsTo(User::class,'user_id');
   }
    }
