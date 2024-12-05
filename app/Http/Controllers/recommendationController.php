<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\userRecom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Phpml\Regression\LeastSquares;


class recommendationController extends Controller
{
    public function recommend(Request $request)
    {
        $request->validate([
            'age' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'gender' => 'required|in:male,female',
            'activity_level' => 'required',
        ]);
        
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $activityLevel = $request->input('activity_level');

        $dataset = userRecom::select('weight', 'height', 'age', 'activity_level','gender', 'kalori')->get();
        
        $samples = [];
        $targets = [];
        

        foreach ($dataset as $data) {
            $samples[] = [
                $data->weight,
                $data->height,
                $data->age,
                $data->activity_level,
                $data->gender == 'male' ? 0 : 1,
            ];  
            $targets[] = [$data->kalori];
        }   
    
        $regressor = new LeastSquares();
        $regressor->train($samples, $targets);
        
        $input = [
            $weight,
            $height,
            $age,
            $activityLevel,
            $gender == 'male' ? 0 : 1,
        ];
        $hasil = $regressor->predictSample($input);
        $prediction = round($hasil);
        if($prediction < 2500){
            $min = ($prediction/3)-500;
            $max = ($prediction/3)+500;
        }
        else if($prediction > 2980){
            $min = ($prediction/4)-500;
            $max = ($prediction/4)+500;
        }
        else{
            $min = ($prediction/3.5)-500;
            $max = ($prediction/3.5)+500;
        }

        $food = menu::whereBetween('kalori', [$min, $max])->get();
        // $food = menu::all();
        return view('detailRekomendasi', ['prediction' => $prediction, 'food' => $food, 'title'=>"Rekomendasi Makanan"]);
        
    }

    public function index(){
        return view('rekomendasi', [ 'title'=>"Rekomendasi Makanan"]);
    }
}