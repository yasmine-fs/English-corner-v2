<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Chapter> $chapters
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
                                class="datatable-sort-icon fas fa-arrow-up"></i>title</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="content"
                                class="datatable-sort-icon fas fa-arrow-up"></i>content</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Chapter as $chapters): ?>
                    <tr scope="row" data-mdb-index="0">
                        <td style="" class="" data-mdb-field="title" false=""><?= h($chapters->title) ?></td>
                        <td style="" class="" data-mdb-field="content" false=""><?= h($chapters->content) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $chapters->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapters->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapters->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>