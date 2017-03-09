<?php
header('Location: /support/kb/');
exit;
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php 
get_header();
//include('includes.php');

?>
		<div class="lc-content-wrapper-inner">
			<table width="100%" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td class="lc-content-left" valign="top">
						<?php
						$left = 'information';
						$page = 'support';
						 include($_SERVER['DOCUMENT_ROOT']."/_include/modules/left.php");
						 ?>
					</td>
					<td class="lc-content-right" valign="top">
						<h1><?=_('Support Center');?></h1> 
		 
						<div class="lc-tabs"><div class="lc-tabs-holder"> 
		 
							<table width="100%" cellpadding="0" cellspacing="0"> 
		 
							<tr> 
		 
								<td id="tst" class="lc-tab-off" valign="top" style="width:25%" onclick="CngClass(this);show('tabc1');hide('tabc2');hide('tabc3');hide('tabc4')"><div class="lc-tab-holder"><a href="javascript:show('tabc1');hide('tabc2');hide('tabc3');hide('tabc4')"><?=_('Knowledge Base');?></a></div></td> 
		 
								<td class="lc-tab-off" valign="top" style="width:25%" onclick="CngClass(this);hide('tabc1');show('tabc2');hide('tabc3');hide('tabc4')"><div class="lc-tab-holder"><a href="javascript:hide('tabc1');show('tabc2');hide('tabc3');hide('tabc4')"><?=_('Change License IP');?></a></div></td>
		 
								<td class="lc-tab-off" valign="top" style="width:25%" onclick="CngClass(this);hide('tabc1');hide('tabc2');show('tabc3');hide('tabc4')"><div class="lc-tab-holder"><a href="javascript:hide('tabc1');hide('tabc2');show('tabc3');hide('tabc4')"><?=_('Cancel a License');?></a></div></td> 
		 
								<td class="lc-tab-off" valign="top" style="width:25%" onclick="CngClass(this);hide('tabc1');hide('tabc2');hide('tabc3');show('tabc4')"><div class="lc-tab-holder-last"><a href="javascript:hide('tabc1');hide('tabc2');hide('tabc3');show('tabc4')"><?=_('Installation Form');?></a></div></td> 
		 
							</tr> 
		 
							</table> 
		 
						</div></div>
				
						<div id="tabc1" class="lc-box" style="display:">
							<p><strong><?=_('Welcome to the LicenseCube Knowledgebase.</strong>  Please click below on any of the questions that best match your question, and view the response. If your question isn\'t listed here, please feel free to get ahold of our support department, and they will be glad to assist you with your question.');?> </p>
							<div style="position: static" id="faq">
								<?php get_template_part( 'loop', 'index' ); ?>
							</div>
						</div>

						<?php include($_SERVER['DOCUMENT_ROOT'].'/support/index-tabc2.php'); ?>

						<?php include($_SERVER['DOCUMENT_ROOT'].'/support/index-tabc3.php'); ?>

						<?php include($_SERVER['DOCUMENT_ROOT'].'/support/index-tabc4.php'); ?>
					</td>
				</tr>
			</tbody>
			</table>
		</div><!-- @class=lc-content-wrapper-inner -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
