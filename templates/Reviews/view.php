<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Registered Reviews</h2>
        <p class="text-muted">
            View and edit your review informations below.
        </p>
    </div>
    <hr>
    <!-- Main container -->
    <div class="container mt-3">
        <div class="row">
            <!-- user Information on the left -->
            <div class="col-md-12">
                <h4 class="fw-bold mb-3">users Informations</h4>
                <!-- user_id input -->
                <div class="mb-3">
                    <p><strong>user:</strong> <?= h($review->user) ?></p>
                </div>
                <!-- course_id input -->
                <div class="mb-3">
                    <p><strong>course:</strong> <?= h($review->course) ?></p>
                </div>
                <!-- rating  input -->
                <div class="mb-3">
                    <p><strong>rating:</strong> <?= h($review->rating) ?></p>
                </div>
                <!--comment  input -->
                <div class="mb-3">
                    <p><strong>comment:</strong> <?= h($review->comment) ?></p>
                </div>
            </div>


        </div>
    </div>
</section>