<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Admins</h2>
        <p class="text-muted">
            View and edit your admin informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- admin Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Admins Informations</h4>
                <!-- email input -->
                <div class="mb-3">
                    <p><strong>email:</strong> <?= h($admin->email) ?></p>
                </div>
                <!-- password  input -->
                <div class="mb-3">
                    <p><strong>password:</strong> <?= h($admin->password) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>