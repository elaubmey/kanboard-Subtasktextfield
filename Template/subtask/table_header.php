<th>
	<?php if (isset($paginator)): ?>
	    <?= $paginator->order(t('sttextfieldlabel'), \Kanboard\Model\SubtaskModel::TABLE.'sttextfield') ?>
	<?php else: ?>
		<?= t('sttextfieldlabel') ?>
	<?php endif ?>
</th>