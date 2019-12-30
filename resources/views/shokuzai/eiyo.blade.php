
@extends('layout')

@section('a')
<h2>食材のデーター保存</h2>
<p>食材名と100gあたりの下記の項目栄養成分を記入してください</p>
<form role="form" method="POST">
@csrf
<ul>
<li><lavel>食材名</br><input type="text" name="name"></lavel></li>
<li><lavel>カロリー</br><input type="number" step="0.001" name="kcal"></lavel></li>
<li><lavel>糖質</br><input type="number"  step="0.001" name="tou"></lavel></li>
<li><lavel>脂質</br><input type="number" step="0.001" name="shitu"></lavel></li>
<li><lavel>タンパク質</br><input type="number"  step="0.001" name="tanpaku"></lavel></li>
<li><lavel>ビタミンC</br><input type="number" step="0.001" name="bitaminc"></lavel></li>
<li><lavel>ビタミンB1</br><input type="number"  step="0.001" name="bitaminb1"></lavel></li>
<li><lavel>ビタミンB6</br><input type="number"  step="0.001" name="bitaminb6"></lavel></li>
</ul>
<input type="submit" value="保存">
</form>
@endsection
