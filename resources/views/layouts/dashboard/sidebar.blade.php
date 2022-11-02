<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
            <a href="{{ route('profile') }}">
                <img src=" 
                @if (isset(auth()->user()->image))
                    {{ asset('storage/' . auth()->user()->image) }}
                @else
                    {{ asset('images/user.png') }}
                @endif
                ">
            </a>
        </div>
        <div class="user-name">
            {{ auth()->user()->name }}
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if ( 
            auth()->user()->role->name == 'super_admin' 
            || auth()->user()->role->name == 'admin' 
            )
            <li class="nav-item">
                <a class="nav-link" href="{{ route('landingpage') }}">
                    <i class="icon-content-left menu-icon"></i>
                    <span class="menu-title">Landing Page</span>
                </a>
            </li>
        @endif
        @if (
            auth()->user()->role->name != 'user'
        )
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="false" aria-controls="article">
                    <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Article</span>
                    <i class="menu-arrow"></i>
                </a>            
                <div class="collapse" id="article">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('article.index') }}">Post</a></li>
                        @if (
                            auth()->user()->role->name == 'super_admin'
                            || auth()->user()->role->name == 'admin'
                        )
                            <li class="nav-item"> <a class="nav-link" href="{{ route('category_article.index') }}">Category</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('writer.index') }}">Writer</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('editor') }}">Editor</a></li>
                        @endif
                    </ul>
                </div>
            </li>
        @endif
        @if (
            auth()->user()->role->name == 'super_admin'
            || auth()->user()->role->name == 'admin'
        )
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                    <i class="icon-bag menu-icon"></i>
                        <span class="menu-title">Product</span>
                    <i class="menu-arrow"></i>
                </a>            
                <div class="collapse" id="product">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('product.index') }}">Item</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('category_product.index') }}">Category</a></li>
                    </ul>
                </div>
            </li>
        @endif
    </ul>
</nav>