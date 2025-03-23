<h2>Pending Teacher Certificates</h2>

<?php foreach ($teachers as $teacher): ?>
    <?php if ($teacher->certificate_path && $teacher->certificate_status === 'pending'): ?>
        <div class="card p-3 mb-3">
            <p><strong>Name:</strong> <?= h($teacher->full_name) ?></p>
            <p><strong>Email:</strong> <?= h($teacher->email) ?></p>
            <p><strong>Certificate:</strong> 
                <a href="<?= $this->Url->build('/' . $teacher->certificate_path, ['fullBase' => true]) ?>" target="_blank">
                    View PDF
                </a>
            </p>
            
            <!-- Approve and Reject Buttons -->
            <div>
                <?= $this->Form->postLink(
                    __('Approve'),
                    ['action' => 'approveCertificate', $teacher->id],
                    ['confirm' => 'Are you sure you want to approve this certificate?', 'class' => 'btn btn-success']
                ) ?>

                <?= $this->Form->postLink(
                    __('Reject'),
                    ['action' => 'rejectCertificate', $teacher->id],
                    ['confirm' => 'Are you sure you want to reject this certificate?', 'class' => 'btn btn-danger']
                ) ?>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

