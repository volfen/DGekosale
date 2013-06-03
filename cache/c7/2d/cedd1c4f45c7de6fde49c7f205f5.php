<?php

/* quicklogin.tpl */
class __TwigTemplate_c72dcedd1c4f45c7de6fde49c7f205f5 extends Twig_Template
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
        return array (  150 => 40,  141 => 37,  134 => 33,  121 => 24,  116 => 23,  98 => 17,  88 => 15,  77 => 14,  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 58,  174 => 57,  170 => 56,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  119 => 39,  94 => 26,  83 => 14,  73 => 12,  156 => 32,  146 => 30,  143 => 38,  105 => 24,  91 => 22,  80 => 18,  38 => 5,  24 => 4,  59 => 12,  55 => 11,  48 => 7,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 22,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 54,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 28,  127 => 43,  122 => 40,  114 => 25,  109 => 24,  106 => 21,  96 => 27,  84 => 17,  58 => 9,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 11,  51 => 11,  49 => 9,  45 => 8,  31 => 6,  23 => 2,  90 => 17,  81 => 31,  68 => 44,  63 => 10,  41 => 6,  35 => 6,  19 => 2,  33 => 4,  27 => 6,  18 => 1,  85 => 26,  78 => 48,  76 => 16,  69 => 15,  67 => 17,  53 => 8,  47 => 8,  44 => 23,  40 => 22,  37 => 6,  32 => 4,  29 => 3,  26 => 4,  173 => 39,  167 => 36,  163 => 34,  157 => 33,  154 => 42,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 16,  89 => 18,  79 => 17,  72 => 45,  64 => 15,  61 => 15,  57 => 12,  52 => 10,  43 => 6,  36 => 5,  28 => 3,  22 => 3,  17 => 1,);
    }
}
