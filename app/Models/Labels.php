<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Labels extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id', 'label', 'server_id', 'server_id_2', 'domain_id', 'domain_id_2', 'shared_id', 'shared_id_2'];

    public static function deleteLabelsAssignedTo($service_id)
    {
        DB::table('labels_assigned')->where('service_id', '=', $service_id)->delete();
    }

    public static function deleteLabelAssignedAs($label_id)
    {
        DB::table('labels_assigned')->where('label_id', '=', $label_id)->delete();
    }
    
}