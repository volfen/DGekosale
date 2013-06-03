<?php

/* view\edit\edit.tpl */
class __TwigTemplate_52b5d4c9844d23f5c36857e6414afdca extends Twig_Template
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
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/view_edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_EDIT_SHOP_VIEW");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "view\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_SHOP_VIEW_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_SHOP_VIEW_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#view\" rel=\"reset\" class=\"button\" title=\"";
        // line 6
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#view\" rel=\"submit\" class=\"button\" title=\"";
        // line 7
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "</span></a></li>
</ul>
";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
<script>
\$(document).ready(function(){
\t\$('#select-extensions').click(function(){
\t\t\$('#order_uploader_data input[type=\"checkbox\"]').attr('checked','checked');
\t\treturn false;
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "view\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  61 => 7,  52 => 6,  38 => 5,  29 => 3,  26 => 2,);
    }
}
