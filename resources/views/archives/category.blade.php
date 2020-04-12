<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $category }}の一覧</title>
</head>
<body>
  <h1>{{ $category }}の一覧</h1>
  {{-- {{ $category }}はbladeで使える機能
  {{-- <?= echo $category; ?>と同じ意味 --}}
  {{-- if文は@ifと記述する --}}
  {{-- もちろんelseは@else --}}
  {{-- 必ずendで閉まる --}}
  @if ($category == 'news')
  <p>本日のnewsをお伝えします</p>
  @endif
</body>
</html>