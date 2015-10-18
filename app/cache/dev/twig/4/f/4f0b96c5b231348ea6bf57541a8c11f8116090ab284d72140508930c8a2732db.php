<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_543f935664b05559e3329912a2085723060c1f36580c97bc77c8a0488e4b782b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bac1ecbe4445956d1e047814fc1e578cb2a971a6eb7917c2bfd8f216c30bd3f = $this->env->getExtension("native_profiler");
        $__internal_6bac1ecbe4445956d1e047814fc1e578cb2a971a6eb7917c2bfd8f216c30bd3f->enter($__internal_6bac1ecbe4445956d1e047814fc1e578cb2a971a6eb7917c2bfd8f216c30bd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_6bac1ecbe4445956d1e047814fc1e578cb2a971a6eb7917c2bfd8f216c30bd3f->leave($__internal_6bac1ecbe4445956d1e047814fc1e578cb2a971a6eb7917c2bfd8f216c30bd3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
