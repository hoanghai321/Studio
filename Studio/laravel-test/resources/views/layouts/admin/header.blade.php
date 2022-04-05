<nav class="sidebar">
        <header>
            <div class="image-text">
                <div class="text logo-text">
                    <span class="name">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box"><i class='bx bx-search icon'></i> <input type="text" placeholder="Search..."></li>
                <ul class="menu-links">
                    <li class="nav-link"><a href="{{ route('Admin') }}"> <i class='bx bx-home-alt icon'></i> <span class="text nav-text">QLTK
                            </span>
                        </a></li>
                    <li class="nav-link"><a href="{{ route('AdminBillsAoCuoi') }}">
                            <i class='bx bx-bell icon'></i> <span class="text nav-text">Bills
                                Áo Cưới </span>
                        </a>
                    </li>
                    <li class="nav-link"><a href="{{ route('AdminBillsAnhCuoi') }}"> <i class='bx bx-bell icon'></i> <span class="text nav-text">Bills
                                Ảnh Cưới </span>
                        </a></li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="font-size: 20px; width: 100%;" type="submit" class="btn btn-danger">Logout
                </button>
            </form>
        </div>
    </nav>