<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
      <div class="user-image">
        <img src="{{ asset('images/user.png') }}">
      </div>
      <div class="user-name">
          Edward Spencer
      </div>
      <div class="user-designation">
          Developer
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="icon-box menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-content-left menu-icon"></i>
          <span class="menu-title">Landing Page</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">About</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Profile</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#article" aria-expanded="false" aria-controls="article">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Article</span>
          <i class="menu-arrow"></i>
        </a>            
        <div class="collapse" id="article">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ url('/article/post') }}">Post</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('category_article.index') }}">Category</a></li>
            </ul>
        </div>
      </li>
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
    </ul>
</nav>