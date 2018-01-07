<?php
include '../views/sessions.php';

$id = $_GET["vId"];
$video = $videoManager->get($id);
?>

<form action="/admin/videoController?action=update" method="POST">
	<input type="text" name="id" value="<?php echo $video->id;?>"  hidden="true" />
	<input type="text" name="name" value="<?php echo $video->name;?>" />
	<input type="text" name="img" value="<?php echo $video->img;?>" />
	<input type="text" name="des" value="<?php echo $video->des;?>" />
	<input type="text" name="source" value="<?php echo $video->source;?>" />
	<input type="submit" value="Update" />
</form>