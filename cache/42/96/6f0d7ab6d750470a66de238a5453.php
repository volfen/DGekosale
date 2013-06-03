<?php

/* mainside\index\layout.tpl */
class __TwigTemplate_42966f0d7ab6d750470a66de238a5453 extends Twig_Template
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
        return "mainside\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 5,  22 => 3,  19 => 2,  74 => 17,  71 => 16,  67 => 15,  61 => 13,  58 => 12,  51 => 10,  47 => 8,  39 => 6,  36 => 5,  68 => 15,  50 => 13,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 9,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  17 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  86 => 15,  80 => 14,  77 => 13,  70 => 12,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 3,  32 => 4,  29 => 3,  26 => 2,);
    }
}
