<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
class CarController extends Controller
{
    //
    // public function displayForm () {
    //     return view('form');
    // }
  
    
    public function form($id = 0){
        $data = [
            'id'=> 0,
            'brand'=>'',
            'model'=>'',
            'dop'=>'',
            'po'=>'',
            'cpnumber'=>'',
            'status'=>'',
            'own'=>''
        ];
        if ($id != 0){
            $car = Car::find($id);
            $data['id'] = $id;
            $data['brand'] = $car->brand;
            $data['model'] = $car->model;
            $data['dop'] = $car->dop;
            $data['po'] = $car->po;
            $data['cpnumber'] = $car->cpnumber;
            $data['status'] = $car->status;
            $data['own'] = $car->own;
        }
        return view('name.form', compact('data'));
    }
    public function formSubmit(Request $request){
        if($request->id !=0){
            $new = Car::find($request->id);
        }else{
            $new = new Car;
        }
        $new->brand = $request->brand;
        $new->model = $request->model;
        $new->dop = $request->dop;
        $new->po = $request->po;
        $new->cpnumber = $request->cpnumber;
        $new->status = $request->status;
        $new->own = $request->own;

        $res = $new->save();
        return $res;
    }
    public function getCars(){
        $cars = Car::all();
        return $cars;
    }   
 
    public function deleteCar(Request $request){
        return Car::where('id',$request->id)->delete();
    }
    
}

    

