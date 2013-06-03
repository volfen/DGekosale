<?php

/* subpagelayout\edit\edit.tpl */
class __TwigTemplate_2cc524ee79dee2e8b45cb53d442c4520 extends Twig_Template
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
        echo "_images_panel/icons/modules/subpagelayout-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_EDIT");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "subpagelayout\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_LIST");
        echo "\"/></span></a></li>
\t";
        // line 6
        if (array_key_exists("viewSpecific", $context)) {
            // line 7
            echo "\t\t<li><a href=\"#\" class=\"button\" rel=\"use-global\"><span><img src=\"";
            if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
            echo $_DESIGNPATH_;
            echo "_images_panel/icons/buttons/delete-2.png\" title=\"";
            echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_DISBAND_VIEW_SPECIFIC");
            echo "\" alt=\"";
            echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_DISBAND_VIEW_SPECIFIC");
            echo "\"/>";
            echo Gekosale\Translation::get("TXT_SUBPAGE_LAYOUT_DISBAND_VIEW_SPECIFIC");
            echo "</span></a></li>
\t";
        }
        // line 9
        echo "\t<!-- <li><a href=\"#subpagelayout\" rel=\"reset\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#subpagelayout\" rel=\"submit\" class=\"button\" title=\"";
        // line 10
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
</ul>

<script type=\"text/javascript\">
function openSubpageEditor(sId) {
\tif (sId == undefined) {
\t\twindow.location = '";
        // line 16
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/';
\t}
\telse {
\t\twindow.location = '";
        // line 19
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
        // line 27
        if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
        echo $_tree_;
        echo "
\t\t</div>
\t</div>
\t<div class=\"column wide-collapsed\">
\t\t";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t</div>
</div>

<script type=\"text/javascript\">

\t\t/*<![CDATA[*/

\t\t\tvar checkForDuplicates = GEventHandler(function(eEvent) {
\t\t\t\tvar jSelects = \$('#columns_data > .GFormRepetition select');
\t\t\t\tvar iSelects = jSelects.length;
\t\t\t\tfor (var i = 0; i < iSelects; i++) {
\t\t\t\t\tvar jSelect1 = jSelects.eq(i);
\t\t\t\t\tfor (var j = i + 1; j < iSelects; j++) {
\t\t\t\t\t\tvar jSelect2 = jSelects.eq(j);
\t\t\t\t\t\tif (jSelect1.val() == jSelect2.val()) {
\t\t\t\t\t\t\tGCore.StopWaiting();
\t\t\t\t\t\t\tGError('Wykryto duplikaty', 'Na jednej podstronie nie może wystąpić kilka takich samych boksów. Zduplikowane boksy to: \"' + jSelect1.find('option:selected').text() + '\"');
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});

\t\t\tvar disbandViewSpecific = GEventHandler(function(eEvent) {
\t\t\t\txajax_DeleteSubpageLayout({
\t\t\t\t\tidsubpagelayout: '";
        // line 58
        if (isset($context["subpageLayout"])) { $_subpageLayout_ = $context["subpageLayout"]; } else { $_subpageLayout_ = null; }
        echo $this->getAttribute($_subpageLayout_, "id");
        echo "'
\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\tlocation.href = '";
        // line 60
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "subpagelayout/index';
\t\t\t\t}));
\t\t\t\treturn false;
\t\t\t});

\t\t\tGCore.OnLoad(function() {
\t\t\t\t\$('#subpagelayout').submit(checkForDuplicates);
\t\t\t\t\$('a[rel=\"use-global\"]').click(disbandViewSpecific);
\t\t\t});

\t\t/*]]>*/

</script>
<style>
.layout-two-columns > .column.narrow-collapsed {
\twidth: 370px;
\tmargin-right: -1px;
}
.layout-two-columns > .column.wide-collapsed {
\twidth: 836px;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "subpagelayout\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  153 => 58,  122 => 31,  114 => 27,  100 => 19,  91 => 16,  77 => 10,  67 => 9,  54 => 7,  52 => 6,  38 => 5,  29 => 3,  26 => 2,);
    }
}
