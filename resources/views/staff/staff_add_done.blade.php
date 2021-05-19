@extends('layouts.base')
@section('title', 'スタッフ追加')

@section('main')
    <form method="get" action="/staff/staff_list">
        @csrf
        {{$name}}さんを追加しました。<br />
        <input type="submit" value="戻る">
    </form>
@endsection