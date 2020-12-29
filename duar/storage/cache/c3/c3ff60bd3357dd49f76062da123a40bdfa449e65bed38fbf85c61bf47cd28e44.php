<?php

/* default/template/account/address_list.twig */
class __TwigTemplate_266a43c0b13c69dc45a5fb6238f7d9609749348ca3f9d9942a7f49479801f11a extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-address\" class=\"container\">
  <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>";
        }
        // line 11
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            $context["class"] = "col-sm-6";
        } elseif ((        // line 17
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            $context["class"] = "col-sm-9";
        } else {
            // line 20
            $context["class"] = "col-sm-12";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 23
        echo (isset($context["text_address_book"]) ? $context["text_address_book"] : null);
        echo "</h2>";
        // line 24
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 25
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "          <tr>
            <td class=\"text-left\">";
                // line 29
                echo $this->getAttribute($context["result"], "address", array());
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 30
                echo $this->getAttribute($context["result"], "update", array());
                echo "\" class=\"btn btn-info\">";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "</a> &nbsp; <a href=\"";
                echo $this->getAttribute($context["result"], "delete", array());
                echo "\" class=\"btn btn-danger\">";
                echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                echo "</a></td>
          </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </table>
      </div>";
        } else {
            // line 36
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>";
        }
        // line 38
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 39
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 40
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_new_address"]) ? $context["button_new_address"] : null);
        echo "</a></div>
      </div>";
        // line 42
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>";
        // line 43
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>";
        // line 45
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  136 => 43,  133 => 42,  127 => 40,  121 => 39,  118 => 38,  113 => 36,  109 => 33,  95 => 30,  91 => 29,  88 => 28,  84 => 27,  81 => 25,  79 => 24,  76 => 23,  69 => 22,  66 => 20,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  54 => 14,  49 => 12,  47 => 11,  42 => 9,  40 => 8,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-address" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ text_address_book }}</h2>*/
/*       {% if addresses %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           {% for result in addresses %}*/
/*           <tr>*/
/*             <td class="text-left">{{ result.address }}</td>*/
/*             <td class="text-right"><a href="{{ result.update }}" class="btn btn-info">{{ button_edit }}</a> &nbsp; <a href="{{ result.delete }}" class="btn btn-danger">{{ button_delete }}</a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*         <div class="pull-right"><a href="{{ add }}" class="btn btn-primary">{{ button_new_address }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
