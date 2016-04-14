<!-- SEE AMcssT.css FOR STYLE INFO -->
<div id="AMnavBar">
	<h2 id="site_title">Oh! National Parks</h2>
	<div id="page_select">
		<form method="GET">
			<button name="page_prev" value="<?=$offset-1; ?>">prev</button>
			<input type="text" name="page_current" value="page <?=$offset+1; ?> of <?=$total_pages+1;?>" readonly>
			<button name="page_next" value="<?=$offset+1; ?>">next</button>
		</form>

		<h3 class='or'> or </h3>

		<form method="GET">			
			<select name="page_select">
				<option value="0" selected disabled>select a page</option>
				
				<?php for ($i=0; $i<= $total_pages;$i++):?>
				<option value="<?= $i ?>"><?= $i+1 ?></option>
				<?php endfor; ?>

			</select>
			<button type="submit">submit</button>
		</form>

		<h3 class='or'> or </h3>
			<form method="GET">			
				<input type="submit" name="edit_parkdb" value="edit the park db">
			</form>

	</div>

</div> 
