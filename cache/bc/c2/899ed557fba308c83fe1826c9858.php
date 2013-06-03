<?php

/* modal_gallery.tpl */
class __TwigTemplate_bcc2899ed557fba308c83fe1826c9858 extends Twig_Template
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
        return array (  85 => 46,  21 => 3,  220 => 66,  213 => 64,  210 => 63,  205 => 62,  199 => 61,  197 => 60,  186 => 53,  174 => 50,  164 => 49,  142 => 36,  135 => 34,  129 => 33,  122 => 32,  99 => 27,  34 => 11,  31 => 10,  42 => 12,  155 => 32,  152 => 31,  144 => 29,  119 => 24,  113 => 22,  66 => 12,  196 => 66,  187 => 59,  184 => 58,  175 => 55,  168 => 53,  159 => 48,  141 => 38,  136 => 37,  131 => 36,  126 => 25,  107 => 20,  104 => 19,  98 => 17,  93 => 16,  88 => 23,  23 => 5,  337 => 104,  334 => 103,  332 => 102,  320 => 94,  316 => 92,  312 => 90,  304 => 89,  299 => 88,  287 => 86,  284 => 85,  278 => 81,  273 => 79,  269 => 77,  267 => 76,  261 => 73,  258 => 72,  249 => 70,  229 => 69,  226 => 68,  222 => 66,  217 => 63,  190 => 61,  181 => 59,  177 => 57,  166 => 52,  148 => 49,  138 => 46,  133 => 43,  130 => 42,  117 => 38,  106 => 33,  96 => 27,  89 => 18,  73 => 12,  49 => 6,  19 => 2,  71 => 15,  61 => 13,  58 => 9,  39 => 6,  173 => 56,  163 => 34,  156 => 32,  146 => 39,  143 => 48,  140 => 27,  127 => 26,  105 => 21,  102 => 28,  91 => 24,  76 => 19,  51 => 15,  47 => 8,  25 => 3,  24 => 6,  75 => 42,  65 => 14,  62 => 17,  59 => 12,  55 => 11,  48 => 9,  40 => 22,  37 => 6,  68 => 44,  45 => 13,  35 => 7,  139 => 20,  116 => 23,  81 => 12,  78 => 48,  72 => 9,  64 => 14,  54 => 16,  46 => 4,  20 => 2,  33 => 4,  27 => 9,  18 => 1,  112 => 35,  109 => 29,  103 => 32,  90 => 16,  80 => 18,  77 => 14,  57 => 12,  53 => 10,  44 => 23,  41 => 6,  38 => 12,  32 => 4,  29 => 3,  26 => 7,  195 => 44,  189 => 43,  185 => 60,  179 => 57,  176 => 39,  160 => 48,  153 => 45,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 30,  111 => 22,  101 => 19,  94 => 25,  86 => 15,  83 => 17,  79 => 43,  74 => 17,  70 => 12,  67 => 15,  63 => 10,  56 => 12,  52 => 10,  50 => 13,  43 => 6,  36 => 5,  28 => 7,  22 => 3,  17 => 1,);
    }
}
