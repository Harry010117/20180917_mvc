<form action="" method="post">
	<fieldset><legend>글작성</legend>
		<input type="hidden" name="action" value="insert">
		<ul>
			<li><input type="text" name="writer" value="<?php echo $data->writer?>"></li>
			<li><input type="text" name="subject" value="<?php echo $data->subject?>"></li>
			<li><input type="text" name="content" value="<?php echo $data->content?>"></li>
			<li><button type="submit">전송</button></li>
		</ul>
	</fieldset>
</form>
<a href="<?php echo $param->get_page?>">목록</a>