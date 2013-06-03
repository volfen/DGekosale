<?php

/* attributegroup\edit\edit.tpl */
class __TwigTemplate_d4ed5efa4574a42a14e3cc855dd4f94b extends Twig_Template
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
        echo "
";
        // line 4
        if (array_key_exists("errormessage", $context)) {
            // line 5
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t\tGError('";
            // line 7
            if (isset($context["errormessage"])) { $_errormessage_ = $context["errormessage"]; } else { $_errormessage_ = null; }
            echo $_errormessage_;
            echo "');
\t});
</script>
";
        }
        // line 11
        echo "
<h2><img src=\"";
        // line 12
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/atributes-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCT_VARIANTS");
        echo ": ";
        if (isset($context["currentGroup"])) { $_currentGroup_ = $context["currentGroup"]; } else { $_currentGroup_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_currentGroup_, "name"));
        echo "</h2>
<ul class=\"possibilities\">
 \t<li><a href=\"";
        // line 14
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_ATTRIBUTE_DATA_SET");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_ATTRIBUTE_DATA_SET");
        echo "</span></a></li>
\t<li><a href=\"";
        // line 15
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "\" rel=\"delete\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/delete.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "</span></a></li>
\t<!-- <li><a href=\"#attributegroup\" rel=\"reset\" class=\"button\" title=\"";
        // line 16
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/clean.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_START_AGAIN");
        echo "</span></a></li> -->
\t<li><a href=\"#attributegroup\" rel=\"submit\" class=\"button\" title=\"";
        // line 17
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
</ul>
<script type=\"text/javascript\">
GCore.OnLoad(function() {
\t\$('a[href=\"";
        // line 21
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\"]').click(function() {
\t\tGPrompt('";
        // line 22
        echo Gekosale\Translation::get("TXT_ENTER_NEW_ATTRIBUTE_GROUP_NAME");
        echo "', function(sName) {
\t\t\tGCore.StartWaiting();
\t\t\txajax_AddGroup({
\t\t\t\tname: sName
\t\t\t}, GCallback(function(eEvent) {
\t\t\t\tif(eEvent.error != undefined){
\t\t\t\t\tGMessage(eEvent.error);
\t\t\t\t}else{
\t\t\t\t\tif (eEvent.id == undefined) {
\t\t\t\t\t\twindow.location = '";
        // line 31
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "';
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\twindow.location = '";
        // line 34
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + eEvent.id;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t}));
\t\t});
\t\treturn false;
\t});

\t\$('a[href=\"";
        // line 43
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "\"][rel=\"delete\"]').click(function() {
\t\tGWarning('";
        // line 44
        echo Gekosale\Translation::get("TXT_DO_YOU_REALLY_WANT_TO_DELETE_ATTRIBUTE_GROUP");
        echo "', '";
        echo Gekosale\Translation::get("TXT_DO_YOU_REALLY_WANT_TO_DELETE_ATTRIBUTE_GROUP_DESCRIPTION");
        echo "', {
\t\t\tbAutoExpand: true,
\t\t\taoPossibilities: [
\t\t\t\t{mLink: function() {
\t\t\t\t\tGCore.StartWaiting();
\t\t\t\t\txajax_DeleteGroup({
\t\t\t\t\t\tid: '";
        // line 50
        if (isset($context["currentGroup"])) { $_currentGroup_ = $context["currentGroup"]; } else { $_currentGroup_ = null; }
        echo $this->getAttribute($_currentGroup_, "id");
        echo "'
\t\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\t\twindow.location = '";
        // line 52
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "';
\t\t\t\t\t}));
\t\t\t\t}, sCaption: GForm.Language.tree_ok},
\t\t\t\t{mLink: GAlert.DestroyThis, sCaption: GForm.Language.tree_cancel}
\t\t\t]
\t\t});
\t\treturn false;
\t});
});
</script>

<div class=\"block\">
\t<div class=\"scrollable-tabs\">
\t\t<ul>
\t\t";
        // line 66
        if (isset($context["existingGroups"])) { $_existingGroups_ = $context["existingGroups"]; } else { $_existingGroups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_existingGroups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 67
            echo "\t\t\t<li";
            if (isset($context["currentGroup"])) { $_currentGroup_ = $context["currentGroup"]; } else { $_currentGroup_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (($this->getAttribute($_currentGroup_, "id") == $this->getAttribute($_group_, "id"))) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
            echo $_URL_;
            if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
            echo $_CURRENT_CONTROLLER_;
            echo "/edit/";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo $this->getAttribute($_group_, "id");
            echo "\">";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"));
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "\t\t</ul>
\t</div>
\t";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "attributegroup\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 71,  225 => 69,  201 => 67,  196 => 66,  176 => 52,  170 => 50,  159 => 44,  152 => 43,  137 => 34,  128 => 31,  116 => 22,  109 => 21,  97 => 17,  88 => 16,  74 => 15,  60 => 14,  49 => 12,  46 => 11,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
