<?php

namespace App\Http\Controllers;

use App\nutrition;

use Illuminate\Http\Request;

class EiyoController extends Controller
{
 public function index(){
  return view('shokuzai/eiyo');

  }
public function add(Request $request){
$table= new nutrition;
$table->name=$request->name;
$table->kcal=$request->kcal;
$table->tou=$request->tou;
$table->shitu=$request->shitu;
$table->tanpaku=$request->tanpaku;
$table->bitaminc=$request->bitaminc;
$table->bitaminb1=$request->bitaminb1;
$table->bitaminb6=$request->bitaminb6;
$table->timestamps = false;

$table->save();
return redirect('/eiyo/date');
}
 public function show(Request $request){
 $val=nutrition::all();
 return view('shokuzai/eiyodate',['val'=>$val]);
 }
}