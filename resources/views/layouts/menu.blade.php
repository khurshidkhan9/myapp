<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('admin.home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Users
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <router-link to="/users" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Show all users</p>
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to="/users/create" class="nav-link">
                <i class="fas fa-user-plus nav-icon"></i>
                <p>Create New user</p>
            </router-link>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th-list"></i>
        <p>
            Posts
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <router-link to="/posts" class="nav-link">
                <i class="fas fa-list nav-icon"></i>
                <p>Show all Posts</p>
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to="/posts/create" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Create New Post</p>
            </router-link>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-image"></i>
        <p>
            Photos
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fas fa-images nav-icon"></i>
                <p>Show all photos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Upload New Photos</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-comment"></i>
        <p>
            Messages
            <span class="badge badge-danger right">30</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fas fa-comments nav-icon"></i>
                <p>Show all Messages</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-comments"></i>
        <p>
            Comments
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-comments nav-icon"></i>
                <p>Show All Comments</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fas fa-plus nav-icon"></i>
                <p>Create New Comments</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <router-link to="/profile" class="nav-link">
        <i class="nav-icon fas fa-user-plus"></i>
        <p>
            Profile
        </p>
    </router-link>
</li>
<li class="nav-item">
    <a href="pages/calendar.html" class="nav-link">
        <i class="nav-icon fas fa-cogs"></i>
        <p>
            Settings
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-power-off"></i>
        <p>
            Logout
        </p>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
        class="d-none">
        @csrf
    </form>
</li>
