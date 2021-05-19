@extends('layouts.base')
@section('title', 'スタッフ追加')

@section('main')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <table class="table">
        <tr>
            <th>No.</th>
            <th>名前</th>
        </tr>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->code }}</td>
                <td>{{ $record->name }}</td>
                <td>
                    <a href="/save/{{ $record->id }}/edit">編集</a>｜
                    <a href="/save/{{ $record->id }}">削除</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection