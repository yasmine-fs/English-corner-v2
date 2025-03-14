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
            View and edit your quiz informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- quiz Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">quizzes Informations</h4>
                <!-- title input -->
                <div class="mb-3">
                    <p><strong>title:</strong> <?= h($quiz->title) ?></p>
                </div>
                <!-- question input -->
                <div class="mb-3">
                    <p><strong>question:</strong> <?= h($quiz->question) ?></p>
                </div>
                <!-- attempts  input -->
                <div class="mb-3">
                    <p><strong>attempts:</strong> <?= h($quiz->attempts) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>