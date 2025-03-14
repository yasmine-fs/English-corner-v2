<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered teachers</h2>
        <p class="text-muted">
            View and edit your teacher informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- teacher Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Teachers Informations</h4>
                <!-- Full_name input -->
                <div class="mb-3">
                    <p><strong>Full_name:</strong> <?= h($Teacher->Full_name) ?></p>
                </div>
                <!-- email input -->
                <div class="mb-3">
                    <p><strong>email:</strong> <?= h($Teacher->email) ?></p>
                </div>
                <!-- password  input -->
                <div class="mb-3">
                    <p><strong>password:</strong> <?= h($Teacher->password) ?></p>
                </div>
                <!--state  input -->
                <div class="mb-3">
                    <p><strong>teaching_domain:</strong> <?= h($Teacher->teaching_domain) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>