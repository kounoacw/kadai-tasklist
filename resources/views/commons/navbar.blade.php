<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ls-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Tasklist</a>
            </div>
            <div class="collapse navbar-collapse" id="ls-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('tasks.create', '新規タスクの追加') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>