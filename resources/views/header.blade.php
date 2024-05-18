<nav class="navbar-home">
  <div class="wrapper">
    <div class="logo">
      <a href="Index.php"><img src="aset/Logo-Tandoor.png" alt=""></a>
    </div>
    <div class="menu">
      <ul class="navbar-list">
        <li><a href="/">Home</a></li>
        <li><a href="/Products">Products</a></li>
        <li><a href="/about">About Us</a></li>
        @auth
        <li><a href="/dashboard">Dashboard</a></li>
        <div class="dropdown">
          <i class="fa-solid fa-user" style="color: #fef9d9;" class="profil-icon"></i>
          <div class="dropdown-content">
            <div class="list-dropdown">
              <a href="/Profile">Profile</a>
              <a href="/orders">Orders</a>
              <form action="/logout" method="post" class="logout-btn">
                @csrf
                <button type="submit">Logout</button>
              </form>
            </div>
          </div>
        </div>
        @else
        <li><a href="/Login">Login</a></li>
        @endauth
      </ul>
    </div>
  </div>
</nav>