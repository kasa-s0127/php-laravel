@extends('layouts.common')
@section('content')

<title>お問い合わせ確認</title>

<p><center><h3>お問い合わせ確認</h3>
<h4>以下の内容で送信しますが、よろしいですか？</h4></center></p>
<div class="container">
    <br>
    <form method="POST" action="{{ route('form::complete') }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <table class="table table-hover table-bordered" style="table-layout:fixed;">
                <tr><td width="150"><div class="text-right">氏名：</div></td>
                    <td>{{$name}}様</td>
                </tr>
                <tr><td width="150"><div class="text-right">電話番号：</div></td>
                    <td>{{$tel}}</td>
                </tr>
                <tr><td width="150"><div class="text-right">e-mail：</div></td>
                    <td>{{$email}}</td>
                </tr>
                <tr><td width="150"><div class="text-right">性別：</div></td>
                    <td>@if ($gender == 1)
                        男性
                        @elseif ($gender == 2)
                        女性
                        @endif
                    </td>
                </tr>
                <tr><td width="150"><div class="text-right">内容：</div></td>
                    <td>{{$content}}</td>
                </tr>
            </table>
            <div class="row flex-items-xs-middle">
                <div class="mx-auto">
                    <button type="button" class="btn btn-warning" onclick="history.back()">修正する</button>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-success">送信する</button>
                </div>
            </div>
    </form>
</div>
@endsection