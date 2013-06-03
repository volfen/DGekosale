<?php

/* permissionerror\index\index.tpl */
class __TwigTemplate_5d1b6f38c55cda903955e787f64254d3 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\tGError('";
        // line 5
        if (isset($context["permerror"])) { $_permerror_ = $context["permerror"]; } else { $_permerror_ = null; }
        echo $_permerror_;
        echo "');
\t});
</script>

";
    }

    public function getTemplateName()
    {
        return "permissionerror\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  26 => 2,);
    }
}
