<?php

/* clientaddress\index\layout.tpl */
class __TwigTemplate_220cce626b08bb5e86cea27e47ecce2a extends Twig_Template
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
        return "clientaddress\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  17 => 1,  472 => 172,  460 => 164,  448 => 158,  444 => 157,  434 => 151,  428 => 150,  419 => 146,  409 => 141,  401 => 138,  391 => 133,  383 => 130,  375 => 127,  366 => 123,  360 => 122,  353 => 121,  345 => 118,  337 => 115,  329 => 112,  323 => 110,  309 => 109,  299 => 102,  291 => 96,  274 => 91,  269 => 89,  261 => 85,  256 => 83,  248 => 79,  243 => 77,  240 => 76,  232 => 72,  227 => 70,  219 => 66,  214 => 64,  211 => 63,  208 => 62,  201 => 59,  196 => 57,  188 => 53,  183 => 51,  176 => 49,  173 => 48,  167 => 45,  157 => 40,  150 => 38,  143 => 36,  136 => 34,  129 => 32,  122 => 30,  115 => 28,  107 => 25,  101 => 24,  94 => 23,  87 => 21,  80 => 19,  73 => 17,  63 => 11,  49 => 10,  45 => 9,  41 => 7,  33 => 6,  31 => 4,  28 => 5,  23 => 1,);
    }
}
