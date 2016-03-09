<?php

/* default/index.html.twig */
class __TwigTemplate_6b4d940727263f284f30d1b1c4627521c2d951e005903910b6d09d4bbb8df1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd55169ead8f492ea52f65659a365df300b8ca5395547bef53b38a0e15d77832 = $this->env->getExtension("native_profiler");
        $__internal_cd55169ead8f492ea52f65659a365df300b8ca5395547bef53b38a0e15d77832->enter($__internal_cd55169ead8f492ea52f65659a365df300b8ca5395547bef53b38a0e15d77832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd55169ead8f492ea52f65659a365df300b8ca5395547bef53b38a0e15d77832->leave($__internal_cd55169ead8f492ea52f65659a365df300b8ca5395547bef53b38a0e15d77832_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36d9a2c14830224172fba6d4384efd494987925681a922926a752a23321a9d46 = $this->env->getExtension("native_profiler");
        $__internal_36d9a2c14830224172fba6d4384efd494987925681a922926a752a23321a9d46->enter($__internal_36d9a2c14830224172fba6d4384efd494987925681a922926a752a23321a9d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>Yo!</h1>
\t\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "\t\t\t\t";
        $this->displayBlock('links', $context, $blocks);
        // line 15
        echo "            </div>
            ";
        // line 16
        $this->loadTemplate("link/edit.html.twig", "default/index.html.twig", 16)->display($context);
        // line 17
        echo "        </div>
    </div>
";
        
        $__internal_36d9a2c14830224172fba6d4384efd494987925681a922926a752a23321a9d46->leave($__internal_36d9a2c14830224172fba6d4384efd494987925681a922926a752a23321a9d46_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c65f16e068c287e17ad3bc44b79758b2bab5fe3777ac18d2794575a9f3db1105 = $this->env->getExtension("native_profiler");
        $__internal_c65f16e068c287e17ad3bc44b79758b2bab5fe3777ac18d2794575a9f3db1105->enter($__internal_c65f16e068c287e17ad3bc44b79758b2bab5fe3777ac18d2794575a9f3db1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "\t\t\t\t\tSomething
\t\t\t\t";
        
        $__internal_c65f16e068c287e17ad3bc44b79758b2bab5fe3777ac18d2794575a9f3db1105->leave($__internal_c65f16e068c287e17ad3bc44b79758b2bab5fe3777ac18d2794575a9f3db1105_prof);

    }

    // line 11
    public function block_links($context, array $blocks = array())
    {
        $__internal_5bae70795039030d76b26aa4165ebacdea71dcf9a8417b56aa6d04d066f298b4 = $this->env->getExtension("native_profiler");
        $__internal_5bae70795039030d76b26aa4165ebacdea71dcf9a8417b56aa6d04d066f298b4->enter($__internal_5bae70795039030d76b26aa4165ebacdea71dcf9a8417b56aa6d04d066f298b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 12
        echo "
\t\t\t\t\tContent of the page...
\t\t\t\t";
        
        $__internal_5bae70795039030d76b26aa4165ebacdea71dcf9a8417b56aa6d04d066f298b4->leave($__internal_5bae70795039030d76b26aa4165ebacdea71dcf9a8417b56aa6d04d066f298b4_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_801d38c348645d4f99abc4fe3d774e76a233d36ada572464a0b35cc9e7d14b81 = $this->env->getExtension("native_profiler");
        $__internal_801d38c348645d4f99abc4fe3d774e76a233d36ada572464a0b35cc9e7d14b81->enter($__internal_801d38c348645d4f99abc4fe3d774e76a233d36ada572464a0b35cc9e7d14b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
";
        
        $__internal_801d38c348645d4f99abc4fe3d774e76a233d36ada572464a0b35cc9e7d14b81->leave($__internal_801d38c348645d4f99abc4fe3d774e76a233d36ada572464a0b35cc9e7d14b81_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 21,  88 => 12,  82 => 11,  74 => 9,  68 => 8,  59 => 17,  57 => 16,  54 => 15,  51 => 11,  49 => 8,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1>Yo!</h1>*/
/* 				{% block title %}*/
/* 					Something*/
/* 				{% endblock title %}*/
/* 				{% block links %}*/
/* */
/* 					Content of the page...*/
/* 				{% endblock %}*/
/*             </div>*/
/*             {% include 'link/edit.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* {% endblock %}*/
