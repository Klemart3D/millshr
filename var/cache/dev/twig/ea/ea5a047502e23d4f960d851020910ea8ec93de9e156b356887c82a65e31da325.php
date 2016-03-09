<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7a1b9dfe4e9859110104b7e258f3448dccc7c63319fbf1b7f30f312859c56e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_818d608b8c22d1a603046af15c9873956d1c4140d6984cdc9bda2cf1546fc832 = $this->env->getExtension("native_profiler");
        $__internal_818d608b8c22d1a603046af15c9873956d1c4140d6984cdc9bda2cf1546fc832->enter($__internal_818d608b8c22d1a603046af15c9873956d1c4140d6984cdc9bda2cf1546fc832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818d608b8c22d1a603046af15c9873956d1c4140d6984cdc9bda2cf1546fc832->leave($__internal_818d608b8c22d1a603046af15c9873956d1c4140d6984cdc9bda2cf1546fc832_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08603703915d2d788250e3d4784a13b097640eb9e7fad7c4e9b40d4075db3645 = $this->env->getExtension("native_profiler");
        $__internal_08603703915d2d788250e3d4784a13b097640eb9e7fad7c4e9b40d4075db3645->enter($__internal_08603703915d2d788250e3d4784a13b097640eb9e7fad7c4e9b40d4075db3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08603703915d2d788250e3d4784a13b097640eb9e7fad7c4e9b40d4075db3645->leave($__internal_08603703915d2d788250e3d4784a13b097640eb9e7fad7c4e9b40d4075db3645_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4fee5e37562dcfabff9b033ecff5c3f12ec00d1c4f85bbfe5cbf4ce52b57c96 = $this->env->getExtension("native_profiler");
        $__internal_a4fee5e37562dcfabff9b033ecff5c3f12ec00d1c4f85bbfe5cbf4ce52b57c96->enter($__internal_a4fee5e37562dcfabff9b033ecff5c3f12ec00d1c4f85bbfe5cbf4ce52b57c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4fee5e37562dcfabff9b033ecff5c3f12ec00d1c4f85bbfe5cbf4ce52b57c96->leave($__internal_a4fee5e37562dcfabff9b033ecff5c3f12ec00d1c4f85bbfe5cbf4ce52b57c96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_813d49be35abc40dafaffb4483f50700ee5863523fa7c0a2a598bfd5325ec4f5 = $this->env->getExtension("native_profiler");
        $__internal_813d49be35abc40dafaffb4483f50700ee5863523fa7c0a2a598bfd5325ec4f5->enter($__internal_813d49be35abc40dafaffb4483f50700ee5863523fa7c0a2a598bfd5325ec4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_813d49be35abc40dafaffb4483f50700ee5863523fa7c0a2a598bfd5325ec4f5->leave($__internal_813d49be35abc40dafaffb4483f50700ee5863523fa7c0a2a598bfd5325ec4f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
