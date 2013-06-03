<?php

/* templateeditor\index\index.tpl */
class __TwigTemplate_ab09bb9b23a5dcdf82a72feda42f46dd extends Twig_Template
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
        echo "_images_panel/icons/modules/category-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_TEMPLATE_EDITOR");
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
\t<div id=\"list-pagescheme\"></div>
</div>

<script type=\"text/javascript\">

function processScheme(row) {

\tif (row.thumb != '') {
\t\trow.thumb = '<a title=\"\" href=\"' + row.thumb + '\" class=\"show-thumb\"><img src=\"";
        // line 18
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/details.png\" style=\"vertical-align: middle;\" /></a>';
\t}
\treturn {
\t\tidpagescheme: row.idpagescheme,
\t\ttemplatefolder: row.templatefolder,
\t\tname: row.name,
\t\tdef: (row.def == 1) ? '";
        // line 24
        echo Gekosale\Translation::get("TXT_YES");
        echo "' : '";
        echo Gekosale\Translation::get("TXT_NO");
        echo "',
\t\tthumb: row.thumb,
\t};
};

function dataLoaded(dDg) {
\tdDg.m_jBody.find('.show-thumb').mouseenter(GTooltip.ShowThumbForThis).mouseleave(GTooltip.HideThumbForThis);
};

function editPagescheme(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tlocation.href = '";
        // line 35
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + oRow.templatefolder + '';
};

function exportScheme(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tlocation.href = '";
        // line 40
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/view/' + oRow.idpagescheme + '';
};

function deletePagescheme(dg, id) {
\tvar systemTemplates = [\"default\"];
 \tvar oRow = theDatagrid.GetRow(id);
 \tif(\$.inArray(oRow.templatefolder, systemTemplates) > -1) {
 \t\treturn GError('Nie możesz skasować domyślnych szablonów WellCommerce.');
 \t}
\tvar title = '";
        // line 49
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 50
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeletePagescheme(p.dg, p.id);
\t};
    new GF_Alert(title, msg, func, true, params);
};
\t 
function setDefaultPagescheme(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 63
        echo Gekosale\Translation::get("TXT_DEFAULT");
        echo "';
\tvar msg = '";
        // line 64
        echo Gekosale\Translation::get("TXT_SET_DEFAULT");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_setDefaultPagescheme(p.dg, p.id);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};\t
\t
var theDatagrid;
\t 
\$(document).ready(function() {
\t   
\tvar action_setDefaultPagescheme = new GF_Action({
\t\tcaption: '";
        // line 80
        echo Gekosale\Translation::get("TXT_SET_DEFAULT");
        echo "',
\t\taction: setDefaultPagescheme,
\t   \timg: '";
        // line 82
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/on.png',
\t   \tcondition: function(oR) { return oR['def'] == '0'; }
\t});

\tvar action_removableScheme = new GF_Action({
\t\tcaption: '";
        // line 87
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "',
\t\taction: deletePagescheme,
\t\timg: '";
        // line 89
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/delete.png',
\t\tcondition: function(oR) { return oR['def'] != '1'; }
\t});
\t\t
\tvar action_exportScheme = new GF_Action({
\t\tcaption: '";
        // line 94
        echo Gekosale\Translation::get("TXT_EXPORT");
        echo "',
\t\taction: exportScheme,
\t\timg: '";
        // line 96
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/duplicate.png',
\t});
\t\t
\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idpagescheme',
\t\tcaption: '";
        // line 101
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
        // line 113
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 440,
\t\t},
\t});

\tvar column_default = new GF_Datagrid_Column({
\t\tid: 'def',
\t\tcaption: '";
        // line 122
        echo Gekosale\Translation::get("TXT_DEFAULT");
        echo "',
\t\tappearance: {
\t\t\twidth: 20,
\t\t}
\t});
\t\t
    var options = {
\t\tid: 'pagescheme',
\t\tappearance: {
\t\t\tcolumn_select: false
\t\t},
\t\tmechanics: {
\t\t\tkey: 'idpagescheme',
\t\t\trows_per_page: ";
        // line 135
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllPagescheme,
\t\t\tdelete_row: deletePagescheme,
\t\t\tedit_row: editPagescheme,
\t\t\tprocess: processScheme,
\t\t\tloaded: dataLoaded,
\t\t\tupdate_row: function(sId, oRow) {
\t\t\t\txajax_doUpdateScheme(oRow.idpagescheme, oRow.name);
\t\t\t\ttheDatagrid.LoadData();
\t\t\t},
\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_default,
\t\t],
\t\trow_actions: [
\t\t\taction_removableScheme,
\t\t\t";
        // line 155
        if (isset($context["viewid"])) { $_viewid_ = $context["viewid"]; } else { $_viewid_ = null; }
        if (($_viewid_ > 0)) {
            // line 156
            echo "\t\t\taction_setDefaultPagescheme,
\t\t\t";
        }
        // line 158
        echo "\t\t\taction_exportScheme
\t\t],
\t\tcontext_actions: [
\t\t\taction_removableScheme,
\t\t\t";
        // line 162
        if (isset($context["viewid"])) { $_viewid_ = $context["viewid"]; } else { $_viewid_ = null; }
        if (($_viewid_ > 0)) {
            // line 163
            echo "\t\t\taction_setDefaultPagescheme,
\t\t\t";
        }
        // line 165
        echo "\t\t\taction_exportScheme
\t\t]
\t};
    
    theDatagrid = new GF_Datagrid(\$('#list-pagescheme'), options);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "templateeditor\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 165,  284 => 163,  281 => 162,  275 => 158,  271 => 156,  268 => 155,  244 => 135,  228 => 122,  216 => 113,  201 => 101,  192 => 96,  187 => 94,  178 => 89,  173 => 87,  164 => 82,  159 => 80,  140 => 64,  136 => 63,  120 => 50,  116 => 49,  101 => 40,  90 => 35,  74 => 24,  64 => 18,  39 => 6,  29 => 3,  26 => 2,);
    }
}
