<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursecategory $coursecategory
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Coursecategories</h2>
        <p class="text-muted">
            View and edit your Coursecategory informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- Coursecategory Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Coursecategory Informations</h4>
                <!-- name input -->
                <div class="mb-3">
                    <p><strong>name:</strong> <?= h($coursecategory->name) ?></p>
                </div>
                <!-- description input -->
                <div class="mb-3">
                    <p><strong>description:</strong> <?= h($coursecategory->description) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>