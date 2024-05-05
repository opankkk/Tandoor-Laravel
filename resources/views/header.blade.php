
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
                        <a href="/Profile" id="user-btn"><i class="fa-solid fa-user" style="color: #fef9d9;"></i></a>
                        <div class="dropdown-content">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <li><a href="/Login">Login</a></li>
                @endauth                
            </ul>
        </div>
    </div>
</nav>