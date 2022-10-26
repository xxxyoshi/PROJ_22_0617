<header>
    <div class="header-area">
        <div class="header-left">
            <div class="header-left-top">
                <img src="{{ asset('images/logo.png')}}" alt="Go To Travelのロゴ">
                <p class="logo-text">Go To TRAVEL</p>
            </div>
            <div class="header-left-bottom">
                <h2>補助金管理</h2>
            </div>
        </div>
        <div class="header-right">
        <div class="header-right-left">
            <div class="header-right-top">
                <p>原宿店</p>
                <p>上田さん</p>
                <p class="task">未完了タスクは{{ count($tasks) }}件です。</p>
                <div class="tasklist">
                    <ul>
                        @foreach($tasks as $task)
                        <li>
                            <a href="{{ route('task.show', ['travel' => $task->travel_id]) }}">{{ $task->title }}が未完了です。</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="header-right-bottom">
                <ul class="header-list">
                    <li>
                        <a href="#">新規申請</a>
                    </li>
                    <p>/</p>
                    <li><a href="#">検索</a></li>
                    <p>/</p>
                    <li><form action="{{ route('logout') }}" method="post">
                        @csrf
                            <input type="submit" value="ログアウト" class="logout">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-right-right">
            <a href="#"><p class="triple-bar">≡</p></a>
        </div>
    </div>
    </div>
</header>