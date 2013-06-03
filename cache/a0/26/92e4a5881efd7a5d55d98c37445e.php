<?php

/* layoutbox.tpl */
class __TwigTemplate_a02692e4a5881efd7a5d55d98c37445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"";
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "schemeClass");
        echo "\" id=\"";
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "id");
        echo "\">
\t";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layoutbox.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 18,  90 => 16,  80 => 14,  77 => 13,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 19,  70 => 12,  67 => 16,  63 => 14,  56 => 12,  52 => 11,  50 => 10,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
