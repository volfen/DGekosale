<?php

/* productbestsellersbox\index\index.tpl */
class __TwigTemplate_a04079c993d73227ca10cb5aaa3021b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"head-block\">
\t<span class=\"font\">";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</span>
</div>
";
        // line 6
        $this->env->loadTemplate("products.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "productbestsellersbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 4,  29 => 3,  26 => 2,);
    }
}
