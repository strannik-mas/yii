<table>
<tr>
	<td>
	<?=$model->getAttributeLabel("title")?>
	</td>
	<td>
	<?=$model->getAttributeLabel("description")?>
	</td>
</tr>
<?	foreach($model->getData() as $k=>$v):?>
	<tr>
	<td>
	<h4><?=$v['title'] ?></h4>
	<div><?=$v['description'] ?></div>
	</td>
	</tr>
<? endforeach; ?>
</table>
