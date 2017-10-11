@extends('layouts.common')
@section('content')

<title>送信完了</title>

<div class="container">
    <form action="{{ route('form::input') }}">
        <center>
            <p><h1>送信完了</h1></p>
            <p>お問い合わせ内容の送信が完了しました。</p>
        </center>
    <div class="row flex-items-xs-middle">
        <div class="mx-auto">
                <button type="button" class="btn btn-warning" onclick="history.go(-2)">戻る</button>

        </div>
    </div>
    </form>
</div>

@endsection