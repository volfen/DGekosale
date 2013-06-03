<?php

/* quicklogin.tpl */
class __TwigTemplate_775579bd858129c457066b5e90037a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"\" id=\"quickLogin\" name=\"quickLogin\">
\t<div class=\"control-group error\">
\t\t<span class=\"error help-block\" id=\"login-error\"></span>
\t</div>
\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"input01\">Adres e-mail</label>
\t\t<div class=\"controls\">
\t\t\t<div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-envelope\"></i></span><input\ttype=\"text\" class=\"input-large\" id=\"quick-login\" name=\"quick-login\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"input02\">Hasło</label>
\t\t<div class=\"controls\">
\t\t\t<div class=\"input-prepend\">
\t\t\t\t<span class=\"add-on\"><i class=\"icon-lock\"></i></span><input\ttype=\"password\" class=\"input-large\" id=\"quick-password\" name=\"quick-password\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"control-group nomargin\">
\t\t<input type=\"checkbox\" class=\"input-large\" id=\"quick-autologin\" name=\"quick-autologin\" /> <label class=\"control-label\" for=\"quick-autologin\" style=\"float:left; padding-right:10px;\">";
        // line 22
        echo Gekosale\Translation::get("TXT_AUTOLOGIN");
        echo "</label><br />
\t\t<a href=\"";
        // line 23
        echo Gekosale\Template::getPathFromRoute("frontend.forgotpassword");
        echo "\">Przypomnij hasło</a>
\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">Zaloguj się</button>
\t</div>
</form>
<script>
\$(document).ready(function(){
\t\$('#quickLogin').validate({
\t\terrorElement: 'span',
\t\terrorClass: 'error',
\t\twrapClass: 'help-block',
\t\trules: {
\t\t\t\"quick-login\":{
\t\t\t\t\"required\":true,
\t\t\t\t\"email\":true
\t\t\t},
\t\t\t\"quick-password\":{
\t\t\t\t\"required\":true
\t\t\t}
\t\t},
\t\tmessages: {
\t\t\t\"quick-login\":{
\t\t\t\t\"required\":\"";
        // line 44
        echo Gekosale\Translation::get("ERR_EMPTY_EMAIL");
        echo "\",
\t\t\t\t\"email\": \"";
        // line 45
        echo Gekosale\Translation::get("ERR_WRONG_EMAIL");
        echo "\"
\t\t\t},
\t\t\t\"quick-password\":{
\t\t\t\t\"required\":\"";
        // line 48
        echo Gekosale\Translation::get("ERR_EMPTY_PASSWORD");
        echo "\"
\t\t\t}
\t\t},
\t\thighlight: function(label) {
\t\t\t\$(label).addClass('invalid').closest('.control-group').addClass('error');
\t\t},
\t\tsuccess: function(label) {
\t\t\tlabel.addClass('valid').closest('.control-group').addClass('success');
\t\t},
\t\tsubmitHandler: function(form) {
\t\t\txajax_doQuickLogin(\$('#quick-login').val(), \$('#quick-password').val(), \$('#quick-autologin').val());
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "quicklogin.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 66,  187 => 59,  184 => 58,  175 => 55,  168 => 53,  159 => 48,  141 => 38,  136 => 37,  131 => 36,  126 => 33,  107 => 20,  104 => 19,  98 => 17,  93 => 16,  88 => 15,  23 => 2,  337 => 104,  334 => 103,  332 => 102,  320 => 94,  316 => 92,  312 => 90,  304 => 89,  299 => 88,  287 => 86,  284 => 85,  278 => 81,  273 => 79,  269 => 77,  267 => 76,  261 => 73,  258 => 72,  249 => 70,  229 => 69,  226 => 68,  222 => 66,  217 => 63,  190 => 61,  181 => 59,  177 => 57,  166 => 52,  148 => 49,  138 => 46,  133 => 43,  130 => 42,  117 => 38,  106 => 33,  96 => 27,  89 => 18,  73 => 12,  49 => 9,  19 => 2,  71 => 16,  61 => 13,  58 => 9,  39 => 6,  173 => 56,  163 => 34,  156 => 32,  146 => 39,  143 => 48,  140 => 28,  127 => 26,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  51 => 10,  47 => 8,  25 => 3,  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 7,  40 => 22,  37 => 6,  68 => 44,  45 => 8,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 48,  72 => 45,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  33 => 4,  27 => 2,  18 => 1,  112 => 35,  109 => 19,  103 => 32,  90 => 16,  80 => 18,  77 => 14,  57 => 12,  53 => 8,  44 => 23,  41 => 6,  38 => 5,  32 => 4,  29 => 3,  26 => 4,  195 => 44,  189 => 43,  185 => 60,  179 => 57,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 22,  101 => 24,  94 => 19,  86 => 15,  83 => 14,  79 => 20,  74 => 17,  70 => 12,  67 => 15,  63 => 10,  56 => 12,  52 => 10,  50 => 13,  43 => 6,  36 => 5,  28 => 3,  22 => 3,  17 => 1,);
    }
}
