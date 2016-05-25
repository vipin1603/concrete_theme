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

			
            
            
            



<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>
<?php if(!$c->isEditMode()){ ?>
 <!-- Begin Footer  -->
		<div id="footer">
<?php } else {?>
	</div>
    <?php }?>        
			<ul>
            <!-- Begin Footer First LIST -->
				<li>
					 <?php
               			 $a = new GlobalArea('Footer_heading1');
               			 $a->display();
                	 ?>
					<div id="magazine">
						<?php
               			 	$a = new GlobalArea('Footer_Content1');
               				$a->display();
                		 ?>
						<?php
               			 	$a = new GlobalArea('Footer_Image1');
               				$a->display();
                		 ?>
					</div>
				</li>
                <!-- End Footer First LIST -->
                <!-- Begin Footer Second LIST -->
				<li>
					 <?php
               			 $a = new GlobalArea('Footer_heading2');
               			 $a->display();
                	 ?>
					<div id="gallery">
						<?php
               			 	$a = new GlobalArea('Footer_Content2');
               				$a->display();
                		 ?>
						<?php
               			 	$a = new GlobalArea('Footer_Image2');
               				$a->display();
                		 ?>
						<?php
               			 	$a = new GlobalArea('Footer_Content2_1');
               				$a->display();
                		?>
						<?php
               			 	$a = new GlobalArea('Footer_ViewAll1');
               				$a->display();
                		?>
					</div>
				</li>
                <!-- End Footer Second LIST -->
                <!-- Begin Footer Third LIST -->
				<li>
					<?php
               			 $a = new GlobalArea('Footer_heading3');
               			 $a->display();
                	 ?>
					<div>
						<?php
               			 	$a = new GlobalArea('Footer_Desc3');
               			 	$a->display();
                		?>
                        <?php
               			 	$a = new GlobalArea('Footer_ViewAll2');
               				$a->display();
                		?>
					</div>
				</li>
                <!-- End Footer Third LIST -->
                <!-- Begin Footer Fourth LIST -->
				<li>
					<?php
               			 $a = new GlobalArea('Footer_heading4');
               			 $a->display();
                	 ?>
					<div>
						<?php
               			 	$a = new GlobalArea('Footer_Desc4');
               			 	$a->display();
                		?>
					</div>
				</li>
                <!-- End Footer Fourth LIST -->
			</ul>
			<div>
				<?php
               	 	$a = new GlobalArea('Footer_Socical_Desc');
               	 	$a->display();
                ?>
			</div>
		</div>


<?php $this->inc('elements/footer_bottom.php');?>
