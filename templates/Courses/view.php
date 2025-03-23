<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Courses</h2>
        <p class="text-muted">
            View and edit your course informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- course Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Courses Informations</h4>
                <!-- title input -->
                <div class="mb-3">
                    <p><strong>title:</strong> <?= h($course->title) ?></p>
                </div>
                <!-- description input -->
                <div class="mb-3">
                    <p><strong>description:</strong> <?= h($course->description) ?></p>
                </div>
                <!-- level input -->
                <div class="mb-3">
                    <p><strong>level:</strong> <?= h($course->level) ?></p>
                </div>
                <!-- feedback  input -->
                <div class="mb-3">
                    <p><strong>feedback:</strong> <?= h($course->feedback) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>