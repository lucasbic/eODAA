<h1>
	Getting all courses related with universities:
	<?= $this->Text->toList($educationalinstitutions) ?>
</h1>

<section>
	<?php
	foreach ($courses as $course) {?>
		<article>
			<h4><?= $this->Html->link($course->name, '/courses/view/'.$course->id);?></h4>
			<?= $this->Text->autoParagraph($course->description); ?>
		</article>

	<?php } ?>
</section>