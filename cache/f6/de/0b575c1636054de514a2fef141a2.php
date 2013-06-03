<?php

/* pagescheme\edit\edit.tpl */
class __TwigTemplate_f6de0b575c1636054de514a2fef141a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
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
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/lib/codemirror.css\">
";
    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 8
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.gradient.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/colorpicker.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/xml/xml.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/javascript/javascript.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/css/css.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/lib/util/loadmode.js\"></script>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/pagescheme-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PAGE_SCHEME_EDIT");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 19
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "pagescheme\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_PAGE_SCHEME_TEMPLATES_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_PAGE_SCHEME_TEMPLATES_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#pagescheme\" rel=\"reset\" class=\"button\" title=\"";
        // line 20
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#pagescheme\" rel=\"submit\" class=\"button\" title=\"";
        // line 21
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "</span></a></li>
\t<li><a href=\"#pagescheme\" rel=\"submit[continue]\" class=\"button\"><span><img src=\"";
        // line 22
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_CONTINUE");
        echo "</span></a></li>
</ul>

<script type=\"text/javascript\">
function openPageSchemeEditor(sId) {
\tif (sId == undefined) {
\t\twindow.location = '";
        // line 28
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/';
\t}
\telse {
\t\twindow.location = '";
        // line 31
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + sId;
\t}
};
</script>

<div class=\"layout-two-columns\">
\t<div class=\"column narrow-collapsed\">
\t\t<div class=\"block\">
\t\t\t";
        // line 39
        if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
        echo $_tree_;
        echo "
\t\t</div>
\t</div>
\t<div class=\"column wide-collapsed\">
\t\t";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t</div>
</div>
<style>
.GForm .wide span.repetition {
\tdisplay: block;
\tmargin-bottom: 5px;
\tmargin-left: 0px;
}
.CodeMirror-scroll {
\tmin-height: 750px;
\toverflow-y: auto;
\toverflow-x: auto;
\twidth: 710px;
}
.column.wide-collapsed .GForm .GF_Datagrid {
width: 472px;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "pagescheme\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  171 => 39,  157 => 31,  148 => 28,  136 => 22,  127 => 21,  118 => 20,  104 => 19,  95 => 17,  92 => 16,  85 => 14,  80 => 13,  75 => 12,  70 => 11,  65 => 10,  57 => 9,  49 => 8,  45 => 7,  42 => 6,  35 => 4,  31 => 3,  28 => 2,);
    }
}
