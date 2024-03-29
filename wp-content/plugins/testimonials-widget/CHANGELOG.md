# CHANGELOG Testimonials Widget

## master

## 2.13.6
* Add IDs column to edit testimonials listing page
* Add filter `testimonials_widget_settings_add_help_tabs`
* Add option Fade In Speed
* Add option Fade Out Speed
* Add settings page help tab
* BUGFIX index has_archive and rewrite_slug not set
* BUGFIX plugin_row_meta not returning default state
* IE7 CSS moved to separate file. Include via Testimonials > Settings if needed
* Localize text
* Pass YSlow and Google PageSpeed testing
* Performance optimizations
* Prevent Testimonials Widget custom post type URL slug naming conflicts
* Update premium shortcodes
* Validate URL submissions
* [Begin CSS testing](http://www.netmagazine.com/tutorials/4-tools-automatic-css-testing)

## 2.13.5
* BUGFIX Caching defaults not correct

## 2.13.4
* Add $atts parameter to filter `testimonials_widget_data`
* Add action `testimonials_widget_scripts`
* Add filter `testimonials_widget_get_testimonial_html_class`
* Add filter `testimonials_widget_testimonials_js_internal`
* BUGFIX instance numbers breaking caching
* BUGFIX settings page missing page title
* Change &$this variable calls to $this
* Enabling sorting of scripts for precedence
* Remove unused first parameter from `testimonials_widget_cache_get` filter call
* Tie-in premium disable_donate option

## 2.13.3
* [Add shortcode category example](http://wordpress.org/support/topic/category-shortcode-1?replies=2#post-4550244) - Thank you ashleynlinares
* Add do shortcodes option inside of testimonials content
* BUGFIX keep shortcodes inside of widgets, let theme function handle to do them or not
* Expand FAQ section
* Rename Title to Job Title as appropriate
* Update POT
* Update TODO

## 2.13.2
* Add StillMaintained.com notice
* BUGFIX Extra meta box fields are no show
* Disengaged from hard coded wp-content path
* Escape translations

## 2.13.1
* Add demo link
* Add shortcode example explanations
* Add video introduction
* Disable animation by default
* Move localization load to init()
* Update donation request text
* Update premium features

## 2.13.0
* Add PHP Copy and Paste Detector
* Add PHP run-time checks
* Add Travis CI with PHP Code Sniffer
* Add developer README and CONTRIBUTING docs
* BUGFIX DOM Element error on last testimonial rotation
* BUGFIX Data delete on uninstall not firing
* BUGFIX Testimonials Widget edit page doesn't display custom taxonomies
* Beta test update text
* Coding standards updates
* Create TODO doc
* Disabled PHP Mess Detector
* Don't escape already escaped text
* Don't load plugin till all are loaded
* FEATURE [Animated widget rotation](http://wordpress.org/support/topic/animate-jumpy-widget)
* OPTION Add Disable animation?
* Relocate activation, deactivation, and uninstall hooks
* Remove WP_UNINSTALL_PLUGIN reference
* Remove class from settings page link
* Rename class-settings-testimonials-widget.php to class-testimonials-widget-settings.php
* Revise API doc headings
* Revise instance creators to only fire when ready
* Update Filters listing to API document
* Update POT

## 2.12.8
* Add filter `testimonials_widget_cite_html` to adjust cite contents - Thank you [Dimitrios](http://visualweb.gr/) for the suggestion
* BUGFIX Warning: Illegal string offset 'exclude'
* Replace __ with esc_html__
* Update Premium features

## 2.12.7
* BUGFIX Link targets affected page navigation
* Removed donate monthly show code

## 2.12.6
* BUGFIX If no refresh_interval, then LIMIT 1
* Change donate from $1 to $2 due to fees
* Dashboard testimonials count statistics
* Display donate on major/minor version release or if it's been a month
* Remove braces from simple if/else structures
* Settings page inheritance note
* Update premium features listing
* Use donate button than text

## 2.12.5
* BUGFIX Correct loose vs strict comparison for intval and absint
* If no refresh_interval, then LIMIT 1

## 2.12.4
* BUGFIX Settings jQuery UI Tabs conflict
* NOT BUG [WPML bug](http://wordpress.org/support/topic/wpml-bug?replies=1)
* Remove settings.css
* Settings about section height fix
* TODOs update
* Update Premium product page URL
* Update WPML configuration
* Use PayPal donate image in settings

## 2.12.3
* BUGFIX Import option constantly overrides settings 
* BUGFIX [Error When Database Does Not Exist Yet](http://wordpress.org/support/topic/error-when-database-does-not-exist-yet)

## 2.12.2
* $1 donation link admin_notice on installation or major/minor update
* Add forum responses cheat sheet
* Auto flush URLs if archive or testimonial slugs change
* BUGFIX Respect attribute settings by preventing reset_defaults and importexport activating on front-end
* Convert slug, slugs, and term setting items to lowercase on save
* Correctly delete all testimonials options on delete
* Don't create class instance unless plugin is activated
* FEATURE Allow for custom post type categories and tags [Idea via crdunst](http://wordpress.org/support/topic/feedback-tagscategories?replies=3#post-4160839)
* Prevent same has_archive and rewrite_slug which causes URL problems
* Remove excess FAQ text
* Remove unused settings and methods
* Remove unused testing settings
* Set version for which admin notice to display

## 2.12.1
* BUGFIX Settings memory leak [Sites hosed after update 2.12.0](http://wordpress.org/support/topic/premium-sites-hosed-after-update-2120)
* BUGFIX [importexport settings failure](http://wordpress.org/support/topic/errors-after-updating)
* Change update warning verbiage
* Update FAQ & support links to knowledge base

## 2.12.0
* Add file headers to lib/class*
* Add filter testimonials_widget_widget_options to alter displayed widget options
* BUGFIX Correct settings required validation `break 2`
* BUGFIX Non-static method Testimonials_Widget::get_testimonials_html() should not be called statically
* CSS rename testimonialswidget_testimonial(s) to testimonials-widget-testimonial(s)
* Correct static get_testimonials_html, get_testimonials_htmls, widget_options function declaration
* Correct static validators call
* Explain options inheritance
* FEATURE Remove Plugin Data on Deletion? - Delete all Testimonials Widget data and options from database on plugin deletion
* FEATURE Settings export/import
* Refactor out get_quote and get_cite from get_testimonial_html
* Refactor excess settings grab in widget_options
* Remove $blank from testimonials_truncate()
* Remove unused code
* Rename metabox.class.php class-redrokk-metabox-class.php
* Rename settings.testimonials-widget.php class-settings-testimonials-widget.php
* Rename testimonials-widget-widget.php class-testimonials-widget-widget.php
* Revise FAQ
* SCREENSHOT 17. Testimonials Widget Settings > Compatibility & Reset tab
* Show latest updates notice on activation
* Spellcheck readme.txt
* Update CSS for WordPress Coding standards
* Update FAQ
* Update JavaScript for WordPress Coding standards
* Update PHP for WordPress Coding Standards
* Update POT
* Update TODOs
* Update premium features
* Update rulesets
* Use ID for widget

## 2.11.3
* BUGFIX [Can't set featured image](http://wordpress.org/support/topic/cant-set-featured-image-3)
* Begin WordPress coding standard cleanup
* Bold option headers
* Change `has_archive` default from `testimonials` to `testimonials-archive`
* Clean up static method calls to prevent PHP Strict notices
* Correct filter name `testimonials_widget_next_posts_link` to `testimonials_widget_next_posts_link_text`
* Correct static methods calling
* Secure activation, deactivation, uninstall operations
* Update POT
* Update profile

## 2.11.2
* Add `min1` and `nozero` validation
* Always include settings class
* BUGFIX Don't prepend http to email addresses
* Move lesser used widget options to expandable Additional Widget Options section
* Move settings setup to `init`
* Revise `absint` and `intval` validation to default on blank entry
* Update POT
* Update TODO
* Update text domain for localization and POT
* Use `links_add_target` for widget title link

## 2.11.1
* BUGFIX [Fatal error: Testimonials_Widget_Settings](http://wordpress.org/support/topic/fatal-error-testimonials_widget_settings)

## 2.11.0
* Add Option "Hide Image in Single View?" `hide_image_single`
* Add `.author` and `.email` to CSS
* Add `.single` to single view testimonials
* Add location to meta_key ordering options
* BUGFIX [Convert q tags to blockquote](http://wordpress.org/support/topic/open-link-in-new-tab-html-validation) [Why?](http://www.w3schools.com/tags/tag_blockquote.asp)
* BUGFIX [Fix cite tag usage - it's title, not source](http://www.w3.org/html/wg/drafts/html/master/text-level-semantics.html#the-cite-element) using [T](http://html5doctor.com/blockquote-q-cite/) [BD](http://oli.jp/2011/blockquote/)
* Beta testers needed section added
* Disable self-generated quotation marks
* Enable backwards compatibility for default options
* Ignore init() during AJAX and autosave operations
* Optimize DB after uninstall
* Rename CSS attributes to credit
* Revise README verbiage in general
* Simplify CSS naming
* Update Allow Comments verbiage
* Update TODOs
* Update features listing
* Update options listing
* Update premium features
* Update readme formatting

## 2.10.3
* Add "Menu Order" to Order By options
* Add Height option to automatically set min and max height
* BUGFIX [Only one testimonial displaying](http://wordpress.org/support/topic/only-one-testimonial-displaying)
* BUGFIX [Post Types Order](http://wordpress.org/support/topic/random-order-doesnt-work) - sorting conflict
* Delete data on uninstall 
* Enable quotes and join for IE7 - Thank you [SFMichael](http://wordpress.org/support/topic/ie-7-quotes-fix)
* Flush URLs on deactivation 
* Revise self::$base usage
* Revise settings_link handling
* Screenshot 16 Testimonials Widget Settings > Widget tab
* Update Premium link
* Update TODOs

## 2.10.2
* BUGFIX Settings initialization overwrote previous settings

## 2.10.1
* Moved [FAQ](http://aihr.us/testimonials-widget/faq/)
* Removed premium screenshots
* Rename screenshot-3.png screenshot-2.png
* Rename screenshot-4.png screenshot-3.png
* Rename screenshot-5.png screenshot-4.png
* Rename screenshot-6.png screenshot-5.png
* Rename screenshot-7.png screenshot-6.png
* Rename screenshot-8.png screenshot-7.png
* Rename screenshot-13.png screenshot-8.png
* Rename screenshot-14.png screenshot-9.png
* Rename screenshot-21.png screenshot-10.png
* Rename screenshot-22.png screenshot-11.png
* Rename screenshot-23.png screenshot-12.png
* Rename screenshot-24.png screenshot-13.png
* Rename screenshot-25.png screenshot-14.png
* Rename screenshot-26.png screenshot-15.png
* Screenshot 2 removed
* Screenshot 9 removed
* Screenshot 10 removed
* Screenshot 11 removed
* Screenshot 12 removed
* Screenshot 15 removed
* Screenshot 16 removed
* Screenshot 17 removed
* Screenshot 18 removed
* Screenshot 19 removed
* Screenshot 20 removed
* Screenshot 27 removed
* Screenshot 28 removed

## 2.10.0
* Add `hide_content` option verbiage
* Add screenshot 27 `[[testimonialswidgetpremium_form]]` – Add a Testimonial
* Add screenshot 28 Testimonials Widget Settings > Entry Form tab
* Added rel="nofollow" to URL - Thank you Nicholas Corrieri for the suggestion
* Convert validation to configuration
* Correct breakline on radio settings display
* Correct checkbox checking
* Correct paging handling
* Correct post_status selection for single view
* Describe settings defaults
* Dutch translation by Bjorn Robijns
* Enable echo/return for display_setting
* Enable file input for settings
* Enable widget options no-show
* Finish validation configuration move
* Form demo link
* Move Changelog to changelog.txt
* Rename load_sections > _sections
* Rename load_settings > settings
* Save option defaults
* Set missing checkbox values to 0 on validate
* TODO Delete data option on deactivation
* Update Premium description
* Update WPML configuration

## 2.9.1
* BUGFIX Assigning the return value of new by reference is deprecated in metabox.class.php

## 2.9.0
* Add location meta field after title
* Add location related options
* FAQ 18, 34, 35 update
* Screenshot 2, 4, 5 updated
* Update POT

## 2.8.4
* BUGFIX [Title link does not allow a relative link](http://wordpress.org/support/topic/title-link-does-not-allow-a-relative-link)

## 2.8.3
* BUGFIX [Selection > Category Filter doesn't remember >1 category](http://wordpress.org/support/topic/selection-category-filter-doesnt-remember-1-category)
* FAQ 67 testimonials paging doesn't work
* FAQ 68 feature XYZ

## 2.8.2
* Add filter `testimonials_widget_version`
* Screenshot 11/16 updated
* Update POT
* Update Premium features
* Version tracking for default settings 

## 2.8.1
* Customizable archive and testimonial URLs
* FAQ 66 Change the testimonials archive or single view URL
* Optional commenting on testimonial single-view pages
* Screenshot 26 Testimonials Widget Settings > Post Type tab
* Update POT

## 2.8.0
* Merge in settings branch
* Add `tw_get_options`
* Add filter `testimonials_widget_sections` – Alter section options
* Add filter `testimonials_widget_settings` – Alter setting options
* Add settings page 'Selection', 'Ordering', and 'Widget' tabs
* BUG with "Post Types Order"
* BUGFIX paging when not in singular view
* Configure settings within Testimonials_Widget_Settings class
* Enable 'Expand/Collapse' view in Widget options
* FAQ 65 Disable the stylesheet
* FEATURE Remove `.hentry` CSS?
* FEATURE Testimonials Widget Settings screen
* Removed filters `testimonials_widget_options_update`, `testimonials_widget_options_form`
* Rename `widget_text` to `bottom_text`
* Revise About page content
* Revise Settings page footer
* Revise widget options update and validation
* Screenshot 11 updated
* Screenshot 16 updated
* Screenshot 2 updated
* Screenshot 22 Testimonials Widget Settings > General tab
* Screenshot 23 Expanded 'Selection Options' Testimonials Widget 
* Screenshot 24 Expanded 'Ordering Options' Testimonials Widget 
* Screenshot 25 Testimonials Widget Settings > Selection tab
* Screenshot 3 updated
* Screenshot 4 updated, Expanded 'General Options' Testimonials Widget 
* Update "Shortcode and Widget Options" verbiage
* Update POT file
* Use defaults via Testimonials_Widget_Settings class
* Validate shortcode and widget options via Testimonials_Widget_Settings::validate_settings
* Verbiage updates

## 2.7.17
* Add purchase Testimonials Widget Premium plugin meta link
* Begin settings screen work
* FAQ 20 Update
* FAQ 31 Update
* FAQ 63 Remove the cite –
* FAQ 64 Plugin conflict
* Screenshot 21 Poedit Catalog properties
* TODO class removal
* Update localization verbiage

## 2.7.16
* Add comments panel to edit screen - [Thank you BarrieSpence](http://wordpress.org/support/topic/disable-comments-10?replies=1)
* TODO Admin panel

## 2.7.15
* Add "CSS class" to widget options window
* FAQ 31/34/35/50/53/55 updates
* FAQ 61 Determine .testimonialswidget_testimonialsNNN
* FAQ 62 Category and tag selection
* Feature updates
* Localization, Hebrew
* Screenshot 3 updated

## 2.7.14
* BUGFIX [Testimonials archive view URL conflicts with Page slug](http://wordpress.org/support/topic/testimonials-archive-view-url-conflicts-with-page-slug)
* FAQ 1 Update - Thank you [aaaronscat](http://wordpress.org/support/topic/writing-php-to-display-rotating-widget-in-a-template) for the inspiration
* FAQ 60 Download older versions of Testimonials Widget
* Premium feature update
* Screenshot 20 added

## 2.7.13
* Adapt for `mb_strcut` and `mb_strlen` alternatives
* BUGFIX [Widget doesn't appear](http://wordpress.org/support/topic/widget-doesnt-appear-1)
* Update POT

## 2.7.12
* Change Aihrus support email to contact form
* FAQ 1 Update - Thank you [aaaronscat](http://wordpress.org/support/topic/writing-php-to-display-rotating-widget-in-a-template) for the inspiration
* Update Testimonials Widget Premium URL

## 2.7.11
* Citation styling note
* Removed sub-category shortcode example
* Thanks to Joe Weber for asset header
* Update premium URL
* Update premium features
* Update premium purchase URL

## 2.7.10
* BUGFIX extra excerpt in single view
* Screenshot 11 updated
* Update premium features

## 2.7.9
* Revise content truncation to respect HTML tags
* Update premium description
* Update premium features

## 2.7.8
* Add `before` and `after` options to `paging`
* FAQ 58 Specify testimonials per page or section
* FAQ 59 Rotating widget show all testimonials than only one at a time
* Revert on-demand CSS to always included
* Support process and donation update
* Thank you to [mkearns](http://wordpress.org/support/topic/just-excellent-3) for specifying a sub-category shortcode example
* Update premium URL
* Update premium features

## 2.7.7
* FAQ 13 Update
* FAQ 31 Update
* Shortcode examples "[[" to "["

## 2.7.6
* Add `[[testimonialswidget_widget]]` to Shortcodes column
* CSS cite `margin-top` adjustment
* Enable testimonials archive view
* FAQ 1 Update
* FAQ 52 Update
* FAQ 53 Update
* FAQ 55 Style page and instance testimonials 
* FAQ 56 Testimonials archive view URL
* FAQ 57 Testimonial single view URL
* Only include CSS if testimonials instance called
* Screenshot 19 `[[testimonialswidget_widget unique=true]]` Show multiple testimonials in rotation
* Set arg defaults via `defaults`

## 2.7.5
* BUGFIX PHP Warning for new fields in widget when widget already exists
* Exclude IDs option
* Implement instance tracking
* Protect shortcode examples
* Update asset header size
* Update premium features

## 2.7.4
* Asset header help request
* Premium feature updates
* Screenshot 9 updated
* Screenshot 10 replaced
* Screenshot 11 updated
* Screenshot 15 updated
* Screenshot 17 Single `[[testimonialswidget_list]]` entry with and without 'Read more' link
* Screenshot 18 `[[testimonialswidgetpremium_count]]` Examples

## 2.7.3
* Apply quotes only around testimonial content
* FAQ 13 update
* FAQ 34 update
* FAQ 35 update
* Screenshot 8 replaced
* Simplified quotes handling
* Upgrade notification

## 2.7.2
* FAQ 54 update
* Screenshot 12 update
* Screenshot 16 Edit testimonial with "Excerpt" and "Read More Link" fields - Testimonials Widget Premium plugin

## 2.7.1
* Description update
* FAQ 1 update
* FAQ 2 update
* FAQ 4 update
* FAQ 5 update
* FAQ 6 update
* FAQ 7 update
* FAQ 8 update
* FAQ 9 update
* FAQ 12 update
* FAQ 14 update
* FAQ 15 update
* FAQ 17 update
* FAQ 22 update
* FAQ 25 update
* FAQ 26 update
* FAQ 30 update
* FAQ 32 update
* FAQ 34 update
* FAQ 35 update
* FAQ 37 update
* FAQ 53 update
* Feature update
* Installation update
* Screenshot 1 update
* Screenshot 2 update
* Screenshot 3 update
* Screenshot 4 update
* Screenshot 5 update
* Screenshot 6 update
* Screenshot 7 update
* Screenshot 8 replaced
* Screenshot 9 replaced
* Screenshot 12 update
* Screenshot 15 update
* Screenshot 16 removed
* Screenshot 17 removed
* Screenshot 18 removed

## 2.7.0
* FAQ 13 Update
* FAQ 54 Release early. Release often.
* Redo content opening and closing quotes display
* Upgrade notification for 2.7.0

## 2.6.6
* Remove CSS `overflow: auto` - too many complaints
* FAQ 53 Scroll widget based testimonial content

## 2.6.5
* BUGFIX: overflow auto than scroll
* Correct screenshot 11 & 18

## 2.6.4
* Add filters `testimonials_widget_posts_custom_column`, `testimonials_widget_columns`, `testimonials_widget_meta_box`
* BUGFIX Testimonial posts page column URL now correctly clickable
* Code spacing cleanup
* Enabled [scrolling text](http://wordpress.org/support/topic/plugin-testimonials-widget-scroll-for-a-single-but-long-testimonial) for maximum height restricted testimonial widgets
* FAQ 34/35 CSS styling update
* Scrolling testimonials for maximum height restricted widgets
* Testimonials have `get_post_class` applied 
* Update premium features

## 2.6.3
* Add filter `testimonials_widget_query_args`
* Add filters `testimonials_widget_testimonials_css`, `testimonials_widget_testimonials_js`
* Allow `limit=-1`
* BUGFIX Repeated footer CSS and JavaScript
* CSS - block disply widget image
* FAQ 52 Include testimonies in archive view
* Refactor `get_query_args` out of `get_testimonials`
* Revise JavaScript handling
* Screenshot 17 `require_image`, `minimum_length` and `maximum_length` shortcode option examples
* Screenshot 18 Widget with 'Next testimonial…' link
* Update POT
* Update premium features
* Update premium screenshots

## 2.6.2
* Compatible with WordPress 3.6
* Fix single view PHP warning

## 2.6.1
* Add filter `testimonials_widget_testimonial_html_single_content`
* Add `force_pad` option to `testimonials_truncate`
* Copyright year update
* Update Premium features

## 2.6.0
* Add FAQ 51 filter `testimonials_widget_get_testimonial_html` usage
* FAQ 50 Revise
* Reorganize `get_testimonial_html`

## 2.5.6
* Add FAQ 50 Example to set widget gradient background color
* FAQ 13 Update
* FAQ 20 Add PHP tags
* FAQ 48 Code correction
* FAQ 49 Code correction

## 2.5.5
* Enable widget caching
* Refactor `get_testimonials_html` to break out CSS/JS generation
* Respect [meta capabilities](http://wordpress.org/support/topic/plugin-testimonials-widget-version-20-rewrite-suggestions-request?replies=18#post-3359157)
* Revise TODO text
* TODO remove Template engine - see `testimonials_widget_testimonial_html*` filters

## 2.5.4
* Add filter `testimonials_widget_testimonial_html_single`
* Add filter `testimonials_widget_testimonial_html`
* Aihrus testimonial URL correction
* FAQ 34 Find `testimonialswidget_testimonialsNNN` instance naming
* FAQ 48 Customize testimonial list/widget output
* FAQ 49 Customize testimonial single output

## 2.5.3
* Add donate link in plugin section
* Donate links

## 2.5.2
* Aihrus branding

## 2.5.1
* Update POT file

## 2.5.0
* Add option Keep whitespace? - Thank you [kangchenjunga](http://wordpress.org/support/topic/optional-wpautop-functionality-for-better-formatting?replies=2) for the suggestion
* Revise FAQ 47
* Screenshot 16 - Widget whitespace kept
* Update Author URL

## 2.4.8
* Donate to purchase verbiage change - One bad experience ruins it for all
* FAQ 47 testimonials list in a widget
* TODO Add location field
* TODO Add plugin donate link
* [CleanCSS](http://cleancss.com/) the CSS

## 2.4.7
* Add filter `testimonials_widget_defaults_single`
* TODO clean up for premium version
* TODO Optional wpautop functionality for better formatting

## 2.4.6
* Add 'No order' as an Order By widget option
* Add FAQ 45 testimonial character limit
* Add Recommendation heading
* FAQ 23 mention 404
* FAQ 46 testimonial ordering by given IDs
* Update filters listing
* Use `posts_results` filter to put posts in same orders as post__in when orderby=none

## 2.4.5
* BUGFIX Missing CSS for testimonialswidget_join_title
* FAQ 44 Refresh interval - Thank you [biztips](http://wordpress.org/support/topic/fatal-error-558?replies=6#post-3475595)

## 2.4.4
* Add screenshot 15
* FAQ 34 Update CSS
* FAQ 35 Update CSS
* FAQ 42 Exclude testimonial categories from Category widget
* FAQ 43 Exclude testimonial categories from my sitemap
* Update premium features

## 2.4.3
* Adjust default `limit` to 10 from 25
* Add CSS `margin-top` to `cite`, `.testimonialswidget_extra` and `.testimonialswidget_text`
* BUGFIX [Keep `widget_text` with each testimonial](http://wordpress.org/support/topic/images-not-showin?replies=10)
* Donate link update
* FAQ 41 Widget height consistency

## 2.4.2
* BUGFIX [No image](http://wordpress.org/support/topic/update-17?replies=4) in [widget](http://wordpress.org/support/topic/plugin-testimonials-widget-short-rotating-testimonial-link-to-the-full-testimonial?replies=16)
* TODO Add refactor `get_testimonials_html`

## 2.4.1
* BUGFIX `testimonialswidget_widget` always random
* Comment and verbiage cleanups
* Minor refactor of `get_testimonial_html`
* TODO Added Template engine

## 2.4.0
* FAQ 39 Style the custom widget text
* FAQ 40 Page number pagination
* FEATURE Custom widget text
* FEATURE Make the widget title clickable
* FEATURE Page numbers via WP-PageNavi
* Refactor paging to use WordPress functions
* SCREENSHOT 12 recrop
* SCREENSHOT 13 Widget with clickable title and custom text/HTML on bottom
* SCREENSHOT 14 WP-PageNavi compatible for page numbers than default arrows
* SCREENSHOT 3 update
* SCREENSHOT 4 update
* TODO Remove Custom widget text - added
* TODO Remove Make the widget title clickable - added
* TODO Remove Page numbers - added
* TODO Remove fields to show - done via theme

## 2.3.4
* BUGFIX [Testimonial plugin means Set Feature Image Not Displaying](http://wordpress.org/support/topic/testimonial-plugin-means-set-feature-image-not-displaying)
* Test with WordPress 3.5.0 RC1
* TODO remove Publish & New - just click 'New Testimonial' after Publishing
* Update donate link

## 2.3.3
* FEATURE Improved single page view
* SCREENSHOT Single testimonial view
* TODO Meta capabilities

## 2.3.2
* Add filters `testimonials_widget_options_update`, `testimonials_widget_options_form`
* BUGFIX ["featured image" module disappeared](http://wordpress.org/support/topic/no-image-upload?replies=12#post-3423001)
* Clean up tags per [plugin guidelines](http://wordpress.org/extend/plugins/about/guidelines/)
* Combine source and url display when no email or company
* FAQ renumber second 36 to 37
* FAQ 38 Use filter `testimonials_widget_defaults`
* FEATURE Centralized defaults via filter `testimonials_widget_defaults`
* Only grab `paged` information once
* Prepend HTTP protocol if missing in URL
* SCREENSHOT Widget Premium Options
* Simplify filter `testimonials_widget_content`
* Simplify read more ellipsis
* Trim content after formatting

## 2.3.1
* BUGFIX [No image upload](http://wordpress.org/support/topic/no-image-upload)
* FAQ 36 Why donate?

## 2.3.0
* BUGFIX No paging when cached
* FAQ 3 Check for empty $data
* FAQ 33 Change more content ellipsis
* FAQ 34/35 Clarify CSS classes
* FAQ 36 Configure Next and Previous page indicators
* FEATURE (Premium) [Read More links](http://wordpress.org/support/topic/plugin-testimonials-widget-short-rotating-testimonial-link-to-the-full-testimonial) to [full testimonial page](http://wordpress.org/support/topic/very-easy-to-use-moderately-easy-to-style)
* FEATURE Easier to configure Next and Previous page indicators
* Refactor `get_testimonial_html`
* Refactor testimonial HTML creation methods
* Remove "Read more…" preparations
* Replace `testimonials_truncate` with WordPress's `wp_trim_words`
* SCREENSHOTS 'Read more' links
* Sanitize names
* TEMP Prevent widget caching
* TODO Clarify 'Read more'
* TODO Remove - CSV Export
* TODO Updates
* Update POT file

## 2.2.9
* BUGFIX [Testimonial List Loading 2nd Blank Box](http://wordpress.org/support/topic/testimonial-list-loading-2nd-blank-box)

## 2.2.8
* Begin "Read more…" preparations
* Correct content display processing
* FAQ 32 Min-height usage
* FAQ 4 Custom code placement clarification
* TODO Updates
* Widgets display content sans `wpautop` formatting

## 2.2.7
* Catch widget number in cache
* FAQ Custom query code. Thank you [tcwebguru](http://wordpress.org/support/topic/display-on-page-without-widget)
* FAQ Change Testimonials Widget text labels
* Language verbiage correction
* PHP notice fix - esc_attr
* Remove premium code include

## 2.2.6
* BUGFIX Widget config not saving correctly
* FAQ Export/import
* TODO Updates

## 2.2.5
* Adapt for [Testimonials Widget Premium plugin](http://aihr.us/downloads/testimonials-widget-premium-wordpress-plugin/)
* Add support text
* Correct verbiage spacing
* Explain `limit`
* TODO revisions

## 2.2.4
* BUGFIX [Tags - no more than 2?](http://wordpress.org/support/topic/tags-no-more-than-2)
* Clean up PHP notices
* Fix Changelog link
* PREMIUM Implement testimonials query and content caching
* TODO update

## 2.2.3
* Begin premium plugin adaptions
* BUGFIX [Tags - no more than 2?](http://wordpress.org/support/topic/tags-no-more-than-2)
* BUGFIX [Updated - Now getting fatal error when using testimonialswidget_list()](http://wordpress.org/support/topic/updated-now-getting-fatal-error-when-using-testimonialswidget_list)
* Clean up links in readme.txt
* Correct company and URL link usage
* [Correct readme.txt to standard](http://wordpress.org/extend/plugins/about/readme.txt)
* Don't rotate testimonial if only 1 
* TODO updates

## 2.2.2
* BUGFIX [Now getting fatal error when using testimonialswidget_list()](http://wordpress.org/support/topic/updated-now-getting-fatal-error-when-using-testimonialswidget_list)
* Theme function defaults
* TODO updates
* URL pointing update

## 2.2.1
* Number FAQ Entries
* Revise Installation Usage text
* Revise Shortcode and Widget Options text

## 2.2.0
* FAQ `testimonialswidget_widget()` example
* Multisite compatible
* Reversion as 2.1.10 was a minor release than only bug fixes

## 2.1.10
* [Add title field ](http://wordpress.org/support/topic/plugin-testimonials-widget-just-tried-216-thoughts-suggestions)
* Consolidate defaults to simplify code maintenance
* Correct CSS testimonial list spacing
* Debug true - clear out PHP notices and such
* Default minimum height removed for widgets, now optional
* Maximum height setting
* [Remove CSS `position` attributes `.testimonialswidget_testimonial { position: absolute; }`](http://wordpress.org/support/topic/testimonials-widget-not-showing-correctly-on-sub-pages)
* TODO cleanup
* Update language POT
* Update screenshots
* Update WPML
* Widget options dropdown for ORDER BY entries

## 2.1.9
* Allow min_height 0
* FAQ - How do I use the theme function `testimonialswidget_list()`?
* Move CSS include to header

## 2.1.8
* Remove testimonialswidget_widget char_limit default
* TODO - debug true

## 2.1.7
* [0 disables char_limit](http://wordpress.org/support/topic/plugin-testimonials-widget-more-than-one-testimonial-appears-overlaps-content-below-the-widget)
* [Set link target](http://wordpress.org/support/topic/plugin-testimonials-widget-just-tried-216-thoughts-suggestions)
* Update widget option top screenshot

## 2.1.6
* FAQ: `ORDER BY` explanation
* FAQ: `testimonial_extra` explanation
* [Moved CSS to footer](http://wordpress.org/support/topic/plugin-testimonials-widget-html-validation)
* Next testimonial link idea
* Option: Add `hide_not_found` to prevent showing "No testimonials found"
* Revise theme methods as functions
* Screenshot: Update upper widget options
* Staged widget testimonials are initially `display: none` via CSS `.testimonialswidget_display_none`
* TODO updates
* Verbiage: Refresh Interval to Rotation Speed
* Widget option explanations

## 2.1.5
* Always apply min-height

## 2.1.4
* Enable WPML
* Idea - Maximum height setting
* Revise description
* Revise TODO

## 2.1.3
* Allow commas in meta_key
* FAQ on page not found
* Fix widget Random order always true condition
* Increase bottom margin spacing for listed testimonials
* TODO vote casting note
* Update localization pot file

## 2.1.2
* Add `hide_gravatar` option
* Add apply_filters( 'testimonials_widget_data', $testimonial_data ) to process data before display
* Add right margin to gravatar image
* Added empty testimonial data field `testimonial_extra` for customization in testimonials
* Allow widget and shortcode sorting by post meta values via `meta_key`
* Correct PHP static accessors
* Update FAQ
* Update widget options screenshots
* Working full testimonial URLs

## 2.1.1
* Add [[testimonialswidget_list]] paging screenshot

## 2.1.0
* Enable paging for [[testimonialswidget_list]] shortcode
* Flush rewrite rules on activation
* Disallow paging in widget and [[testimonialswidget_widget]] shortcode

## 2.0.6
* Update shortcode option directions

## 2.0.5
* Ignore already imported
* Mark `testimonialswidget_widget() $number` argument as optional

## 2.0.4
* Allow for 0 refresh_interval in get_testimonials_html

## 2.0.3
* Allow for 0 refresh_interval in widget

## 2.0.2
* BUGFIX [Warning: call_user_func_array() ??](http://wordpress.org/support/topic/plugin-testimonials-widget-warning-call_user_func_array)
* Added Testimonials_Widget_Widget::get_testimonials_scripts for use with add_filter for wp_footer

## 2.0.1
* Verbiage updates
* Readme.txt validation
* widget q p tag display inline
* GPL2 licensing
* Move upgrade notice text towards installation
* Reorder screenshots
* Apply 'the_content' filters directly to prevent plugin baggage
* Update screenshot-7.png

## 2.0.0
* Major rewrite
* Add filters for image & gravatar sizes
* Admin bar New > Testimonial
* Authors and lower can manage their own testimonials
* Auto-migration from old to new format upon install
	* Public > Published
	* Not public > Private
* Categories - product, project, service
* Clean up verbiage
* Cleaner widget class
* Custom columns list view
	* Image
	* Source
	* Shortcode
	* Email
	* Company
	* URL
	* Published by
	* Category
	* Tags
	* Date
* Custom fields metabox
	* Email
	* Company
	* URL
* Custom post-type
* Default fields - source, email, company, URL
* Editors and higher can manage all testimonials and edit testimonial publisher
* Enable categories and tags
* Enable full shortcode options in widget
* Gravatar
* HTML content allowed
* Images
* JavaScript in footer
* Localization
* Reference shortcode column
* Reorganize widget options panel
* Rotation JavaScript in footer than body
* Shortcode options validation
* WP_Query for get_testimonials()
* Widget image on own line
* Widget options
	* Title
	* Category filter
	* Tags filter
	* Require all tags
	* Advanced options
	* Hide image?
	* Hide source?
	* Hide email?
	* Hide company?
	* Hide URL?
	* Character limit
	* IDs filter
	* Limit
	* Maximum Height
	* Minimum Height
	* ORDER BY
	* ORDER BY Order
	* Random order
	* Rotation Speed
* Move caching to ideas
* Add theme function `testimonialswidget_widget()` doc
* Update POT
* [[testimonialswidget_widget]] shortcode
* Match [[testimonialswidget_widget]] shortcode option defaults to widget
* Update screenshots
* Readd Minimum Height - need help getting around this

## 0.2.13
* Clean up CSS
* Remove q & cite p wrapper

## 0.2.12
* the_title filter fix

## 0.2.11
* Enable character limit for shortcode

## 0.2.10
* Character limit nows forces text truncation than preventing of testimonial to show
* Add option - Limit number of testimonials to pull at a time
* Sanitize widget variables
* Fix random_order issue on testimonials widget

## 0.2.9
* Require Editor role for managing Testimonials

## 0.2.8
* CSS testimonialswidget_testimonial_list fix #2

## 0.2.7
* CSS testimonialswidget_testimonial_list fix

## 0.2.6
* CSS updates for widgets and lists

## 0.2.5
* Add span.testimonialswidget_join for author , join text
* Add nl2br for testimonials display on a page

## 0.2.4
* Shortcode added - Thank you Hal Gatewood

## 0.2.3
* Allow testimonials to have multiple tags
* Show only quotes with all tags

## 0.2.2
* Show newest testimonials first in admin list by default
* Quick locallization
* Quotes Collection recommendation

## 2011-10-03: Version 0.2
* Multi-widget enabled
* Testimonial, author & source text are clickable automatically
* Allow 0 refresh to make widget static
* Allow pressing return when editing testimonial to save record

## 2011-08-12: Version 0.1
* initial release
