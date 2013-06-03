<?php

/* productpromotion\index\index.tpl */
class __TwigTemplate_745917dabb85d9d0b731bd92aeee624c extends Twig_Template
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
        echo "_images_panel/icons/modules/promotion-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCT_PROMOTION_LIST");
        echo "</h2>

<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_PROMOTION");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_PROMOTION");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-productnews\"></div>
</div>

<script type=\"text/javascript\">
function editProductPromotion (dg, id) {
\tlocation.href = '";
        // line 15
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "product/edit/' + id + '';
};
   
function deleteProductPromotion(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 20
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 21
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProductPromotion(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};
\t 
function deleteMultipleProductPromotion(dg, ids) {
\tvar title = '";
        // line 33
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 34
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProductPromotion(p.dg,p.ids);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};
\t 

var theDatagrid;
\t 
\$(document).ready(function() {
   
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idproduct',
\t\tcaption: '";
        // line 52
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
        // line 64
        echo Gekosale\Translation::get("TXT_PRODUCT");
        echo "',
\t\tappearance: {
\t\t\twidth: 150
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t}
\t});

\tvar column_category = new GF_Datagrid_Column({
\t\tid: 'categoriesname',
\t\tcaption: '";
        // line 75
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\tappearance: {
\t\t\twidth: 150
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\toptions: ";
        // line 82
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "categoryid");
        echo ",
\t\t\tload_children: xajax_LoadCategoryChildren
\t\t}
\t});

\tvar column_adddate = new GF_Datagrid_Column({
\t\tid: 'adddate',
\t\tcaption: '";
        // line 89
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_startdate = new GF_Datagrid_Column({
\t\tid: 'startdate',
\t\tcaption: '";
        // line 100
        echo Gekosale\Translation::get("TXT_START_DATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_enddate = new GF_Datagrid_Column({
\t\tid: 'enddate',
\t\tcaption: '";
        // line 111
        echo Gekosale\Translation::get("TXT_END_DATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});
\t\t
    var options = {
\t\tid: 'productpromotion',
\t\tmechanics: {
\t\t\tkey: 'idproduct',
\t\t\trows_per_page: ";
        // line 124
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllProductPromotion,
\t\t\tedit_row: editProductPromotion,
\t\t\tdelete_row: deleteProductPromotion,
\t\t\tdelete_group: deleteMultipleProductPromotion,
\t\t},
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t],
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_category,
\t\t\tcolumn_adddate,
\t\t\tcolumn_startdate,
\t\t\tcolumn_enddate
\t\t],
\t\tgroup_actions: [
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-productnews'), options);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "productpromotion\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 124,  192 => 111,  178 => 100,  164 => 89,  153 => 82,  143 => 75,  129 => 64,  114 => 52,  93 => 34,  89 => 33,  74 => 21,  70 => 20,  61 => 15,  39 => 6,  29 => 3,  26 => 2,);
    }
}
