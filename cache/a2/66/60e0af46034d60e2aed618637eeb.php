<?php

/* dispatchmethod\index\index.tpl */
class __TwigTemplate_a26660e0af46034d60e2aed618637eeb extends Twig_Template
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
        echo "_images_panel/icons/modules/dispatchmethod-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_DISPATCHMETHODS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_DISPATCHMETHOD");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_DISPATCHMETHOD");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-dispatchmethods\"></div>
</div>
<script type=\"text/javascript\">

function editDispatchMethod(dg, id) {
\tlocation.href = '";
        // line 13
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deleteDispatchMethod(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 18
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 19
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteDispatchMethod(p.dg, p.id);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'iddispatchmethod',
\t\tcaption: '";
        // line 36
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\tappearance: {
\t\t\twidth: 90,
\t\t\tvisible: false,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t
\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 48
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tappearance: {
\t\t\twidth: 240,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});

\tvar column_hierarchy = new GF_Datagrid_Column({
\t\tid: 'hierarchy',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 40,
\t\t},
\t\tcaption: '";
        // line 64
        echo Gekosale\Translation::get("TXT_HIERARCHY");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t
\tvar column_countries = new GF_Datagrid_Column({
\t\tid: 'countries',
\t\tappearance: {
\t\t\twidth: 140,
\t\t},
\t\tcaption: '";
        // line 75
        echo Gekosale\Translation::get("TXT_COUNTRY");
        echo "',
\t});
\t\t
    var options = {
\t\tid: 'dispatchmethod',
\t\tappearance: {
\t\t\tcolumn_select: false
\t\t},
\t\tmechanics: {
\t\t\tkey: 'iddispatchmethod',
\t\t\trows_per_page: ";
        // line 85
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllDispatchMethod,
\t\t\tdelete_row: deleteDispatchMethod,
\t\t\tedit_row: editDispatchMethod,
\t\t\tupdate_row: function(sId, oRow) {
\t\t\t\txajax_doAJAXUpdateMethod({
\t\t\t\t\tid: sId,
\t\t\t\t\thierarchy: oRow.hierarchy
\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\ttheDatagrid.LoadData();
\t\t\t\t}));
\t\t\t},
\t\t\t";
        // line 99
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 100
            echo "\t\t\tclick_row: editDispatchMethod
\t\t\t";
        }
        // line 102
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_hierarchy,
\t\t\tcolumn_countries,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-dispatchmethods'), options);
\t\t
});
</script>
";
    }

    public function getTemplateName()
    {
        return "dispatchmethod\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 102,  176 => 100,  173 => 99,  155 => 85,  142 => 75,  128 => 64,  109 => 48,  94 => 36,  74 => 19,  70 => 18,  59 => 13,  38 => 5,  29 => 3,  26 => 2,);
    }
}
