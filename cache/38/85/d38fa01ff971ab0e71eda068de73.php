<?php

/* contact\index\layout.tpl */
class __TwigTemplate_3885d38fa01ff971ab0e71eda068de73 extends Twig_Template
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
\t";
        // line 3
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "content");
        echo "
</section>
";
        // line 5
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "js");
        echo "
";
        // line 6
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "contact\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  17 => 1,  237 => 77,  225 => 70,  217 => 67,  213 => 65,  204 => 61,  200 => 59,  198 => 58,  190 => 55,  182 => 52,  172 => 47,  164 => 44,  156 => 40,  142 => 39,  136 => 37,  129 => 35,  117 => 30,  112 => 28,  107 => 25,  99 => 24,  94 => 23,  89 => 21,  79 => 18,  68 => 17,  64 => 16,  55 => 12,  50 => 11,  45 => 8,  38 => 6,  35 => 5,  33 => 6,  28 => 5,  23 => 1,);
    }
}
