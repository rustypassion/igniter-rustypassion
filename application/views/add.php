<form action="/codeigniter/index.php/topic/add" method="post" class="span10">
	<?php echo validation_errors(); ?>
	<input type="text" name="title" placeholder="제목" class="span6" />
	<textarea name="description" id="" cols="30" rows="15" placeholder="본문" class="span12" ></textarea>
	<input type="submit" class="btn btn-primary" value="확인" />


</form>