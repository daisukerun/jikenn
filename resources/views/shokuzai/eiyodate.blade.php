@extends('layout')

@section('a')
<h2>食材保存データベース</h2>
@csrf
@foreach($val as $val)
  <tr>
  <td>{{$val->id}}</td>
 <td>{{$val->name}}</td></br>
</tr>
@endforeach
@endsection