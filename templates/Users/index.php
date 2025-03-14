<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<section class="w-100 p-4">
    <div class="m-4 ">
        <h2 class="fw-bold">users List</h2>
        <p class="text-muted">
            Browse through the list of registered users. Click on a user to view more informations
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
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="state"
                                class="datatable-sort-icon fas fa-arrow-up"></i>state</th>
                        <th style="cursor: pointer;" scope="col"><i data-mdb-sort="actions"
                                class="datatable-sort-icon fas fa-arrow-up"></i> Actions</th>
                    </tr>
                </thead>
                <tbody class="datatable-body">
                    <?php foreach ($User as $users): ?>
                    <tr scope="row" data-mdb-index="0">
                    <td style="" class="" data-mdb-field="Full_name" false=""><?= h($users->Full_name) ?></td>
                        <td style="" class="" data-mdb-field="email" false=""><?= h($users->email) ?></td>
                        <td style="" class="" data-mdb-field="password" false=""><?= h($users->password) ?></td>
                        <td style="" class="" data-mdb-field="state" false=""><?= h($users->state) ?></td>
                        <td style="" class="" data-mdb-field="action" false="">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $users->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $users->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>




    </div>
</section>