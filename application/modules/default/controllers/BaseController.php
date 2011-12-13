<?php

/**
 * Default Base Controller
 *
 * Base controller to Default Module
 *
 * @author          Eddie Jaoude
 * @package       Default Module
 *
 */
abstract class BaseController extends Application_BaseController
{

    /**
     * Initialisation method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function init()
    {
        parent::init();
    }

    /**
     * post dispatch method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function  postDispatch()
    {
        if (Zend_Auth::getInstance()->hasIdentity()){
            $this->view->formThemeSelect = new Auth_Form_ThemeSelect();
        }
        parent::postDispatch();
    }
}
?>
