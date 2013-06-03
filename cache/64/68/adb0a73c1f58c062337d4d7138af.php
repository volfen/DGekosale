<?php

/* producerlist\index\layout.tpl */
class __TwigTemplate_6468adb0a73c1f58c062337d4d7138af extends Twig_Template
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
        return "producerlist\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 3,  19 => 2,  17 => 1,  167 => 46,  165 => 45,  162 => 44,  159 => 42,  157 => 41,  153 => 40,  148 => 37,  127 => 35,  120 => 34,  111 => 27,  94 => 25,  87 => 24,  78 => 17,  75 => 16,  71 => 14,  64 => 11,  61 => 10,  44 => 7,  38 => 5,  35 => 4,  144 => 28,  139 => 25,  119 => 24,  112 => 23,  109 => 22,  105 => 21,  98 => 18,  90 => 17,  81 => 16,  76 => 15,  73 => 14,  68 => 11,  57 => 9,  50 => 7,  41 => 6,  36 => 5,  33 => 6,  29 => 3,  26 => 2,);
    }
}
