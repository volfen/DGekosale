<?php

/* productnews\index\index.tpl */
class __TwigTemplate_9f407e069288c061b42cd82d334f85c1 extends Twig_Template
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
        echo "_images_panel/icons/modules/productnews-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCT_NEWS_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-productnews\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
   
   function deleteProductNews(dg, id) {
   \t\tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 21
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 22
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteProductNews(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function deleteMultipleroductNews(dg, ids) {
\t\tvar title = '";
        // line 34
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 35
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tids: ids
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteProductNews(p.dg,p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function disableProductNews(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 48
        echo Gekosale\Translation::get("TXT_DISABLE");
        echo "';
\t\tvar msg = '";
        // line 49
        echo Gekosale\Translation::get("TXT_DISABLE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_disableProductNews(p.dg, p.id);
\t\t};
\t\tnew GF_Alert(title, msg, func, true, params);
\t };\t
\t 
\t function enableProductNews(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 62
        echo Gekosale\Translation::get("TXT_ENABLE");
        echo "';
\t\tvar msg = '";
        // line 63
        echo Gekosale\Translation::get("TXT_ENABLE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_enableProductNews(p.dg, p.id);
\t\t};
\t\tnew GF_Alert(title, msg, func, true, params);
\t };

\t var theDatagrid;
\t 
   \$(document).ready(function() {
   
  \t\t var action_enableProductNews = new GF_Action({
\t\t\tcaption: '";
        // line 79
        echo Gekosale\Translation::get("TXT_ENABLE_PRODUCT_NEWS");
        echo "',
\t\t\taction: enableProductNews,
\t\t\timg: '";
        // line 81
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/on.png',
\t\t\tcondition: function(oR) { return oR['active'] != '1'; }
\t\t });
\t\t 
\t\t var action_disableProductNews = new GF_Action({
\t\t\tcaption: '";
        // line 86
        echo Gekosale\Translation::get("TXT_DISABLE_PRODUCT_NEWS");
        echo "',
\t\t\taction: disableProductNews,
\t\t\timg: '";
        // line 88
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/off.png',
\t\t\tcondition: function(oR) { return oR['active'] == '1'; }
\t\t });
\t\t
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'idproductnew',
\t\t\tcaption: '";
        // line 94
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_name = new GF_Datagrid_Column({
\t\t\tid: 'name',
\t\t\tcaption: '";
        // line 106
        echo Gekosale\Translation::get("TXT_PRODUCT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 150
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetNameSuggestions,
\t\t\t}
\t\t});

\t\tvar column_category = new GF_Datagrid_Column({
\t\t\tid: 'categoriesname',
\t\t\tcaption: '";
        // line 118
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 150
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\t\toptions: ";
        // line 125
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "categoryid");
        echo ",
\t\t\t\tload_children: xajax_LoadCategoryChildren
\t\t\t}
\t\t});
\t\t
\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 132
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_startdate = new GF_Datagrid_Column({
\t\t\tid: 'startdate',
\t\t\tcaption: '";
        // line 143
        echo Gekosale\Translation::get("TXT_START_DATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_enddate = new GF_Datagrid_Column({
\t\t\tid: 'enddate',
\t\t\tcaption: '";
        // line 154
        echo Gekosale\Translation::get("TXT_END_DATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
    \tvar options = {
\t\t\tid: 'productnew',
\t\t\tmechanics: {
\t\t\t\tkey: 'idproductnew',
\t\t\t\trows_per_page: ";
        // line 167
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllProductNews,
\t\t\t\tdelete_row: deleteProductNews,
\t\t\t\tdelete_group: xajax_doDeleteProductNews,
\t\t\t},
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\t\taction_enableProductNews,
\t\t\t\taction_disableProductNews
\t\t\t],
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_name,
\t\t\t\tcolumn_category,
\t\t\t\tcolumn_adddate,
\t\t\t\tcolumn_startdate,
\t\t\t\tcolumn_enddate
\t\t\t],
\t\t\tgroup_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\t\taction_enableProductNews,
\t\t\t\taction_disableProductNews
\t\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-productnews'), options);
\t\t
\t });
   
   
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "productnews\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 167,  257 => 154,  243 => 143,  229 => 132,  218 => 125,  208 => 118,  193 => 106,  178 => 94,  168 => 88,  163 => 86,  154 => 81,  149 => 79,  130 => 63,  126 => 62,  110 => 49,  106 => 48,  90 => 35,  86 => 34,  71 => 22,  67 => 21,  39 => 6,  29 => 3,  26 => 2,);
    }
}
