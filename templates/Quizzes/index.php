<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quiz> $quizzes
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Quizz List</h2>
        <p class="text-muted">
            Browse through the list of registered Quizzes. Click on a Quizz to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="state"
                                class="datatable-sort-icon fas fa-arrow-up"></i>state</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="type"
                                class="datatable-sort-icon fas fa-arrow-up"></i> type</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="question"
                                class="datatable-sort-icon fas fa-arrow-up"></i> question</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="description"
                                class="datatable-sort-icon fas fa-arrow-up"></i> description</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="duration"
                                class="datatable-sort-icon fas fa-arrow-up"></i>duration</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="defficulty_level"
                                class="datatable-sort-icon fas fa-arrow-up"></i> defficulty_level</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($quizzes as $quizz): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="state" false=""><?= h($quizz->state) ?></td>
                        <td style="" class="" data-mdb-field="type" false=""><?= h($quizz->type) ?></td>
                        <td style="" class="" data-mdb-field="question" false=""><?= h($quizz->question) ?></td>
                        <td style="" class="" data-mdb-field="description" false=""><?= h($quizz->description) ?></td>
                        <td style="" class="" data-mdb-field="duration" false=""><?= h($quizz->duration) ?></td>
                        <td style="" class="" data-mdb-field="defficulty_level" false=""><?= h($quizz->defficulty_level) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $quizz->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quizz->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quizz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizz->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>