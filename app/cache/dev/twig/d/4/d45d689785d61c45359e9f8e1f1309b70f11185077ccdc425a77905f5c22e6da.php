<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_6562f5760ddf9569aad538ab512e218c11b9d4452814fc3c4405350495ce2594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_fccf045fefc0a5b26053bb4d54b0058eb7e133ca3492b02234a3441e71c62b9e = $this->env->getExtension("native_profiler");
        $__internal_fccf045fefc0a5b26053bb4d54b0058eb7e133ca3492b02234a3441e71c62b9e->enter($__internal_fccf045fefc0a5b26053bb4d54b0058eb7e133ca3492b02234a3441e71c62b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccf045fefc0a5b26053bb4d54b0058eb7e133ca3492b02234a3441e71c62b9e->leave($__internal_fccf045fefc0a5b26053bb4d54b0058eb7e133ca3492b02234a3441e71c62b9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fc93b4d2eaa5166c1759847b81c1823cb5943ff554f996eae2f2790262a2713 = $this->env->getExtension("native_profiler");
        $__internal_9fc93b4d2eaa5166c1759847b81c1823cb5943ff554f996eae2f2790262a2713->enter($__internal_9fc93b4d2eaa5166c1759847b81c1823cb5943ff554f996eae2f2790262a2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_9fc93b4d2eaa5166c1759847b81c1823cb5943ff554f996eae2f2790262a2713->leave($__internal_9fc93b4d2eaa5166c1759847b81c1823cb5943ff554f996eae2f2790262a2713_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>*/
/*     {% if app.session is not empty %}*/
/*         {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*         {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
