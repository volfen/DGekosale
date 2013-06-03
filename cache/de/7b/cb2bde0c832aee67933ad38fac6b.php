<?php

/* checkout\index\layout.tpl */
class __TwigTemplate_de7bcb2bde0c832aee67933ad38fac6b extends Twig_Template
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
        echo "<div class=\"order-wrap\">
\t<section id=\"content\" class=\"content layout-boxes\">
\t\t";
        // line 4
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "content");
        echo "
\t</section>
</div>
";
        // line 7
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "js");
        echo "
";
        // line 8
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "checkout\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 7,  19 => 2,  17 => 1,  501 => 223,  493 => 219,  481 => 211,  469 => 203,  463 => 200,  457 => 199,  450 => 197,  441 => 193,  435 => 192,  412 => 174,  406 => 173,  396 => 168,  386 => 163,  376 => 158,  366 => 153,  353 => 145,  343 => 140,  335 => 137,  325 => 132,  317 => 129,  309 => 126,  299 => 121,  289 => 116,  281 => 113,  271 => 108,  257 => 99,  247 => 94,  239 => 91,  229 => 86,  221 => 83,  213 => 80,  203 => 75,  195 => 72,  187 => 70,  179 => 67,  171 => 64,  163 => 61,  153 => 55,  139 => 54,  124 => 43,  107 => 29,  99 => 28,  92 => 26,  86 => 25,  80 => 24,  69 => 17,  55 => 16,  52 => 15,  45 => 13,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  23 => 4,);
    }
}
