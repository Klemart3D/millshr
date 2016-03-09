<?php

/* link/edit.html.twig */
class __TwigTemplate_9a8dd557f18a80c909ca6c96f5b5e6c1b5c69859b595aa7919af62bbca6b359b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "link/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf923edcb7d821c0f3be980012bba6ef5e1d2c2eae2e72ab3b7aed1663c93bd = $this->env->getExtension("native_profiler");
        $__internal_1cf923edcb7d821c0f3be980012bba6ef5e1d2c2eae2e72ab3b7aed1663c93bd->enter($__internal_1cf923edcb7d821c0f3be980012bba6ef5e1d2c2eae2e72ab3b7aed1663c93bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "link/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf923edcb7d821c0f3be980012bba6ef5e1d2c2eae2e72ab3b7aed1663c93bd->leave($__internal_1cf923edcb7d821c0f3be980012bba6ef5e1d2c2eae2e72ab3b7aed1663c93bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f69f62034c06b4309aa1fed1b6d30bfc1495950014da7386afa483379fa2d0 = $this->env->getExtension("native_profiler");
        $__internal_00f69f62034c06b4309aa1fed1b6d30bfc1495950014da7386afa483379fa2d0->enter($__internal_00f69f62034c06b4309aa1fed1b6d30bfc1495950014da7386afa483379fa2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Link edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("link_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_00f69f62034c06b4309aa1fed1b6d30bfc1495950014da7386afa483379fa2d0->leave($__internal_00f69f62034c06b4309aa1fed1b6d30bfc1495950014da7386afa483379fa2d0_prof);

    }

    public function getTemplateName()
    {
        return "link/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Link edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('link_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
