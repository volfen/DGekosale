<?php

/* availablity\index\index.tpl */
class __TwigTemplate_7e9a1ebdae69e66f7f4a0d9ef6dd81a1 extends Twig_Template
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
        echo Gekosale\Translation::get("TXT_AVAILABLITY");
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
\t<div id=\"list-availablity\"></div>
</div>

<script type=\"text/javascript\">
function editAvailablity(dg, id) {
\tlocation.href = '";
        // line 15
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function deleteAvailablity(dg, id) {
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
\t\treturn xajax_doDeleteAvailablity(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

var theDatagrid;
\t 
\$(document).ready(function() {
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idavailablity',
\t\tcaption: '";
        // line 38
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
\t\t
\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 50
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t}
\t});
\t\t
    var options = {
\t\tid: 'availablity',
\t\tappearance: {
\t\t\tcolumn_select: false
\t\t},
\t\tmechanics: {
\t\t\tkey: 'idavailablity',
\t\t\trows_per_page: ";
        // line 63
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllAvailablity,
\t\t\tdelete_row: deleteAvailablity,
\t\t\tedit_row: editAvailablity,
\t\t\t";
        // line 69
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 70
            echo "\t\t\tclick_row: editAvailablity
\t\t\t";
        }
        // line 72
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-availablity'), options);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "availablity\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 72,  140 => 70,  137 => 69,  127 => 63,  111 => 50,  96 => 38,  76 => 21,  72 => 20,  61 => 15,  39 => 6,  29 => 3,  26 => 2,);
    }
}
