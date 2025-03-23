<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Progresses</h2>
        <p class="text-muted">
            View and edit your progress informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- progress Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">users Informations</h4>
                <!-- completed_chapters input -->
                <div class="mb-3">
                    <p><strong>completed_chapters:</strong> <?= h($progres->completed_chapters) ?></p>
                </div>
                <!-- status  input -->
                <div class="mb-3">
                    <p><strong>status:</strong> <?= h($progres->status) ?></p>
                </div>

            </div>


        </div>
    </div>
</section>