<?php

/* category\edit\edit.tpl */
class __TwigTemplate_f7da468efcba30bf443f00cfcc01b1a1 extends Twig_Template
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
        echo "_images_panel/icons/modules/category-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_EDIT_CATEGORY");
        echo ": ";
        if (isset($context["categoryName"])) { $_categoryName_ = $context["categoryName"]; } else { $_categoryName_ = null; }
        echo $_categoryName_;
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 9
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "category\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_CATEGORY_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_CATEGORY_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#category\" rel=\"reset\" class=\"button\" title=\"";
        // line 10
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#category\" rel=\"submit\" class=\"button\" title=\"";
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
function openCategoryEditor(sId) {
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

\$(document).ready(function() {

\t\$('input[name=\"__required_data[categoryid]\"]').click(function(e){
\t\tif(\$(this).val() == ";
        // line 27
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo "){
\t\t\te.stopImmediatePropagation();
\t\t\treturn false;
\t\t}
\t});

\t\$.each(GCore.aoLanguages,function(l,language){
\t    var name = \"#required_data__language_data__\"+language.id+\"__name\";
\t    var seo = \"#required_data__language_data__\"+language.id+\"__seo\";

\t    var sRefreshLink =  \$('<img title=\"";
        // line 37
        echo Gekosale\Translation::get("TXT_REFRESH_SEO");
        echo "\" src=\"' + GCore.DESIGN_PATH + '_images_panel/icons/datagrid/refresh.png\" />').css({
\t\t\tcursor: 'pointer',
\t\t\t'margin-top': '3px',
\t\t\t'margin-left': '3px',
\t\t});
\t\t\$(seo).parent().parent().append(sRefreshLink);

\t\tsRefreshLink.click(function(){
\t\t\txajax_doAJAXCreateSeoCategory({
\t\t\t\tname: \$(name).val(),
\t\t\t\tlanguage: language.id
\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\$(seo).val(eEvent.seo);
\t\t\t}));
\t\t});

\t    if(\$(seo).val() == ''){
\t      \txajax_doAJAXCreateSeoCategory({
\t\t\t\tname: \$(name).val(),
\t\t\t\tlanguage: language.id
\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\$(seo).val(eEvent.seo);
\t\t\t}));
        }
\t});
});

</script>
<div class=\"layout-two-columns\">
\t<div class=\"column narrow-collapsed\">
\t\t<div class=\"block\">
\t\t\t";
        // line 68
        if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
        echo $_tree_;
        echo "
\t\t</div>
\t</div>
\t<div class=\"column wide-collapsed\">
\t\t";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "category\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  166 => 68,  132 => 37,  118 => 27,  105 => 20,  96 => 17,  82 => 11,  73 => 10,  59 => 9,  47 => 7,  44 => 6,  34 => 4,  30 => 3,  27 => 2,);
    }
}
