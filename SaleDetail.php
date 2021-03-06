<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail
    extends Model
{
    protected $table = 'sales_details';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'id');
    }
}
