<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<section id="project">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center mt-2">My Projects</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md">
                <div class="card mb-3">
                    <img src="/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project #1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary">Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card mb-3">
                    <img src="/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project #2</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary">Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card mb-3">
                    <img src="/img/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project #3</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary">Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card mb-3">
                    <img src="/img/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project #4</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary">Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card mb-3">
                    <img src="/img/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Project #5</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary">Details</button>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection(); ?>