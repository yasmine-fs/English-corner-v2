<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Coursecategory> $coursecategories
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Categories List</h2>
        <p class="text-muted">
            Browse through the list of registered Categories. Click on a category to view more information
        </p>
    </div>

    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="name"
                                class="datatable-sort-icon fas fa-arrow-up"></i> name</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="description"
                                class="datatable-sort-icon fas fa-arrow-up"></i> description</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($coursecategories as $coursecategory): ?>
                    <tr scope="row" data-mdb-index="0">

                        <td style="" class="" data-mdb-field="name" false=""><?= h($coursecategory->name) ?></td>
                        <td style="" class="" data-mdb-field="description" false=""><?= h($coursecategory->description) ?></td>
                        </td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $coursecategory->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursecategory->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursecategory->id],
                             ['confirm' => __('Are you sure you want to delete # {0}?', $coursecategory->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</section>