<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="<?= ASSETS ?>favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= CSS ?>styles.css" type="text/html" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= ROOT ?>logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('<?= IMG ?>post-bg.jpg');height: 50%;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div style="text-align: center;margin-top: 15%;color:white;" class="page-heading">
                        <h1 style="font-size:5rem;">Admin Panel</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <div class="my-5">
                        <?php if (!empty($errors)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= implode("<br>", $errors) ?>
                            </div>
                        <?php endif; ?>


                        <form action="<?= ROOT ?>add"><button class="btn btn-primary mt-1" type="submit">Add New</button></form>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="w-75">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $post) { ?>
                                    <tr>
                                        <th scope="row"><?php show($post->name); ?></th>
                                        <td>
                                            <form method="POST"><input class="d-none" type="text" name="id" value="<?php print($post->id); ?>"> <button formaction="<?= ROOT ?>edit/<?php print($post->id); ?>" class="btn btn-primary mt-1" type="submit">Edit</button>
                                            <button formaction="<?= ROOT ?>delete/<?php print($post->id); ?>" class="btn btn-danger mt-1" type="submit">Delete</button></form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>