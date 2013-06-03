<?php

/* payment\accept\layout.tpl */
class __TwigTemplate_e9a9a502a8378b46f930d27b34126089 extends Twig_Template
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
        return "payment\\accept\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 7,  23 => 4,  19 => 2,  17 => 1,  53 => 19,  46 => 15,  40 => 12,  29 => 3,  26 => 2,);
    }
}
