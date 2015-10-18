<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_42707c95b0ae83d96df2524b17ad09aabd9e2bfb8b859967a778797eed43f860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82e8c120f72f927d70c7c9f9f81f039e4b1482356b67cbc3066e068fd47cc841 = $this->env->getExtension("native_profiler");
        $__internal_82e8c120f72f927d70c7c9f9f81f039e4b1482356b67cbc3066e068fd47cc841->enter($__internal_82e8c120f72f927d70c7c9f9f81f039e4b1482356b67cbc3066e068fd47cc841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e8c120f72f927d70c7c9f9f81f039e4b1482356b67cbc3066e068fd47cc841->leave($__internal_82e8c120f72f927d70c7c9f9f81f039e4b1482356b67cbc3066e068fd47cc841_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58c96c140c8dc1b513c16e76d1381542c7761b72934c5efba89b61872a1ebdce = $this->env->getExtension("native_profiler");
        $__internal_58c96c140c8dc1b513c16e76d1381542c7761b72934c5efba89b61872a1ebdce->enter($__internal_58c96c140c8dc1b513c16e76d1381542c7761b72934c5efba89b61872a1ebdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_58c96c140c8dc1b513c16e76d1381542c7761b72934c5efba89b61872a1ebdce->leave($__internal_58c96c140c8dc1b513c16e76d1381542c7761b72934c5efba89b61872a1ebdce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
