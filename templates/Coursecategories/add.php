<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursecategory $coursecategory
 */
?>
<section>
    <div class="m-4">
        <h2 class="fw-bold">Add New category</h2>
        <p class="text-muted">
            Use the form below to add a new category.
        </p>
    </div>

    <?= $this->Form->create($coursecategory) ?>
    <div class="container m-5">

    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" name="name" class="form-control" />
                <label class="form-label" for="form8Example1"> name</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!-- description input -->
            <div class="form-outline">
                <input type="text" name="description" class="form-control" />
                <label class="form-label" for="form8Example1"> description</label>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>