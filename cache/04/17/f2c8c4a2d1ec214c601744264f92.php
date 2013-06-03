<?php

/* productsearch\index\layout.tpl */
class __TwigTemplate_0417f2c8c4a2d1ec214c601744264f92 extends Twig_Template
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
        return "productsearch\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 5,  22 => 3,  19 => 2,  17 => 1,  124 => 32,  121 => 30,  119 => 29,  114 => 26,  93 => 24,  86 => 23,  77 => 16,  60 => 14,  53 => 13,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
