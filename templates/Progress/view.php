<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Progres $progres
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Progrss</h2>
        <p class="text-muted">
            View and edit your Progress informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- progress Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Progress Informations</h4>
                <!-- id_progress input -->
                <div class="mb-3">
                    <p><strong>id_progress:</strong> <?= h($progres->id_progress) ?></p>
                </div>
                <!-- user_id input -->
                <div class="mb-3">
                    <p><strong>user_id:</strong> <?= h($progres->user_id) ?></p>
                </div>
                <!-- quizz_id input -->
                <div class="mb-3">
                    <p><strong>quizz_id:</strong> <?= h($progres->quizz_id) ?></p>
                </div>
                <!--course_id  input -->
                <div class="mb-3">
                    <p><strong>course_id:</strong> <?= h($progres->course_id) ?></p>
                </div>
                <!--completion  input -->
                <div class="mb-3">
                    <p><strong>completion:</strong> <?= h($progres->completion) ?></p>
                </div>
                <!--last_accessed  input -->
                <div class="mb-3">
                    <p><strong>course_level:</strong> <?= h($progres->last_accessed) ?></p>
                </div>

            </div>
        </div>
    </div>
</section>