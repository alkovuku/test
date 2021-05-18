@extends('layouts.base')
@section('title', 'スタッフ追加')

@section('main')
	@if($name=='')
		スタッフ名が入力されていません。<br />
	@else
		スタッフ名：{{$name}}<br />
	@endif

	@if($pass=='')
		パスワードが入力されていません。<br />
	@endif

	@if($pass!=$pass2)
		パスワードが一致しません。<br />
	@endif

	@if($name=='' || $pass=='' || $pass!=$pass2)
		<form>
			<input type="button" onclick="history.back()" value="戻る">
		</form>
	@else
		<!-- $staff_pass=md5($staff_pass); -->
		<form method="post" action="/staff/staff_add_done">
			@csrf
			<input type="hidden" name="name" value="'.$name.'">
			<input type="hidden" name="pass" value="'.$pass.'">
			<br />
			<input type="button" onclick="history.back()" value="戻る">
			<input type="submit" value="ＯＫ">
		</form>
	@endif
@endsection