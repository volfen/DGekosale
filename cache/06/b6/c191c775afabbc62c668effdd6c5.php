<?php

/* mostviewed\index\index.tpl */
class __TwigTemplate_06b6c191c775afabbc62c668effdd6c5 extends Twig_Template
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
        echo "<h2><img
\tsrc=\"";
        // line 4
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/mostsearch-list.png\"
\talt=\"\" />";
        // line 5
        echo Gekosale\Translation::get("TXT_MOST_VIEWED_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 7
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/delete\" class=\"button\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_CLEAR");
        echo "</span></a></li>
</ul>
<div class=\"block\">
<div id=\"list-mostviewed\"></div>
</div>

<script type=\"text/javascript\">
   
   
   
   /*<![CDATA[*/
      
   \$(document).ready(function() {
   
   \t\tvar dataProvider;
   \t\t
  \t\tvar column_id = new GF_Datagrid_Column({
\t\t\tid: 'id',
\t\t\tappearance: {
\t\t\t\twidth: 90,
\t\t\t\tvisible: false
\t\t\t},
\t\t\tcaption: '";
        // line 29
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\t});
\t\t
\t\tvar column_name = new GF_Datagrid_Column({
\t\t\tid: 'name',
\t\t\tcaption: '";
        // line 34
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\t});

\t\tvar column_category = new GF_Datagrid_Column({
\t\t\tid: 'categoriesname',
\t\t\tcaption: '";
        // line 39
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\t\tappearance: {
\t\t\t\twidth: 150
\t\t\t},
\t\t\tfilter: {
\t\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\t\toptions: ";
        // line 46
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "categoryid");
        echo ",
\t\t\t\tload_children: xajax_LoadCategoryChildren
\t\t\t}
\t\t});
\t\t
\t\tvar column_qty = new GF_Datagrid_Column({
\t\t\tid: 'qty',
\t\t\tcaption: '";
        // line 53
        echo Gekosale\Translation::get("TXT_QUANTITY");
        echo "',
\t\t\tsorting: {
\t\t\t\tdefault_order: 'desc'
\t\t\t}
\t\t});
\t\t
    var options = {
\t\t\tid: 'product',
\t\t\tmechanics: {
\t\t\t\tkey: 'id',
\t\t\t\tdefault_sorting: 'qty',
\t\t\t\trows_per_page: ";
        // line 64
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t\t},
\t\t\tevent_handlers: {
\t\t\t\tload: xajax_LoadAllMostViewed,
\t\t\t},
\t\t\tcolumns: [
\t\t\t\tcolumn_id,
\t\t\t\tcolumn_name,
\t\t\t\tcolumn_category,
\t\t\t\tcolumn_qty
\t\t\t],
    };
    
    theDatagrid = new GF_Datagrid(\$('#list-mostviewed'), options);
    
   });
   
   /*]]>*/
   
   
   
</script>
";
    }

    public function getTemplateName()
    {
        return "mostviewed\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 64,  112 => 53,  101 => 46,  91 => 39,  83 => 34,  75 => 29,  42 => 7,  37 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
