<?php

/* @templatedir/insert-job.html.twig */
class __TwigTemplate_b201636d44d2a748a73c28df208f02e4356a6a3832973ba8cd7728cee7f5d8fa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/js/actions.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  62 => 26,  57 => 25,  54 => 24,  32 => 4,  29 => 3,  11 => 1,);
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
