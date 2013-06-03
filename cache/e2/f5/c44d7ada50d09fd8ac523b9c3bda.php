<?php

/* crosssell\index\index.tpl */
class __TwigTemplate_e2f5c44d7ada50d09fd8ac523b9c3bda extends Twig_Template
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
        echo "<h2>";
        echo Gekosale\Translation::get("TXT_CROSS_SELLS_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_CROSS_SELL");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_CROSS_SELL");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-crosssell\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/

\t function editCrosssell(dg, id) {
    location.href = '";
        // line 20
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t };
\t 
\t function deleteCrosssell(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 25
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 26
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteCrosssell(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };

   function deleteMultipleCrosssells(dg, ids) {
\t\tvar title = '";
        // line 38
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 39
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tids: ids
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteCrosssell(p.dg, p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };

\t var theDatagrid;
\t 
   \$(document).ready(function() {
\t\t
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'idcrosssell',
\t\t\tcaption: '";
        // line 56
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
        // line 68
        echo Gekosale\Translation::get("TXT_PRODUCT");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetNameSuggestions,
\t\t\t}
\t\t});

\t\tvar column_category = new GF_Datagrid_Column({
\t\t\tid: 'categoriesname',
\t\t\tcaption: '";
        // line 77
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 150
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\t\toptions: ";
        // line 84
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "categoryid");
        echo ",
\t\t\t\tload_children: xajax_LoadCategoryChildren
\t\t\t}
\t\t});
\t\t
\t\tvar column_productcount = new GF_Datagrid_Column({
\t\t\tid: 'productcount',
\t\t\tcaption: '";
        // line 91
        echo Gekosale\Translation::get("TXT_PRODUCT_COUNT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 130
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t\t\t
\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 102
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 140,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
    \tvar options = {
\t\t\tid: 'crosssell',
\t\t\tmechanics: {
\t\t\t\tkey: 'idcrosssell',
\t\t\t\trows_per_page: ";
        // line 116
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllCrosssell,
\t\t\t\tdelete_row: deleteCrosssell,
\t\t\t\tedit_row: editCrosssell,
\t\t\t\tdelete_group: deleteMultipleCrosssells,
\t\t\t\t";
        // line 123
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 124
            echo "\t\t\t\tclick_row: editCrosssell
\t\t\t\t";
        }
        // line 126
        echo "\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_name,
\t\t\t\tcolumn_category,
\t\t\t\tcolumn_productcount,
\t\t\t\tcolumn_adddate,
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tgroup_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-crosssell'), options);
\t\t
\t });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "crosssell\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 126,  210 => 124,  207 => 123,  196 => 116,  179 => 102,  165 => 91,  154 => 84,  144 => 77,  132 => 68,  117 => 56,  97 => 39,  93 => 38,  78 => 26,  74 => 25,  63 => 20,  36 => 6,  29 => 3,  26 => 2,);
    }
}
