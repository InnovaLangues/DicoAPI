<?php

/* InnovaDicoAPIBundle:Default:index.html.twig */
class __TwigTemplate_0b03eb0c7c38e4fbe469a5d9b35072cbbb590c54234b56212985b25c26ee7bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Dictionnaire API
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
\t<div class=\"col-md-4\">
\t\t
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\"><h3>Voyelles</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyelles"]) ? $context["voyelles"] : $this->getContext($context, "voyelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["voyelle"]) {
            if (($this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "numCol") == 1)) {
                // line 15
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"phoneme\">";
                // line 17
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "phoneme");
                echo "</span><br>
\t\t\t\t\t\t\t\t<span class=\"mot\">";
                // line 18
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "mot");
                echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyelles"]) ? $context["voyelles"] : $this->getContext($context, "voyelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["voyelle"]) {
            if (($this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "numCol") == 2)) {
                // line 28
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"phoneme\">";
                // line 30
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "phoneme");
                echo "</span><br>
\t\t\t\t\t\t\t\t<span class=\"mot\">";
                // line 31
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "mot");
                echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyelles"]) ? $context["voyelles"] : $this->getContext($context, "voyelles")));
        foreach ($context['_seq'] as $context["_key"] => $context["voyelle"]) {
            if (($this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "numCol") == 3)) {
                // line 41
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"phoneme\">";
                // line 43
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "phoneme");
                echo "</span><br>
\t\t\t\t\t\t\t\t<span class=\"mot\">";
                // line 44
                echo $this->getAttribute((isset($context["voyelle"]) ? $context["voyelle"] : $this->getContext($context, "voyelle")), "mot");
                echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "InnovaDicoAPIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  125 => 44,  121 => 43,  117 => 41,  112 => 40,  105 => 35,  94 => 31,  90 => 30,  86 => 28,  81 => 27,  74 => 22,  63 => 18,  59 => 17,  55 => 15,  50 => 14,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
