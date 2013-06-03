<?php

/* collection\index\index.tpl */
class __TwigTemplate_5c8a368a5388f2afd91f4712a556f3fd extends Twig_Template
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
        echo "_images_panel/icons/modules/collection-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_COLLECTIONS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_COLLECTION");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_COLLECTION");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-collections\"></div>
</div>

<script type=\"text/javascript\">

function editCollection(dg, id) {
\tlocation.href = '";
        // line 14
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};
\t\t
function deleteCollection(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 19
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 20
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteCollection(p.dg, p.id);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleCollections(dg, ids) {
\tvar title = '";
        // line 32
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 33
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteCollection(p.dg, p.ids);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idcollection',
\t\tcaption: '";
        // line 50
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\tappearance: {
\t\t\twidth: 90,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t
\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 62
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});
\t
\tvar column_adddate = new GF_Datagrid_Column({
\t\tid: 'adddate',
\t\tcaption: '";
        // line 71
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_producer = new GF_Datagrid_Column({
\t\tid: 'producer',
\t\tcaption: '";
        // line 83
        echo Gekosale\Translation::get("TXT_PRODUCER");
        echo "',
\t\tappearance: {
\t\t\twidth: 260
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [
\t\t\t\t";
        // line 90
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "producer");
        echo "
\t\t\t],
\t\t}
\t});
\t
\tvar options = {
\t\tid: 'collection',
\t\tmechanics: {
\t\t\tkey: 'idcollection',
\t\t\trows_per_page: ";
        // line 99
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllCollection,
\t\t\tdelete_row: deleteCollection,
\t\t\tedit_row: editCollection,
\t\t\tdelete_group: deleteMultipleCollections,
\t\t\t";
        // line 106
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 107
            echo "\t\t\tclick_row: editCollection
\t\t\t";
        }
        // line 109
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_producer,
\t\t\tcolumn_adddate,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tgroup_actions: [
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t]
\t};
    
    theDatagrid = new GF_Datagrid(\$('#list-collections'), options);
    
});
</script>
";
    }

    public function getTemplateName()
    {
        return "collection\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 109,  193 => 107,  190 => 106,  179 => 99,  166 => 90,  156 => 83,  141 => 71,  129 => 62,  114 => 50,  94 => 33,  90 => 32,  75 => 20,  71 => 19,  60 => 14,  38 => 5,  29 => 3,  26 => 2,);
    }
}
