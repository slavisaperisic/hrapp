<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_88cf24eecd136d354570237635516cd66032c55d17194f5e9fae8951b0433d01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89d38f971490befd6d7b33f08a4d1107362a8e119c2aff772987ab00261d3d4 = $this->env->getExtension("native_profiler");
        $__internal_a89d38f971490befd6d7b33f08a4d1107362a8e119c2aff772987ab00261d3d4->enter($__internal_a89d38f971490befd6d7b33f08a4d1107362a8e119c2aff772987ab00261d3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89d38f971490befd6d7b33f08a4d1107362a8e119c2aff772987ab00261d3d4->leave($__internal_a89d38f971490befd6d7b33f08a4d1107362a8e119c2aff772987ab00261d3d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b24eccb7e0b58ee2d07c393149820cde4f81ca925e7f30d1f290e4290560908 = $this->env->getExtension("native_profiler");
        $__internal_3b24eccb7e0b58ee2d07c393149820cde4f81ca925e7f30d1f290e4290560908->enter($__internal_3b24eccb7e0b58ee2d07c393149820cde4f81ca925e7f30d1f290e4290560908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b24eccb7e0b58ee2d07c393149820cde4f81ca925e7f30d1f290e4290560908->leave($__internal_3b24eccb7e0b58ee2d07c393149820cde4f81ca925e7f30d1f290e4290560908_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14cf32f0c2864a1641f4f2fb61be974e2a33b8b460d487013106d39aa294780f = $this->env->getExtension("native_profiler");
        $__internal_14cf32f0c2864a1641f4f2fb61be974e2a33b8b460d487013106d39aa294780f->enter($__internal_14cf32f0c2864a1641f4f2fb61be974e2a33b8b460d487013106d39aa294780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14cf32f0c2864a1641f4f2fb61be974e2a33b8b460d487013106d39aa294780f->leave($__internal_14cf32f0c2864a1641f4f2fb61be974e2a33b8b460d487013106d39aa294780f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c59ff25fb5a88320e7dae9a56d69f6fd29292f378f771c8d6ffce9a0f6f00c3 = $this->env->getExtension("native_profiler");
        $__internal_1c59ff25fb5a88320e7dae9a56d69f6fd29292f378f771c8d6ffce9a0f6f00c3->enter($__internal_1c59ff25fb5a88320e7dae9a56d69f6fd29292f378f771c8d6ffce9a0f6f00c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1c59ff25fb5a88320e7dae9a56d69f6fd29292f378f771c8d6ffce9a0f6f00c3->leave($__internal_1c59ff25fb5a88320e7dae9a56d69f6fd29292f378f771c8d6ffce9a0f6f00c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
