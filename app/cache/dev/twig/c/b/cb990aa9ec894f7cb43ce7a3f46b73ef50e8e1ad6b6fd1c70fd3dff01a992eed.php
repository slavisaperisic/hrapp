<?php

/* @templatedir/master.html.twig */
class __TwigTemplate_3154b83d163c9e3e2b096a7b5659911029f89b11134d7cfaa7b51edb590de355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'styles' => array($this, 'block_styles'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcfc2b58bca069ab6878dcced4f63ef228a4822dcc48e84398c4025d3e4501fa = $this->env->getExtension("native_profiler");
        $__internal_bcfc2b58bca069ab6878dcced4f63ef228a4822dcc48e84398c4025d3e4501fa->enter($__internal_bcfc2b58bca069ab6878dcced4f63ef228a4822dcc48e84398c4025d3e4501fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@templatedir/master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta name=\"author\" content=\"Slavisa Perisic\">

    <title>HR app | Home</title>

    ";
        // line 12
        $this->displayBlock('styles', $context, $blocks);
        // line 16
        echo "
</head>

<body>
<div id=\"wrap\">
    <div class=\"container\">
        <div class=\"row\">
            <header>Welcome to HR app</header>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-3 sidebar\">
                <ul>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Job Submission</a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("list_jobs");
        echo "\">Job List</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                </ul>
            </div>
            <div class=\"col-md-9 col-sm-9 main\">
                <div class=\"content\">

                    ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "
</body>
</html>";
        
        $__internal_bcfc2b58bca069ab6878dcced4f63ef228a4822dcc48e84398c4025d3e4501fa->leave($__internal_bcfc2b58bca069ab6878dcced4f63ef228a4822dcc48e84398c4025d3e4501fa_prof);

    }

    // line 12
    public function block_styles($context, array $blocks = array())
    {
        $__internal_dd54926554394eee4ef84bfed1592d13015c9175c964f6c160834fe30a9d4b43 = $this->env->getExtension("native_profiler");
        $__internal_dd54926554394eee4ef84bfed1592d13015c9175c964f6c160834fe30a9d4b43->enter($__internal_dd54926554394eee4ef84bfed1592d13015c9175c964f6c160834fe30a9d4b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styles"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_dd54926554394eee4ef84bfed1592d13015c9175c964f6c160834fe30a9d4b43->leave($__internal_dd54926554394eee4ef84bfed1592d13015c9175c964f6c160834fe30a9d4b43_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_d31243be9f361317ac089916672e0d2f95c80f41397cbf0b43841ec1fecf9216 = $this->env->getExtension("native_profiler");
        $__internal_d31243be9f361317ac089916672e0d2f95c80f41397cbf0b43841ec1fecf9216->enter($__internal_d31243be9f361317ac089916672e0d2f95c80f41397cbf0b43841ec1fecf9216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "
                    ";
        
        $__internal_d31243be9f361317ac089916672e0d2f95c80f41397cbf0b43841ec1fecf9216->leave($__internal_d31243be9f361317ac089916672e0d2f95c80f41397cbf0b43841ec1fecf9216_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fdea3d599375b50a3f006739dfa795bdbf3e69c6a913ad94ed09f23e92441c1 = $this->env->getExtension("native_profiler");
        $__internal_3fdea3d599375b50a3f006739dfa795bdbf3e69c6a913ad94ed09f23e92441c1->enter($__internal_3fdea3d599375b50a3f006739dfa795bdbf3e69c6a913ad94ed09f23e92441c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.9/js/jquery.dataTables.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3fdea3d599375b50a3f006739dfa795bdbf3e69c6a913ad94ed09f23e92441c1->leave($__internal_3fdea3d599375b50a3f006739dfa795bdbf3e69c6a913ad94ed09f23e92441c1_prof);

    }

    public function getTemplateName()
    {
        return "@templatedir/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  131 => 47,  125 => 46,  117 => 37,  111 => 36,  102 => 14,  99 => 13,  93 => 12,  84 => 52,  82 => 46,  73 => 39,  71 => 36,  62 => 30,  58 => 29,  54 => 28,  40 => 16,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <meta name="author" content="Slavisa Perisic">*/
/* */
/*     <title>HR app | Home</title>*/
/* */
/*     {% block styles %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset("hr/css/style.css") }}">*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* <div id="wrap">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <header>Welcome to HR app</header>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-3 sidebar">*/
/*                 <ul>*/
/*                     <li><a href="{{ path("homepage") }}">Job Submission</a></li>*/
/*                     <li><a href="{{ path("list_jobs") }}">Job List</a></li>*/
/*                     <li><a href="{{ path("fos_user_security_logout") }}">Logout</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-9 col-sm-9 main">*/
/*                 <div class="content">*/
/* */
/*                     {% block content %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>*/
/* <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>*/
/* <script type="text/javascript" src="{{ asset("hr/js/script.js") }}"></script>*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
