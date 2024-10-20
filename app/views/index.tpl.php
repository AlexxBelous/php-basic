<?php require 'app/views/includes/header.php'; ?>


    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php require 'app/views/includes/sidebar.php'; ?>
            </div>
        </div>
    </main>

    <footer class="footer">
    <div class="text-bg-dark p-3 text-center">
        <p>&copy; Copyright <?php echo date('Y') ?></p>
    </div>
<?php require 'app/views/includes/footer.php'; ?>