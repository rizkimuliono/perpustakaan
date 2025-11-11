<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Login Page</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container form-signin">
        <h3>Form Registerasi</h3>
        <form action="proses-registerasi.php" method="post">
             <div class="form-floating">
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="nama kamu">
                <label for="floatingInput">Nama Member</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <input type="text" value="0" name="type_user">
            <input type="date" value="<?=date('Y-m-d');?>" name="join_date">
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p>Belum Punya Akun klik <a href="registerasi.php">Registerasi</a></p>
            <p class="mt-5 mb-3 text-body-secondary">&copy; Aplikasi Perpustakaan</p>
        </form>
    </main>

</body>

</html>