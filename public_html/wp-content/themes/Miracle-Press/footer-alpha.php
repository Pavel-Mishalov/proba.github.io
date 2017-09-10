<?php
	include( THEME . '/views_support/block/modal/modal.php' );
	$boss    = get_field( 'miracle-footer-row1-column1', 'option' );
	$inn     = get_field( 'miracle-footer-row1-column2', 'option' );
	$address = get_field( 'miracle-footer-row1-column3', 'option' );

	$row2    = get_field( 'miracle-footer-row2', 'option' );
	$row3    = get_field( 'miracle-footer-row3', 'option' );
	$row4    = get_field( 'miracle-global-option-social-groups', 'option' );

	$phone   = get_field( 'miracle-global-settings-phone', 'option' );
	$phone_link = get_field( 'miracle-global-settings-phone-number', 'option' );
	$grap    = get_field( 'miracle-global-settings-graphic', 'option' );
	$email   = get_field( 'miracle-global-settings-email', 'option' );
?>

<footer class="footer">
	<div class="footer__row-1">
		<p><?= $boss ?></p>
		<p><?= $inn ?></p>
		<p><?= $address ?></p>
	</div>

	<ul class="footer__row-2">

		<?php foreach( $row2 as $column ):
				$name = $column['name'];
				switch ($column['type']) {
					case 'page':
						$link = $column['page'];
						break;
						
					case 'post':
						$link = $column['post'];
						break;
						
					case 'link':
						$link = $column['link'];
						break;
					
					default:
						break;
				}
		?>
		
		<li><a href="<?= $link ?>"><?= $name ?></a></li>
		
		<?php endforeach; ?>
	
	</ul>

	<ul class="footer__row-3">

		<?php foreach( $row3 as $column ):
				$name = $column['name'];
				switch ($column['type']) {
					case 'page':
						$link = $column['page'];
						break;
						
					case 'post':
						$link = $column['post'];
						break;
						
					case 'link':
						$link = $column['link'];
						break;
					
					default:
						break;
				}
		?>
		
		<li><a href="<?= $link ?>"><?= $name ?></a></li>
		
		<?php endforeach; ?>
	
	</ul>

	<div class="footer__row-4">
		<p>Мы в социальных сетях:</p>
		<ul>

			<?php foreach( $row4 as $social ):
					$name  = $social['name'];
					$link  = $social['link'];
					$class = ( $social['type'] ) ? $social['miracle-icon'] : 'fa ' . $social['fa-icon'];
			?>
			
			<li><a href="<?= $link ?>" title="<?= $name ?>"><i class="<?= $class ?>"></i></a></li>
			
			<?php endforeach; ?>

		</ul>
	</div>

	<div class="footer__row-5">
		<p>Звоните: <a href="tel:<?= $phone_link ?>"><?= $phone ?></a></p>
		<p><?= $grap ?></p>
		<p>Email: <a href="" class="footer__email"><?= $email ?></a></p>
	</div>

</footer>