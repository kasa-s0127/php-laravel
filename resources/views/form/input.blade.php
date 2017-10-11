@extends('layouts.common')
@section('content')

<title>お問い合わせ</title>
<div class="container">
    <div class="mx-auto" style="width: 300px;">
    <p><h2>お問い合わせフォーム</h2></p>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('form::confirm') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <style>label{margin: 5px 10px 5px 0px;}</style>
        <div class="form-group">
            <label>氏名</label><span class="badge badge-danger">必須</span>
            <input type="text" class="form-control" name="name" placeholder="氏名を入力してください">
        </div>
        <div class="form-group">
            <label>電話番号</label>
            <input type="text" class="form-control" name="tel" placeholder="電話番号を入力してください">
        </div>
        <div class="form-group">
            <label>メールアドレス</label><span class="badge badge-danger">必須</span>
            <input type="text" class="form-control" name="email" placeholder="メールアドレスを入力してください">
        </div>
        <div class="form-group">
            <label>性別</label><span class="badge badge-danger">必須</span><br>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="1"> 男性
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="2"> 女性
                </label>
            </div></p>
        </div>
        <div class="form-group">
            <label>内容</label><span class="badge badge-danger">必須</span>
            <textarea class="form-control" name="content" rows="3" placeholder="内容を入力してください（最大500文字）"></textarea>
        </div>
        <div class="form-group row">
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">確認する</button>
            </div>
        </div>
    </form>
</div>
@endsection