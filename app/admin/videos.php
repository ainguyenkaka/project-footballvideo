<?php
include '../views/sessions.php';
?>


<a href="/admin/newVideo"><button>New Video</button></a>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Img</th>
		<th>Des</th>
		<th>Source</th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach ( $videos as $video ) :?>
	<tr>
		<td><?php echo $video->id;?></td>
		<td><?php echo $video->name;?></td>
		<td><?php echo $video->img;?></td>
		<td><?php echo $video->des;?></td>
		<td><?php echo $video->source;?></td>
		<td><a href="/admin/updateVideo?vId=<?php echo $video->id;?>">update</a></td>
		<td><a href="/admin/videoController?action=del&id=<?php echo $video->id;?>">delete</a></td>
	</tr>
	<?php endforeach;?>
</table>

<a href="/admin/videoController?action=save"><button>Save Videos</button></a>