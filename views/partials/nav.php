<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="/">LBlog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <?php if (isset($_SESSION['user_id'])) : ?>
            <li class="nav-item <?= $active2 ?>">
                <a class="nav-link" href="#">Find Friends</a>
            </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['user_id'])) : ?>
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout">Log out</a>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php if (!isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="register">Register</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
</nav>
