<?php

/* layoutbox\edit\edit.tpl */
class __TwigTemplate_0c07656b7fa71399e2147c889ba10504 extends Twig_Template
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
        echo "_js_libs/ckeditor/ckeditor.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/jquery.gradient.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/colorpicker.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/xml/xml.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/javascript/javascript.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/mode/css/css.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/codemirror/lib/util/loadmode.js\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/layoutbox-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_EDIT");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"#delete\" class=\"button delete\" id=\"delete\"><span>";
        // line 20
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_DELETE");
        echo "</span></a></li>
\t<li><a href=\"";
        // line 21
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_ADD");
        echo "\"/>";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_ADD");
        echo "</span></a></li>
\t<!-- <li><a href=\"#layoutbox\" rel=\"reset\" class=\"button reset\"><span><img src=\"";
        // line 22
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#layoutbox\" rel=\"submit\" class=\"button ok\"><span><img src=\"";
        // line 23
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_FINISH");
        echo "</span></a></li>
\t<li><a href=\"#layoutbox\" rel=\"submit[continue]\" class=\"button continue\"><span><img src=\"";
        // line 24
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE_AND_CONTINUE");
        echo "</span></a></li>
</ul>

<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#delete').unbind('click').bind('click', function(){
\t\tvar title = '";
        // line 30
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_DELETE");
        echo "';
\t\tvar msg = '";
        // line 31
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ?';
\t\tvar params = {};
\t\tvar func = function(p) {
\t\t\treturn xajax_DeleteLayoutBox(";
        // line 34
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo $_id_;
        echo ");
\t\t};
\t\tnew GF_Alert(title, msg, func, true, params);
\t\treturn false;
\t});
});

\t\t/*<![CDATA[*/
\t\t\tvar iSchemeChanges = 0;
\t\t\tvar ChangeScheme = GEventHandler(function(eEvent) {
\t\t\t\tif (iSchemeChanges++ < 1) {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tvar sSchemeId = eEvent.sValue;
\t\t\t\tvar agFields = eEvent.gForm.GetField('look').m_agFields;
\t\t\t\tvar gSelect = eEvent.gForm.GetField('choose_template');
\t\t\t\tif (sSchemeId == '') {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\txajax_GetSchemeValues({
\t\t\t\t\tid: sSchemeId,
\t\t\t\t\tdata: eEvent.mArgument
\t\t\t\t}, GCallback(GEventHandler(function(eEvent) {
\t\t\t\t\tif (eEvent.values != undefined) {
\t\t\t\t\t\tfor (var i in agFields) {
\t\t\t\t\t\t\tvar gField = agFields[i];
\t\t\t\t\t\t\tif ((gField.m_oOptions.sSelector == undefined) || (eEvent.values[gField.m_oOptions.sSelector] == undefined)) {
\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tvar sSelector = gField.m_oOptions.sSelector;
\t\t\t\t\t\t\tvar mValue = eEvent.values[gField.m_oOptions.sSelector];
\t\t\t\t\t\t\tif ((gField instanceof GFormTextField) || (gField instanceof GFormSelect)) {
\t\t\t\t\t\t\t\tif ((gField.m_oOptions.sCssAttribute == undefined) || (mValue[gField.m_oOptions.sCssAttribute] == undefined)) {
\t\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tgField.SetValue(mValue[gField.m_oOptions.sCssAttribute]['value']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if (gField instanceof GFormFontStyle) {
\t\t\t\t\t\t\t\tif (mValue['font'] == undefined) {
\t\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tgField.SetValue(mValue['font']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if (gField instanceof GFormColourSchemePicker) {
\t\t\t\t\t\t\t\tif (mValue['background'] == undefined) {
\t\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tgField.SetValue(mValue['background']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if (gField instanceof GFormBorder) {
\t\t\t\t\t\t\t\tif (mValue['border'] == undefined) {
\t\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tgField.SetValue(mValue['border']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse if (gField instanceof GFormLocalFile) {
\t\t\t\t\t\t\t\tif (mValue['icon'] == undefined) {
\t\t\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tgField.SetValue(mValue['icon']);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tgSelect.SetValue('');
\t\t\t\t})));
\t\t\t});
\t\t/*]]>*/

</script>
<script type=\"text/javascript\">
function openLayoutBoxEditor(sId) {
\tif (sId == undefined) {
\t\twindow.location = '";
        // line 106
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/';
\t}
\telse {
\t\twindow.location = '";
        // line 109
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
        // line 117
        if (isset($context["tree"])) { $_tree_ = $context["tree"]; } else { $_tree_ = null; }
        echo $_tree_;
        echo "
\t\t</div>
\t</div>
\t<div class=\"column wide-collapsed\">
\t\t";
        // line 121
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t</div>
</div>
<style>
.layout-two-columns > .column.narrow-collapsed {
\twidth: 270px;
\tmargin-right: -1px;
}
.layout-two-columns > .column.wide-collapsed {
\twidth: 912px;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "layoutbox\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 121,  265 => 117,  251 => 109,  242 => 106,  166 => 34,  160 => 31,  156 => 30,  144 => 24,  137 => 23,  130 => 22,  116 => 21,  112 => 20,  103 => 18,  100 => 17,  93 => 15,  88 => 14,  83 => 13,  78 => 12,  73 => 11,  65 => 10,  57 => 9,  49 => 8,  45 => 7,  42 => 6,  35 => 4,  31 => 3,  28 => 2,);
    }
}
