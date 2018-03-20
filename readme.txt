=== Plugin Name ===
NetCents
Contributors: haydenc
Tags: payment, gateway, netcents
Requires at least: 3.0.1
Tested up to: 1.1.1
Stable tag:
Requires PHP: 5.2.1


NetCents gateway allows you to accept netcents users to checkout with woocommerce.

== Description ==

NetCents gateway is a woocommerce plugin which allows your customers to accept bitcoin, ethereum, netcents eccount balance & the netcents coin.

This plugin enables you to accept crypto currency from any customer.



== Setup & Installation ==

Install:

1. Download the plugin

2. Extract the netcents-gateway folder into the wp-content/plugins/ folder of your wordpress installation

3. Activate it in the plugins tab in wordpress admin (http://your-url.com/wp-admin)

4. Go to Woocommerce -> Settings -> Checkout -> NetCents Widget

4. Continue onto the NetCents side of setup

Setup:

1. In order to use this plugin you will need a NetCents account. ( https://merchant.net-cents.com )

2. On the merchant dashboard, go to merchant widgets -> widgets -> Add widget

3. Pick an application name, add the URL of your website to origin url & callback url can remain blank.

4. Once your widget is created. Copy the merchant id number to the plugin settings discussed in the installation step 3.

5. Now copy your API keys and secret from the API access tab to the settings discussed in the installation step 3

6. Fill out the rest of the settings (title, description, instructions) and save when happy.

7. You are now set up and ready to process with NetCents.

(Using sandbox API keys will create fake transactions. Make sure to remove sandbox keys after testing)
Or only test using sandbox keys on a localhost installation.

== Screenshots ==

./assets/netcents.png

== Frequently Asked Questions ==

= What is the NetCents Coin? =

The NetCents coin is a digital currency which can be used to pay NetCents merchants.


== Changelog ==

= 1.10 =
* Updated to work with new widget
