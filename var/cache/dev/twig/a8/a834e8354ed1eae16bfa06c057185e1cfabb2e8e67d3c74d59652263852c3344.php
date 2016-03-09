<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b460c4afc6c2ba75c84d26e782d6cbe51247679af13fba16aee8b72313a12d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20eb5ce1f76fb50a925c02c7d92c1b5f4d4571eadba9666ac2a43f57514df0af = $this->env->getExtension("native_profiler");
        $__internal_20eb5ce1f76fb50a925c02c7d92c1b5f4d4571eadba9666ac2a43f57514df0af->enter($__internal_20eb5ce1f76fb50a925c02c7d92c1b5f4d4571eadba9666ac2a43f57514df0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20eb5ce1f76fb50a925c02c7d92c1b5f4d4571eadba9666ac2a43f57514df0af->leave($__internal_20eb5ce1f76fb50a925c02c7d92c1b5f4d4571eadba9666ac2a43f57514df0af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee1184ec5494a32bcd30afb85507e672f35629cfcd9829a24fd9b012a2c53203 = $this->env->getExtension("native_profiler");
        $__internal_ee1184ec5494a32bcd30afb85507e672f35629cfcd9829a24fd9b012a2c53203->enter($__internal_ee1184ec5494a32bcd30afb85507e672f35629cfcd9829a24fd9b012a2c53203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee1184ec5494a32bcd30afb85507e672f35629cfcd9829a24fd9b012a2c53203->leave($__internal_ee1184ec5494a32bcd30afb85507e672f35629cfcd9829a24fd9b012a2c53203_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08446cf100687289d9ddb2ebf328b6a5e55a0c872c39aec6df1b0241d5f3bf34 = $this->env->getExtension("native_profiler");
        $__internal_08446cf100687289d9ddb2ebf328b6a5e55a0c872c39aec6df1b0241d5f3bf34->enter($__internal_08446cf100687289d9ddb2ebf328b6a5e55a0c872c39aec6df1b0241d5f3bf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08446cf100687289d9ddb2ebf328b6a5e55a0c872c39aec6df1b0241d5f3bf34->leave($__internal_08446cf100687289d9ddb2ebf328b6a5e55a0c872c39aec6df1b0241d5f3bf34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8d6688702941e0ec5e9cfb078a526d87eca2514e181c400dd1c80b473934ac7 = $this->env->getExtension("native_profiler");
        $__internal_d8d6688702941e0ec5e9cfb078a526d87eca2514e181c400dd1c80b473934ac7->enter($__internal_d8d6688702941e0ec5e9cfb078a526d87eca2514e181c400dd1c80b473934ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8d6688702941e0ec5e9cfb078a526d87eca2514e181c400dd1c80b473934ac7->leave($__internal_d8d6688702941e0ec5e9cfb078a526d87eca2514e181c400dd1c80b473934ac7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
