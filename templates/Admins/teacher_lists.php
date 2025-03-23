<h2>Approved & Rejected Certificates</h2>

<?php foreach ($teachers as $teacher): ?>
    <?php if ($teacher->certificate_status !== 'pending'): ?>
        <div class="card p-3 mb-3">
            <p><strong>Name:</strong> <?= h($teacher->full_name) ?></p>
            <p><strong>Email:</strong> <?= h($teacher->email) ?></p>
            <p><strong>Certificate Status:</strong> 
                <span class="<?= ($teacher->certificate_status === 'approved') ? 'text-success' : 'text-danger' ?>">
                    <?= ucfirst($teacher->certificate_status) ?>
                </span>
            </p>
            <p><strong>Certificate:</strong> 
                <a href="<?= $this->Url->build('/' . $teacher->certificate_path, ['fullBase' => true]) ?>" target="_blank">
                    View PDF
                </a>
            </p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
