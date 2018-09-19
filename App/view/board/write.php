<form action="" method="post">
	<fieldset><legend>글작성</legend>
		<input type="hidden" name="action" value="insert">
		<ul>
			<li><input type="text" name="writer"></li>
			<li><input type="text" name="subject"></li>
			<li><input type="text" name="content"></li>
			<li><button type="submit">전송</button></li>
		</ul>
	</fieldset>
</form>
<a href="<?php echo $param->page?>">목록</a>