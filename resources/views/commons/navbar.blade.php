   <body>
     <header class="mb-4">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="/">TaskList</a>
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                
                
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                @if(0)
                <ul class="navbar-nav">
                    {!! link_to_route('tasks.create','新規タスクの投稿',null,['class' => 'nav-link']) !!}
                </ul>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                </ul>
                @endif
            </div>
        </nav>
     </header>