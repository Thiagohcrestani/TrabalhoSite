<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_ac4b7f757ad46444088594f1b4c36e1695e2e4a79d0ab802a15515717d3ef521 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<title>Minha APP Incrivel</title>
\t</head>

\t<body>
\t\t\t";
        // line 9
        if (($context["hello"] ?? null)) {
            // line 10
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["hello"] ?? null), "html", null, true);
            echo "
\t\t\t\t
\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        if (($context["titulo"] ?? null)) {
            // line 14
            echo "\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
            echo "</h1><br />
\t\t\t";
        }
        // line 15
        echo "\t
\t\t\t";
        // line 16
        if (($context["corpo"] ?? null)) {
            // line 17
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["corpo"] ?? null), "html", null, true);
            echo "</p>
\t\t\t";
        }
        // line 18
        echo "\t
\t\t\t
\t\t\t";
        // line 20
        if (($context["lista"] ?? null)) {
            // line 21
            echo "\t\t\t<ol>
\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lista"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["itemLista"]) {
                // line 23
                echo "\t\t\t\t\t<li><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["itemLista"], 0, []), "html", null, true);
                echo "</b></li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["itemLista"], 1, []), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemLista'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t</ol>
\t\t\t";
        }
        // line 26
        echo "\t
\t</body>
\t
</html>";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  93 => 25,  82 => 23,  78 => 22,  75 => 21,  73 => 20,  69 => 18,  63 => 17,  61 => 16,  58 => 15,  52 => 14,  49 => 13,  42 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "C:\\Users\\thiag\\Desktop\\TADS 3º ANO\\ORIENTAÇÃO A OBJETOS\\Site\\template\\base.html");
    }
}
