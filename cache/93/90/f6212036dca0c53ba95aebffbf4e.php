<?php

/* upsell\index\index.tpl */
class __TwigTemplate_9390f6212036dca0c53ba95aebffbf4e extends Twig_Template
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
        echo Gekosale\Translation::get("TXT_UPSELL_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_UPSELL");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_UPSELL");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-upsell\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
   
   function deleteUpsell(dg, id) {
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
\t\t\treturn xajax_doDeleteUpsell(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
   
    function deleteMultipleUpsells(dg, ids) {
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
\t\t\treturn xajax_doDeleteUpsell(p.dg, p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function editUpsell(dg, id) {
    location.href = '";
        // line 47
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t };

\t var theDatagrid;
\t 
   \$(document).ready(function() {
\t\t
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'idupsell',
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
\t\t\tappearance: {
\t\t\t\twidth: 130
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetNameSuggestions,
\t\t\t}
\t\t});

\t\tvar column_category = new GF_Datagrid_Column({
\t\t\tid: 'categoriesname',
\t\t\tcaption: '";
        // line 80
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 150
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\t\toptions: ";
        // line 87
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
        // line 94
        echo Gekosale\Translation::get("TXT_UPSELL_COUNT");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 130
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t\t
\t\tvar column_adddate = new GF_Datagrid_Column({
\t\t\tid: 'adddate',
\t\t\tcaption: '";
        // line 105
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
\t\t\tid: 'upsell',
\t\t\tmechanics: {
\t\t\t\tkey: 'idupsell',
\t\t\t\trows_per_page: ";
        // line 119
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllUpsell,
\t\t\t\tedit_row: editUpsell,
\t\t\t\tdelete_row: deleteUpsell,
\t\t\t\tdelete_group: deleteMultipleUpsells,
\t\t\t\t";
        // line 126
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 127
            echo "\t\t\t\tclick_row: editUpsell
\t\t\t\t";
        }
        // line 129
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
    
    theDatagrid = new GF_Datagrid(\$('#list-upsell'), options);
\t\t
\t });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "upsell\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 129,  213 => 127,  210 => 126,  199 => 119,  182 => 105,  168 => 94,  157 => 87,  147 => 80,  132 => 68,  117 => 56,  102 => 47,  87 => 35,  83 => 34,  68 => 22,  64 => 21,  36 => 6,  29 => 3,  26 => 2,);
    }
}
