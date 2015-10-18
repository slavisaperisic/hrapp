<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_6c2e1fcdd65a0da31e307d6fb23d7b9a7efd60818000eb4e6a732a0a1ef61662 extends Twig_Template
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
        $__internal_f3b6be9d37f84e5d4982c71a5757aa98366f5c7391ac35be484de1dc9ede98d4 = $this->env->getExtension("native_profiler");
        $__internal_f3b6be9d37f84e5d4982c71a5757aa98366f5c7391ac35be484de1dc9ede98d4->enter($__internal_f3b6be9d37f84e5d4982c71a5757aa98366f5c7391ac35be484de1dc9ede98d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f3b6be9d37f84e5d4982c71a5757aa98366f5c7391ac35be484de1dc9ede98d4->leave($__internal_f3b6be9d37f84e5d4982c71a5757aa98366f5c7391ac35be484de1dc9ede98d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
