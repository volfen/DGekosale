<?php

/* layoutbox.tpl */
class __TwigTemplate_e1a92590c0ef1d9e89c2ae57eaec903a extends Twig_Template
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
        return array (  33 => 2,  27 => 2,  18 => 1,  85 => 26,  78 => 21,  76 => 20,  69 => 18,  67 => 17,  53 => 12,  47 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  26 => 2,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 27,  79 => 17,  72 => 19,  64 => 15,  61 => 15,  57 => 13,  52 => 12,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
