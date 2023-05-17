<?php

namespace App\Models;

use App\Helper\ImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'image',
      'status',
    ];

    public function saveData($request, $id = null)
    {
        Service::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'image' => ImageUpload::uploadImage($request->file('image'), 'assets/images/', isset($id) ? Service::find($id)->image : null),
        ]);
    }
}
