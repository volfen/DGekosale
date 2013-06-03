<?php

/* productstatus\index\index.tpl */
class __TwigTemplate_c7a1befeddf574b6711100afd4b7823c extends Twig_Template
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
        echo "_images_panel/icons/modules/status-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCTSTATUS_LIST");
        echo "</h2>


<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 7
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCT_STATUS");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCT_STATUS");
        echo "</span></a></li>
</ul>

<div class=\"block\">
\t<div id=\"list-productstatus\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
   
    function editProductStatus(dg, id) {
    location.href = '";
        // line 21
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
\t };

\t function deleteProductStatus(dg, id) {
\t \tvar oRow = theDatagrid.GetRow(id);
\t\tvar title = '";
        // line 26
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 27
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteProductStatus(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\t function deleteMultipleProductStatuses(dg, ids) {
\t\tvar title = '";
        // line 39
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 40
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tids: ids
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteProductStatus(p.dg, p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
    var theDatagrid;
    
   \$(document).ready(function() {
\t\t
\t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'idproductstatus',
\t\t\tcaption: '";
        // line 57
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
        // line 69
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t\t}
\t\t});
\t\t
\t    var options = {
\t\t\t\tid: 'productstatus',
\t\t\t\tmechanics: {
\t\t\t\t\tkey: 'idproductstatus',
\t\t\t\t\trows_per_page: ";
        // line 79
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t\t},
\t\t\t\tevent_handlers: {
\t\t\t\t\tload: xajax_LoadAllProductstatus,
\t\t\t\t\tdelete_row: deleteProductStatus,
\t\t\t\t\tedit_row: editProductStatus,
\t\t\t\t\tdelete_group: deleteMultipleProductStatuses,
\t\t\t\t\t";
        // line 86
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 87
            echo "\t\t\t\t\tclick_row: editProductStatus
\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t},
\t\t\t\tcolumns: [
\t\t\t\t\tcolumn_id,
\t\t\t\t\tcolumn_name
\t\t\t\t],
\t\t\t\trow_actions: [
\t\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t\t],
\t\t\t\tgroup_actions: [
\t\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t\t],
\t\t\t\tcontext_actions: [
\t\t\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t\t]
\t    };
    
   \t  theDatagrid = new GF_Datagrid(\$('#list-productstatus'), options);
\t\t
\t });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "productstatus\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 89,  163 => 87,  160 => 86,  149 => 79,  136 => 69,  121 => 57,  101 => 40,  97 => 39,  82 => 27,  78 => 26,  67 => 21,  40 => 7,  29 => 3,  26 => 2,);
    }
}
