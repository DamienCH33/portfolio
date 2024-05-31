<?php include_once 'header.php'; ?>
    <div class="container marketing">

        <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
                    <image x="0" y="0" width="140" height="140" xlink:href="/ressources/image/damien.jpg" clip-path="url(#myClip)"></image>
                </svg>
                <h2 class="fw-normal">A propos de moi</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class="btn btn-secondary" href="../view/about.php">En savoir plus &raquo;</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1"> Mes compétences.</h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <p><a class="btn btn-secondary" href="../view/competences.php">En savoir plus &raquo;</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Mes projets. </h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <p><a class="btn btn-secondary" href="../view/projet.php">En savoir plus &raquo;</a></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Contactez moi. </h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <?php include_once 'contact.php'?>
            </div>
        </div>



<?php include_once 'footer.php';