@extends('layouts.base')
@section('title', 'スタッフ追加')

@section('main')
    スタッフ追加<br />
    <br />
    <form method="post" action="/staff/staff_add_check">
        @csrf
        スタッフ名を入力してください。<br />
        <input type="text" name="name" size="15" value="{{ old('name') }}"><br />
        パスワードを入力してください。<br />
        <input type="password" name="pass" style="width:100px"><br />
        パスワードをもう１度入力してください。<br />
        <input type="password" name="pass2" style="width:100px"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="ＯＫ">
    </form>
@endsection