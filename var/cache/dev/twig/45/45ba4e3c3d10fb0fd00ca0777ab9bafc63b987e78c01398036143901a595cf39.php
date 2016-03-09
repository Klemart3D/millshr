<?php

/* link/index.html.twig */
class __TwigTemplate_3147eeba3c201fd609fa6b36515485ad346d7c98887c5cbae240c4ddc1788423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "link/index.html.twig", 1);
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
        $__internal_54d910840b9e3a2841a726ccf1bf2b46b01e0ed487d188c321218ecf46845a2a = $this->env->getExtension("native_profiler");
        $__internal_54d910840b9e3a2841a726ccf1bf2b46b01e0ed487d188c321218ecf46845a2a->enter($__internal_54d910840b9e3a2841a726ccf1bf2b46b01e0ed487d188c321218ecf46845a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "link/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d910840b9e3a2841a726ccf1bf2b46b01e0ed487d188c321218ecf46845a2a->leave($__internal_54d910840b9e3a2841a726ccf1bf2b46b01e0ed487d188c321218ecf46845a2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f651902e810e9f0b455a3731e1eaa1b545596e2f97b4408b0ee0fb9de72e69 = $this->env->getExtension("native_profiler");
        $__internal_91f651902e810e9f0b455a3731e1eaa1b545596e2f97b4408b0ee0fb9de72e69->enter($__internal_91f651902e810e9f0b455a3731e1eaa1b545596e2f97b4408b0ee0fb9de72e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Link list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Url</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("link_show", array("id" => $this->getAttribute($context["link"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["link"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["link"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("link_show", array("id" => $this->getAttribute($context["link"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("link_edit", array("id" => $this->getAttribute($context["link"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("link_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_91f651902e810e9f0b455a3731e1eaa1b545596e2f97b4408b0ee0fb9de72e69->leave($__internal_91f651902e810e9f0b455a3731e1eaa1b545596e2f97b4408b0ee0fb9de72e69_prof);

    }

    public function getTemplateName()
    {
        return "link/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Link list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Category</th>*/
/*                 <th>Author</th>*/
/*                 <th>Url</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for link in links %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('link_show', { 'id': link.id }) }}">{{ link.id }}</a></td>*/
/*                 <td>{{ link.name }}</td>*/
/*                 <td>{{ link.category }}</td>*/
/*                 <td>{{ link.author }}</td>*/
/*                 <td>{{ link.url }}</td>*/
/*                 <td>{% if link.createdAt %}{{ link.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('link_show', { 'id': link.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('link_edit', { 'id': link.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('link_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
