<div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard') }}" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    {{--
                    @if($countMessages > 0)
                        <span class="badge badge-danger navbar-badge">{{ $countMessages }}</span>
                    @endif
                    --}}
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    @foreach($messages as $message)
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        @if ($message->talker)
                                            {{ $message->talker->name }}
                                        @else
                                            Moi
                                        @endif
                                    </h3>
                                    <p class="text-sm">{{ substr($message->message,0,20)  }}...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>
                                        {{ $message->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                    @endforeach
                    <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item" href="#">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    {{--
                    @if($countContacts > 0)
                        <span class="badge badge-danger navbar-badge">{{ $countContacts }}</span>
                    @endif
                    --}}
                </a>
            </li>

            <!-- logout -->
            <li class="nav-item">
                <a class="nav-link" href="#" title="Déconnexion"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off text-danger"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
</div>