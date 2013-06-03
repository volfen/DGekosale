<?php

/* layoutbox\add\add.tpl */
class __TwigTemplate_313889ba7a094a4a9975b56e59b702ba extends Twig_Template
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
        echo "_images_panel/icons/modules/layoutbox-add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_ADD");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 20
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "layoutbox\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_LAYOUT_BOX_LIST");
        echo "\"/></span></a></li>
\t<!-- <li><a href=\"#layoutbox\" rel=\"reset\" class=\"button\" title=\"";
        // line 21
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#layoutbox\" rel=\"submit\" class=\"button\" title=\"";
        // line 22
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
</ul>

<script type=\"text/javascript\">

\t\t/*<![CDATA[*/
\t\t\tvar ChangeScheme = GEventHandler(function(eEvent) {
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

";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "layoutbox\\add\\add.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 86,  135 => 22,  126 => 21,  112 => 20,  103 => 18,  100 => 17,  93 => 15,  88 => 14,  83 => 13,  78 => 12,  73 => 11,  65 => 10,  57 => 9,  49 => 8,  45 => 7,  42 => 6,  35 => 4,  31 => 3,  28 => 2,);
    }
}
