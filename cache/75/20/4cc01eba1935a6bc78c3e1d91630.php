<?php

/* clientorder\index\layout.tpl */
class __TwigTemplate_75204cc01eba1935a6bc78c3e1d91630 extends Twig_Template
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
        return "clientorder\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 5,  22 => 3,  19 => 2,  17 => 1,  129 => 35,  123 => 31,  111 => 28,  103 => 27,  98 => 26,  90 => 25,  85 => 24,  80 => 23,  77 => 22,  72 => 21,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  35 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
