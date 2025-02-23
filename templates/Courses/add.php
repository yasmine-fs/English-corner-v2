<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<section>
    <div class="m-4">
        <h2 class="fw-bold">Add New course</h2>
        <p class="text-muted">
            Use the form below to add a new course.
        </p>
    </div>


    <?= $this->Form->create($course) ?>
    <div class="container m-5">

     </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- category input -->
            <select id="options" name="category" class="form-select">
                <option value="Economic, Commercial and Management Sciences Faculty">Economic, Commercial and Management Sciences Faculty</option>
                <option value="Humanities and Social Sciences Faculty">Humanities and Social Sciences Faculty</option>
                <option value="Law and Political Science Faculty">Law and Political Science Faculty</option>
                <option value="Literature and languages Faculty">Literature and languages Faculty</option>
                <option value="Material Sciences and Computer Science Faculty">Material Sciences and Computer Science Faculty</option>
                <option value="Medicine">Medicine</option>
                <option value="Science and Technology of Physical Activities and Sports Institute">Science and Technology of Physical Activities and Sports Institute</option>
                <option value="Sciences and Technology Faculty">Sciences and Technology Faculty</option>
                <option value="Nature and Life Sciences and Earth Sciences Faculty">Nature and Life Sciences and Earth Sciences Faculty</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!-- name input -->
            <div class="form-outline">
                <input type="text" name="name" class="form-control" />
                <label class="form-label" for="form8Example3">name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!--duration  input -->
            <div class="form-outline">
                <input type="text" name="duration" class="form-control" />
                <label class="form-label" for="form8Example4">duration</label>
            </div>
        </div>
        <div class="col-sm-4 m-1">
            <!--price  input -->
            <div class="form-outline">
                <input type="text" name="price" class="form-control" />
                <label class="form-label" for="form8Example4">price</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 m-1">
            <!--state  input -->
            <select id="options" name="state" class="form-select">
                <option value="posted">posted</option>
                <option value="dropped">dropped</option>
                <option value="archived">archived</option>
                <option value="pending">pending</option>
            </select>
        </div>
        <div class="col-sm-4 m-1">
            <!--course_level  input -->
            <select id="options" name="course_level" class="form-select">
                <option value="beginner">beginner</option>
                <option value="intermediate">intermediate</option>
                <option value="advanced">advanced</option>
            </select>
        </div>
    </div>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-dark mt-4']) ?>
    <?= $this->Form->end() ?>

</section>