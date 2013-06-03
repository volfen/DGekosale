<?php

/* spy\index\index.tpl */
class __TwigTemplate_173c4c5829cf9e35426f806d059c0ac9 extends Twig_Template
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
        echo "_images_panel/icons/modules/mostsearch-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SPY");
        echo "</h2>

<div class=\"block\">
\t<div id=\"list-spy\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
   
    var theDatagrid;
    
   \$(document).ready(function() {
   
   \t\tfunction editClient(dg, id) {
    \t\tlocation.href = '";
        // line 20
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t \t};
   
  \t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'id',
\t\t\tcaption: '";
        // line 25
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t});
\t\t
\t\tvar column_client = new GF_Datagrid_Column({
\t\t\tid: 'client',
\t\t\tcaption: '";
        // line 34
        echo Gekosale\Translation::get("TXT_CLIENT");
        echo "',
\t\t});
\t\t
\t\tvar column_session = new GF_Datagrid_Column({
\t\t\tid: 'client_session',
\t\t\tcaption: '";
        // line 39
        echo Gekosale\Translation::get("TXT_SESSION");
        echo "',
\t\t\tappearance: {
\t\t\t\tvisible: false
\t\t\t},
\t\t});
\t\t
\t\tvar column_lastaddress = new GF_Datagrid_Column({
\t\t\tid: 'lastaddress',
\t\t\tcaption: '";
        // line 47
        echo Gekosale\Translation::get("TXT_SPY_LAST_ADDRESS");
        echo "',
\t\t});
\t\t
\t\tvar column_cart = new GF_Datagrid_Column({
\t\t\tid: 'cart',
\t\t\tcaption: '";
        // line 52
        echo Gekosale\Translation::get("TXT_CART");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 110,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_ipaddress = new GF_Datagrid_Column({
\t\t\tid: 'ipaddress',
\t\t\tcaption: 'IP',
\t\t\tappearance: {
\t\t\t\twidth: 110,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t\t}
\t\t});
\t\t
\t\tvar column_isbot = new GF_Datagrid_Column({
\t\t\tid: 'isbot',
\t\t\tcaption: '";
        // line 74
        echo Gekosale\Translation::get("TXT_SPY_ISBOT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 70,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 81
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "isbot");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\tvar column_ismobile = new GF_Datagrid_Column({
\t\t\tid: 'ismobile',
\t\t\tcaption: '";
        // line 87
        echo Gekosale\Translation::get("TXT_SPY_ISMOBILE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 70,
\t\t\t},
\t\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 94
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "ismobile");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\tvar column_browser = new GF_Datagrid_Column({
\t\t\tid: 'browser',
\t\t\tcaption: '";
        // line 100
        echo Gekosale\Translation::get("TXT_SPY_BROWSER");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 100,
\t\t\t},
\t\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 107
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "browser");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\tvar column_platform = new GF_Datagrid_Column({
\t\t\tid: 'platform',
\t\t\tcaption: '";
        // line 113
        echo Gekosale\Translation::get("TXT_SPY_PLATFORM");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t},
\t\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 120
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "platform");
        echo "
\t\t\t\t],
\t\t\t}
\t\t});
\t\t
    var options = {
\t\t\tid: 'spy',
\t\t\tmechanics: {
\t\t\t\tkey: 'client_session',
\t\t\t\trows_per_page: ";
        // line 129
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllSpy,
\t\t\t\tedit_row: editClient,
\t\t\t\t";
        // line 134
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 135
            echo "\t\t\t\tclick_row: editClient
\t\t\t\t";
        }
        // line 137
        echo "\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_client,
\t\t\t\tcolumn_lastaddress,
\t\t\t\tcolumn_ipaddress,
\t\t\t\tcolumn_session,
\t\t\t\tcolumn_cart,
\t\t\t\tcolumn_isbot,
\t\t\t\tcolumn_ismobile,
\t\t\t\tcolumn_browser,
\t\t\t\tcolumn_platform,
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT
\t\t\t]
\t\t\t
\t\t\t
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-spy'), options);
    
   });
   
   /*]]>*/
   
   
   
</script>
";
    }

    public function getTemplateName()
    {
        return "spy\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 137,  223 => 135,  220 => 134,  211 => 129,  198 => 120,  188 => 113,  178 => 107,  168 => 100,  158 => 94,  148 => 87,  138 => 81,  128 => 74,  103 => 52,  95 => 47,  84 => 39,  76 => 34,  64 => 25,  53 => 20,  29 => 3,  26 => 2,);
    }
}
