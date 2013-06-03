<?php

/* modal_gallery.tpl */
class __TwigTemplate_9f3ecf792fe61eb09b0a15f1061c736e extends Twig_Template
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
        echo "<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id=\"modal-gallery\" class=\"modal modal-gallery hide fade\">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>
        <h3 class=\"modal-title\"></h3>
    </div>
    <div class=\"modal-body\"><div class=\"modal-image\"></div></div>
    <div class=\"modal-footer\">
        <a class=\"btn btn-info modal-prev\"><i class=\"icon-arrow-left icon-white\"></i> ";
        // line 9
        echo Gekosale\Translation::get("TXT_PREVIOUS_PHOTO");
        echo "</a>
        <a class=\"btn btn-primary modal-next\">";
        // line 10
        echo Gekosale\Translation::get("TXT_NEXT_PHOTO");
        echo " <i class=\"icon-arrow-right icon-white\"></i></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modal_gallery.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  187 => 59,  184 => 58,  171 => 55,  160 => 48,  142 => 36,  135 => 34,  133 => 28,  129 => 33,  108 => 23,  60 => 14,  150 => 40,  141 => 30,  134 => 33,  121 => 24,  116 => 23,  98 => 17,  88 => 23,  77 => 14,  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 57,  174 => 57,  170 => 56,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  119 => 39,  94 => 25,  83 => 17,  73 => 12,  156 => 32,  146 => 30,  143 => 38,  105 => 22,  91 => 24,  80 => 18,  38 => 12,  24 => 6,  59 => 12,  55 => 11,  48 => 7,  42 => 12,  20 => 2,  30 => 4,  25 => 3,  111 => 22,  107 => 18,  103 => 16,  75 => 42,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 54,  159 => 35,  153 => 45,  147 => 32,  144 => 31,  140 => 28,  127 => 43,  122 => 32,  114 => 25,  109 => 29,  106 => 21,  96 => 27,  84 => 17,  58 => 9,  46 => 8,  34 => 11,  87 => 32,  70 => 13,  65 => 14,  62 => 17,  54 => 16,  51 => 15,  49 => 6,  45 => 13,  31 => 10,  23 => 2,  90 => 18,  81 => 31,  68 => 44,  63 => 10,  41 => 6,  35 => 6,  19 => 2,  33 => 4,  27 => 9,  18 => 1,  85 => 46,  78 => 48,  76 => 19,  69 => 15,  67 => 17,  53 => 8,  47 => 8,  44 => 23,  40 => 22,  37 => 8,  32 => 4,  29 => 3,  26 => 7,  173 => 56,  167 => 36,  163 => 34,  157 => 33,  154 => 42,  138 => 29,  131 => 28,  128 => 27,  115 => 30,  110 => 24,  102 => 28,  99 => 27,  93 => 16,  89 => 18,  79 => 43,  72 => 9,  64 => 15,  61 => 15,  57 => 12,  52 => 10,  43 => 6,  36 => 5,  28 => 7,  22 => 3,  17 => 1,);
    }
}
