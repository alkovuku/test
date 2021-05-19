@extends('layouts.base')
@section('title', 'スタッフ修正')

@section('main')
    スタッフ修正<br />
    <br />
    <form method="post" action="/staff/{{ $staff->id }}">
        @csrf
        @method('patch')
        <div class="pl-2">
            <label id="name">スタッフ名：</label>
            <input id="name" name="name" type="text"
            size="15" value="{{ old('name', $staff->name) }}" />
        </div>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="ＯＫ">
    </form>
@endsection