[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#<?php echo $this->getModuleName(); ?>FormTabs').tabs();
    });
</script>
<div class="sf_admin_form">
  [?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>') ?]
    [?php echo $form->renderHiddenFields(false) ?]

    [?php if ($form->hasGlobalErrors()): ?]
      [?php echo $form->renderGlobalErrors() ?]
    [?php endif; ?]
    <div id="<?php echo $this->getModuleName(); ?>FormTabs">
        <ul>
    [?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?]
        <li><a href="#[?php echo $fieldset; ?]">[?php echo $fieldset; ?]</a></li>
    [?php endforeach; ?]
        </ul>
    [?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/form_fieldset', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?]
    [?php endforeach; ?]
    </div>
    [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
  </form>
</div>
