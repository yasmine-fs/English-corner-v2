<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Add New review</h2>
        <p class="text-muted">
            Use the form below to edit your review
        </p>
    </div>

    <?= $this->Form->create(  $review) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!--user_id input -->
            <div class="form-outline">
                <input type="text" name="user" class="form-control" />
                <label class="form-label" for="form8Example1">	user</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--course_id input -->
            <div class="form-outline">
                <input type="text" name="course_id" class="form-control" />
                <label class="form-label" for="form8Example2">course</label>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- rating input -->
            <div class="form-outline">
                <input type="number" name="rating" class="form-control" />
                <label class="form-label" for="form8Example3">rating</label>
            </div>
        </div>
    </div>
        <!-- comment input -->
        <div class="form-outline">
            <input type="text" name="comment" class="form-control" />
            <label class="form-label" for="form8Example2">comment</label>
        </div>
    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>

