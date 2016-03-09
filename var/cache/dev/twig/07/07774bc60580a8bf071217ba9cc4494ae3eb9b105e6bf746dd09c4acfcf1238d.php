<?php

/* base.html.twig */
class __TwigTemplate_6ed5ed8de3d8cded85fc6617f2adc1178974cb4b67de4b3a185daba354f60351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06747e02199c1d72150d904a35786074c57387521ff7a4043c671b0b1f06e2e = $this->env->getExtension("native_profiler");
        $__internal_c06747e02199c1d72150d904a35786074c57387521ff7a4043c671b0b1f06e2e->enter($__internal_c06747e02199c1d72150d904a35786074c57387521ff7a4043c671b0b1f06e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c06747e02199c1d72150d904a35786074c57387521ff7a4043c671b0b1f06e2e->leave($__internal_c06747e02199c1d72150d904a35786074c57387521ff7a4043c671b0b1f06e2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_563523eafc6452a7402b741c18e42f167e3a7083ec065d5e96af7b4ab38d4a20 = $this->env->getExtension("native_profiler");
        $__internal_563523eafc6452a7402b741c18e42f167e3a7083ec065d5e96af7b4ab38d4a20->enter($__internal_563523eafc6452a7402b741c18e42f167e3a7083ec065d5e96af7b4ab38d4a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_563523eafc6452a7402b741c18e42f167e3a7083ec065d5e96af7b4ab38d4a20->leave($__internal_563523eafc6452a7402b741c18e42f167e3a7083ec065d5e96af7b4ab38d4a20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad920222855733835fe8ec133db1e8e67f998e273b31f30cf537481fd3651272 = $this->env->getExtension("native_profiler");
        $__internal_ad920222855733835fe8ec133db1e8e67f998e273b31f30cf537481fd3651272->enter($__internal_ad920222855733835fe8ec133db1e8e67f998e273b31f30cf537481fd3651272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad920222855733835fe8ec133db1e8e67f998e273b31f30cf537481fd3651272->leave($__internal_ad920222855733835fe8ec133db1e8e67f998e273b31f30cf537481fd3651272_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e04061e1caac6567adba59380a41f85caf9b258fe97d540a44ed818638b219a = $this->env->getExtension("native_profiler");
        $__internal_9e04061e1caac6567adba59380a41f85caf9b258fe97d540a44ed818638b219a->enter($__internal_9e04061e1caac6567adba59380a41f85caf9b258fe97d540a44ed818638b219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e04061e1caac6567adba59380a41f85caf9b258fe97d540a44ed818638b219a->leave($__internal_9e04061e1caac6567adba59380a41f85caf9b258fe97d540a44ed818638b219a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccb63d865740cea75d4a7c7f540d6427dbca53dbbbd07f2e3bc690efcd8cedcb = $this->env->getExtension("native_profiler");
        $__internal_ccb63d865740cea75d4a7c7f540d6427dbca53dbbbd07f2e3bc690efcd8cedcb->enter($__internal_ccb63d865740cea75d4a7c7f540d6427dbca53dbbbd07f2e3bc690efcd8cedcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccb63d865740cea75d4a7c7f540d6427dbca53dbbbd07f2e3bc690efcd8cedcb->leave($__internal_ccb63d865740cea75d4a7c7f540d6427dbca53dbbbd07f2e3bc690efcd8cedcb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
