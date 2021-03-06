<?php
// source: C:\xampp\htdocs\cvhd\app/templates/Vip/newgame.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7145979361', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb9f7414c95c_head')) { function _lb9f7414c95c_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'head', get_defined_vars()) ?>
    <link rel="stylesheet" media="screen,projection,tv" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/chosen.min.css">
<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb991c352821_content')) { function _lb991c352821_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
 ?>
<div id="<?php echo $_control->getSnippetId('newGameSnippet') ?>"><?php call_user_func(reset($_b->blocks['_newGameSnippet']), $_b, $template->getParameters()) ?>
</div><div id="<?php echo $_control->getSnippetId('newDistribution') ?>"><?php call_user_func(reset($_b->blocks['_newDistribution']), $_b, $template->getParameters()) ?>
</div><?php
}}

//
// block _newGameSnippet
//
if (!function_exists($_b->blocks['_newGameSnippet'][] = '_lb45d4bd2386__newGameSnippet')) { function _lb45d4bd2386__newGameSnippet($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('newGameSnippet', FALSE)
;Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["postForm"], array('class' => "form-horizontal well")) ?>
                <fieldset>
                    <legend>Přidat novou hru</legend>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["game"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["game"]->getControl()->addAttributes(array('class' => "form-control", 'autofocus' => TRUE)) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["description"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["description"]->getControl()->addAttributes(array('class' => "form-control", 'rows' => 5)) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["release_in"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["release_in"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["id_distribution"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["id_distribution"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["games_genres"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["games_genres"]->getControl()->addAttributes(array('class' => "form-control chosen-select")) ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_free"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_multiplayer"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_on_pc"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_on_xbox"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_on_ps"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_on_wii"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <?php echo $_form["is_on_others"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label"><?php if ($_label = $_form["preview_img"]->getLabel()) echo $_label  ?></label>
                        <div class="col-lg-10">
                            <?php echo $_form["preview_img"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <?php echo $_form["Add"]->getControl()->addAttributes(array('class' => "btn btn-primary")) ?>

                        </div>
                    </div>
                </fieldset>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ;
}}

//
// block _newDistribution
//
if (!function_exists($_b->blocks['_newDistribution'][] = '_lb285b330f61__newDistribution')) { function _lb285b330f61__newDistribution($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('newDistribution', FALSE)
;if ($modalNewDistribution == 'true') { ?>
            <div class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"  aria-hidden="true">×</button>
                            <h4 class="modal-title">Pridat novou distribuci</h4>
                        </div>
<div id="<?php echo $_control->getSnippetId('newDistributionAdded') ?>"><?php call_user_func(reset($_b->blocks['_newDistributionAdded']), $_b, $template->getParameters()) ?>
</div>                    </div>
                </div>
            </div>
<?php } 
}}

//
// block _newDistributionAdded
//
if (!function_exists($_b->blocks['_newDistributionAdded'][] = '_lb89e5dc3514__newDistributionAdded')) { function _lb89e5dc3514__newDistributionAdded($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('newDistributionAdded', FALSE)
;if (isset($success)) { ?>
                                <div class="modal-body">
                                    <p>Nova distribuce byla pridana</p>

                                    <script>
                                        $.nette.ajax
                                        ({
                                            url: "?do=getLastDistribution"
                                        });
                                    </script>

<div id="<?php echo $_control->getSnippetId('lastDistriutionJS') ?>"><?php call_user_func(reset($_b->blocks['_lastDistriutionJS']), $_b, $template->getParameters()) ?>
</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="distribution-modal-close-button" class="btn btn-primary" data-dismiss="modal">Cool</button>
                                </div>
<?php } else { Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["addNewDistributionForm"], array('class' => "form-horizontal well")) ?>
                                <div class="modal-body">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label"><?php if ($_label = $_form["distribution"]->getLabel()) echo $_label  ?></label>
                                            <div class="col-lg-10">
                                                <?php echo $_form["distribution"]->getControl()->addAttributes(array('class' => "form-control", 'autofocus' => TRUE)) ?>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="textArea" class="col-lg-2 control-label"><?php if ($_label = $_form["description"]->getLabel()) echo $_label  ?></label>
                                            <div class="col-lg-10">
                                                <?php echo $_form["description"]->getControl()->addAttributes(array('class' => "form-control")) ?>

                                                <span class="help-block">Popis distribuci není povinný. Informace o distribuci lze upravit později na stránce <a href="" class="btn disabled" disabled>distribucí</a>.</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <?php echo $_form["add"]->getControl()->addAttributes(array('class' => "btn btn-primary ajax", 'data-dismiss' => "modal")) ?>

                                </div>
<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>
                                <script>
                                    $('.modal').modal('toggle');
                                </script>
<?php } 
}}

//
// block _lastDistriutionJS
//
if (!function_exists($_b->blocks['_lastDistriutionJS'][] = '_lb7ff65e8551__lastDistriutionJS')) { function _lb7ff65e8551__lastDistriutionJS($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('lastDistriutionJS', FALSE)
;if ($newDistOption != "false") { ?>
                                            <script>
                                                $("#frm-postForm-id_distribution").prepend(<?php echo Latte\Runtime\Filters::escapeJs($newDistOption) ?>);
                                                $('#frm-postForm-id_distribution').find('option[value=<?php echo Latte\Runtime\Filters::escapeJs($newDistOptionVal) ?>]').attr("selected",true);
                                            </script>
<?php } 
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb28b7132854_scripts')) { function _lb28b7132854_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;Latte\Macros\BlockMacros::callBlockParent($_b, 'scripts', get_defined_vars()) ?>
    <script>
        var Nurl = <?php echo Latte\Runtime\Filters::escapeJs($_control->link("updateSnippet!")) ?>;
        $('#frm-postForm-id_distribution').click(function() {
            if ($('#frm-postForm-id_distribution').val() == 'new') {

                $.nette.ajax
                ({
                    url: "?do=updateSnippet"
                });
            }
        });
        $(".chosen-select").chosen();
    </script>
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
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars()) ; 