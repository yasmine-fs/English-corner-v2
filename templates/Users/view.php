<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered users</h2>
        <p class="text-muted">
            View and edit your user informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- user Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">users Informations</h4>
                <!-- Full_name input -->
                <div class="mb-3">
                    <p><strong>Full_name:</strong> <?= h($user->Full_name) ?></p>
                </div>
                <!-- email input -->
                <div class="mb-3">
                    <p><strong>email:</strong> <?= h($user->email) ?></p>
                </div>
                <!-- password  input -->
                <div class="mb-3">
                    <p><strong>password:</strong> <?= h($user->password) ?></p>
                </div>
                <!--state  input -->
                <div class="mb-3">
                    <p><strong>state:</strong> <?= h($user->state) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>