<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Students</h2>
        <p class="text-muted">
            View and edit your student informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- student Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">users Informations</h4>
                <!-- Full_name input -->
                <div class="mb-3">
                    <p><strong>Full_name:</strong> <?= h($Student->Full_name) ?></p>
                </div>
                <!-- email input -->
                <div class="mb-3">
                    <p><strong>email:</strong> <?= h($Student->email) ?></p>
                </div>
                <!-- password  input -->
                <div class="mb-3">
                    <p><strong>password:</strong> <?= h($Student->password) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>