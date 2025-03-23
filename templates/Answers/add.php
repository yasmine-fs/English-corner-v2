<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 * @var \Cake\Collection\CollectionInterface|string[] $quizzes
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New Answer</h2>
        <p class="text-muted">
            Use the form below to add a new answer
        </p>
    </div>

    <?= $this->Form->create(  $answer) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- correct_answer input -->
            <div class="form-outline">
                <input type="text" name="correct_answer" class="form-control" />
                <label class="form-label" for="form8Example3">correct_answer</label>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- correct input -->
        <div class="form-outline">
            <input type="text" name="is_correct" class="form-control" />
            <label class="form-label" for="form8Example2">is_correct</label>
        </div>


    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>
