<div class="magazine">
    <div class="name_issue">
        <?php echo html_escape($publication->publication_name); ?>
        #<?php echo html_escape($issue->issue_number); ?>
    </div>
    <div class="date">
        <?php echo html_escape($issue->issue_date_publication); ?>
    </div>
</div>