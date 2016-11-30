/* Woocommerce Variations form */
(function(b,m,q,n){b.fn.wc_variation_form=function(){b.fn.wc_variation_form.find_matching_variations=function(c,a){for(var h=[],e=0;e<c.length;e++){var d=c[e];b.fn.wc_variation_form.variations_match(d.attributes,a)&&h.push(d)}return h};b.fn.wc_variation_form.variations_match=function(c,a){var b=!0;for(attr_name in c){var e=c[attr_name],d=a[attr_name];e!==n&&d!==n&&0!=e.length&&0!=d.length&&e!=d&&(b=!1)}return b};this.unbind("check_variations update_variation_values found_variation");this.find(".reset_variations").unbind("click");this.find(".variations select").unbind("change focusin");return this.on("click",".reset_variations",function(c){b(this).closest("form.variations_form").find(".variations select").val("").change();c=b(this).closest(".product").find(".sku");var a=b(this).closest(".product").find(".product_weight"),h=b(this).closest(".product").find(".product_dimensions");c.attr("data-o_sku")&&c.text(c.attr("data-o_sku"));a.attr("data-o_weight")&&a.text(a.attr("data-o_weight"));h.attr("data-o_dimensions")&&h.text(h.attr("data-o_dimensions"));return!1}).on("change",".variations select",function(c){$variation_form=b(this).closest("form.variations_form");$variation_form.find("input[name=variation_id]").val("").change();$variation_form.trigger("woocommerce_variation_select_change").trigger("check_variations",["",!1]);b(this).blur();b().uniform&&b.isFunction(b.uniform.update)&&b.uniform.update()}).on("focusin",".variations select",function(c){$variation_form=b(this).closest("form.variations_form");$variation_form.trigger("woocommerce_variation_select_focusin").trigger("check_variations",[b(this).attr("name"),!0])}).on("check_variations",function(c,a,h){var e=!0,d=!1,g={};c=b(this);var f=c.find(".reset_variations");c.find(".variations select").each(function(){0==b(this).val().length?e=!1:d=!0;a&&b(this).attr("name")==a?(e=!1,g[b(this).attr("name")]=""):(value=b(this).val(),g[b(this).attr("name")]=value)});var k=parseInt(c.data("product_id")),l=c.data("product_variations");l||(l=m.product_variations[k]);l||(l=m.product_variations);l||(l=m["product_variations_"+k]);k=b.fn.wc_variation_form.find_matching_variations(l,g);e?(k=k.pop())?(c.find("input[name=variation_id]").val(k.variation_id).change(),c.trigger("found_variation",[k])):(c.find(".variations select").val(""),h||c.trigger("reset_image"),alert(woocommerce_params.i18n_no_matching_variations_text)):(c.trigger("update_variation_values",[k]),h||c.trigger("reset_image"),a||c.find(".single_variation_wrap").slideUp("200"));d?"hidden"==f.css("visibility")&&f.css("visibility","visible").hide().fadeIn():f.css("visibility","hidden")}).on("reset_image",function(c){var a=b(this).closest(".product");c=a.find("div.images img:eq(0)");var a=a.find("div.images a.zoom:eq(0)"),h=c.attr("data-o_src"),e=c.attr("data-o_title"),d=a.attr("data-o_href");h&&c.attr("src",h);d&&a.attr("href",d);e&&(c.attr("alt",e).attr("title",e),a.attr("title",e))}).on("update_variation_values",function(c,a){$variation_form=b(this).closest("form.variations_form");$variation_form.find(".variations select").each(function(c,e){current_attr_select=b(e);current_attr_select.data("attribute_options")||current_attr_select.data("attribute_options",current_attr_select.find("option:gt(0)").get());current_attr_select.find("option:gt(0)").remove();current_attr_select.append(current_attr_select.data("attribute_options"));current_attr_select.find("option:gt(0)").removeClass("active");var d=current_attr_select.attr("name");for(num in a)if("undefined"!=typeof a[num]){var g=a[num].attributes;for(attr_name in g){var f=g[attr_name];attr_name==d&&(f?(f=b("<div/>").html(f).text(),f=f.replace(/'/g,"\\'"),f=f.replace(/"/g,'\\"'),current_attr_select.find('option[value="'+f+'"]').addClass("active")):current_attr_select.find("option:gt(0)").addClass("active"))}}current_attr_select.find("option:gt(0):not(.active)").remove()});$variation_form.trigger("woocommerce_update_variation_values")}).on("found_variation",function(c,a){var h=b(this),e=b(this).closest(".product"),d=e.find("div.images img:eq(0)"),g=e.find("div.images a.zoom:eq(0)"),f=d.attr("data-o_src"),k=d.attr("data-o_title"),l=g.attr("data-o_href"),m=a.image_src,n=a.image_link,p=a.image_title;h.find(".variations_button").show();h.find(".single_variation").html(a.price_html+a.availability_html);f||(f=d.attr("src")?d.attr("src"):"",d.attr("data-o_src",f));l||(l=g.attr("href")?g.attr("href"):"",g.attr("data-o_href",l));k||(k=d.attr("title")?d.attr("title"):"",d.attr("data-o_title",k));m&&1<m.length?(d.attr("src",m).attr("alt",p).attr("title",p),g.attr("href",n).attr("title",p)):(d.attr("src",f).attr("alt",k).attr("title",k),g.attr("href",l).attr("title",k));d=h.find(".single_variation_wrap");g=e.find(".product_meta").find(".sku");f=e.find(".product_weight");e=e.find(".product_dimensions");g.attr("data-o_sku")||g.attr("data-o_sku",g.text());f.attr("data-o_weight")||f.attr("data-o_weight",f.text());e.attr("data-o_dimensions")||e.attr("data-o_dimensions",e.text());a.sku?g.text(a.sku):g.text(g.attr("data-o_sku"));a.weight?f.text(a.weight):f.text(f.attr("data-o_weight"));a.dimensions?e.text(a.dimensions):e.text(e.attr("data-o_dimensions"));d.find(".quantity").show();a.is_in_stock||a.backorders_allowed||h.find(".variations_button").hide();a.min_qty?d.find("input[name=quantity]").attr("min",a.min_qty).val(a.min_qty):d.find("input[name=quantity]").removeAttr("min");a.max_qty?d.find("input[name=quantity]").attr("max",a.max_qty):d.find("input[name=quantity]").removeAttr("max");"yes"==a.is_sold_individually&&(d.find("input[name=quantity]").val("1"),d.find(".quantity").hide());d.slideDown("200").trigger("show_variation",[a])})};b("form.variations_form").wc_variation_form();b("form.variations_form .variations select").change()})(jQuery,window,document);