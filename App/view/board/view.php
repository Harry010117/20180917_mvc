<ul>
	<li><?php echo $data->idx?></li>
	<li><?php echo $data->subject?></li>
	<li><?php echo $data->date?></li>
	<li><?php echo $data->writer?></li>
	<li><?php echo $data->content?></li>
</ul>
<a href="<?php echo $param->get_page?>">목록</a>
<a href="<?php echo "{$param->get_page}/update/{$param->idx}"?>">수정</a>
<a href="<?php echo "{$param->get_page}/delete/{$param->idx}"?>">삭제</a>