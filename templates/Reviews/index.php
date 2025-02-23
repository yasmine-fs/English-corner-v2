<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Review> $reviews
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">reviews List</h2>
        <p class="text-muted">
            Browse through the list of registered reviews. Click on a review to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="user_id"
                                class="datatable-sort-icon fas fa-arrow-up"></i>user</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="course"
                                class="datatable-sort-icon fas fa-arrow-up"></i> course_id</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="rating"
                                class="datatable-sort-icon fas fa-arrow-up"></i> rating</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="comment"
                                class="datatable-sort-icon fas fa-arrow-up"></i> comment</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Review as $reviews): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="user_id" false=""><?= h($reviews->user) ?></td>
                        <td style="" class="" data-mdb-field="course_id" false=""><?= h($reviews->course) ?></td>
                        <td style="" class="" data-mdb-field="rating" false=""><?= h($reviews->rating) ?></td>
                        <td style="" class="" data-mdb-field="comment" false=""><?= h($reviews->comment) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $reviews->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reviews->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>