<?php
// source: C:\xampp\htdocs\cvhd\app/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8155766463', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb04f839a5b_content')) { function _lbb04f839a5b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="banner">
<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
</div>

<div id="content">
	<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Vip:newgame"), ENT_COMPAT) ?>
">SEM</a>

	<footer>PHP <?php echo Latte\Runtime\Filters::escapeHtml(PHP_VERSION, ENT_NOQUOTES) ?> |
		<?php if (isset($_SERVER['SERVER_SOFTWARE'])) { ?>Server <?php echo Latte\Runtime\Filters::escapeHtml($_SERVER['SERVER_SOFTWARE'], ENT_NOQUOTES) ;} ?> |
		Nette Framework <?php echo Latte\Runtime\Filters::escapeHtml(Nette\Framework::VERSION, ENT_NOQUOTES) ?></footer>
</div>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb57de603c8f_title')) { function _lb57de603c8f_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Congratulations!</h1>
<?php
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbaac327aa6b_scripts')) { function _lbaac327aa6b_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
<script src="http://jush.sourceforge.net/jush.js"></script>
<script>
	jush.create_links = false;
	jush.highlight_tag('code');
	$('code.jush').each(function(){ $(this).html($(this).html().replace(/\x7B[/$\w].*?\}/g, '<span class="jush-latte">$&</span>')) });

	$('a[href^=#]').click(function(){
		$('html,body').animate({ scrollTop: $($(this).attr('href')).show().offset().top - 5 }, 'fast');
		return false;
	});
</script>
<?php
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lbae467b7bae_head')) { function _lbae467b7bae_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><style>

</style>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars()) ; 