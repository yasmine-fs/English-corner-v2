<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Answers</h2>
        <p class="text-muted">
            View and edit your answer informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- answers Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">users Informations</h4>
                <!-- correct_answer  input -->
                <div class="mb-3">
                    <p><strong>correct_answer:</strong> <?= h($answer->correct_answer) ?></p>
                </div>
                <!--is_correct  input -->
                <div class="mb-3">
                    <p><strong>is_correct:</strong> <?= h($answer->is_correct) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>