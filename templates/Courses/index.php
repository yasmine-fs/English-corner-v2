<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Course> $courses
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Courses List</h2>
        <p class="text-muted">
            Browse through the list of registered courses. Click on a course to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="title"
                                class="datatable-sort-icon fas fa-arrow-up"></i> title</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="description"
                                class="datatable-sort-icon fas fa-arrow-up"></i> description</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="feedback"
                                class="datatable-sort-icon fas fa-arrow-up"></i>feedback</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Course as $courses): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="title" false=""><?= h($courses->title) ?></td>
                        <td style="" class="" data-mdb-field="description" false=""><?= h($courses->description) ?></td>
                        <td style="" class="" data-mdb-field="feedback" false=""><?= h($courses->feedback) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $courses->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courses->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>