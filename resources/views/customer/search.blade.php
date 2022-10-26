@extends('layouts.app')

@section('content')
<p>出発日{{ $departure->departure_date }}</p>
<p>全{{ $travel->count() }}件</p>

<div>
@foreach($travel as $travel)
  <a href="{{ route('history.show', $travel->customer->id) }}">
    <label>お客様ID：</label>
    <p>{{ $travel->customer->id  }}</p>
    <label>申込者：</label>
    <p>{{ $travel->customer->name }}</p>
    <label>出発日：</label>
    <p>{{ $travel->departure_date }}</p>
    <br>
  </a>
@endforeach


</div>
<a href="{{ route('travel.search') }}"><button>検索画面へ戻る</button></a>

@endsection
