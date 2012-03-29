<?php

/**

 * @package		WordPress

 * @subpackage	BuddyPress

 * @author		Boris Glumpler

 * @copyright	2011, ShabuShabu Webdesign

 * @link		http://shabushabu.eu

 * @license		http://www.opensource.org/licenses/gpl-2.0.php GPL License

 */



// No direct access is allowed

if( ! defined( 'ABSPATH' ) ) exit;

 

class Buddyvents_Admin_Manual extends Buddyvents_Admin_Core

{

	/**

	 * Constructor

	 * 

	 * @package Admin

	 * @since 	2.0.6

	 */

    public function __construct()

	{

		parent::__construct();

    }

	

	/**

	 * Content of the readme tab

	 * 

	 * @package Admin

	 * @since 	2.0.6

	 */

	private function _format( $code )

	{

		$code = str_replace( '<', '&lt;', $code );

		$code = str_replace( '>', '&gt;', $code );

		$code = str_replace( '"', '&quot;', $code );

		

		return $code;

	}



	/**

	 * Content of the readme tab

	 * 

	 * Inspired by Documenter 1.5, some of the CSS has been kept

	 * 

	 * @link	http://rxa.li/documenter

	 * @package Admin

	 * @since 	2.0.6

	 */

	protected function content()

	{

		?>

		<script>

			SyntaxHighlighter.all();

			jQuery(document).ready(function() {
				jQuery('#documenter_content section').hide();

				jQuery('#documenter_cover').show();

				

				jQuery('a.top-level').click( function() {

					var hash = jQuery(this).attr('href');



					jQuery.scrollTo(hash);

					

					jQuery('a.top-level,ol.sub-level a').removeClass('current');

					jQuery(this).addClass('current');



					jQuery('#documenter_content section').hide();

					jQuery(hash).show();

					

					jQuery('ol#documenter_nav ol').slideUp();

					jQuery(this).next('ol').slideDown();

					

					return false;

				});


				jQuery('ol.sub-level a').click( function() {

					var hash = jQuery(this).attr('href');

					

					jQuery('a.top-level,ol.sub-level a').removeClass('current');

					jQuery(this).addClass('current');

					

					jQuery.scrollTo(hash);

								

					return false;

				});

				

				jQuery('#documenter_sidebar').stickyfloat({lockBottom:false});

			});
		</script>

		

		<div id="documenter_sidebar">

			<ol id="documenter_nav">

				<li>

					<a class="current top-level" href="#documenter_cover">Start</a>

				</li>

				<li>

					<a class="top-level" href="#setup">Setup</a>

					<ol class="sub-level">

						<li><a href="#setup_installation">Installation</a></li>

						<li><a href="#setup_upgrade">Upgrade</a></li>

					</ol>

				</li>

				<li>

					<a class="top-level" href="#modules">Modules</a>

					<ol class="sub-level">

						<li><a href="#modules_achievements">Achievements</a></li>

						<li><a href="#modules_api">API</a></li>

						<li><a href="#modules_cubepoints">Cubepoints</a></li>

						<li><a href="#modules_eventbrite">Eventbrite</a></li>

						<li><a href="#modules_facebook">Facebook</a></li>

						<li><a href="#modules_moderation">Moderation</a></li>

						<li><a href="#modules_tickets">Tickets</a></li>

						<li><a href="#modules_twitter">Twitter</a></li>

					</ol>

				</li>

				<li>

					<a class="top-level" href="#templates">Templates</a>

					<ol class="sub-level">

						<li><a href="#templates_css">Overriding CSS</a></li>

						<li><a href="#templates_actions">Actions</a></li>

						<li><a href="#templates_override">Overriding Templates</a></li>

						<li><a href="#templates_strings">Overriding Strings</a></li>

					</ol>

				</li>

				<li>

					<a class="top-level" href="#recurrence">Recurrence</a>

				</li>

				<li>

					<a class="top-level" href="#developers_api">BPE Events API</a>

				</li>

				<li>

					<a class="top-level" href="#filter_reference">Filter Reference</a>

				</li>

				<li>

					<a class="top-level" href="#action_reference">Action Reference</a>

				</li>

				<li>

					<a class="top-level" href="#function_reference">Function Reference</a>

				</li>

				<li>

					<a class="top-level" href="#languages">Languages</a>

				</li>

				<li>

					<a class="top-level" href="#debugging">Debugging</a>

					<ol class="sub-level">

						<li><a href="#debugging_js">Javascript Errors</a></li>

						<li><a href="#debugging_css">CSS Problems</a></li>

						<li><a href="#debugging_bugs">Reporting Bugs</a></li>

					</ol>

				</li>

			</ol>

		</div>

		<div id="documenter_content">

			<section id="documenter_cover">

				<h1>Buddyvents User Manual</h1>

				<h2>for v2.0 and higher</h2>

				<p class="info">Currently, the user manual is only available in English.</p>

				<hr>

				

				<ul>

					<li>Created: 19/11/2011</li>

					<li>Latest Update: 21/11/2011</li>

					<li>By: Boris Glumpler</li>

				</ul>

			</section>

			

			<section id="setup">

				<h3>Setup</h3>



				<p class="warning">When upgrading BuddyPress, then please also deactivate Buddyvents to avoid any fatal error messages.</p>

				

				<h4 id="setup_installation">Installation</h4>

				<p>Installation is very easy. Most likely you have already completed that step since you're reading this. Installation consists of 5 easy steps:</p>

				<ol>

				    <li>Upload the files to wp-content/plugins/buddyvents</li>

				    <li>Activate the plugin in your admin backend</li>

				    <li>Create an events page, then set this page as an option at BuddyPress->Pages</li>

				    <li>Go to Events->Settings and adjust the options</li>

					<li>That's it ... enjoy!</li>

				</ol>

				

				<h4 id="setup_upgrade">Upgrade</h4>

				<p>Upgrading is almost as easy as installation.</p>

				<ol>

				    <li>Deactivate Buddyvents</li>

				    <li>Backup any custom image, stylesheet and language files</li>

				    <li>Upload all files via FTP to wp-content/plugins/buddyvents, overwriting the old files</li>

				    <li>Restore custom language, stylesheets and image files</li>

				    <li>Activate Buddyvents</li>

				    <li>Go to the backend and upgrade the database, if applicable</li>

				</ol>

				

			</section>

	

			<section id="modules">

				<h3>Modules</h3>

				

				<p class="info">All components can be turned on or off via settings in the backend.</p>

	

				<h4 id="modules_achievements">Achievements</h4>

				<p>Buddyvents integrates with the Achievements plugin by Paul Gibbs.</p>

				<p>Achievements needs to be active before the option on the settings page becomes visible.</p>

				<p>No further setup is needed on the Buddyvents side of things. Just set up any achievements via the Achievements directory.</p>

	

				<h4 id="modules_api">API</h4>

				<p class="warning">Some programming knowledge is necessary to integrate the API into an external website.</p>

				<p class="info">The API has its own documentation, which is included in the client library zip file. The library can be found <a href="<?php echo EVENT_URLPATH .'components/api/client/client.zip' ?>">here</a>.</p>

				<p>The API lets other people integrate events into external webpages. A basic client-side llibrary, written in PHP, is included with Buddyvents.</p>

				<p>It consists of 2 components. The actual API and the webhooks component. For webhooks to work, the API needs to be active.</p>

				<p>Usually, setting up an API requests involves caching the received data for a certain amount of time to avoid being cut off after too many requests.</p>

				<p>Webhooks, on the other hand notify certain URLs of changes to the event data. This enables external websites to only request data when things actually changed, thus keeping requests to a minimum.</p>

				<p>You will see a new backend page being activated for API keys and webhooks. These pages give you fine-grained control over both api keys and webhooks.</p>

					

				<h4 id="modules_cubepoints">Cubepoints</h4>

				<p>The Cubepoints component expects both the Cubepoints plugin and the CubePoints Buddypress Integration plugin to be active before any options become visible in the backend.</p>

				<p>Once activated, the points for various actions can be adjusted on the settings page.</p>

	

				<h4 id="modules_eventbrite">Eventbrite</h4>

				<p>Once the option to integrate Buddyvents with Eventbrite is activated, users have the option to publish an event to Eventbrite at the same time when publishing on your site.</p>

				<p>For this to work, certain steps need to be taken.</p>

				<ol>

					<li>First an Eventbrite API key needs to be obtained. This can be done <a href="http://www.eventbrite.com/api/key">here</a>.</li>

					<li>Then, each user needs to enter an Eventbrite user key on the events user settings page. A key can be obtained via the Eventbrite user account.</li>

					<li>Once these 2 steps have been completed, an option is shown on the General events creation tab to cross-publish an event to Eventbrite.</li>

				</ol>

	

				<h4 id="modules_facebook">Facebook</h4>

				<p>The Facebook integration works very similar to the Eventbrite componnent.</p>

				<ol>

					<li>First you need to get an App Id and a secret key from <a href="http://developers.facebook.com/setup/">Facebook</a></li>

					<li>Then each user needs to authenticate themselve on their settings page.</li>

					<li>Once these 2 steps have been completed, an option is shown on the General events creation tab to cross-publish an event to Facebook.</li>

				</ol>

	

				<h4 id="modules_moderation">Moderation</h4>

				<p>The moderation component is different from the Facebook, Twitter and Eventbrite components. Once BuddyPress Moderation by Francesco Laffi is detected, Buddyvents automatically integrates with it.</p>

				<p>On the moderation settings page you then have the option to activate moderation of events. Once this is done on every single event page there will be a link for members to flag the current event.</p>

	

				<h4 id="modules_tickets">Tickets</h4>

				<p>Tickets are the newest component for Buddyvents. It enables selling tickets via PayPal.</p>

				<p>Once activated on the settings page, you will have to set certain options first.</p>

				<ol>

					<li>If you plan on taking commissions then you have to set your commission level in percent. Default is 0, which means no commission at all.</li>

					<li>The most important setting is your PayPal eemail address, though. Without this being set, no tickets can be created, if the commission level is higher than zero.</li>

					<li>For testing purposes you can activate the PayPal Sandbox. For this to work properly you will also need to set up an account on the Sandbox site and configure the account there just as your normal account. You will also need to create a buyer account there.</li>

					<li>Then check all currencies that you allow event admins to charge their tickets in. Default is Euro.</li>

					<li>The last main point is whether you want to enable invoices or not. It is recommended to activate them if you take a commission for every ticket sale. Doing so will automate a lot of the administration process.</li>

					<li>If invoices are enabled, then you will have to set up your invoice template by filling in all the invoice options, like footers, the message, any VAT etc.</li>

					<li>You will also need to fill in the billing address in your event settings. Once you have done all this you can preview an example invoice.</li>

				</ol>

				

				<p>Once tickets are enabled you will see a new tab, called 'Sales' in the backend. Here, all sales will be listed. You can also filter by month, year, user and status.</p>

				<p>If invoices are enabled there will be a new tab called'Invoices'. After each month you can then filter sales by user and month/year. Then you will find a button, that, when clicked, will automatically generate an invoice for the user. You can then perform certain actions on an invoice, like sending it or deleting it.</p>

				<p>Every user will then also see a new invoice tab on their profile events section. From there they can settle the invoice directly via PayPal.</p>



				<p></p>

				<p>Apart from the above steps, each user will also have to complete certain steps so they can create tickets for events.</p>

				<ol>

					<li>Fill in their PayPal email address.</li>

					<li>Fill in their currrency.</li>

					<li>Fill in their billing address.</li>

				</ol>

	

				<h4 id="modules_twitter">Twitter</h4>

				<p>The Twitter integration works very similar to the Eventbrite and Facebook componnent.</p>

				<ol>

					<li>First you need to get an Consumer Key and a Consumer Secret from <a href="http://dev.twitter.com/apps">Twitter</a></li>

					<li>Then each user needs to authenticate themselve on their settings page.</li>

					<li>Once these 2 steps have been completed, an option is shown on the General events creation tab to cross-publish an event to Twitter.</li>

				</ol>

			</section>



			<section id="templates">

				<h3>Templates</h3>

				

				<h4 id="templates_css">Overriding CSS</h4>

				<p class="info">Please note that any of the following CSS files come sin 2 varieties. Compressed and uncompressed.</p>

				<p>Buddyvents ships with 4 CSS files.</p>

				<ol>

					<li>events.css</li>

					<li>fullcalendar.css</li>

					<li>colorbox.css</li>

					<li>datepicker.css</li>

				</ol>

				

				<p>Any of these files can be overridden by copying the file from the plugins css folder to a folder called 'events' in your theme.</p>

				<p>This allows you to modify almost any style aspect of Buddyvents and make it fit your theme.</p>



				<h4 id="templates_override">Overriding Templates</h4>

				<p class="info">Please note that using actions to modify templates is usually the better option! See the next section for that.</p>

				<p>One way of modifying templates is to just copy the templates from the plugins folder to your theme folder. You need to make sure, though, that the folder structure stays the same.</p>

				<p>So, if you'd want to override the template responsible for outputting the HTML of the event header, you would need to do the following:</p>

				<ol>

					<li>Copy <code>plugins/buddyvents/templates/events/includes/event-header.php</code></li>

					<li>to <code>themes/YOUR-THEME-FOLDER/events/includes/event-header.php</code></li>

				</ol>

				<p>If the events folder in your theme does not exist yet, then just create it.</p>



				<h4 id="templates_actions">Actions</h4>

				<p>In every template you will find plenty of <code>do_action</code> calls. These allow you to add content exactly where these calls appear.</p>

				<p>This approach is a much more future proof way of modifying your templates than overriding templates. That way you will not have to manually upgrade any template files.</p>

				<p>You will also find plenty of <code>do_action</code> and <code>apply_filter</code> calls in almost every Buddyvents function. This allows you to save any extra data, that you added via template hooks, like an additional textarea or input field.</p>

				<p>Here is a basic example:</p>

				

				<pre class="brush: php"><?php

				echo $this->_format( 'function my_add_to_general_settings_page()

{

	?>

	<label for="extra_description">Extra Description</label>

	<textarea name="extra_description" id="extra_description"></textarea>

	<?php

}

add_action( \'bpe_general_create_after_description\', \'my_add_to_general_settings_page\');' ) ?></pre>

				<p>The above code adds an extra textarea to the general event settings page right after the default description textarea.</p>



				<pre class="brush: php"><?php

				echo $this->_format( 'function my_save_extra_description_data( $event )

{

	if( isset( $_POST[\'extra_description\'] ) && ! empty( $_POST[\'extra_description\'] ) )

		bpe_update_eventmeta( $event->id, \'extra_description\', $_POST[\'extra_description\'] );

}

add_action( \'bpe_event_is_publishable\', \'my_save_extra_description_data\' );' ) ?></pre>

				<p>The above code then lets you save the additional data as event meta.</p>



				<pre class="brush: php"><?php

				echo $this->_format( 'function my_show_extra_description()

{

	$extra = bpe_get_eventmeta( bpe_get_displayed_event( \'id\' ), \'extra_description\' );

	

	if( ! empty( $extra ) )

		echo \'<div id="extra-desc">\'. $extra .\'</div>\';

}

add_action( \'bpe_after_description_list_view\', \'my_show_extra_description\' );' ) ?></pre>

				<p>The above code then shows that data after the normal description.</p>

				

				<p>To show the same textarea on the edit page for an event, you need to use different actions, but the principle is the same.</p>

	

				<h4 id="templates_strings">Overriding Strings</h4>

				<p>Sometimes, all you need to do is change the wording. For any URLs, Buddyvents makes it very easy. You can change any slugs on the Buddyvents settings page.</p>

				<p>For anything other than slugs, it's a little bit more complicated. You will need to modify the language file that ships with Buddyvents.</p>

				<ol>

					<li>Get yourself a copy of poEdit. This programme is available for both PC and Mac and will allow you to easily modify the language files.</li>

					<li>

						Open up wp-config.php in the root of your WP installation and scroll down until you find this line:<br />

						<pre class="brush: php">define ('WPLANG', '');</pre>

						If WPLANG is not set yet, then set to whatever you like, e.g. 'mylang' and save the file.<br />

						<pre class="brush: php">define ('WPLANG', 'mylang');</pre>

						If WPLANG is set already, then note the string. You'll need it in a minute.

					</li>

					<li>Copy <code>plugins/buddyvents/languages/events-en_US.po</code> and save it again as <code>plugins/buddyvents/languages/events-mylang.po</code>. If WPLANG was set already, then use the string you noted down instead of 'mylang'.</li>

					<li>If the file exists already then you won't need to copy anything, just open it with poEdit.</li>

					<li>You can then perform a search inside of poEdit and change all occurences of whatever word you want to change.</li>

					<li>Saving the file should automatically create a .mo file with the same name.</li>

					<li>If you refresh your frontend page now, you should see the new language strings.</li>

				</ol>

			</section>



			<section id="recurrence">

				<h3>Recurrence</h3>				

				<p>There are different recurrence settings for events. You can see them by creating an event.</p>

				<p>In Buddyvents 2.0, these events will show up straight away on the calendar. Registration, however, will only be open once the event has actually been created.</p>

				<p>The timeline for a recurrent event to be created goes as follows:</p>

				<ol>

					<li>After an event gets published and a recurrence has been set, Buddyvents schedules the event according to the recurrecne setting.</li>

					<li>If you have your recurrence set to 4 weeks, then an event will be created exatly 4 weeks after the original event was created.</li>

					<li>The important thing to note is that the creation is based on the publish date and not on the start date of the event.</li>

					<li>Also, Buddyvents uses pseudo WP-Cron jobs. These are not real cron jobs, but rely on a user visiting the site. For this reason, recurrent event creation might be happening slightly off schedule for sites with low visitor numbers.</li>

				</ol>

				<p>Until an event has been created it will not show in the normal listings, only on the calendar.</p>

			</section>



			<section id="developers_api">

				<h3>BPE Events API</h3>

				<p class="info">Please note that this part of the manual is geared more towards developers!</p>



				<p>If you are already familiar with the BP Group Extension, then you'll feel right at home with the Event Extension. Below is a basic example of how you would setup an extension.</p>

				<p>Have a look at <code>components/core/bpe-extension.php</code> to learn more about the parent class.</p>

								

				<pre class="brush: php"><?php

				echo $this->_format( '<?php

class My_Event_Extension extends Buddyvents_Extension

{

	function __construct()

	{

 		$this->name = \'My Event Extension\';

		$this->slug = \'my-event-extension\';



		$this->create_step_position = 8;



		$this->enable_create_step = true;

		$this->enable_edit_item   = true;

		$this->enable_nav_item 	  = true;

	}



	function create_screen()

	{

		if( ! bpe_is_event_creation_step( $this->slug ) )

			return false;

		

		// all HTML for the creation screen goes here



		wp_nonce_field( \'bpe_add_event_\'. $this->slug );

	}



	function create_screen_save()

	{

		check_admin_referer( \'bpe_add_event_\'. $this->slug );

		

		// the code to save any extra data from the creation screen goes here

		// most likely you\'d want to use bpe_update_eventmeta($event_id, $meta_key, $meta_value);

	}



	function edit_screen()

	{

		if( ! bpe_is_event_edit_screen( $this->slug ) )

			return false;

		

		// all HTML for the edit screen goes here



		wp_nonce_field( \'bpe_edit_event_\'. $this->slug );

	}



 	function edit_screen_save()

	{

		if( ! isset( $_POST[\'edit-event\'] ) )

			return false;



		check_admin_referer( \'bpe_edit_event_\'. $this->slug );



		// the code to save any extra data from the edit screen goes here

		// most likely you\'d want to use bpe_update_eventmeta($event_id, $meta_key, $meta_value);

		// then you\'d want to use bp_core_redirect(); to redirect to the edit screen

	}

	

	function display()

	{

		// any HTML for display should go here. A nav item in the left-hand sidebar will be created

		// automatically. This method is only needed if $enable_nav_item is set to true

	}

}

bpe_register_event_extension( \'My_Event_Extension\' );

?>' ); ?></pre>

			</section>



			<section id="filter_reference">

				<h3>Filter Reference</h3>

				<p class="info">Please note that the following filters and line numbers represent Buddyvents 2.1</p>

				<table width="100%" border="0" class="widefat">

					<thead>

						<tr>

							<th>Filter Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</thead>

					<tfoot>

						<tr>

							<th>Filter Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</tfoot>

					<tbody>

						<tr>

							<td>bpe_forums_tag_cloud</td>

							<td>---</td>

							<td>components/forum/bpe-forums-core.php</td>

							<td>Can be used to change the default logo.</td>

						</tr>

						<tr>

							<td>bpe_default_logo_url</td>

							<td>---</td>

							<td>buddydvents.php</td>

							<td>Can be used to change the default logo.</td>

						</tr>

						<tr>

							<td>bpe_add_event_comment</td>

							<td>$text, $event, $comment_text, $user_id</td>

							<td>components/core/bpe-activity.php</td>

							<td>Can be used to modify the comment header of an event comment.</td>

						</tr>

						<tr>

							<td>bpe_view_styles</td>

							<td>----</td>

							<td>/buddyvents.php</td>

							<td>Can be used to add or remove view styles. Defaults are grid and list.</td>

						</tr>

						<tr>

							<td>bpe_recurrence_intervals</td>

							<td>----</td>

							<td>/buddyvents.php</td>

							<td>Can be used to add or remove intervals. While removing intervals only means unsetting a variable, adding an interval also requires to create a function - <code>bpe_custom_recurrence_{$new_interval_key}</code> - that handles the actual recurrence.</td>

						</tr>

						<tr>

							<td>bpe_forbidden_slugs</td>

							<td>----</td>

							<td>/buddyvents.php</td>

							<td>Can be used to modify forbidden slugs. Should really only be use if extra functionality that requires new slugs are being added to Buddyvents.</td>

						</tr>

						<tr>

							<td>bpe_prox_distances</td>

							<td>----</td>

							<td>/buddyvents.php</td>

							<td>Can be used to modify the distances in the proximity dropdowns.</td>

						</tr>

						<tr>

							<td>bpe_event_create_steps</td>

							<td>----</td>

							<td>/buddyvents.php</td>

							<td>Used to add or remove creation steps. The BPE Event Extension API should be used instead of this filter.</td>

						</tr>

						<tr>

							<td>bpe_event_overview_name</td>

							<td></td>

							<td>/admin/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_post_methods</td>

							<td></td>

							<td>/components/api/bpe-api-class.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_user_id</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_api_key</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_active</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_date_generated</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_hits</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_hit_date</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_api_hits_over</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_webhooks_user_id</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_webhooks_event</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_webhooks_url</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_webhooks_verifier</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_webhooks_verified</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_new_event</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_attend_event</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_maybe_attend_event</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_remove_event</td>

							<td></td>

							<td>/components/core/bpe-activity.php<br />/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_new_logo</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_updated_document</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_action_updated_schedule</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_filters</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_map_content</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_month_variable</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_year_variable</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_title_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_month_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_month_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_global_month_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_prev_month_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_next_month_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_month_control</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_year_control</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_controls</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_calendar_headings</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_calendar_month_variable</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_calendar_year_variable</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_link</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_event_normal</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_calendar_maps_js</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_calendar_colorbox_popup</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_html_wrapper</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_notification_callback</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_user_groups</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_timezones</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_venues</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_total_events_count</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_main_nav_position</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_active_events_count</td>

							<td></td>

							<td>/components/core/bpe-core.php<br />/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attending_events_count</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_admin_creation_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_creation_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_new_event_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_admin_event_avatar_delete_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_avatar_delete_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_avatar_upload_dir</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_admin_event_creation_previous_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_creation_previous_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_admin_event_edit_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_edit_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_adjacent_event_date</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_adjacent_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_coordinates</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_proximity_system</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_count</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_groups_for_user</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_core_template_plugin</td>

							<td></td>

							<td>/components/core/bpe-extension.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_{$context}_feed_query_args</td>

							<td></td>

							<td>/components/core/bpe-feed-class.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sitewide_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_save_group_creation_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_required_group_fields</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_group_contact_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_calendar_month_variable</td>

							<td></td>

							<td>/components/core/bpe-groups.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_calendar_year_variable</td>

							<td></td>

							<td>/components/core/bpe-groups.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_safe_email_text</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_view_per_page</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_adjust_page_title</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_currencies</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_editor_theme_advanced_buttons1</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_editor_theme_advanced_buttons2</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_editor_quicktags_buttons</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_method</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_scale</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_reminder_trigger</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_reminder_action</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_single_event</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ical_output</td>

							<td></td>

							<td>/components/core/bpe-ical.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_</td>

							<td></td>

							<td>/components/core/bpe-js-css.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_args</td>

							<td></td>

							<td>/components/core/bpe-js-css.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sanitize_for_keywords</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_stopwords</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_build_user_options</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_template_directory</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_changed_variable</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_searchable_text</td>

							<td></td>

							<td>/components/core/bpe-process.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_new_invite_message</td>

							<td></td>

							<td>/components/core/bpe-process.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_timestamp</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_calendar_recurrent_events</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_template_directory_user_home</td>

							<td></td>

							<td>/components/core/bpe-screen.phpbr />/components/core/bpe-screen.phpbr />/components/core/bpe-screen.phpbr />/components/core/bpe-screen.phpbr />/components/core/bpe-screen.phpbr />/components/core/bpe-screen.phpbr />/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_events_search_form</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_load_template_filter</td>

							<td></td>

							<td>/components/core/bpe-template.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_path</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_url</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_allowed_img_extensions</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_image</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_allowed_doc_extensions</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_documents</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_categories_name</td>

							<td></td>

							<td>/components/core/models/bpe-categories.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_categories_slug</td>

							<td></td>

							<td>/components/core/models/bpe-categories.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_coords_user_id</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_coords_group_id</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_coords_lat</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_coords_lng</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_documents_event_id</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_documents_name</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_documents_description</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_documents_url</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_documents_type</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_user_id</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_group_id</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_name</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_slug</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_description</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_category</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_url</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_location</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_venue_name</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_longitude</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_latitude</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_start_date</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_start_time</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_end_date</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_end_time</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_date_created</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_public</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_limit_members</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_recurrent</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_is_spam</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_approved</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_rsvp</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_all_day</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_timezone</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_events_group_approved</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_filter_event_attendee_count</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_members_event_id</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_members_user_id</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_members_rsvp</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_members_rsvp_date</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_members_role</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_notifications_user_id</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_notifications_keywords</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_notifications_email</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_notifications_screen</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_notifications_remind</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_schedules_event_id</td>

							<td></td>

							<td>/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_schedules_day</td>

							<td></td>

							<td>/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_schedules_start</td>

							<td></td>

							<td>/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_schedules_end</td>

							<td></td>

							<td>/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save_schedules_description</td>

							<td></td>

							<td>/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_documents</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_events</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_user_avatar</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_user_avatar</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php<br />/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_description_excerpt</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_raw_events_description_excerpt</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_cat_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php<br />/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_venue_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_location</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php<br />/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_events_url</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_image</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_attendance_button</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_website</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_approve_css_class</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_schedules</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_get_schedule_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_send_update_message</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_moderation_activity_types</td>

							<td></td>

							<td>/components/moderation/bpe-moderation-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_attendance_button</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_quantity_dropdown</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_ticket_form</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_use_default_ticket</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_use_default_invoice</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_to_paypal_url</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_invoice_to_paypal_url</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_user_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_sales</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_month</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_sent_date</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_settled</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_save_invoice_transaction_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_ticket_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_seller_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_buyer_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_single_price</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_currency</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_quantity</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_attendees</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_gateway</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_sales_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_status</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_sale_date</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_commission</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save_sales_requested</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_event_id</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_name</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_description</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_price</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_currency</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_quantity</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_start_sales</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_end_sales</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_min_tickets</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save_tickets_max_tickets</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_invoices</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_css_class</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_get_ticket_name</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php<br />/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_get_ticket_description</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php<br />/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_process_send_status</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_process_send_status_clean</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

					</tbody>

				</table>

			</section>



			<section id="action_reference">

				<h3>Action Reference</h3>

				<p class="info">Please note that the following actions and line numbers represent Buddyvents 2.1</p>

				<table width="100%" border="0" class="widefat">

					<thead>

						<tr>

							<th>Action Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</thead>

					<tfoot>

						<tr>

							<th>Action Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</tfoot>

					<tbody>

						<tr>

							<td>bpe_admin_tabs</td>

							<td></td>

							<td>/admin/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_custom_create_steps</td>

							<td></td>

							<td>/admin/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_custom_edit_steps</td>

							<td></td>

							<td>/admin/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_bulkedit_options</td>

							<td></td>

							<td>/admin/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_bulkedit_fields</td>

							<td></td>

							<td>/admin/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_event_action</td>

							<td></td>

							<td>/admin/bpe-process.php<br />/admin/bpe-process.php<br />/admin/bpe-process.php0</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_promote_user_to_admin</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_promote_user_to_organizer</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_demote_user_to_organizer</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_demote_user_to_attendee</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_removed_user_from_event</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_approved_created_event</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_timestamp_reminder</td>

							<td></td>

							<td>/admin/bpe-settings.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_before_save</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_after_save</td>

							<td></td>

							<td>/components/api/models/bpe-api.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_webhooks_before_save</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_webhooks_after_save</td>

							<td></td>

							<td>/components/api/models/bpe-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_register_activity_actions</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_globals</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_adminbar_menu_items</td>

							<td></td>

							<td>/components/core/bpe-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_creation_tabs</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_event_step_save_</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_event_step_complete</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_create_complete</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_saved_new_event_approve</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_saved_new_event</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_new_event_logo</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_event_admin_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_edit_tabs</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_members_actions</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php

							<td></td>

						</tr>

						<tr>

							<td>bpe_bp_after_directory_members_list</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_{$context}_feed_item</td>

							<td></td>

							<td>/components/core/bpe-feed-class.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_{$context}_feed_head</td>

							<td></td>

							<td>/components/core/bpe-feed-class.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_{$context}_feed_channel</td>

							<td></td>

							<td>/components/core/bpe-feed-class.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_creation_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_save_extra_group_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_dropdown_action</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_format_notifications</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_settings_save_extra</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_settings_action</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_settings_action_end</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_proximity_drop_down</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_directory_order_options</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_list_choices</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_options</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attend_event</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_not_attending_event</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_not_attending_event_general</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_maybe_attend_event</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_comment</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_setup</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_pre_save_event_edited</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edited_event_action</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_pre_save_event</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_is_publishable</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_updated_event_schedules</td>

							<td></td>

							<td>/components/core/bpe-process.php0</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_updated_event_documents</td>

							<td></td>

							<td>/components/core/bpe-process.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_recurrent_via_component</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>mapo_updated_location</td>

							<td></td>

							<td>/components/core/bpe-usercoords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_categories_before_save</td>

							<td></td>

							<td>/components/core/models/bpe-categories.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_categories_after_save</td>

							<td></td>

							<td>/components/core/models/bpe-categories.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_coords_before_save</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_coords_after_save</td>

							<td></td>

							<td>/components/core/models/bpe-coords.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_schedule_save</td>

							<td></td>

							<td>/components/core/models/bpe-documents.phpbr />/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_after_schedule_save</td>

							<td></td>

							<td>/components/core/models/bpe-documents.php<br />/components/core/models/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_save</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_after_save</td>

							<td></td>

							<td>/components/core/models/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_members_before_save</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_members_after_save</td>

							<td></td>

							<td>/components/core/models/bpe-members.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_notifications_before_save</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_notifications_after_save</td>

							<td></td>

							<td>/components/core/models/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_documents_loop_end</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_documents_loop_start</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_loop_end</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_loop_start</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_loop_end</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_loop_start</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>
							<td></td>

						</tr>

						<tr>

							<td>bpe_updated_event_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_ticket_creation</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_invoice_creation</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_paypal_{$context}_return_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_paypal_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_paypal_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_{$status}_paypal_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php<</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_{$status}_invoice_paypal_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_redirect_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_just_before_redirect_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_redirect_invoice_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_just_before_redirect_invoice_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_paypal_invoice_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_paypal_invoice_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_{$status}_invoice_paypal_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_before_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_after_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_before_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_after_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_before_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_after_save</td>

							<td></td>

							<td>/components/tickets/models/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_index</td>

							<td></td>

							<td>/templates/events/index.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_index</td>

							<td></td>

							<td>/templates/events/index.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_approve_before_loop</td>

							<td></td>

							<td>/templates/events/group/approve.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_approve_after_loop</td>

							<td></td>

							<td>/templates/events/group/approve.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_archive_before_loop</td>

							<td></td>

							<td>/templates/events/group/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_archive_inside_loop</td>

							<td></td>

							<td>/templates/events/group/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_archive_after_loop</td>

							<td></td>

							<td>/templates/events/group/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_bpe_group_cat_before_loop</td>

							<td></td>

							<td>/templates/events/group/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_cat_inside_loop</td>

							<td></td>

							<td>/templates/events/group/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_cat_after_loop</td>

							<td></td>

							<td>/templates/events/group/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_day_before_loop</td>

							<td></td>

							<td>/templates/events/group/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_day_inside_loop</td>

							<td></td>

							<td>/templates/events/group/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_day_after_loop</td>

							<td></td>

							<td>/templates/events/group/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_home_before_loop</td>

							<td></td>

							<td>/templates/events/group/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_home_inside_loop</td>

							<td></td>

							<td>/templates/events/group/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_home_after_loop</td>

							<td></td>

							<td>/templates/events/group/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_map_before_map</td>

							<td></td>

							<td>/templates/events/group/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_map_after_map</td>

							<td></td>

							<td>/templates/events/group/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_month_before_loop</td>

							<td></td>

							<td>/templates/events/group/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_month_inside_loop</td>

							<td></td>

							<td>/templates/events/group/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_month_after_loop</td>

							<td></td>

							<td>/templates/events/group/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_archive_options</td>

							<td></td>

							<td>/templates/events/group/navigation.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_timezone_before_loop</td>

							<td></td>

							<td>/templates/events/group/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_timezone_inside_loop</td>

							<td></td>

							<td>/templates/events/group/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_timezone_after_loop</td>

							<td></td>

							<td>/templates/events/group/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_venue_before_loop</td>

							<td></td>

							<td>/templates/events/group/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_venue_inside_loop</td>

							<td></td>

							<td>/templates/events/group/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_venue_after_loop</td>

							<td></td>

							<td>/templates/events/group/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_archive</td>

							<td></td>

							<td>/templates/events/includes/archive-loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_inside_archive</td>

							<td></td>

							<td>/templates/events/includes/archive-loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_after_archive</td>

							<td></td>

							<td>/templates/events/includes/archive-loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_event_header</td>

							<td></td>

							<td>/templates/events/includes/event-header.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_event_header_left</td>

							<td></td>

							<td>/templates/events/includes/event-header.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_event_header_right</td>

							<td></td>

							<td>/templates/events/includes/event-header.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_event_header</td>

							<td></td>

							<td>/templates/events/includes/event-header.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_event_header</td>

							<td></td>

							<td>/templates/events/includes/event-header.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_loop_before_loop</td>

							<td></td>

							<td>/templates/events/includes/loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_loop_inside_loop</td>

							<td></td>

							<td>/templates/events/includes/loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_loop_after_loop</td>

							<td></td>

							<td>/templates/events/includes/loop.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_before_list_tabs</td>

							<td></td>

							<td>/templates/events/includes/navigation.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_directory_event_types</td>

							<td></td>

							<td>/templates/events/includes/navigation.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_after_list_tabs</td>

							<td></td>

							<td>/templates/events/includes/navigation.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_nav_before_image</td>

							<td></td>

							<td>/templates/events/includes/single-nav.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_nav_after_image</td>

							<td></td>

							<td>/templates/events/includes/single-nav.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_nav_inside_menu</td>

							<td></td>

							<td>/templates/events/includes/single-nav.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_nav_after_menu</td>

							<td></td>

							<td>/templates/events/includes/single-nav.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_active_before_loop</td>

							<td></td>

							<td>/templates/events/member/active.phpbr />/templates/events/member/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_active_inside_loop</td>

							<td></td>

							<td>/templates/events/member/active.phpbr />/templates/events/member/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_active_after_loop</td>

							<td></td>

							<td>/templates/events/member/active.phpbr />/templates/events/member/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_attending_before_loop</td>

							<td></td>

							<td>/templates/events/member/attending.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_attending_inside_loop</td>

							<td></td>

							<td>/templates/events/member/attending.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_attending_after_loop</td>

							<td></td>

							<td>/templates/events/member/attending.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_calendar_before_cal</td>

							<td></td>

							<td>/templates/events/member/calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_calendar_after_cal</td>

							<td></td>

							<td>/templates/events/member/calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_cat_before_loop</td>

							<td></td>

							<td>/templates/events/member/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_cat_inside_loop</td>

							<td></td>

							<td>/templates/events/member/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_cat_after_loop</td>

							<td></td>

							<td>/templates/events/member/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_member_before_loop</td>

							<td></td>

							<td>/templates/events/member/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_member_inside_loop</td>

							<td></td>

							<td>/templates/events/member/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_member_after_loop</td>

							<td></td>

							<td>/templates/events/member/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_member_home_content</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_member_body</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_event_content</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_event_content</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_member_body</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_member_home_content</td>

							<td></td>

							<td>/templates/events/member/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_invoices_before_loop</td>

							<td></td>

							<td>/templates/events/member/invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_invoices_inside_loop</td>

							<td></td>

							<td>/templates/events/member/invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_invoices_after_loop</td>

							<td></td>

							<td>/templates/events/member/invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_map_before_map</td>

							<td></td>

							<td>/templates/events/member/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_map_after_map</td>

							<td></td>

							<td>/templates/events/member/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_month_before_loop</td>

							<td></td>

							<td>/templates/events/member/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_month_inside_loop</td>

							<td></td>

							<td>/templates/events/member/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_month_after_loop</td>

							<td></td>

							<td>/templates/events/member/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_timezone_before_loop</td>

							<td></td>

							<td>/templates/events/member/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_timezone_inside_loop</td>

							<td></td>

							<td>/templates/events/member/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_timezone_after_loop</td>

							<td></td>

							<td>/templates/events/member/timezone.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_venue_before_loop</td>

							<td></td>

							<td>/templates/events/member/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_venue_inside_loop</td>

							<td></td>

							<td>/templates/events/member/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_member_venue_after_loop</td>

							<td></td>

							<td>/templates/events/member/venue.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_end_single_event_action</td>

							<td></td>

							<td>/templates/events/single/home.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_directory_events_content</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_directory_events_list</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_event_plugin_template</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_template_title</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_event_body</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_template_content</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_event_body</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_event_plugin_template</td>

							<td></td>

							<td>/templates/events/single/plugins.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_event_ticket_sales</td>

							<td></td>

							<td>/templates/events/single/sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_event_ticket_sales</td>

							<td></td>

							<td>/templates/events/single/sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_schedule_before_table</td>

							<td></td>

							<td>/templates/events/single/schedule.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_schedule_inside_table</td>

							<td></td>

							<td>/templates/events/single/schedule.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_schedule_after_table</td>

							<td></td>

							<td>/templates/events/single/schedule.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_before_all</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_manual_atttendees</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_admins</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_organizers</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_attendees</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_undecided</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_edit_after_not_attending</td>

							<td></td>

							<td>/templates/events/single/steps/attendees.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_before_name</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>gbpe_eneral_edit_after_name</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_description</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_category</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_url</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_group</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_location</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_date</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_all_day</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_public</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_rsvp</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_edit_after_limit_members</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_edit_page</td>

							<td></td>

							<td>/templates/events/single/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_active_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/active.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_active_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/active.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_active_events_content</td>

							<td></td>

							<td>/templates/events/top-level/active.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_archive_events_content</td>

							<td></td>

							<td>/templates/events/top-level/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_archive_events_list</td>

							<td></td>

							<td>/templates/events/top-level/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_events_archive</td>

							<td></td>

							<td>/templates/events/top-level/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_events_archive</td>

							<td></td>

							<td>/templates/events/top-level/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_archive_events_content</td>

							<td></td>

							<td>/templates/events/top-level/archive.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_cancel_message_navigation</td>

							<td></td>

							<td>/templates/events/top-level/cancel.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_cancel_message_content</td>

							<td></td>

							<td>/templates/events/top-level/cancel.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_cancel_message_content</td>

							<td></td>

							<td>/templates/events/top-level/cancel.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/category.phpbr />/templates/events/top-level/day.phpbr />/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_before_loop</td>

							<td></td>

							<td>/templates/events/top-level/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_inside_loop</td>

							<td></td>

							<td>/templates/events/top-level/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_after_loop</td>

							<td></td>

							<td>/templates/events/top-level/category.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/category.phpbr />/templates/events/top-level/day.phpbr />/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_events_content</td>

							<td></td>

							<td>/templates/events/top-level/category.phpbr />/templates/events/top-level/day.phpbr />/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_before_loop</td>

							<td></td>

							<td>/templates/events/top-level/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_inside_loop</td>

							<td></td>

							<td>/templates/events/top-level/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_day_after_loop</td>

							<td></td>

							<td>/templates/events/top-level/day.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_map_events_content</td>

							<td></td>

							<td>/templates/events/top-level/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_map_events_list</td>

							<td></td>

							<td>/templates/events/top-level/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_events_map</td>

							<td></td>

							<td>/templates/events/top-level/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_events_map</td>

							<td></td>

							<td>/templates/events/top-level/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_map_events_content</td>

							<td></td>

							<td>/templates/events/top-level/map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_month_before_loop</td>

							<td></td>

							<td>/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_month_inside_loop</td>

							<td></td>

							<td>/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_month_after_loop</td>

							<td></td>

							<td>/templates/events/top-level/month.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_search_results_events_content</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_search_results_events_list</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_search_results_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_search_results_before_loop</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_search_results_inside_loop</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_search_results_after_loop</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_search_results_events_loop</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_search_results_events_content</td>

							<td></td>

							<td>/templates/events/top-level/results.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_search_form</td>

							<td></td>

							<td>/templates/events/top-level/search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_search_form</td>

							<td></td>

							<td>/templates/events/top-level/search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_search_form</td>

							<td></td>

							<td>/templates/events/top-level/search.php</td>

							<td></td>

						</tr>

						<tr>

							<td></td>

							<td>bpe_before_success_message_navigation</td>

							<td></td>

							<td>/templates/events/top-level/success.php</td>

						</tr>

						<tr>

							<td></td>

							<td>bpe_before_success_message_content</td>

							<td></td>

							<td>/templates/events/top-level/success.php</td>

						</tr>

						<tr>

							<td></td>

							<td>bpe_after_success_message_content</td>

							<td></td>

							<td>/templates/events/top-level/success.php</td>

						</tr>

						<tr>

							<td>bpe_general_create_before_name</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_name</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_description</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_category</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_url</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_group</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_location</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_date</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_all_day</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_public</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_rsvp</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_general_create_after_limit_members</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_create_page</td>

							<td></td>

							<td>/templates/events/top-level/steps/general.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_grid_view</td>

							<td></td>

							<td>/templates/events/view/grid.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_grid_view</td>

							<td></td>

							<td>/templates/events/view/grid.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_before_list_view</td>

							<td></td>

							<td>/templates/events/view/list.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_description_list_view</td>

							<td></td>

							<td>/templates/events/view/list.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_inside_list_view</td>

							<td></td>

							<td>/templates/events/view/list.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_after_list_view</td>

							<td></td>

							<td>/templates/events/view/list.php</td>

							<td></td>

						</tr>

					</tbody>

				</table>

			</section>

			

			<section id="function_reference">

				<h3>Function Reference</h3>

				

				<p class="info">The following functions and line numbers represent Buddyvents 2.1!</p>

				<table width="100%" border="0" class="widefat">

					<thead>

						<tr>

							<th>Function Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</thead>

					<tfoot>

						<tr>

							<th>Function Name</th>

							<th>Arguments</th>

							<th>Occurances</th>

							<th>Description</th>

						</tr>

					</tfoot>

					<tbody>

						<tr>

							<td>bpe_ajax_delete_category</td>

							<td></td>

							<td>/admin/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_add_category</td>

							<td></td>

							<td>/admin/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_ajax_quote_request</td>

							<td></td>

							<td>/admin/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activate</td>

							<td></td>

							<td>/admin/bpe-install.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_default_options</td>

							<td></td>

							<td>/admin/bpe-install.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_uninstall</td>

							<td></td>

							<td>/admin/bpe-install.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_default_avatars</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_export_to_json</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_import_settings_file</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_settings_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_webhook_processor</td>

							<td></td>

							<td>/admin/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_approve_processor</td>

							<td></td>

							<td>/admin/bpe-process.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_search_ee</td>

							<td></td>

							<td>/admin/bpe-process.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upgrade</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_maybe_add_column</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_maybe_delete_column</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_transform_event_avatars</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_change_event_admin_roles</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_generate_venue_array</td>

							<td></td>

							<td>/admin/bpe-upgrade.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_achievements_category_name</td>

							<td></td>

							<td>/components/achievements/bpe-achievements-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_setup</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_api_keys</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_generate_key</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_settings_api_keys</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_api_title</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_api_content</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_api_keys</td>

							<td></td>

							<td>/components/api/bpe-api-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_apikey</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_webhook</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_verifier</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_unverify_webhook</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_bulk_unverify_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_bulk_verify_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_bulk_delete_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_check_existing_hook</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_verify_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_hook_for_user</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_all_webhooks_for_user</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_apikey</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_all_for_user</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_api_access</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_reset_api_time_hits</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_incriment_api_hits</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_reset_hits_over</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_incriment_hits_over</td>

							<td></td>

							<td>/components/api/bpe-api-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_init_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-push.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_generate_verifier</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_webhook_endpoint</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_settings_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_webhooks_title</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_webhooks_content</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_webhooks</td>

							<td></td>

							<td>/components/api/bpe-api-webhooks.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_activity_secondary_avatars</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_record_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_new_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_join_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_maybe_join_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_remove_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_edited_event_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_new_event_logo_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_updated_event_documents_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_updated_event_schedules_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_activity</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_activity_filter</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_register_activity_actions</td>

							<td></td>

							<td>/components/core/bpe-activity.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_events_page</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_adjacent_month</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_schedule_form_html</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_schedule_form</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_autocomplete_invites</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_get_ajax_events</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_click_event_action</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar_check_day_archive</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_google_map_content</td>

							<td></td>

							<td>/components/core/bpe-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_draw_calendar</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_controls</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_calendar_headings</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_calendar</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_event_normal</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_map_js</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_calendar_popup_html</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_fullcalendar</td>

							<td></td>

							<td>/components/core/bpe-calendar.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_clear_cache</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_clear_scheduled_cache</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_user_data</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_remove_screen_notifications</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_group_data</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_event_data</td>

							<td></td>

							<td>/components/core/bpe-cleanup.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_base</td>

							<td></td>

							<td>/components/core/bpe-common.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_option</td>

							<td></td>

							<td>/components/core/bpe-common.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_displayed_event</td>

							<td></td>

							<td>/components/core/bpe-common.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_displayed_event_meta</td>

							<td></td>

							<td>/components/core/bpe-common.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_config</td>

							<td></td>

							<td>/components/core/bpe-common.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_create</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_map</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_calendar</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_archive</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_active</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_directory</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_directory_loop</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_single_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_home_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_directions</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_documents</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_edit_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_invite_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_invite_event_page</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_attendees</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_schedule</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_sale_success</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_sale_cancel</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_signup</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_category</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_timezone</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_venue</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_search</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_search_results</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_month_archive</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_day_archive</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_closed_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_reached_max</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_private_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_admin</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attached_to_group</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_map</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_invoices</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_sale_success</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_sale_cancel</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_archive</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_month</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_category</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_timezone</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_venue</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_day</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_calendar</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_active</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_member_attending</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_restricted</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_rsvp_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_address_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_directions_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_ical_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_schedules_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_documents_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_user_location</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_event_location</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_event_timezone</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php0</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_single_nav</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_url</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_all_day_event</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_has_organizers</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_logos_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php0</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_use_fullcalendar</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_manual_attendee_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_tickets_enabled</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_loggedin_user_has_location</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_needs_group_approval</td>

							<td></td>

							<td>/components/core/bpe-conditionals.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_creation_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_creation_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_creation_tabs</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_are_previous_creation_steps_complete</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_creation_step_complete</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sort_creation_steps</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_event_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_core_add_jquery_cropper</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_new_event_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_new_event_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_event_edit_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_avatar_delete_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_avatar_delete_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_event_avatar</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_avatar_upload_dir</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_creation_step</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_last_event_creation_step</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_first_event_creation_step</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_creation_previous_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_creation_previous_link</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_edit_tabs</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_edit_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_edit_form_action</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_edit_screen</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_to_edit_screen</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_event_action_general</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_event_action_manage</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_event_action_schedules</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_event_action_documents</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_only_create_step</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_event_members</td>

							<td></td>

							<td>/components/core/bpe-create-edit.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_save_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_member</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_notification</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_category</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_schedule</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_document</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_adjacent_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_coordinates</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_unique_slug</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_proximity_event_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_search_coords</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_count</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_groups_for_user</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_user_member_already</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_was_user_member</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_events</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_rsvp_for_user</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_remove_user_from_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_members_for_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_attendee_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_event_member_role</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_id_from_slug</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_approve_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_approve_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_approvable_events</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_change_spam_by_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_by_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_event_over</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_user_event_admin</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_category_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_timezone_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_venue_get_last_published</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_event_schedule</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_event_document</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_documents_for_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_docs_for_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_documents_by_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_file_links</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_amount</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_schedules_for_event</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_schedules_by_ids</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>
							<td></td>

						</tr>

						<tr>

							<td>bpe_set_events_to_spam</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_categories</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_users</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_groups</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_catid_from_slug</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_category_name_by_slug</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_uids_for_keywords</td>

							<td></td>

							<td>/components/core/bpe-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_members</td>

							<td></td>

							<td>/components/core/bpe-db.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_admin_groups</td>

							<td></td>

							<td>/components/core/bpe-db.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_timezones</td>

							<td></td>

							<td>/components/core/bpe-db.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_venues</td>

							<td></td>

							<td>/components/core/bpe-db.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_log</td>

							<td></td>

							<td>/components/core/bpe-debug.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_log_walker</td>

							<td></td>

							<td>/components/core/bpe-debug.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_default_tab</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_timezone_array</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_venue_array</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_single_navigation</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_process_send_action</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_process_send_action</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_process_send_action</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_groupmeta</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_cat_slug</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_add_menu</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_events_api</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_bitly_get_result</td>

							<td></td>

							<td>/components/core/bpe-deprecated.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_register_event_extension</td>

							<td></td>

							<td>/components/core/bpe-extension.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_hcalendar_spec</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_ical</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_feed_to_head</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_global_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_category_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_timezone_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_venue_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_category_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_timezone_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_venue_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_category_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_timezone_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_venue_events_feed</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_feed_links</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sitewide_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sitewide_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_category_feed_links</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_user_category_feed_links</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_user_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_user_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_category_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_timezone_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_venue_events_feed_link</td>

							<td></td>

							<td>/components/core/bpe-feeds.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_additional_globals</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_creation_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_contact_required</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_save_group_creation_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_required_fields</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_group_save_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_group_creation_details</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_group_address</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_displayed_group</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_empty</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_group_address</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_group_address_js</td>

							<td></td>

							<td>/components/core/bpe-groupinfo.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_count_days</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendee_management_buttons</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_management_link</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_message</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_redirect_success_url</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_localize_month_name</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_value</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_category_dropdown</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_files_for_event</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_restrict_event_access</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_cookie</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_view_link</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_grid_style</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_safe_email_text</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_view_class</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_view_per_page</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_clear_cache_timestamp</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_remove_accents</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_day_display</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_schedules</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_documents</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_files_by_ids</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_counter</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_dropdown</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_adjust_page_title</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_bitly_url</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_is_url</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_random_event_adminbar</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_random_event</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_group_admins</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_countries</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_country_select</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_currencies</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_empty_object</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_translatable_currency</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_api_message</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_editor</td>

							<td></td>

							<td>/components/core/bpe-helpers.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_map_controls</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_search_results_map</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_coordinates</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_next_coords</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_timezone</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_format_utc_offset</td>

							<td></td>

							<td>/components/core/bpe-map.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_main_navigation</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_group_navigation</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_highlight_current_tab</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_check_default_slug</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sort_menu</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_wp_admin_bar_menus</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_event_admin_bar_menu</td>

							<td></td>

							<td>/components/core/bpe-menu.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_format_notifications</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sanitize_for_keywords</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_strip_punctuation</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_strip_words</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_asteriks</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_email_notifications</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_email_reminders</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_reminder_timestamp</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_settings</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_settings_title</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_settings_content</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_screen_notifications</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_approval_status_mail</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_send_approve_mail</td>

							<td></td>

							<td>/components/core/bpe-notifications.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_setup_oembed</td>

							<td></td>

							<td>/components/core/bpe-oembed.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_schedule_embed</td>

							<td></td>

							<td>/components/core/bpe-oembed.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_embed</td>

							<td></td>

							<td>/components/core/bpe-oembed.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_embed_event_cache</td>

							<td></td>

							<td>/components/core/bpe-oembed.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_embed_event_save_cache</td>

							<td></td>

							<td>/components/core/bpe-oembed.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_proximity_dropdown</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_timezone_dropdown</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_venue_dropdown</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_sorter</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_template_category_dropdown</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_list_choices</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_build_user_options</td>

							<td></td>

							<td>/components/core/bpe-options.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_setup</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_event_edit</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_event_creation</td>

							<td></td>

							<td>/components/core/bpe-process.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_after_event_publication</td>

							<td></td>

							<td>/components/core/bpe-process.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_manual_attendees</td>

							<td></td>

							<td>/components/core/bpe-process.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_schedule</td>

							<td></td>

							<td>/components/core/bpe-process.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_document</td>

							<td></td>

							<td>/components/core/bpe-process.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_event_invitations</td>

							<td></td>

							<td>/components/core/bpe-process.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_event_deletion</td>

							<td></td>

							<td>/components/core/bpe-process.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_timestamp</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_nth_weekday</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_event</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_unschedule_event</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_redisplayed_event</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_remove_recurrence_button</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_recurrent_avatar</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_recurrent_schedules</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_recurrent_documents</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_recurrent_event_schedules</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_calendar_recurrent_events</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_recurrence_days</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_recurrent_template_options</td>

							<td></td>

							<td>/components/core/bpe-recurrence.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_active</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_invoices</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_custom_pages</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_attending</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_calendar</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_map</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_screen_events_archive</td>

							<td></td>

							<td>/components/core/bpe-screen.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_events_search_action</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_directory_events_search_form</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_to_main_search</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_event_search</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_search_query</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_validate_event_search</td>

							<td></td>

							<td>/components/core/bpe-search.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_load_template_filter</td>

							<td></td>

							<td>/components/core/bpe-template.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_load_template</td>

							<td></td>

							<td>/components/core/bpe-template.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_path</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_url</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_upload_image</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>
						<tr>

							<td>bpe_upload_documents</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_file_extension</td>

							<td></td>

							<td>/components/core/bpe-upload.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_new_event_action</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_delete_event_action</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_attend_event_action</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_not_attending_event_action</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_maybe_attend_action</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_cubepoints_add_description</td>

							<td></td>

							<td>/components/cubepoints/bpe-cubepoints-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_add_user_key</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_save_extra_data</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_add_to_create</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_add_event_meta</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_process_send</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_eventbrite_update_event</td>

							<td></td>

							<td>/components/eventbrite/bpe-eventbrite-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_display_button</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_get_cookie</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_add_to_create</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_add_event_meta</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_facebook_send_update</td>

							<td></td>

							<td>/components/facebook/bpe-facebook-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ajax_get_ticket_form_html</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-ajax.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_attendance_button</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_change_button</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_change_invite_email</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_add_anonymous_members</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_box_content</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_quantity_dropdown</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_edit_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_counter</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_ticket_form</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_process_ticket</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_add_settings</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_save_settings</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_send_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_add_user_on_signup</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_add_user_self_signup</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_create_pdf</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_chart_points</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_create_invoices</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_produce_invoice</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_create_invoice_for_member</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_tickets_on_event_deletion</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_recurrent_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-core.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_ticket</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_sale</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_add_invoice</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_tickets_by_ids</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_tickets_by_event</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_amount</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_next_ticket_sale_date</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_set_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_set_sales_id</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_set_requested</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_all_txn_ids</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_all_invoice_txn_ids</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_sale_get_event</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_update_date</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_delete_invoices</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_change_settled</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-db.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_paypal_return_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_paypal_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_paypal_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_paypal_verify_ipn</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_redirect_invoice_to_paypal</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_paypal_invoice_ipn_handler</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_set_invoice_paypal_status</td>

							<td></td>

							<td>/components/tickets/bpe-tickets-paypal.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_add_sign_in</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_oauth</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_callback</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_delete_token</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_add_to_create</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_add_event_meta</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_twitter_process_send</td>

							<td></td>

							<td>/components/twitter/bpe-twitter-core.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_delete_eventmeta</td>

							<td></td>

							<td>/components/core/models/bpe-meta.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_eventmeta</td>

							<td></td>

							<td>/components/core/models/bpe-meta.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_update_eventmeta</td>

							<td></td>

							<td>/components/core/models/bpe-meta.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_documents</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_documents</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_document</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_documents_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_documents_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_documents_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_documents_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_name_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_name_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_url</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_url</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_url_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_url_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_document_type</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_document_type</td>

							<td></td>

							<td>/components/core/templatetags/bpe-documents.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_events</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_event</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_events_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_user_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_user_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_user_avatar</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_user_avatar</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_group_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_ical_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_ical_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_description_excerpt</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_description_excerpt</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_description_excerpt_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_description_excerpt_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_category</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_category</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_category_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_category_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_category_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_category_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_category_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_category_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_venue_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_venue_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_location</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_location</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_location_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_location_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_url</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_url</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_url_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_url_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_longitude</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>
						<tr>

							<td>bpe_get_event_longitude</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_latitude</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_latitude</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_attendees</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_attendees</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_start_date</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_start_date</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_start_date_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_start_date_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_end_date</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_end_date</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_end_date_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_end_date_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_start_time</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_start_time</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_start_time_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_start_time_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_end_time</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_end_time</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_end_time_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_end_time_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_date_created</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_date_created</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_date_created_be</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_date_created_be</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_public</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_public</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_rsvp</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_rsvp</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_all_day</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_all_day</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_timezone</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_timezone</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_timezone_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_timezone_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_recurrent</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_recurrent</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_is_spam</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_is_spam</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_approved</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_approved</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_approved</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_group_approved</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_limit_members</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_limit_members</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_image</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_image</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_image_thumb</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_image_thumb</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_image_mini</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_image_mini</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_distance</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_distance</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_display_distance_from_user</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_leftover_spots</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_leftover_spots</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php0</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invitations</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attendance_button</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_attendance_button</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php1</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_name</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_permalink</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_permalink</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_street</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_street</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_postcode</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_postcode</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_city</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_city</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_country</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_country</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_telephone</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_telephone</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_mobile</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_mobile</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_fax</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_fax</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_group_address_website</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_group_address_website</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_get_member_ids</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_attendee_tabs</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_attendee_tabs</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_attending_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_attending_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php2</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_attending_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_event_attending_status</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php3</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_events_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_events_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_next_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php8</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_next_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_previous_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php7</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_previous_event_link</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_event_has_activity</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php6</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ev_slug</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_approve_css_class</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php4</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_approve_css_class</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php9</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_reset_counter</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_item_class</td>

							<td></td>

							<td>/components/core/templatetags/bpe-events.php5</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_schedules</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedules</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_schedule</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_schedules_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedules_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules_pagination_links</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedules_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedules_pagination_count</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_event_id</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_day</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_day</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_day_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_day_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_start</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_start</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_end</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_end</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_start_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_start_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_end_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_end_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_description</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_schedule_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_schedule_description_raw</td>

							<td></td>

							<td>/components/core/templatetags/bpe-schedules.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_invoices</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoices</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_invoice</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_invoices_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoices_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoices_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoices_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_user_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_user_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_month</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_month</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_sent_date</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_sent_date</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_settled</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_settled</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_transaction_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_transaction_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_view_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_view_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_settle_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_invoice_settle_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_invoice_is_unsettled</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-invoices.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_sale</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_sales_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sales_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sales_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_ticket_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_seller_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_seller_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_buyer_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_buyer_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_single_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_single_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_gateway</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_gateway</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_sales_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_sales_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_status</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_status</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_sale_date</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_sale_date</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_commission_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_sale_commission_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_commission</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_commission</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_total</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_total</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_event_commission</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_event_commission</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_subtotal</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_subtotal</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_buyer_avatar</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_buyer_avatar</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_buyer_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_buyer_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_css_class</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_css_class</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_currencies</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_event_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_event_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_name</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_name</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_name_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_name_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_description</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_description</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_description_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_description_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_start_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_start_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_end_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_end_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_min_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_min_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_ticket_max_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_sale_get_ticket_max_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-sales.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_has_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_the_ticket</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_total_tickets_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets_pagination_links</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_tickets_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_tickets_pagination_count</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_event_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_event_id</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_name</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_name</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_name_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_name_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_description</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_description</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_description_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_description_raw</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_price</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_currency</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_quantity</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_start_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_start_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_end_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_end_sales</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_min_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_min_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_max_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_max_tickets</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_ticket_event_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

						<tr>

							<td>bpe_get_ticket_event_link</td>

							<td></td>

							<td>/components/tickets/templatetags/bpe-tickets.php</td>

							<td></td>

						</tr>

					</tbody>

				</table>

			</section>



			<section id="languages">

				<h3>Languages</h3>

				<p class="info">We are always looking for new language files being added, so get in touch if you have translated Buddyvents into your language.</p>

				<p>Buddyvents currently comes in 3 flavours:</p>

				<ol>

					<li>English (default)</li>

					<li>German</li>

					<li>French</li>

				</ol>

				<p>Please note that the French language file has not been updated since v1.0.1 Beta and it is not recommended for use anymore, until someone has updated it.</p>

				<p>Buddyvents itself uses English as its default language. Since the dev team members are all German, the German language file is usually up-to-date.</p>

			</section>

			

			<section id="debugging">

				<h3>Debugging</h3>

				

				<p class="info">TIP: Get comfortable with the Firebug extension for Firefox!</p>



				<h4 id="debugging_js">Javascript Errors</h4>

				<p>Javascript (JS) errors are, sadly enough, fairly common when running Buddyvents together with other plugins.</p>

				<p>One common problem is that the Datepicker stops working. This can be caused by numerous reasons, but by far the most commen is some kind of JS incompatibility.</p>

				<p>Many plugin authors do not use the available WP functions for loading JS files. So, you might have 2 versions of jQuery o jQuery UI on one page, one of which might be incompatible with the Datepicker.</p>

				<p>From WP 3.3 onwards jQuery UI Datepicker is actually included in WP core, so this will hopefully cut down on these errors.</p>



				<h4 id="debugging_css">CSS Problems</h4>

				<p>Buddyvents includes styling for the BP-Default theme. So, if your theme is not based on BP-Default or your BP-Default child themes HTML structure has been modified quite a bit, then certain elements might be out od sync.</p>

				<p>Install Firebug for Firefox. Right-click on the element causing the problem, then choose 'Inspect Element'. In the right sidebar of the Firebug console you can see all styles associated with your chosen element.</p>

				<p>In that sidebar you can adjust the styles. Once you have found and solved the problem, follow the instructions in Templates->Overriding CSS to change the styles.</p>

				

				<h4 id="debugging_bugs">Reporting Bugs</h4>

				<p>The best thing you can do is install the Firebug extension for Firefox.</p>

				<p>To debug JS errors, navigate to the page with the problem. Press F12 to open the Firebug console. Then switch to the 'Console' tab and refresh the page. Note down any errors you encounter.</p>

				<p>If you encounter any PHP errors, then please note this down together with the page you encountered the error.</p>

				<p>Repost all errors to our <a href="http://shabushabu.eu/forums/forum/buddyvents-v2/">forums</a></p>

			</section>

		</div>

		<?php

	}

}

?>