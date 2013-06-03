<?php

/* clientsettings\index\layout.tpl */
class __TwigTemplate_42dd7957ecea4e3dae0d62744f9fde66 extends Twig_Template
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
        return "clientsettings\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  17 => 1,  233 => 67,  223 => 62,  217 => 61,  211 => 60,  205 => 59,  202 => 58,  200 => 57,  193 => 54,  179 => 53,  176 => 52,  169 => 50,  166 => 49,  164 => 48,  157 => 45,  147 => 40,  141 => 39,  135 => 38,  128 => 37,  122 => 33,  115 => 30,  112 => 29,  110 => 28,  106 => 26,  104 => 25,  97 => 22,  83 => 21,  80 => 20,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  58 => 13,  55 => 12,  53 => 11,  49 => 10,  45 => 8,  38 => 6,  35 => 5,  33 => 6,  28 => 5,  23 => 1,);
    }
}
