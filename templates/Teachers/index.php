<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Teacher> $teachers
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">Teachers List</h2>
        <p class="text-muted">
            Browse through the list of registered teachers. Click on a teacher to view more informations
        </p>
    </div>



    <div id="datatable-advanced-search" class="datatable" data-mdb-datatable-initialized="true">
        <div class="datatable-inner table-responsive ps" style="overflow: auto; position: relative;">
            <table class="table datatable-table">
                <thead class="datatable-header">
                    <tr>

                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="Full_name"
                                class="datatable-sort-icon fas fa-arrow-up"></i>Full_name</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="email"
                                class="datatable-sort-icon fas fa-arrow-up"></i> email</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="password"
                                class="datatable-sort-icon fas fa-arrow-up"></i> password</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="teaching_domain"
                                class="datatable-sort-icon fas fa-arrow-up"></i>teaching_domain</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($Teacher as $teachers): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="Full_name" false=""><?= h($teachers->Full_name) ?></td>
                        <td style="" class="" data-mdb-field="email" false=""><?= h($teachers->email) ?></td>
                        <td style="" class="" data-mdb-field="password" false=""><?= h($teachers->password) ?></td>
                        <td style="" class="" data-mdb-field="teaching_domain" false=""><?= h($teachers->teaching_domain) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $teachers->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teachers->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teachers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teachers->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>