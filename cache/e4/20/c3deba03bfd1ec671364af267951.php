<?php

/* productsearch\noresults\layout.tpl */
class __TwigTemplate_e420c3deba03bfd1ec671364af267951 extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("header.tpl")->display($context);
        // line 2
        echo "<section id=\"content\" class=\"content layout-boxes\">
";
        // line 4
        echo "\t<div id=\"searchNoResults\">
\t\t<h1>
\t\t\tWynik wyszukiwania dla <strong>\"";
        // line 6
        if (isset($context["phrase"])) { $_phrase_ = $context["phrase"]; } else { $_phrase_ = null; }
        echo twig_escape_filter($this->env, $_phrase_, "html", null, true);
        echo "\"</strong>
\t\t</h1>
\t\t<h2>
\t\t\tDla \"";
        // line 9
        if (isset($context["phrase"])) { $_phrase_ = $context["phrase"]; } else { $_phrase_ = null; }
        echo twig_escape_filter($this->env, $_phrase_, "html", null, true);
        echo "\" znaleziono <strong>0</strong> pozycji.
\t\t</h2>
\t</div>
";
        // line 13
        echo "</section>
";
        // line 14
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "productsearch\\noresults\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  40 => 13,  33 => 9,  26 => 6,  22 => 4,  19 => 2,  17 => 1,);
    }
}
