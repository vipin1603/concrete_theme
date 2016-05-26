<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<?php if(!$c->isEditMode()){ ?>
<div id="body">
<?php } else {?>
	</div>
    <?php }?>
			<ul> 	
            <!-- Begin First LIST -->
				<li>   
					<?php
						$a = new Area('Heading1');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Image1');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Content1');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Description1');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
                    <?php
						$a = new Area('Read_more1');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
                 </li>   
                <!-- END First LIST -->
                <!-- Begin SECOND LIST -->
				<li>
					<?php
						$a = new Area('Heading2');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Image2');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Content2');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
					<?php
						$a = new Area('Description2');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
                    <?php
						$a = new Area('Read_more2');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
				</li>
                <!-- End SECOND LIST -->
                <!-- Begin Third LIST -->
				<li>
					<?php
						$a = new Area('Heading3');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
                    <div>
						<?php
							$a = new Area('Image3');
							$a->setAreaGridMaximumColumns(12);
							$a->display($c);
						?>
                    </div>
                    <div>    
						<?php
							$a = new Area('Image3_1');
							$a->setAreaGridMaximumColumns(12);
							$a->display($c);
						?>
                    </div>
                    <?php
						$a = new Area('Read_more3');
						$a->setAreaGridMaximumColumns(12);
						$a->display($c);
					?>
				</li>
                <!-- END Third LIST -->
			</ul>
		</div>

<?php  $this->inc('elements/footer.php'); ?>
