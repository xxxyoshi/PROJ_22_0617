<h2>{{ $newsShow->title }}</h2>
<p>カテゴリー：<a href="{{ route('news.category', ['news' => $newsShow->category]) }}">{{ $newsShow->category }}</a></p>
<p>{{ $newsShow->detail }}</p>
<p>更新日：{{ $newsShow->updated_at }}</p>
