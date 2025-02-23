<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Quizzes</h2>
        <p class="text-muted">
            View and edit your Quizz informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- Quizz Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">Quizz Informations</h4>
                <!-- state input -->
                <div class="mb-3">
                    <p><strong>state:</strong> <?= h($course->state) ?></p>
                </div>
                <!-- type input -->
                <div class="mb-3">
                    <p><strong>type:</strong> <?= h($course->type) ?></p>
                </div>
                <!-- question  input -->
                <div class="mb-3">
                    <p><strong>question:</strong> <?= h($course->question) ?></p>
                </div>
                <!--description  input -->
                <div class="mb-3">
                    <p><strong>description:</strong> <?= h($course->description) ?></p>
                </div>
                <!--duration  input -->
                <div class="mb-3">
                    <p><strong>duration:</strong> <?= h($course->duration) ?></p>
                </div>
                <!--defficulty_level  input -->
                <div class="mb-3">
                    <p><strong>defficulty_level:</strong> <?= h($course->defficulty_level) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>