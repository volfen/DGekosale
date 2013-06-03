<?php

/* textbox\index\index.tpl */
class __TwigTemplate_a554c28f19da69bbd33cb04527accef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "textbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 108,  216 => 96,  184 => 66,  181 => 65,  179 => 64,  167 => 59,  160 => 56,  155 => 55,  128 => 49,  122 => 48,  117 => 46,  102 => 37,  95 => 35,  90 => 34,  85 => 33,  55 => 19,  47 => 17,  42 => 16,  22 => 3,  19 => 2,  120 => 39,  118 => 38,  115 => 37,  111 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  96 => 29,  88 => 26,  83 => 23,  73 => 23,  68 => 19,  54 => 14,  51 => 13,  40 => 9,  27 => 4,  23 => 3,  17 => 1,  92 => 35,  84 => 29,  74 => 21,  65 => 18,  61 => 15,  59 => 14,  46 => 9,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  535 => 162,  525 => 154,  517 => 150,  514 => 149,  511 => 148,  503 => 144,  496 => 140,  490 => 138,  481 => 133,  466 => 124,  462 => 123,  455 => 120,  447 => 119,  443 => 118,  439 => 116,  435 => 115,  428 => 113,  415 => 111,  410 => 110,  402 => 109,  396 => 108,  390 => 107,  387 => 106,  382 => 105,  377 => 104,  371 => 100,  364 => 98,  361 => 97,  351 => 96,  345 => 94,  335 => 92,  332 => 91,  328 => 89,  315 => 87,  303 => 85,  291 => 84,  288 => 83,  274 => 76,  269 => 73,  265 => 71,  262 => 70,  258 => 68,  255 => 67,  240 => 65,  237 => 64,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 54,  146 => 45,  143 => 53,  137 => 52,  132 => 51,  126 => 35,  112 => 45,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 20,  53 => 12,  50 => 18,  41 => 7,  34 => 7,  31 => 4,  29 => 3,  26 => 2,);
    }
}
