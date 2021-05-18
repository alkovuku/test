@extends('layouts.base')
@section('title', 'スタッフ追加')

@section('main')
	<!-- $staff_name=$_POST['name'];
	$staff_pass=$_POST['pass'];
	$staff_pass2=$_POST['pass2'];

	$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
	$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
	$staff_pass2=htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8'); -->

	@if($request->name=='')
	{
		スタッフ名が入力されていません。<br />
	}
	@else
	{
		スタッフ名：
		$staff_name;
		<br />
	}
	@endif

	@if($staff_pass=='')
	{
		パスワードが入力されていません。<br />
	}
	@endif

	@if($staff_pass!=$staff_pass2)
	{
		パスワードが一致しません。<br />
	}
	@endif

	@if($staff_name=='' || $staff_pass=='' || $staff_pass!=$staff_pass2)
	{
		<form>
			<input type="button" onclick="history.back()" value="戻る">
		</form>
	}
	@else
	{
		$staff_pass=md5($staff_pass);
		<form method="post" action="/staff/staff_add_done">
			@csrf
			<input type="hidden" name="name" value="'.$staff_name.'">
			<input type="hidden" name="pass" value="'.$staff_pass.'">
			<br />
			<input type="button" onclick="history.back()" value="戻る">
			<input type="submit" value="ＯＫ">
		</form>
	}
	@endif
@endsection