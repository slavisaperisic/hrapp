<?php

/* @templatedir/master.html.twig */
class __TwigTemplate_52a9efbc0520cbce5bc9beaac0fd71864501cce05b1e990040f41eb9ae7ae84a extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_logout");
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
    }

    // line 12
    public function block_styles($context, array $blocks = array())
    {
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/css/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "
                    ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>
<script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.9/js/jquery.dataTables.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("hr/js/script.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  115 => 50,  110 => 47,  107 => 46,  102 => 37,  99 => 36,  93 => 14,  90 => 13,  87 => 12,  81 => 52,  79 => 46,  70 => 39,  68 => 36,  59 => 30,  55 => 29,  51 => 28,  37 => 16,  35 => 12,  22 => 1,);
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
/*                     <li><a href="{{ path("fos_logout") }}">Logout</a></li>*/
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
