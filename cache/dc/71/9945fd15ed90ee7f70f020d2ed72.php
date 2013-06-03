<?php

/* files\index\index.tpl */
class __TwigTemplate_dc719945fd15ed90ee7f70f020d2ed72 extends Twig_Template
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
        echo "_images_panel/icons/modules/category-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_FILES_LIST");
        echo "</h2>

<div class=\"block\">
\t<div id=\"list-files\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
\t 
\t function processFile(oRow) {
\t\tif (oRow.thumb != '') {
\t\t\toRow.thumb = '<a href=\"' + oRow.thumb + '\" class=\"show-thumb\"><img src=\"";
        // line 17
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/details.png\" style=\"vertical-align: middle;\" alt=\"";
        echo Gekosale\Translation::get("TXT_VIEW_THUMB");
        echo "\"/></a>';
\t\t}
\t\tif (oRow.path != '') {
\t\t\toRow.path = '<a href=\"' + oRow.path + '\" target=\"_blank\" class=\"path\">' + oRow.path +'</a>';
\t\t}
\t\treturn oRow;
\t };
\t 
\t function dataLoaded(dDg) {
\t\tdDg.m_jBody.find('.show-thumb').mouseenter(GTooltip.ShowThumbForThis).mouseleave(GTooltip.HideThumbForThis);
\t\tdDg.m_jBody.find('.path').click(function(){
\t\t\twindow.open(\$(this).attr('href'));
\t\t});
\t };
   
   function viewFiles(dg, id) {
    location.href = '";
        // line 33
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/view/' + id + '';
   };
   
   function editFiles(dg, id) {
    location.href = '";
        // line 37
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
   };
   
   function deleteFiles(dg, id){
   \t\tvar oRow = theDatagrid.GetRow(id);
   \t\tvar title = '";
        // line 42
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 43
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " <strong>' + oRow.filename +'</strong> ?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tid: id
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteFiles(p.dg, p.id);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };
\t 
\tfunction deleteMultipleFiles(dg, ids) {
\t\tvar title = '";
        // line 55
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\t\tvar msg = '";
        // line 56
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\t\tvar params = {
\t\t\tdg: dg,
\t\t\tids: ids
\t\t};
\t\tvar func = function(p) {
\t\t\treturn xajax_doDeleteFiles(p.dg, p.ids);
\t\t};
    new GF_Alert(title, msg, func, true, params);
\t };

\t var theDatagrid;
   
   \$(document).ready(function() {
\t  
\t  var column_id = new GF_Datagrid_Column({
\t\t\tid: 'idfile',
\t\t\tcaption: '";
        // line 73
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\t\tsorting: {
\t\t\t\tdefault_order: GF_Datagrid.SORT_DIR_DESC
\t\t\t},
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t\t}
\t\t});
\t\t
\t\tvar column_thumb = new GF_Datagrid_Column({
\t\t\tid: 'thumb',
\t\t\tcaption: '";
        // line 88
        echo Gekosale\Translation::get("TXT_THUMB");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 30,
\t\t\t\tno_title: true
\t\t\t}
\t\t});
\t\t
\t\tvar column_filename = new GF_Datagrid_Column({
\t\t\tid: 'filename',
\t\t\tcaption: '";
        // line 97
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\t\tsource: xajax_GetFilenameSuggestions,
\t\t\t},
\t\t\tappearance: {
\t\t\t\twidth: 130,
\t\t\t}
\t\t});
\t\t
\t\tvar column_path = new GF_Datagrid_Column({
\t\t\tid: 'path',
\t\t\tcaption: '";
        // line 109
        echo Gekosale\Translation::get("TXT_URL");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 230,
\t\t\t\tno_title: true
\t\t\t}
\t\t});
\t\t
\t\tvar column_fileextension = new GF_Datagrid_Column({
\t\t\tid: 'fileextension',
\t\t\tcaption: '";
        // line 118
        echo Gekosale\Translation::get("TXT_FILEEXTENSION");
        echo "',
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\t\toptions: [
\t\t\t\t\t";
        // line 122
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "fileextension");
        echo "
\t\t\t\t],
\t\t\t},
\t\t\tappearance: {
\t\t\t\twidth: 30,
\t\t\t}
\t\t});
\t\t
\t\tvar options = {
\t\t\tid: 'files',
\t\t\tmechanics: {
\t\t\t\tkey: 'idfile',
\t\t\t\trows_per_page: ";
        // line 134
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllFiles,
\t\t\t\tdelete_row: deleteFiles,
\t\t\t\tprocess: processFile,
\t\t\t\tloaded: dataLoaded,
\t\t\t\tdelete_group: deleteMultipleFiles,
\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_thumb,
\t\t\t\tcolumn_filename,
\t\t\t\tcolumn_path,
\t\t\t\tcolumn_fileextension,
\t\t\t],
\t\t\trow_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tgroup_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t],
\t\t\tcontext_actions: [
\t\t\t\tGF_Datagrid.ACTION_DELETE
\t\t\t]
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-files'), options);
    
   });
   
   /*]]>*/
   
   
   
  </script>
";
    }

    public function getTemplateName()
    {
        return "files\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 134,  200 => 122,  193 => 118,  181 => 109,  166 => 97,  154 => 88,  136 => 73,  116 => 56,  112 => 55,  97 => 43,  93 => 42,  82 => 37,  72 => 33,  50 => 17,  29 => 3,  26 => 2,);
    }
}
