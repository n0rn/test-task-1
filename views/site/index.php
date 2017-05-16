<?php include ROOT . '/views/layouts/header.php'; ?>

<?php if ($resp != null && $resp->success) {
	echo "You got it!";
}
?>
<div class="container">
	<?php if ($result) :?>
		<div class="accept">
			<p>Данные были добавлены</p>
		</div>
	<?php else : ?>
	  <?php if (isset($errors) && is_array($errors)) :?>
		<div class="fail">
			<ul class="error">
				<?php foreach($errors as $error) :?>
				<li> - <?php echo $error;?></li>
			  <?php endforeach;?>
			</ul>
			<?php endif;?>
		</div>
	 <div id="html_element" class="form-contact">
 		<form action="#" method="post">
 	    	<input type="text" name="name" required placeholder="User Name" value=""/>
    		<input type="email" name="email"  required placeholder="E-mail" value=""/>
    		<input type="text" name="homepage" placeholder="Homepage" value=""/>
    		<center><textarea name="text" rows="10" cols="50" required placeholder="Text"></textarea></center>
    		<div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
			<script type="text/javascript"
					src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
			</script>
    		<input type="submit" name="submit" class="btn btn-default" value="Send" />
    	</form>
    </div>
	<?php endif;?>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>