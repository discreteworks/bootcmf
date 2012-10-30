<?PHP load_template("admin/element/header.php",$data);?>

<div id="site-container">
	<div class="content">
		<div class="sidebar">
			<?PHP load_template("admin/element/sidebar.php",$data);?>
		</div>
		<div class="article">
			<h1 class="article-heading">
				<?php echo __("Add/Edit Group");?>
			</h1>
			<form method="post" class="form">
				<table>
					<tr>
						<td><?php echo __("Title");?></td>
						<td><input id="title" name="title" type="text"
							value="<?php echo $title; ?>" />
						</td>
					</tr>
					<tr>
						<td><?php echo __("Parent");  var_dump($parents);?></td>
						<td><select>
								<option value="0"><?php echo __("No parent")?></option>
								<?php foreach($parents as $parent):?>
								<option value="<?php echo $parent["taxonomy_id"];?>"><?php echo $parent["title"];?></option>
								<?php endforeach;?>
						</select>
						</td>
					</tr>
					<tr>
						<td><input value="<?php echo __("Save");?>" type="submit"
							onclick="$('.form').submit();" /></td>
					</tr>
				</table>
			</form>

		</div>

		<?PHP load_template("admin/element/footer.php",$data);?>