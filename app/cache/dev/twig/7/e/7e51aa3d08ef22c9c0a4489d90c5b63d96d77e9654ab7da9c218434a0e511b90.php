<?php

/* @templatedir/insert-job.html.twig */
class __TwigTemplate_28b6974724689e2222963a54d3b16867465530709c453fec2f87c2fa699911a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@templatedir/master.html.twig", "@templatedir/insert-job.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@templatedir/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82f4d52504ca434e88057bb00ba3f16aa8e5785fc67399a53e0dac4567b977c5 = $this->env->getExtension("native_profiler");
        $__internal_82f4d52504ca434e88057bb00ba3f16aa8e5785fc67399a53e0dac4567b977c5->enter($__internal_82f4d52504ca434e88057bb00ba3f16aa8e5785fc67399a53e0dac4567b977c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@templatedir/insert-job.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f4d52504ca434e88057bb00ba3f16aa8e5785fc67399a53e0dac4567b977c5->leave($__internal_82f4d52504ca434e88057bb00ba3f16aa8e5785fc67399a53e0dac4567b977c5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a890aa2f509a253bd87dee37ebe13052e153c086089b323ade073e6228b63c1 = $this->env->getExtension("native_profiler");
        $__internal_0a890aa2f509a253bd87dee37ebe13052e153c086089b323ade073e6228b63c1->enter($__internal_0a890aa2f509a253bd87dee37ebe13052e153c086089b323ade073e6228b63c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<h2>Post New Job</h2>

<form role=\"form\">
    <div class=\"form-group\">
        <label for=\"job_title\">Job Title:</label>
        <input type=\"text\" class=\"form-control\" id=\"job_title\">
    </div>
    <div class=\"form-group\">
        <label for=\"job_email\">Email address:</label>
        <input type=\"email\" class=\"form-control\" id=\"job_email\">
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" id=\"job_description\" cols=\"30\" rows=\"10\"></textarea>
    </div>
    <button type=\"button\" class=\"btn btn-default submit-job\">Submit</button>
</form>

";
        
        $__internal_0a890aa2f509a253bd87dee37ebe13052e153c086089b323ade073e6228b63c1->leave($__internal_0a890aa2f509a253bd87dee37ebe13052e153c086089b323ade073e6228b63c1_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f9df8764e6ddb97a3956d83810ed42ddff658b4d448f67f3854db76a6e6d175 = $this->env->getExtension("native_profiler");
        $__internal_5f9df8764e6ddb97a3956d83810ed42ddff658b4d448f67f3854db76a6e6d175->enter($__internal_5f9df8764e6ddb97a3956d83810ed42ddff658b4d448f67f3854db76a6e6d175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/js/actions.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5f9df8764e6ddb97a3956d83810ed42ddff658b4d448f67f3854db76a6e6d175->leave($__internal_5f9df8764e6ddb97a3956d83810ed42ddff658b4d448f67f3854db76a6e6d175_prof);

    }

    public function getTemplateName()
    {
        return "@templatedir/insert-job.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  72 => 25,  66 => 24,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@templatedir/master.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* <h2>Post New Job</h2>*/
/* */
/* <form role="form">*/
/*     <div class="form-group">*/
/*         <label for="job_title">Job Title:</label>*/
/*         <input type="text" class="form-control" id="job_title">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="job_email">Email address:</label>*/
/*         <input type="email" class="form-control" id="job_email">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <textarea class="form-control" id="job_description" cols="30" rows="10"></textarea>*/
/*     </div>*/
/*     <button type="button" class="btn btn-default submit-job">Submit</button>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset("hr/js/actions.js") }}"></script>*/
/* {% endblock %}*/
