    <?= $this->extend('layout/template') ?>

    <?= $this->section('content'); ?>

    <section id="profile">
        <div class="container">
            <div class="profile text-center mt-5">
                <img src="/img/ferdi.png" alt="Ferdinand"
                    class="align-middle border border-dark border-2 rounded-circle" width="200">
                <h1 class="mt-3">Ferdinand.</h1>
                <h3 class="mt-5">
                    <p class="typewrite" data-period="2000"
                        data-type='[ "I am Student.", "I am Web Developer.","I Love to Develop." ]'>
                        <span class="wrap"></span>
                    </p>
                </h3>
            </div>
        </div>
    </section>




    <?= $this->endSection(); ?>