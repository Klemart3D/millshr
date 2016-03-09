<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1bab4e9d8aac562aaa936c7e2c9947714e7e263b03fc043bdd874ea0c4e7e719 extends Twig_Template
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
        $__internal_d18e2785d979119d0f146d1ce2af9dafa6c9aa5665010a33858e9d6c4c18f4c9 = $this->env->getExtension("native_profiler");
        $__internal_d18e2785d979119d0f146d1ce2af9dafa6c9aa5665010a33858e9d6c4c18f4c9->enter($__internal_d18e2785d979119d0f146d1ce2af9dafa6c9aa5665010a33858e9d6c4c18f4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d18e2785d979119d0f146d1ce2af9dafa6c9aa5665010a33858e9d6c4c18f4c9->leave($__internal_d18e2785d979119d0f146d1ce2af9dafa6c9aa5665010a33858e9d6c4c18f4c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
