@extends('layouts.base')
@section('title', 'スタッフ削除')

@section('main')
    スタッフ削除<br />
    <br />
    <form method="post" action="/staff/{{ $staff->id }}">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{ $staff->id }}">
        <div class="pl-2">
            <label id="name">スタッフ名：</label>
            {{ $staff->name }}
        </div>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="削除">
    </form>
@endsection