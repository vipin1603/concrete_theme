<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>
<div id="page">
    		<!-- Begin of Header -->
		<div id="header">
			<div>
				<?php
                $a = new GlobalArea('Logo');
                $a->display();
                ?>
			</div>
				<?php
                $a = new GlobalArea('Menu');
                $a->display();
                ?>
		</div>
