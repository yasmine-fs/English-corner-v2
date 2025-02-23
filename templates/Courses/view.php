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
            View and edit your Course informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- Course Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Course Informations</h4>
                <!-- name input -->
                <div class="mb-3">
                    <p><strong>name:</strong> <?= h($course->name) ?></p>
                </div>
                <!-- category input -->
                <div class="mb-3">
                    <p><strong>category:</strong> <?= h($course->category) ?></p>
                </div>
                <!-- state input -->
                <div class="mb-3">
                    <p><strong>state:</strong> <?= h($course->state) ?></p>
                </div>
                <!--duration  input -->
                <div class="mb-3">
                    <p><strong>duration:</strong> <?= h($course->duration) ?></p>
                </div>
                <!--price  input -->
                <div class="mb-3">
                    <p><strong>price:</strong> <?= h($course->price) ?></p>
                </div>
                <!--course_level  input -->
                <div class="mb-3">
                    <p><strong>course_level:</strong> <?= h($course->course_level) ?></p>
                </div>

            </div>
        </div>
    </div>
</section>