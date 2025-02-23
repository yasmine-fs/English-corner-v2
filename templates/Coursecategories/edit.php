<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coursecategory $coursecategory
 */
?>
<section class="w-100 p-5">
    <div class="m-4">
        <h2 class="fw-bold">Edit category</h2>
        <p class="text-muted">
            Use the form below to edit category..
        </p>
    </div>

    <?= $this->Form->create($coursecategory) ?>
<div class="row">

    <div class="col-sm-4 m-1">
        <!-- Name input -->
        <div class="form-outline">
            <input type="text" name="Name" value="<?= $coursecategory->name  ?  $coursecategory->name : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example1">name</label>
        </div>
        <!-- description input -->
        <div class="form-outline">
            <input type="text" name="description" value="<?= $coursecategory->description  ?  $coursecategory->description : '' ?>"
                class="form-control" />
            <label class="form-label" for="form8Example1">description</label>
        </div>
    </div>
</div>

<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
<?= $this->Form->end() ?>

</section>