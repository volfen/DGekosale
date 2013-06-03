<?php

/* error/index/index.tpl */
class __TwigTemplate_65b4772daa741cef9f0c2db84df91c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h2>Wystąpił błąd</h2>
<div class=\"block\">
\t<p>";
        // line 5
        if (isset($context["errorMsg"])) { $_errorMsg_ = $context["errorMsg"]; } else { $_errorMsg_ = null; }
        echo $_errorMsg_;
        echo "</p>
</div>
";
        // line 7
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "error/index/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 5,  29 => 3,  26 => 2,);
    }
}
