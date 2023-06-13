<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>
<section id="contact" class="mb-5">
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col">
                <h2 class="text-center">Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php if (session()->has('pesan')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Terima Kasih</strong> <?= session('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                <form action="contact/add" method="post">
                    <?php csrf_field(); ?>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address : </label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            name="emailUser">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        <?php if (session('validation')?->hasError('emailUser')) {
                            echo session('validation')->getError('emailUser');
                        } ?>
                    </div>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username :</label>
                        <input type="text" class="form-control" id="username" name="nama">
                        <?php if (session('validation')?->hasError('nama')) {
                            echo session('validation')->getError('nama');
                        } ?>
                    </div>
                    <div class="mb-4">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="messages"></textarea>
                            <label for="floatingTextarea2">Messages :</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="send">Send</button>
                </form>
            </div>
            <div class="col-md-5 mt-4">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="580" height="380" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Larangan&t=&z=10&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://2yu.co"></a><br>
                    </div>
                    <a href="https://embedgooglemap.2yu.co/"></a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class=" col">
                <i class="bi bi-telephone-forward fs-4"> Phone</i>
                <p>+62 89238912</p>
            </div>
            <div class="col">
                <i class="bi bi-envelope-at fs-4"> Email</i>
                <p>fkoryantoo@gmail.com</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>