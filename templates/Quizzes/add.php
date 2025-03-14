<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Quizz</h2>
        <p class="text-muted">
            Use the form below to add a new Quizz. Providing its information
            Test your knowledge with our fun and engaging quizzes
        </p>
    </div>

    <?= $this->Form->create( $quiz) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- title input -->
            <div class="form-outline">
                <input type="text" name="title" class="form-control" />
                <label class="form-label" for="form8Example1">title</label>
            </div>
            <div class="col-sm-4 m-1">
                <!-- question input -->
                <div class="form-outline">
                    <input type="text" name="question" class="form-control" />
                    <label class="form-label" for="form8Example2">question</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 m-1">
                <!-- attempts input -->
                <div class="form-outline">
                    <input type="text" name="attempts" class="form-control" />
                    <label class="form-label" for="form8Example4">attempts</label>
                </div>
            </div>
        </div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
        <?= $this->Form->end() ?>

</section>