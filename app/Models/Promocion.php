<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Promocion extends Model
{
    protected $table = 'promociones';
    protected $fillable = ['titulo', 'descripcion','foto'];
    protected $guarded = ['id'];

    public static function setPromocion($foto, $actual = false){
        if ($foto) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/promociones/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/promociones/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
    }
}
