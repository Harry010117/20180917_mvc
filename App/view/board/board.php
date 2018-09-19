<?php foreach ($list as $data): ?>
<ul>
	<li><?php echo $data->idx?></li>
	<li><a href="<?php echo "{$param->page}/view/{$data->idx}"?>"><?php echo $data->subject?></a></li>
	<li><?php echo $data->writer?></li>
	<li><?php echo $data->date?></li>
</ul>
<?php endforeach ?>
<a href="<?php echo $param->page?>/write">글작성</a>