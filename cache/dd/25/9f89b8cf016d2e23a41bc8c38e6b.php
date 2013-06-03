<?php

/* rulescart\edit\edit.tpl */
class __TwigTemplate_dd259f89b8cf016d2e23a41bc8c38e6b extends Twig_Template
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
        echo "_js_libs/ckeditor/ckeditor.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/promotion-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_EDIT_RULE_CART");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 9
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "rulescart\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_RULES_CART_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_RULES_CART_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#rulescart\" rel=\"reset\" class=\"button\" title=\"";
        // line 10
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#rulescart\" rel=\"submit\" class=\"button\" title=\"";
        // line 11
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
</ul>

<script type=\"text/javascript\">
function openRulesCartEditor(sId) {
\tif (sId == undefined) {
\t\twindow.location = '";
        // line 17
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "';
\t}
\telse {
\t\twindow.location = '";
        // line 20
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
        // line 28
        if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
        echo $_tree_;
        echo "
\t\t</div>
\t</div>
\t<div class=\"column wide-collapsed\">
\t\t";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t</div>
</div>
<script>
\$(document).ready(function(){

\tvar dateFrom;
\tvar dateTo;
\t
\t\$('#required_data__datefrom, #required_data__dateto').change(function(){
\t\tdateFrom = \$('#required_data__datefrom').val();
\t\tdateTo = \$('#required_data__dateto').val();
\t\tif(dateFrom != '' && dateTo !=''){
\t\t\tif( (new Date(dateFrom).getTime() > new Date(dateTo).getTime()))
\t\t\t{
\t\t\t\tGError('Błędna data obowiązywania','Data zakończenia nie może być wcześniejsza niż rozpoczęcia.');
\t\t\t\t\$('#required_data__dateto').val(dateFrom);
\t\t\t}
\t\t}
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "rulescart\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  116 => 28,  102 => 20,  93 => 17,  79 => 11,  70 => 10,  56 => 9,  47 => 7,  44 => 6,  34 => 4,  30 => 3,  27 => 2,);
    }
}
