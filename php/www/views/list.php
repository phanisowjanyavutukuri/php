<table>
		<tr>
				<th>
						Name
				</th>
				<th>
						Link
				</th>
				<th>
						Action
				</th>
		</tr>
		<?php
				foreach($bookMarks as $bookMark):
		?>
		<tr>
				<td>
						<?php echo $bookMark->Name; ?>
				</td>
				<td>
						<a href='<?php echo $bookMark->Link; ?>'>
								<?php echo $bookMark->Link; ?>
						</a>
				</td>
				 <td>
						<button type="submit" name="edit" value='<?php echo $bookMark->id; ?>'>Edit</button>
						<button type="submit" name="delete" value='<?php echo $bookMark->id; ?>'>Delete</button>
				</td>
		</tr>
		<?php
        endforeach;
    ?>
</table>
<br/>
<button type="submit" name="create">Create Bookmark</button>
