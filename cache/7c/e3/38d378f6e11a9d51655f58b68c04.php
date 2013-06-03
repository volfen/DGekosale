<?php

/* globalsettings\index\index.tpl */
class __TwigTemplate_7ce338d378f6e11a9d51655f58b68c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 4
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.gradient.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/colorpicker.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/configuration-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_GLOBAL_CONFIGURATION");
        echo "</h2>
<ul class=\"possibilities\">
\t<!-- <li><a href=\"#globalsettings\" rel=\"reset\" class=\"button reset\"><span>";
        // line 10
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#globalsettings\" rel=\"submit\" class=\"button continue\"><span>";
        // line 11
        echo Gekosale\Translation::get("TXT_SAVE_AND_CONTINUE");
        echo "</span></a></li>
</ul>
";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "globalsettings\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  68 => 11,  64 => 10,  55 => 8,  52 => 7,  42 => 5,  34 => 4,  30 => 3,  27 => 2,);
    }
}
