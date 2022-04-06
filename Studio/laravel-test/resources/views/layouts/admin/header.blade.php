<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="sidebar">
    <header>
        <div class="image-text">
            <i class="fa-solid fa-user-secret icon"></i><span class="text nav-text">{{ Auth::user()->name }}</span>
        </div>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box"><i class='bx bx-search icon'></i> <input type="text" placeholder="Search..."></li>
            <ul class="menu-links">
                <li class="nav-link"><a href="{{ route('Admin') }}"><i class="fa-solid fa-gear icon"></i><span class="text nav-text">Tài khoản
                        </span>
                    </a></li>
                <li class="nav-link"><a href="{{ route('AdminBillsAoCuoi') }}">
                        <i class="fa-solid fa-shirt icon"></i><span class="text nav-text">Bills
                            Áo Cưới </span>
                    </a>
                </li>
                <li class="nav-link"><a href="{{ route('AdminBillsAnhCuoi') }}"><i class="fa-solid fa-images icon"></i><span class="text nav-text">Bills
                            Ảnh Cưới </span>
                    </a></li>
                <li class="nav-link"><a href="{{ route('ProductAdmin') }}"><i class="fa-solid fa-circle-up icon"></i><span class="text nav-text">Sản phẩm
                        </span>
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