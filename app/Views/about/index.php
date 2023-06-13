<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<section id="about">
    <div class="container">
        <div class="row justify-content-center mt-4 p-1">
            <div class="col-md-5 text-center">
                <h3 class="text-center aboutme">About me</h3>
                <img src="/img/ferdi.png" alt="ferdinand" width="400" class="img-thumbnail">
            </div>
            <div class="col-md-5 mt-5">
                <h2 class="ferdinand">Hello!</h2>
                <h2 class="ferdinand">I'm <span>Ferdinand.</span></h2>
                <p class="mt-3">I am an active student at the University of Bina Sarana Informatika majoring in
                    Bachelor
                    of
                    Information Systems who has an interest in computers, especially in programming. I am happy to learn
                    more about the world of programming and can work well both in a team and individually
                </p>
            </div>
        </div>
    </div>
</section>

<section id="skill" class="mb-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2 class="text-center">Skills</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                HTML & CSS
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                able to create the basic structure of the website using HTML and CSS.
                                Create responsive interfaces using technologies such as
                                <code> Bootstrap, TailwindCSS </code>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Javascript
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Understand basic Javascript and be able to make the website display more interactive
                                using the Javascript DOM or using the <code>Jquery</code> Framework.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    PHP
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Understand basic PHP, OOP, CRUD and PHP MVC. Able to make websites more dynamic
                                    using <code>CodeIgniter 4</code>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    MYSQL
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Able to operate database and understand SQL language and commands such as:
                                    <code>INSERT, UPDATE, DELETE, CREATE, ALTER, DROP</code> and many more.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<?= $this->endSection(); ?>