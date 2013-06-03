<?php

/* statssales\index\index.tpl */
class __TwigTemplate_457a34f372888bcfc6046ceb73569802 extends Twig_Template
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
        echo "_js_libs/daterangepicker/css/ui.daterangepicker.css?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\" type=\"text/css\"/>
<link rel=\"stylesheet\" href=\"";
        // line 5
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/daterangepicker/css/redmond/jquery-ui-1.7.1.custom.css?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\" type=\"text/css\"/>
";
    }

    // line 7
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 9
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_js_libs/daterangepicker/js/daterangepicker.jQuery.js?v=";
        if (isset($context["appVersion"])) { $_appVersion_ = $context["appVersion"]; } else { $_appVersion_ = null; }
        echo $_appVersion_;
        echo "\"></script>
<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
<script type=\"text/javascript\">
\tgoogle.load('visualization', '1', {'packages':['corechart']});
\tgoogle.setOnLoadCallback(function(){
\t\t\$('#desktop-simple-stats-sales-chart').GChart({
\t\t\tfSource:  '";
        // line 15
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "mainside/view/sales'
\t\t});
\t\t
\t\t\$('#desktop-simple-stats-orders-chart').GChart({
\t\t\tfSource:  '";
        // line 19
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "mainside/view/orders'
\t\t});
\t\t
\t});

\t\t\$(document).ready(function(){
\t\t\t \$('#period').daterangepicker({
\t\t\t\tdateFormat : 'yy/mm/dd',
\t\t\t\tposY : '258px',
\t\t\t\tonChange: function(){
\t\t\t\t\tlocation.hash = Base64.encode(\$('#period').val());
\t\t\t\t}, 
\t\t\t});\t
\t\t});
\t   
    </script>
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/desktop.png\" alt=\"\"/>Statystyki sprzedaży</h2>
<div class=\"block\" id=\"desktop\">
\t<div class=\"simple-stats layout-two-columns\">
\t\t<div class=\"column narrow\">
\t\t\t<dl class=\"stats-summary\">
\t\t\t\t<dt>";
        // line 42
        echo Gekosale\Translation::get("TXT_SALES");
        echo " (";
        echo Gekosale\Translation::get("TXT_TODAY");
        echo " / ";
        echo Gekosale\Translation::get("TXT_CURRENT_MONTH");
        echo ")</dt><dd>";
        if (isset($context["summaryStats"])) { $_summaryStats_ = $context["summaryStats"]; } else { $_summaryStats_ = null; }
        echo $this->getAttribute($this->getAttribute($_summaryStats_, "todaysales"), "total");
        echo " ";
        echo Gekosale\Translation::get("TXT_CURRENCY");
        echo " / ";
        if (isset($context["summaryStats"])) { $_summaryStats_ = $context["summaryStats"]; } else { $_summaryStats_ = null; }
        echo $this->getAttribute($this->getAttribute($_summaryStats_, "summarysales"), "total");
        echo " ";
        echo Gekosale\Translation::get("TXT_CURRENCY");
        echo "</dd>
\t\t\t\t<dt>";
        // line 43
        echo Gekosale\Translation::get("TXT_ORDERS");
        echo " (";
        echo Gekosale\Translation::get("TXT_TODAY");
        echo " / ";
        echo Gekosale\Translation::get("TXT_CURRENT_MONTH");
        echo ")</dt><dd>";
        if (isset($context["summaryStats"])) { $_summaryStats_ = $context["summaryStats"]; } else { $_summaryStats_ = null; }
        echo $this->getAttribute($this->getAttribute($_summaryStats_, "todaysales"), "orders");
        echo " / ";
        if (isset($context["summaryStats"])) { $_summaryStats_ = $context["summaryStats"]; } else { $_summaryStats_ = null; }
        echo $this->getAttribute($this->getAttribute($_summaryStats_, "summarysales"), "orders");
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t\t<div class=\"column wide\">
\t\t\t<div class=\"tabs\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#desktop-simple-stats-sales\">";
        // line 49
        echo Gekosale\Translation::get("TXT_SALES");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#desktop-simple-stats-orders\">";
        // line 50
        echo Gekosale\Translation::get("TXT_ORDERS");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"field-text\" >
\t\t\t\t\t<label for=\"desktop-simple-stats-orders-range\" style=\"float: left;margin-top: 3px;margin-right: 5px;\">";
        // line 55
        echo Gekosale\Translation::get("TXT_PERIOD_LIST");
        echo ":</label>
\t\t\t\t\t<span class=\"field\" style=\"width: 150px;\">
\t\t\t\t\t\t<input type=\"text\" id=\"period\" class=\"period\" style=\"width:142px\" value=\"";
        // line 57
        if (isset($context["from"])) { $_from_ = $context["from"]; } else { $_from_ = null; }
        echo $_from_;
        echo " - ";
        if (isset($context["to"])) { $_to_ = $context["to"]; } else { $_to_ = null; }
        echo $_to_;
        echo "\" />
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<div id=\"desktop-simple-stats-sales\">
\t\t\t\t\t<div class=\"chart\" id=\"desktop-simple-stats-sales-chart\"></div>
\t\t\t\t</div>
\t\t\t\t<div id=\"desktop-simple-stats-orders\">
\t\t\t\t\t<div class=\"chart\" id=\"desktop-simple-stats-orders-chart\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "statssales\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 57,  165 => 55,  157 => 50,  153 => 49,  134 => 43,  116 => 42,  106 => 37,  103 => 36,  81 => 19,  73 => 15,  60 => 9,  56 => 8,  53 => 7,  43 => 5,  35 => 4,  31 => 3,  28 => 2,);
    }
}
