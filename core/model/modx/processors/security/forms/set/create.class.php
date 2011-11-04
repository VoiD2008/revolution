<?php
/**
 * Create a FC Set
 *
 * @package modx
 * @subpackage processors.security.forms.set
 */
class modFormCustomizationSetCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'modFormCustomizationSet';
    public $languageTopics = array('formcustomization');
    public $permission = 'customize_forms';
    public $elementType = 'set';

    public function beforeSave() {
        $this->object->set('constraint_class','modResource');
        $actionId = $this->getProperty('actionId',null);
        if ($actionId !== null) {
            $this->object->set('action',$actionId);
        }
        return parent::beforeSave();
    }
}
return 'modFormCustomizationSetCreateProcessor';