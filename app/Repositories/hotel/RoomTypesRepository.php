<?php
namespace App\Repositories\hotel;

use App\Interfaces\hotel\RoomTypesInterface;
use App\Models\RoomTypes;
use Illuminate\Support\Facades\Auth;

class RoomTypesRepository implements RoomTypesInterface{
    public function storeValidation()
    {
        // dd(request()->all());
      return   $validate=request()->validate([
            'name'=>'required',
            'price'=>'required'
        ]);
    }
    public function store()
    {
        $roomType=new RoomTypes();
        $roomType->user_id=Auth::user()->id;
        $roomType->name=request()->name;
        $roomType->price=request()->price;
        $roomType->save();

    }
}

?>
