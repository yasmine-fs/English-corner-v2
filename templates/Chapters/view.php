<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Chapters</h2>
        <p class="text-muted">
            View and edit your chapter informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- chapter Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Chapters Informations</h4>
                <!-- title input -->
                <div class="mb-3">
                    <p><strong>title:</strong> <?= h($chapter->title) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>