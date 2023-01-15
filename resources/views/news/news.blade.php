<div>
    <a href="{{ route('news.category', ['news' => 'サービス']) }}">サービス</a>
    <a href="{{ route('news.category', ['news' => 'システム']) }}">システム</a>
    <a href="{{ route('news.category', ['news' => 'その他']) }}">その他</a>

  <ul>
    @foreach($news as $news)
    <li>
      <a href="{{ route('news.show', ['news' => $news->id]) }}">{{ $news->title }}</a>
    </li>
    @endforeach
  </ul>
</div>