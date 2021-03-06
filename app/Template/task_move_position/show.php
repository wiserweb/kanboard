<div class="page-header">
    <h2><?= t('Move task to another position on the board') ?></h2>
</div>

<form>

<?= $this->app->component('task-move-position', array(
    'saveUrl' => $this->url->href('TaskMovePositionController', 'save', array('task_id' => $task['id'], 'project_id' => $task['project_id'])),
    'board' => $board,
    'swimlaneLabel' => t('Swimlane'),
    'columnLabel' => t('Column'),
    'positionLabel' => t('Position'),
    'beforeLabel' => t('Insert before this task'),
    'afterLabel' => t('Insert after this task'),
)) ?>

<?= $this->app->component('submit-cancel', array(
    'submitLabel' => t('Save'),
    'orLabel' => t('or'),
    'cancelLabel' => t('cancel'),
)) ?>

</form>
