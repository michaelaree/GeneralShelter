<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/school_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_0889c5ab05cb6dbfb38e7643c8b50ff2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "
<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">

        ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 66)) {
            // line 67
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 69
        yield "
        ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 70)) {
            // line 71
            yield "          <i class=\"fa fa-envelope\"></i>
          ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 74
        yield "
      </div>
      
      ";
        // line 77
        if (($context["show_social_icon"] ?? null)) {
            // line 78
            yield "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            ";
            // line 80
            if (($context["facebook_url"] ?? null)) {
                // line 81
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 81, $this->source), "html", null, true);
                yield "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 83
            yield "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 84
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 84, $this->source), "html", null, true);
                yield "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 86
            yield "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 87
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 87, $this->source), "html", null, true);
                yield "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 89
            yield "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 90
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 90, $this->source), "html", null, true);
                yield "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 92
            yield "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 93
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 93, $this->source), "html", null, true);
                yield "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 95
            yield "            ";
            if (($context["rss_url"] ?? null)) {
                // line 96
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 96, $this->source), "html", null, true);
                yield "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 98
            yield "          </p>
        </div>
      ";
        }
        // line 101
        yield "     
    </div>
  </div>
</div>

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 116)) {
            // line 117
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 119
        yield "      </div>

      <!-- End: Header -->

      ";
        // line 123
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 123) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 123))) {
            // line 124
            yield "        <div class=\"col-md-9\">

          ";
            // line 126
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 126)) {
                // line 127
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 129
            yield "
          ";
            // line 130
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            yield "
          
        </div>
      ";
        }
        // line 134
        yield "
      </div>

    </div>
  </div>
</div>


";
        // line 142
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 143
            yield "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 147
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 147, $this->source));
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "      </ul>
    </div>
  </div>
";
        }
        // line 153
        yield "

<!-- Start: Top widget -->

";
        // line 157
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 157) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 157)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 157))) {
            // line 158
            yield "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 162)) {
                // line 163
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 164
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 167
            yield "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 171
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 171)) {
                // line 172
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 172, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 173
            yield "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) {
                // line 178
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 178, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 179
            yield "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 183
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 183)) {
                // line 184
                yield "            <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 184, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            // line 185
            yield "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 192
        yield "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 198
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 198)) {
            // line 199
            yield "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 201
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        // line 205
        yield "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 210
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 210) &&  !($context["is_front"] ?? null))) {
            // line 211
            yield "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 214
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
        // line 219
        yield "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 228
        if ( !($context["is_front"] ?? null)) {
            // line 229
            yield "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 230
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            yield "</div>
        </div>
      ";
        }
        // line 233
        yield "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 239
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 239)) {
            // line 240
            yield "          <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 240, $this->source), "html", null, true);
            yield ">
            <div class=\"sidebar\">
              ";
            // line 242
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 246
        yield "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 249
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 249)) {
            // line 250
            yield "          <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 250, $this->source), "html", null, true);
            yield ">
            <div class=\"content_layout\">
              ";
            // line 252
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            yield "
            </div>              
          </div>
        ";
        }
        // line 256
        yield "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 259
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 259)) {
            // line 260
            yield "          <div class=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 260, $this->source), "html", null, true);
            yield ">
            <div class=\"sidebar\">
              ";
            // line 262
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 266
        yield "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 279
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 279) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 279)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 279))) {
            // line 280
            yield "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 284
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 284)) {
                // line 285
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 286
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 289
            yield "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 293
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 293)) {
                // line 294
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 294, $this->source), "html", null, true);
                yield ">
            ";
                // line 295
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 298
            yield "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 301
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 301)) {
                // line 302
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 302, $this->source), "html", null, true);
                yield ">
            ";
                // line 303
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 306
            yield "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 309
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 309)) {
                // line 310
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 310, $this->source), "html", null, true);
                yield ">
            ";
                // line 311
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 314
            yield "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 321
        yield "<!--End: Features -->


<!-- Start: Services -->
";
        // line 325
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 325)) {
            // line 326
            yield "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 329
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
            yield "
    </div>
  </div>

";
        }
        // line 334
        yield "<!--End: Services -->



<!-- Start: Services -->
";
        // line 339
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 339)) {
            // line 340
            yield "
  <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 343
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 343), 343, $this->source), "html", null, true);
            yield "
    </div>
  </div>

";
        }
        // line 348
        yield "<!--End: Services -->


<!-- Start: Price table widgets -->
";
        // line 352
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 352) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 352)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 352))) {
            // line 353
            yield "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">

      ";
            // line 357
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_title", [], "any", false, false, true, 357)) {
                // line 358
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 359
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_title", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 362
            yield "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 366
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 366)) {
                // line 367
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 367, $this->source), "html", null, true);
                yield ">
            ";
                // line 368
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 370
            yield "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 374
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 374)) {
                // line 375
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 375, $this->source), "html", null, true);
                yield ">
            ";
                // line 376
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 378
            yield "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 382
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 382)) {
                // line 383
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 383, $this->source), "html", null, true);
                yield ">
            ";
                // line 384
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 386
            yield "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 390
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 390)) {
                // line 391
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 391, $this->source), "html", null, true);
                yield ">
            ";
                // line 392
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 394
            yield "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 402
        yield "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 406
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 406) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 406)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 406)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 406))) {
            // line 407
            yield "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 411
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 411)) {
                // line 412
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 413
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 416
            yield "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 420
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 420)) {
                // line 421
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 421, $this->source), "html", null, true);
                yield ">
            ";
                // line 422
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 424
            yield "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 428
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 428)) {
                // line 429
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 429, $this->source), "html", null, true);
                yield ">
            ";
                // line 430
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 430), 430, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 432
            yield "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 436
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 436)) {
                // line 437
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 437, $this->source), "html", null, true);
                yield ">
            ";
                // line 438
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 440
            yield "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 444
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 444)) {
                // line 445
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 445, $this->source), "html", null, true);
                yield ">
            ";
                // line 446
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 446), 446, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 449
            yield "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 456
        yield "<!--End: Bottom widgets -->


<!-- Start: Team widgets -->
";
        // line 460
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 460) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 460)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 460)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 460))) {
            // line 461
            yield "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">

      ";
            // line 465
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_title", [], "any", false, false, true, 465)) {
                // line 466
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 467
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_title", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 470
            yield "

      <div class=\"row team-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 475
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 475)) {
                // line 476
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 476, $this->source), "html", null, true);
                yield ">
            ";
                // line 477
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 477), 477, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 479
            yield "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 483
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 483)) {
                // line 484
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 484, $this->source), "html", null, true);
                yield ">
            ";
                // line 485
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 487
            yield "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 491
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 491)) {
                // line 492
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 492, $this->source), "html", null, true);
                yield ">
            ";
                // line 493
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 493), 493, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 495
            yield "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 499
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 499)) {
                // line 500
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 500, $this->source), "html", null, true);
                yield ">
            ";
                // line 501
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 501), 501, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 504
            yield "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 511
        yield "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 515
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 515) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 515)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 515))) {
            // line 516
            yield "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 520
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 520)) {
                // line 521
                yield "        <h2 class=\"custom-block-title\" >
          ";
                // line 522
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 522), 522, $this->source), "html", null, true);
                yield "
        </h2>
      ";
            }
            // line 525
            yield "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 529
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 529)) {
                // line 530
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 530, $this->source), "html", null, true);
                yield ">
            ";
                // line 531
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 531), 531, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 534
            yield "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 537
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 537)) {
                // line 538
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 538, $this->source), "html", null, true);
                yield ">
            ";
                // line 539
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 539), 539, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 542
            yield "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 545
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 545)) {
                // line 546
                yield "          <div class = ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 546, $this->source), "html", null, true);
                yield ">
            ";
                // line 547
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 547), 547, $this->source), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 550
            yield "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 557
        yield "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 564
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". All rights reserved.</span>

      ";
        // line 566
        if (($context["show_credit_link"] ?? null)) {
            // line 567
            yield "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 569
        yield "
  </div>
</div>
<!-- End: Copyright -->





";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "show_social_icon", "facebook_url", "google_plus_url", "twitter_url", "linkedin_url", "pinterest_url", "rss_url", "is_front", "show_slideshow", "slider_content", "topwidget_class", "sidebarfirst", "contentlayout", "sidebarsecond", "features_first_class", "features_class", "pricetable_class", "bottom_class", "team_class", "footer_class", "show_credit_link"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/school_zymphonies_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1021 => 569,  1017 => 567,  1015 => 566,  1010 => 564,  1001 => 557,  992 => 550,  986 => 547,  981 => 546,  979 => 545,  974 => 542,  968 => 539,  963 => 538,  961 => 537,  956 => 534,  950 => 531,  945 => 530,  943 => 529,  937 => 525,  931 => 522,  928 => 521,  926 => 520,  920 => 516,  918 => 515,  912 => 511,  903 => 504,  897 => 501,  892 => 500,  890 => 499,  884 => 495,  878 => 493,  873 => 492,  871 => 491,  865 => 487,  859 => 485,  854 => 484,  852 => 483,  846 => 479,  840 => 477,  835 => 476,  833 => 475,  826 => 470,  820 => 467,  817 => 466,  815 => 465,  809 => 461,  807 => 460,  801 => 456,  792 => 449,  786 => 446,  781 => 445,  779 => 444,  773 => 440,  767 => 438,  762 => 437,  760 => 436,  754 => 432,  748 => 430,  743 => 429,  741 => 428,  735 => 424,  729 => 422,  724 => 421,  722 => 420,  716 => 416,  710 => 413,  707 => 412,  705 => 411,  699 => 407,  697 => 406,  691 => 402,  681 => 394,  675 => 392,  670 => 391,  668 => 390,  662 => 386,  656 => 384,  651 => 383,  649 => 382,  643 => 378,  637 => 376,  632 => 375,  630 => 374,  624 => 370,  618 => 368,  613 => 367,  611 => 366,  605 => 362,  599 => 359,  596 => 358,  594 => 357,  588 => 353,  586 => 352,  580 => 348,  572 => 343,  567 => 340,  565 => 339,  558 => 334,  550 => 329,  545 => 326,  543 => 325,  537 => 321,  528 => 314,  522 => 311,  517 => 310,  515 => 309,  510 => 306,  504 => 303,  499 => 302,  497 => 301,  492 => 298,  486 => 295,  481 => 294,  479 => 293,  473 => 289,  467 => 286,  464 => 285,  462 => 284,  456 => 280,  454 => 279,  439 => 266,  432 => 262,  426 => 260,  424 => 259,  419 => 256,  412 => 252,  406 => 250,  404 => 249,  399 => 246,  392 => 242,  386 => 240,  384 => 239,  376 => 233,  370 => 230,  367 => 229,  365 => 228,  354 => 219,  346 => 214,  341 => 211,  339 => 210,  332 => 205,  325 => 201,  321 => 199,  319 => 198,  311 => 192,  302 => 185,  294 => 184,  292 => 183,  286 => 179,  278 => 178,  276 => 177,  270 => 173,  262 => 172,  260 => 171,  254 => 167,  248 => 164,  245 => 163,  243 => 162,  237 => 158,  235 => 157,  229 => 153,  223 => 149,  214 => 147,  210 => 146,  205 => 143,  203 => 142,  193 => 134,  186 => 130,  183 => 129,  177 => 127,  175 => 126,  171 => 124,  169 => 123,  163 => 119,  157 => 117,  155 => 116,  138 => 101,  133 => 98,  127 => 96,  124 => 95,  118 => 93,  115 => 92,  109 => 90,  106 => 89,  100 => 87,  97 => 86,  91 => 84,  88 => 83,  82 => 81,  80 => 80,  76 => 78,  74 => 77,  69 => 74,  64 => 72,  61 => 71,  59 => 70,  56 => 69,  50 => 67,  48 => 66,  40 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/school_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/school_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 66, "for" => 146);
        static $filters = array("escape" => 67, "raw" => 147, "date" => 564);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
