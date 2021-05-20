@extends('layouts.base')
@section('title', 'スタッフ一覧')

@section('main')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <table class="table">
        <tr>
            <th>No.</th>
            <th>名前</th>
        </tr>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->name }}</td>
                <td>
                    <!-- <a href="/save/{{ $record->id }}/edit">編集</a>｜
                    <a href="/save/{{ $record->id }}">削除</a> -->
                    <form method="get" action="/staff/{{ $record->id }}/staff_edit">
                        <input type="submit" value="編集">
                    </form>
                </td>
                <td>
                    <form method="get" action="/staff/{{ $record->id }}/staff_delete">
                            <input type="submit" value="削除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection