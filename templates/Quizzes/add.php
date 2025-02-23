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
            <!-- state input -->
            <div class="form-outline">
                <input type="text" name="state" class="form-control" />
                <label class="form-label" for="form8Example1">state</label>

                <select id="options" name="defficulty_level" class="form-select">
                    <option value="Easy">not_started</option>
                    <option value="Medium">in_progress</option>
                    <option value="Hard">completed</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- type input -->
            <div class="form-outline">
                <input type="text" name="type" class="form-control" />
                <label class="form-label" for="form8Example2">type</label>

                <select id="options" name="defficulty_level" class="form-select">
                    <option value="Easy">multiple_choice</option>
                    <option value="Medium">true_false</option>
                    <option value="Hard">single_choice</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- question input -->
            <div class="form-outline">
                <input type="text" name="question" class="form-control" />
                <label class="form-label" for="form8Example3">question</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- description input -->
            <div class="form-outline">
                <input type="text" name="description" class="form-control" />
                <label class="form-label" for="form8Example4">description</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">

            <select id="options" name="defficulty_level" class="form-select">
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
        </div>
        <div class="col-sm-4 m-1">
            <!-- duration input -->
            <div class="form-outline">
                <input type="text" name="duration" class="form-control" />
                <label class="form-label" for="form8Example4">duration</label>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>