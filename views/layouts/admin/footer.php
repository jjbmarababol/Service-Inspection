			</div>
		</div>

		<footer class="page-footer theme-darkgrey-bg">
			<div class="footer-copyright">
				<div class="container">
				&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.facebook.com/imlogicgates" class="white-text">Service Inspection | All Rights Reserved</a>
				</div>
			</div>
		</footer>
	</div>
</div>
<?php global $data ?>
<?php if(isset($data['scripts'])) : ?>
	<?php foreach ($data['scripts'] as $key => $row) : ?>
		<script type="text/javascript" src="<?php URI::script($row) ?>"></script>
	<?php endforeach ?>
<?php endif; ?>
	<script type="text/javascript">var base_url = "<?php URI::baseUrl(); ?>";</script>
<?php if(isset($data['list'])) : ?>
	<script type="text/javascript"><?=$data['list'];?></script>
<?php endif ?>
	
</body>
</html>