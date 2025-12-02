<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <?php if ($_SESSION['type'] == 1) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Data User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="penulis-index.php">
                        <span data-feather="shopping-cart"></span>
                        Data Penulis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku-index.php">
                        <span data-feather="shopping-cart"></span>
                        Data Buku
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Data Peminjaman
                    </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['type'] == 0) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Pinjam Buku
                    </a>
                </li>
            <?php } ?>

        </ul>



    </div>
</nav>