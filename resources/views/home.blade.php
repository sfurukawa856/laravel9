<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>トップ画面</title>
</head>
<body>
	<p>こんにちは
		@if(Auth::check()){{ Auth::user()->name }}さん</p>
			<p><a href="/logout">ログアウト</a></p>
		@else
			ゲストさん</p>
			<p><a href="/login">ログイン</a>
			<br>
			<a href="/register">会員登録</a></p>
		@endif
</body>
</html>